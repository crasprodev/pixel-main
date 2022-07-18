let Admin = function (nivel) {
  const admin = this;
  this.option = function (value) {
    var array = [];
    value.map(function (obj, index) {
      array.push("<option value='" + obj + "'>" + obj + "</option>");
    });
    return array;
  };
  this.userinfo = function (value) {
    value === "Informação do utilizador" && $(".searchbox.user").length === 0
      ? $(".searchbox")
          .after(
            "<div class='searchbox user'><select onchange='method.folhas()'class='category input_appeareance'></select><div><div style='text-align:center'>Introduzido por:</div><div style=' display: flex;align-items: center;justify-content: center;gap: 1rem;'>Ambos<input type='radio' name='same' onchange='method.folhas();'checked='checked' value='0'>administrador<input type='radio' onchange='method.folhas()' name='same' value='1'>Utilizador<input type='radio' name='same' onchange='method.folhas()' value='2'></div></div>"
          )
          .siblings(".searchbox.user")
          .children(".category.input_appeareance")
          .append(end)
      : $(".searchbox.user").remove();
  };
  this.folha = function () {
    const options = [
      "Cod_id",
      "Nome",
      "Email",
      "NIF",
      "Contacto",
      "Pessoa-contacto",
    ];
    admin.option(options).map(obj, index);
    {
      $(".userdata:eq(0) select:eq(0)").append(obj);
    }
  };
  this.usertype = function (type, text, select) {
    array = [];
    if (type == 1) {
    } else {
    }
  };
};
const admin = new Admin();
admin.folha();
