<body>
    <div class="folha_de_obra">
        <div class="Titulo_obra">Inserir e modificar dados dos clientes</div>
        <div class="parts_obra">
            <div class="subtitulo_obra" style="margin-bottom: none;">Inserir</div>
            <div class="userdata" id="1" style="display: flex;position:relative">
                <div class="errorscreen">⚠ Erro:</div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"><label for="">Nome</label><input type="text" name="nome">
                    </div>
                    <div class="userdata_group"><label for="">NIF</label> <input type="text" name="nif"></div>
                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"><label for="">Email</label><input type="text" name="Email"></div>
                    <div class="userdata_group"><label for="">Contacto</label><input type="text" name="Contacto"></div>
                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"><label for="">Pessoa contacto</label><input type="text" name="pescont">
                    </div>
                    <div style="    width: 16rem;height: 1.5rem;"></div>
                </div> <button class='btn-criar'>Criar</button>
            </div>
            <div class="subtitulo_obra" style="margin-bottom: none;">Modificar</div>
            <div class="userdata" style="display: flex;position:relative">
                <div class="searchbox ">
                    <select class="category input_appeareance">
                        <option value="Cod_id">Cod_id</option>
                        <option value="Nome">Nome</option>
                        <option value="Email">Email</option>
                        <option value="NIF">NIF</option>
                        <option value="Contacto">Contacto</option>
                        <option value="Pessoa-contacto">Pessoa-contacto</option>
                    </select>
                    <input type="text" class="input_appeareance input_pld" name="search" placeholder="Pesquisa aqui">
                </div>

                <div class="table-data">
                    <table style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th>Código de utilizador</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>NIF</th>
                                <th>Contacto</th>
                                <th>Pessoa-contacto</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="userdata_bg" style="gap: 1rem;">

                <div class="flex_userdata_group">
                    <div class="userdata_group"><label for="">Codigo de utilizador</label> <input type="text"
                            name="nome" readonly=""></div>
                    <div class="userdata_group"> <label for="">Nome</label> <input type="text" name="nome" readonly="">
                    </div>

                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"> <label for="">Email</label> <input type="text" name="Email"
                            readonly="">
                    </div>
                    <div class="userdata_group"> <label for="">NIF</label> <input type="text" name="Contacto"
                            readonly=""></div>
                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"> <label for="">Contactos</label> <input type="text" name="Email"
                            readonly="">
                    </div>
                    <div class="userdata_group"> <label for="">Pessoa-contacto</label> <input type="text"
                            name="Contacto" readonly=""></div>
                </div>
                <div class='flex' style="gap:1rem">
                    <div class="editbtn salvar" style='display:none'>Salvar </div>
                    <div class="editbtn edit">Editar <span></span><span></span></div>
                    <div class="editbtn remover" style="background:red;">Remover</div>
                </div>
            </div>
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
$(".parts_obra:not(.parts_obra:eq(0)) input,textarea").prop("readonly", true);
$(".userdata_bg input").css("text-align", "center")
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script src="../Jquery/create_modify_users.js"></script>

</html>