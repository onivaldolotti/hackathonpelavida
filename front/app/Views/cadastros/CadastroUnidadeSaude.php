<div id="container-acompanhamento">
    <div class="content-acompanhmento" align="center">
        <form class="form">
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="nome_unidade_saude">Unidade Básica de Saúde</label>
                <input type="text" class="form-control" id="nome_unidade_saude" placeholder="Unidade Básica de Saúde">
                </div>
            </div>               
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cep">CEP</label>
                    <input type="number" class="form-control" id="cep" placeholder="CEP">
                </div>
                <div class="form-group col-md-7">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                </div>
                <div class="form-group col-md-1">
                    <label for="numero">Nº</label>
                    <input type="number" class="form-control" id="numero" placeholder="Nº">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" id="complemento" placeholder="Complemento">
                </div>
                <div class="form-group col-md-4">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" placeholder="Bairro">
                </div>
                <div class="form-group col-md-3">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" placeholder="Cidade">
                </div>
                <div class="form-group col-md-2">
                    <label for="uf">UF</label>
                    <select id="uf" class="form-control">
                        <option></option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" placeholder="Telefone">
                </div> 
                <div class="form-group col-md-6">
                    <label for="data-coleta-exame">E-mail</label>
                    <input type="email" class="form-control" id="data-coleta-exame" placeholder="E-mail">
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="tipo_unidade">Selecione o status da Unidade</label>
                <select id="tipo_unidade" class="form-control">
                    <!-- for each do banco-->
                    <option selected></option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="btn-cadastro">Finalizar</button>
            <button type="submit" class="btn btn-primary" id="btn-editar">Editar</button>
            <button type="submit" class="btn btn-primary" id="btn-excluir">Excluir</button>
            <button type="submit" class="btn btn-primary" id="btn-limpar">Limpar</button>
            </form>
    </div>
</div>