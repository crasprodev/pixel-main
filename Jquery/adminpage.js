let Admin = function (nivel) {
  const admin_this = this;
  this.option = function (value) {
    var array = [];
    value.map(function (obj, index) {
      array.push("<option value='" + obj + "'>" + obj + "</option>");
    });
    return array;
  };
  this.indexclickfunction = function (index, description) {
    let selectedindex = index;
    const link = `codfolha=${selectedindex[0]}`;
    var currentURL =
      window.location.protocol +
      "//" +
      window.location.host +
      window.location.pathname +
      `?metodo=admin&${link}`;
    window.history.pushState(
      {
        path: currentURL,
      },
      "",
      currentURL
    );
    $(".label-row").text(selectedindex[0]);
    $(".txtobra").eq(0).val(selectedindex[3]);
    var x = 0;
    $(".txtobra").eq(1).val(selectedindex[7]);
    for (var i = 4; i <= 6; i++) {
      $(".parts_obra:eq(2) input").eq(x).val(selectedindex[i]);
      x++;
    }
    $(".editbtn").off();
    $(".editbtn").removeClass("cross").text("Editar");
    $(".editbtn").click(function () {
      if ($(this).hasClass("cross") == false) {
        $(
          ".parts_obra:not(.parts_obra:eq(4)):not(.parts_obra:eq(0)) .txtobra,.parts_obra:not(.parts_obra:eq(4)):not(.parts_obra:eq(0)) input"
        )
          .prop("readonly", false)
          .css("color", "white");
        $(this).addClass("cross").html("<span></span><span></span>");
      } else {
        $(
          ".parts_obra:not(.parts_obra:eq(4)):not(.parts_obra:eq(0)) .txtobra,.parts_obra:not(.parts_obra:eq(4)):not(.parts_obra:eq(0)) input"
        )
          .prop("readonly", true)
          .css("color", "#ffffffad");
        $(this).removeClass("cross").text("Editar");
        $(".label-row").text(selectedindex[0]);
        $(".txtobra").eq(0).val(selectedindex[3]);
        var x = 0;
        $(".txtobra").eq(1).val(selectedindex[7]);
        for (var i = 4; i <= 6; i++) {
          $(".parts_obra:eq(2) input").eq(x).val(selectedindex[i]);
          x++;
        }
      }
    });

    $(".flex_total").css("display", "block");
    $(".btnaprovar").off();
    approvar(2, selectedindex[0]);
    $(".btnaprovar").click(function () {
      approvar(1, selectedindex[0]);
    });
    $.ajax({
      type: "POST",
      url: "folhadeobra/do_folhadetrabalho.php",
      dataType: "json",
      data: {
        request: "getnivelfolha",
        codid: selectedindex[0],
      },
      success: function (html) {
        $(".nivel").html("");
        $(html).each(function () {
          $(".nivel").append(
            JSON.stringify(
              "<option value='" +
                JSON.stringify(this[1]).replace(/\"/g, "") +
                "'>" +
                JSON.stringify(this[1]).replace(/\"/g, "") +
                "</option>"
            )
          );
        });
      },
    });
    $.ajax({
      type: "POST",
      url: "folhadeobra/do_folhadetrabalho.php",
      dataType: "json",
      data: {
        request: "folhaobraabs",
        codid: selectedindex[2],
        field: selectedindex[1],
      },
      success: function (html) {
        const link = `result=true&usercode=${html[0]}&type=${html[1]}`;

        $(".userdata_bg input").each(function (index) {
          $(this).val(html[index]);
        });
        $(".userdata_bg input:eq(0)").click(function () {
          var currentURL =
            window.location.protocol +
            "//" +
            window.location.host +
            window.location.pathname +
            `?metodo=aprovar&${link}`;
          window.history.pushState(
            {
              path: currentURL,
            },
            "",
            currentURL
          );
          getparameter(GetURLParameter("metodo"));
        });
      },
    });
    $(".submitobra").off();
    $(".submitobra").click(function () {
      mudarestado($(".nivel option:selected").text(), selectedindex[0]);
    });
  };
  this.definitions = function (html) {
    var newhtml = html;
    newhtml[2] === null ? html.splice(2, 1) : newhtml.splice(3, 1);
    newhtml.splice(3, 0, ...newhtml[5]);
    newhtml.length = 14;
    newhtml.splice(10, 3);
    newhtml.splice(3, 2);
    newhtml.splice(4, 4, newhtml[5], newhtml[6], newhtml[7], newhtml[4]);
    /* newhtml.splice(3, 1);
    newhtml.splice(3, 2);
    newhtml.splice(8, 3);
    newhtml.pop();
  */
  };
  this.userinfo = function (value) {
    if (
      value === "Informação do utilizador" &&
      $(".searchbox.user:eq(0)").length === 0
    ) {
      $(".searchbox:eq(0)")
        .after(
          "<div class='searchbox user'><select class='category input_appeareance'></select><div><div style='text-align:center'>Introduzido por:</div><div style=' display: flex;align-items: center;justify-content: center;gap: 1rem;'>Ambos<input type='radio' name='same' onchange='admin.folhas();'checked='checked' value='0'>administrador<input type='radio' onchange='admin_this.folhas()' name='same' value='1'>Utilizador<input type='radio' name='same' value='2'></div></div>"
        )
        .siblings(".searchbox.user:eq(0)")
        .children(".category.input_appeareance")
        .append(...admin_this.option(options_user))
        .siblings("div input")
        .eq(0)
        .prop("checked", true);
      $(".userdata:eq(0) .searchbox.user").on("change", function () {
        admin.usertype(0);
      });
      return;
    }
    $(".searchbox.user").remove();
  };
  const options_user = [
    "Cod_id",
    "Nome",
    "Email",
    "NIF",
    "Contacto",
    "Pessoa-contacto",
  ];
  const option_folha = [
    "codfolha",
    "Informação do utilizador",
    "descricão",
    "localização de ficheiros",
    "Budget montagem",
    "Custo montagem",
    "Pessoa_Montagem",
    "status",
  ];
  this.folha = function () {
    $(".userdata:eq(1) select:eq(0)").append(
      ...admin_this.option(options_user)
    );
    $(".userdata:eq(0) select:eq(0)").append(
      ...admin_this.option(option_folha)
    );
    $(
      ".userdata:eq(0) select:eq(0) option[value='Informação do utilizador']"
    ).after("<option style='display:none'></option>");
  };
  this.usertype = function (type) {
    array = [];
    switch (type) {
      case 0:
        $.ajax({
          type: "POST",
          url: "folhadeobra/do_folhadetrabalho.php",
          dataType: "json",
          data: {
            request: "getfolhanivel",
            text: $(".input_appeareance:eq(1)").val(),
            select:
              $(".searchbox.user").length === 1
                ? [
                    "user",
                    $(
                      ".searchbox.user>.category.input_appeareance option:checked"
                    ).index(),
                  ]
                : [
                    "folha",
                    $(
                      ".category.input_appeareance:eq(0) option:checked"
                    ).index(),
                  ],
            intr: $("input[name='same']:checked").val(),
            gotic: 2,
          },
          success: function (html) {
            console.log(html);
            $("tbody:eq(0)").html("");
            var description = [];
            $(html).each(function (index) {
              for (var i = 6; i <= this.length - 1; i++) {
                description.push(this[i]);
              }
              $("tbody:eq(0)").append("<tr></tr>");
              admin_this.definitions(this);

              this.map(function (obj, index) {
                $("tbody:eq(0)>tr:last-child").append(
                  "<td class='border-right-bottom-top'>" + obj + "</td>"
                );
              });
              var current = this;
              $("tbody:eq(0)>tr:last-child").click(function () {
                admin_this.indexclickfunction(current, description);
              });
            });
          },
        });
        break;
      case 1:
        console.log(3);
        break;
    }
  };
};
let admin = new Admin();
admin.folha();
admin.usertype(0);
$(".userdata:eq(0) select:eq(0)").change(function () {
  admin.userinfo(this.value);
  admin.usertype(0);
});
$(".userdata:eq(0) .input_appeareance.input_pld").on("input", function () {
  admin.usertype(0);
});
