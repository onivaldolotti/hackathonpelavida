<div id="container-acompanhamento">
    <div class="content-acompanhmento" align="center">
        <form class="form">
            <div class="form-row">
                <div class="form-group col-md-9">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-3">
                <label for="data">Data de Nasc.</label>
                <input type="date" class="form-control" id="data" placeholder="Data de Nasc.">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="number" class="form-control" id="cpf" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="cns">CNS</label>
                    <input type="number" class="form-control" id="cns" placeholder="CNS">
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
                    <label for="data-inicio-sintomas">Data de Início dos Sintomas</label>
                    <input type="date" class="form-control" id="data-inicio-sintomas" placeholder="Data de Início dos Sintomas">
                </div>
                <div class="form-group col-md-6">
                    <label for="data-coleta-exame">Data da Coleta do Exame</label>
                    <input type="date" class="form-control" id="data-coleta-exame" placeholder="Data da Coleta do Exame">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="desc-avaliacao">Descrição Avaliação</label>
                    <input type="text" class="form-control" id="desc-avaliacao" placeholder="Descrição Avaliação">
                </div>
                <div class="form-group col-md-6">
                    <label for="inicio-isolamento">Inicio do isolamento</label>
                    <input type="date" class="form-control" id="inicio-isolamento" placeholder="Inicio do Isolamento">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="btn-cadastro">Finalizar</button>
            <button type="submit" class="btn btn-primary" id="btn-editar">Editar</button>
            <button type="submit" class="btn btn-primary" id="btn-excluir">Excluir</button>
            <button type="submit" class="btn btn-primary" id="btn-limpar">Limpar</button>
            </form>
    </div>
</div>