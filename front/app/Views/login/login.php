<div id="container-login">
    <div class="content" align='center'>
        <form class="col-sm-4" id=formularioLogin>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input type="text" id="usuario" name="usu_login" class="form-control" placeholder="Usuário"><br>
            </div>
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" id="senha" name="usu_senha" class="form-control" placeholder="Senha"><br>
            </div>
            
            <button id="btnEntrar" class="btn btn-outline-primary btn-lg btn-block">
                    Entrar
            </button>
        </form>
    </div>
</div>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!--JS Default -->
<script src="<?= base_url("assets/commun/main.js") ?>"></script>
<script src="<?= base_url("assets/login/main.js") ?>"></script>