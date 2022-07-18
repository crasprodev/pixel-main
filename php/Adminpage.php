<html>

<body>
    <div class="folha_de_obra">
        <div class="Titulo_obra">Folhas de obras: historico de mudanças e status</div>
        <div class="parts_obra">
            <div class="subtitulo_obra" style="margin-bottom: none;">Folhas de obras</div>
            <div class="userdata" style="display: flex;">
                <div class="searchbox ">
                    <select class="category input_appeareance">
                    </select>
                    <input type="text" class="input_appeareance input_pld" name="search" placeholder="Pesquisa aqui">
                </div>
                <div class="table-data">
                    <table style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th>Codigo de folha</th>
                                <th>Tipo de utilizador associado</th>
                                <th>Código de utilizador</th>
                                <th>Descrição</th>
                                <th>Budget montagem</th>
                                <th>Custo montagem</th>
                                <th>Pessoa_Montagem</th>
                                <th>localização de ficheiros</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="userdata_bg" style="gap: 1rem;">
                <div class="subtitulo_obra">N.º folhas de obra</div>
                <div class="label-row"></div>
                <div class="subtitulo_obra">Dados dos clientes</div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"><label for="">Codigo de utilizador</label> <input type="text"
                            name="nome" style="    text-align: center;
    background: red;
    cursor: pointer;" readonly=""></div>
                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"><label for="">Tipo de data</label> <input type="text" name="Codigo"
                            readonly="" style="text-align: center;"></div>
                    <div class="userdata_group"> <label for="">Nome</label> <input type="text" name="nome" readonly=""
                            style="text-align: center;">
                    </div>

                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"> <label for="">Email</label> <input type="text" name="Email" readonly=""
                            style="text-align: center;">
                    </div>
                    <div class="userdata_group"> <label for="">NIF</label> <input type="text" name="Contacto"
                            readonly="" style="text-align: center;"></div>
                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"> <label for="">Contactos</label> <input type="text" name="Email"
                            readonly="" style="text-align: center;">
                    </div>
                    <div class="userdata_group"> <label for="">Pessoa-contacto</label> <input type="text"
                            name="Contacto" readonly="" style="text-align: center;"></div>
                </div>
            </div>
            <!-- 
        Edições e valores da folha de obra
        -->
            <br>
            <br>
            <br>
            <div class="subtitulo_obra">Histórico de edições</div>
            <div class="version">
                <div class="descript">
                    <div class="descript_tab">Leandro Bernardo</div>
                    <div class="descript_tab"> designer </div>
                    <div class="descript_tab"> 19:00</div>
                </div>
                <div class="descript">
                    <div class="descript_tab">Leandro Bernardo</div>
                    <div class="descript_tab"> designer </div>
                    <div class="descript_tab"> 19:00</div>
                </div>
                <div class="descript">
                    <div class="descript_tab">Leandro Bernardo</div>
                    <div class="descript_tab">designer </div>
                    <div class="descript_tab">19:00</div>
                </div>
            </div>
        </div>
        <div class="parts_obra">

            <div class="subtitulo_obra">Descrição</div>
            <textarea name="" cols="30" class="txtobra" placeholder="Escrever aqui" rows="10" readonly=""
                style="color: rgba(255, 255, 255, 0.68);"></textarea>
        </div>
        <div class="parts_obra">
            <div class="subtitulo_obra">Montagem</div>
            <div class="flex-mont">
                <div class="text-center subtitulo_obra" style="font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;">Budget Montagem</div>
                <div class="text-center subtitulo_obra" style="font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;">Custo Montagem</div>
                <div class="text-center subtitulo_obra" style="font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;">Pessoa Montagem</div>
                <input type="text" placeholder="Budget Montagem"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                    pattern="[0-9]+" readonly="" style="color: rgba(255, 255, 255, 0.68);">
                <input type="text" placeholder="Custo Montagem"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                    pattern="[0-9]+" readonly="" style="color: rgba(255, 255, 255, 0.68);">
                <input type="text" placeholder="Pessoa Montagem" readonly="" style="color: rgba(255, 255, 255, 0.68);">
            </div>
        </div>
        <div class="parts_obra">
            <div class="subtitulo_obra">Localização de ficheiros</div>
            <textarea name="" cols="10" class="txtobra" placeholder="Escrever aqui" rows="10" readonly=""
                style="color: rgba(255, 255, 255, 0.68);"></textarea>
        </div>
        <div class="parts_obra">
            <div class="Titulo_obra">Editar dados e mudar privilégios de utilizadores com conta</div>
            <div class="subtitulo_obra">Utilizadores com conta</div>
            <div class="userdata" style="display: flex;">
                <div class="searchbox ">
                    <select class="category input_appeareance">
                    </select>
                    <input type="text" class="input_appeareance input_pld" name="search" placeholder="Pesquisa aqui">
                </div>
                <div class="table-data">
                    <table style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th>Codigo de folha</th>
                                <th>Tipo de utilizador associado</th>
                                <th>Código de utilizador</th>
                                <th>Descrição</th>
                                <th>Budget montagem</th>
                                <th>Custo montagem</th>
                                <th>Pessoa_Montagem</th>
                                <th>localização de ficheiros</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="userdata_bg" style="gap: 1rem;">
                <div class="subtitulo_obra">Dados dos utilizadores</div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"><label for="">Codigo de utilizador</label> <input type="text"
                            name="nome" readonly="" style="text-align: center;"></div>
                    <div class="userdata_group"> <label for="">Nome</label> <input type="text" name="nome" readonly=""
                            style="text-align: center;">
                    </div>

                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"> <label for="">Email</label> <input type="text" name="Email" readonly=""
                            style="text-align: center;">
                    </div>
                    <div class="userdata_group"> <label for="">NIF</label> <input type="text" name="Contacto"
                            readonly="" style="text-align: center;"></div>
                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"> <label for="">Contactos</label> <input type="text" name="Email"
                            readonly="" style="text-align: center;">
                    </div>
                    <div class="userdata_group"> <label for="">Pessoa-contacto</label> <input type="text"
                            name="Contacto" readonly="" style="text-align: center;"></div>
                </div>
                <div class="flex_userdata_group">
                    <div class="userdata_group"> <label for="">Cargo</label><select name="" id=""></select>
                    </div>

                </div>
                <div class="flex" style="gap: 1rem; display: flex;">
                    <div class="editbtn salvar" style="display:none">Salvar </div>
                    <div class="editbtn edit">Editar <span></span><span></span></div>
                    <div class="editbtn remover" style="background:red;">Remover</div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="adminpage.js"></script>

</html>