    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="miestilo.css">
    <style>
        /* Estilo para el texto dentro del formulario */
        .login-form p {
            color: black;
        }

        /* Centrar el texto en el body solo dentro del contenedor del formulario */
        .login-form {
            text-align: center;
        }

        /* Especificidad para el formulario de login */
        .login-form form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .login-form .form-group {
            margin-bottom: 15px;
        }
        .login-form .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .login-form .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .login-form .form-group button {
            background-color: #1fe60d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }
        .login-form .form-group button.cancelar {
            background-color: #dc3545;
        }
        .login-form .form-group button.cancelar:hover {
            background-color: #c82333;
        }
    </style>
</head>


    <div class="image-container" style="text-align: center;">
        <img src="assets/img/logo.png" alt="Azurah SAU" class="logo">
    </div>


    <!-- Mensaje de Error -->
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>
    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
    <?php endif ?>
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif ?>

    <!-- INICIO DE FORMULARIO -->
    <div class="login-form">
        <form action="<?= base_url('enviarlogin'); ?>" method="post">
            <div class="form-group">
                <div style="text-align: center;">
                    <p>INICIAR SESION</p>
                </div>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <div class="form-group">
                <button type="submit">Ingresar</button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger cancelar">Cancelar</button>
            </div>
        </form>
    </div>