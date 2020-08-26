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
                <div class="form-group col-md-12">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" id="cargo" placeholder="Cargo">
                  </div>  
            </div>       
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>  
            </div>
            <div class="form-row col-md-12">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="municipal" name="municipal" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Perfil Municipal</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="monitoramento" name="monitoramento" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Perfil Monitoramento</label>
                </div>
            </div>           
            <button type="submit" class="btn btn-primary" id="btn-cadastro">Finalizar</button>
            <button type="submit" class="btn btn-primary" id="btn-editar">Editar</button>
            <button type="submit" class="btn btn-primary" id="btn-excluir">Excluir</button>
            <button type="submit" class="btn btn-primary" id="btn-limpar">Limpar</button>               
          </form>
    </div>
</div>