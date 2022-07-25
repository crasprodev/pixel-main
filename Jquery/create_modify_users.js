let users = function () {
  const users_log = this;
  this.erros = function () {
    let errors = [];
    $(".userdata input:eq(0)").val() == ""
      ? errors.push("O nome tem de ser preenchido")
      : "";
    if ($(".userdata input:eq(1)").val() != "") {
      if (dados.validarnif($(".userdata input:eq(1)").val()) == false) {
        errors.push("NIF incorreto");
      }
    }
    if (errors.length == 0) {
      var array = [];

      $(".userdata#1 input").each(function () {
        array.push($(this).val());
      });
      dados.criardados(array);
      return;
    }
    const defaults = "⚠ Erro:";
    $(".errorscreen").text(defaults);
    var erros = "";
    errors.map(function (obj, index) {
      erros += ` ${obj},`;
    });
    erros = erros.slice(0, -1) + ".";
    $(".errorscreen").css("background", "#f1ac1d");
    $(".errorscreen").append(erros);
    $(".errorscreen").fadeIn().css("display", "flex");
    $(".userdata#1 input").off();
    $(".userdata#1 input").on("input", function () {
      $(".errorscreen").fadeOut();
    });
  };

  this.criardados = function (array) {
    $.ajax({
      type: "POST",
      url: "folhadeobra/do_folhadetrabalho.php",
      //     dataType: "json",
      data: {
        request: "criar dados",
        dados: array,
      },
      success: function (html) {
        if (html == 1) {
          $(".userdata#1 input").val("");
          $(".errorscreen").css("background", "green");
          $(".errorscreen").fadeIn().css("display", "flex");
          $(".errorscreen").text("Sucesso: dados inseridos");
          $(".userdata#1 input").off();
          $(".userdata#1 input").on("input", function () {
            $(".errorscreen").fadeOut();
          });
        }
      },
    });
  };
  this.selectedindex = [];
  this.validarnif = function (value) {
    const nif = typeof value === "string" ? value : value.toString();
    const validationSets = {
      one: ["1", "2", "3", "5", "6", "8"],
      two: [
        "45",
        "70",
        "71",
        "72",
        "74",
        "75",
        "77",
        "79",
        "90",
        "91",
        "98",
        "99",
      ],
    };
    if (nif.length !== 9) return false;
    if (
      !validationSets.one.includes(nif.substr(0, 1)) &&
      !validationSets.two.includes(nif.substr(0, 2))
    )
      return false;
    const total =
      nif[0] * 9 +
      nif[1] * 8 +
      nif[2] * 7 +
      nif[3] * 6 +
      nif[4] * 5 +
      nif[5] * 4 +
      nif[6] * 3 +
      nif[7] * 2;
    const modulo11 = Number(total) % 11;
    const checkDigit = modulo11 < 2 ? 0 : 11 - modulo11;
    return checkDigit === Number(nif[8]);
  };
  this.indexclickfunction = function (index) {
    users_log.selectedindex = index;
    const link = `codid=${users_log.selectedindex[0]}`;
    var currentURL =
      window.location.protocol +
      "//" +
      window.location.host +
      window.location.pathname +
      `?metodo=user&${link}`;
    window.history.pushState(
      {
        path: currentURL,
      },
      "",
      currentURL
    );
    users_log.selectedindex.map(function (obj, index) {
      $(".userdata_bg input").eq(index).val(obj);
    });
    $(".flex").css("display", "flex");
    $(".editbtn.remover").off();
    $(".editbtn.remover").click(function () {
      $.ajax({
        type: "POST",
        url: "folhadeobra/do_folhadetrabalho.php",
        //     dataType: "json",
        data: {
          request: "updatenonlog",
          selectedindex: users_log.selectedindex,
          tipo_conta: 0,
          tarefa: "delete",
        },
        success: function (html) {
          if (html == 1) {
            users_log.removdefin();
          }
        },
      });
    });

    $(".editbtn.edit").click(function () {
      if ($(".editbtn.edit").hasClass("cross") == true) {
        users_log.selectedindex.map(function (obj, index) {
          $(".userdata_bg input").eq(index).val(obj);
        });
        $(".userdata_bg input:not(input:eq(0))").prop("readonly", true);
        $(".editbtn.edit").removeClass("cross").html("Editar");
        $(".editbtn.salvar").css("display", "none");
      } else {
        $(".editbtn.edit").html("<span></span><span></span>").addClass("cross");
        $(".editbtn.salvar").css("display", "flex");

        $(".userdata_bg input:not(input:eq(0))").prop("readonly", false);
        $(".editbtn.salvar").off();
        $(".editbtn.salvar").click(function () {
          var values = [users_log.selectedindex[0]];
          for (
            var i = 0;
            i <= $(".userdata_bg input:not(input:eq(0))").length;
            i++
          ) {
            values.push($(".userdata_bg input:not(input:eq(0))").eq(i).val());
          }
          $.ajax({
            type: "POST",
            url: "folhadeobra/do_folhadetrabalho.php",
            //     dataType: "json",
            data: {
              request: "updatenonlog",
              selectedindex: values,
              tipo_conta: 0,
              tarefa: "update",
            },
            success: function (html) {
              console.log(html);
              if (html == 1) {
                users_log.removdefin();
              }
            },
          });
        });
      }
    });
  };
  this.removdefin = function () {
    users_log.selectedindex = [];
    $(".userdata_bg input").val("");
    users_log.search();
    $(".userdata_bg input:not(input:eq(0))").prop("readonly", true);
    console.log(users_log.selectedindex);
    $(".editbtn.salvar").off().css("display", "none");
    $(".editbtn.edit").html("Editar").RemoveClass("cross");
    $(".editbtn.remover");
    $(".flex").css("display", "none");
  };
  this.search = function () {
    $.ajax({
      type: "POST",
      url: "folhadeobra/do_folhadetrabalho.php",
      dataType: "json",
      data: {
        request: "getuserespifico",
        text: $(".input_appeareance:eq(1)").val(),
        select: $(".category.input_appeareance").val(),
        tb: 1,
      },
      success: function (html) {
        $("tbody").html("");
        $(html).each(function (index) {
          $("tbody").append("<tr></tr>");
          this.map(function (obj, index) {
            $("tbody>tr:last-child").append(
              "<td class='border-right-bottom-top'>" + obj + "</td>"
            );
          });
          var current = this;
          $("tbody>tr:last-child").click(function () {
            dados.indexclickfunction(current);
          });
        });
      },
    });
  };
};

const dados = new users();
dados.search();

$(window).on("load", function () {
  dados.search();
  clickerros();
  $(".userdata input:eq(3)").mask("000 000 000");
  $(".userdata input:eq(4)").mask("000 000 000");
  $(".userdata input:eq(1)").mask("000000000");
});
$(".userdata input:eq(3)").mask("000 000 000");
$(".userdata input:eq(4)").mask("000 000 000");
$(".userdata input:eq(1)").mask("000000000");
$(".category.input_appeareance").on("change", function () {
  dados.search();
});
$(".input_appeareance.input_pld").on("input", function () {
  dados.search();
});
setInterval(() => {
  dados.search();
}, 500);
$(".btn-criar").off();
clickerros();

function clickerros() {
  $(".btn-criar").off();
  $(".btn-criar").click(function () {
    dados.erros();
  });
  $(".userdata:eq(0) input").off();
  $(".userdata:eq(0) input").on("keypress", function () {
    if (e.which == 13) {
      dados.erros();
    }
  });
}
