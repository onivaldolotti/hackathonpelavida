<div id="container-acompanhamento">
    <div class="content-acompanhmento" align="center">
        <form class="form">
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="data">Data de Nasc.</label>
                    <input type="date" class="form-control" id="data" placeholder="Data de Nasc.">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="CNS">CNS</label>
                    <input type="number" class="form-control" id="CNS" placeholder="CNS">
                    </div>
            </div>                
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" placeholder="Telefone">
                </div>
                <div class="form-group col-md-4">
                    <label for="data-obito">Óbito</label>
                    <input type="date" class="form-control" id="data-obito" placeholder="Óbito">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="primeira-avaliacao">Primeira Avaliação Médica</label>
                    <input type="text" class="form-control" id="primeira-avaliacao" placeholder="Primeira Avaliação Médica">
                </div>
                <div class="form-group col-md-6">
                    <label for="data-isolamento">Isolamento até:</label>
                    <input type="date" class="form-control" id="data-isolamento" placeholder="Isolamento até:">
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
                    <label for="local">Local</label>
                    <select id="local" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="convenio">Tipo de Convênio</label>
                    <select id="comorbidades" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="unidade-referencia">Unidade de Referência</label>
                    <select id="unidade-referencia" class="form-control">
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tipo-exame">Tipo de exame</label>
                    <select id="tipo-exame" class="form-control">
                        <option selected>PCR-RT</option>
                        <option >Sorologia</option>
                        <option >Teste Rápido</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="data-resultado">Data do Resultado</label>
                    <input type="date" class="form-control" id="data-resultado" placeholder="Data do Resultado">
                </div>
                <div class="form-group col-md-4">
                    <label for="resultado-exame">Resultado do Exame</label>
                    <select id="resultado-exame" class="form-control">
                        <option selected>Positivo</option>
                        <option >Negativo</option>
                        <option >Aguardando Resultado</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="grupo-risco">Grupo de Risco</label>
                    <select id="grupo-risco" class="form-control">
                        <option selected>Sim</option>
                        <option >Não</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="data-ligacao">Data</label>
                    <input type="date" class="form-control" id="data-ligacao">
                </div>
                <div class="form-group col-md-4">
                    <label for="hora-ligacao">Hora</label>
                    <input type="time" class="form-control" id="hora-ligacao">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="comorbidades">Comorbidades</label>
                    <select id="comorbidades" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="isolamento">Em Isolamento</label>
                    <select id="isolamento" class="form-control">
                        <option selected>Sim</option>
                        <option >Não</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="orientacao">Orientação</label>
                    <select id="orientacao" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="apetite">Apetite</label>
                    <select id="apetite" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="sinais">Sinais</label>
                    <select id="sinais" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="febre">Febre</label>
                    <select id="febre" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tosse">Tosse</label>
                    <select id="tosse" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="faltaAr-cansaco">Falta de Ar/Cansaço</label>
                    <select id="faltaAr-cansaco" class="form-control">
                        <!-- for each do banco-->
                        <option selected></option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="obs-gerais">Observações Gerais</label>
                    <textarea class="form-control" id="obs-gerais" placeholder="Observações gerais"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Encerrar Acompanhamento</button>
        </form>
    </div>
</div>

