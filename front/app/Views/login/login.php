<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link 
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link 
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
    />

    <link rel="stylesheet" href="<?= base_url("assets/css/login/main.css") ?>"/>
</head>
<body>
    <div class="container-login">
        <form id="formularioLogin">
            <div class="titulo-sistema">
                <i class="fas fa-laptop-medical"></i>Metsys
            </div>

            <div class="input-group custom-input">
                <div class="input-group-prepend">
                    <div class="custom-input-icon">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <input type="text" class="ml-1" name="usu_login" placeholder="login">
            </div>
            <div class="input-group custom-input mt-3">
                <div class="input-group-prepend">
                    <div class="custom-input-icon">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <input type="password" class="ml-1" name="usu_senha" placeholder="senha">
            </div>

            <button class="btn btn-outline-info mt-3" id="btnEntrar">
                Entrar
            </button>
        </form>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script 
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
        crossorigin="anonymous">
    </script>
    <script 
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous">
    </script>


    <!--JS Default -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src="<?= base_url("assets/js/commun/main.js") ?>"></script>
    <script src="<?= base_url("assets/js/login/main.js") ?>"></script>    
</body>
</html>