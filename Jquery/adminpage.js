let Admin = function (nivel) {
  const admin_this = this;
  this.option = function (value) {
    var array = [];
    value.map(function (obj, index) {
      array.push("<option value='" + obj + "'>" + obj + "</option>");
    });
    return array;
  };
  this.definitions = function (html) {
    var newhtml = html;
    newhtml[2] === null ? html.splice(2, 1) : newhtml.splice(3, 1);
    newhtml.splice(3, 0, ...newhtml[5]);
    newhtml.length = 14;
    newhtml.splice(10, 3);
    newhtml.splice(3, 2);
    /* newhtml.splice(3, 1);
    newhtml.splice(3, 2);
    newhtml.splice(8, 3);
    newhtml.pop();
    newhtml.splice(4, 4, newhtml[5], newhtml[6], newhtml[7], newhtml[4]);
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
              var varlog = admin_this.definitions(this);
              console.log(varlog);
              this.map(function (obj, index) {
                $("tbody:eq(0)>tr:last-child").append(
                  "<td class='border-right-bottom-top'>" + obj + "</td>"
                );
              });
              var current = this;
              $("tbody:eq(0)>tr:last-child").click(function () {});
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
