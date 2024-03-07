<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Iniciar Sesión</title>
</head>

<body>


    <div class="row vh-100 g-0">
        <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class="bg-holder" style="background-image: url(fondo2.jpeg);"></div>
        </div>

        <div class="col-lg-6">

            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sn-0">
                <div class=" col col-sm-6 col-lg-7 col-xl-7 ">
                <div class="fondo">
                    <div class="container-fluid border border-secondaty rounded p-4">
                        <a href="#" class="d-flex justify-content-center mb-4">
                            <img src="logoUabcs.png" alt="" width="150">
                        </a>

                        <div class="text-center mb-5">

                            <h3 class="title">Iniciar Sesión</h3>
                            <p class="">Bienvenido por favor ingresa tus datos</p>
                        </div>
                        <form action="auth.php" method="post">

                            <div class="form-group mb-5">
                                <label for="email" class="fw-bold">Correo electronico</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Ingresa tu correo electronico">
                            </div>
                            <div class="form-group mb-5">
                                <label for="password" class="fw-bold">Contraseña</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Ingresa tu contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 mt-5">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap');

        .title {
            font-family: Lexend Exa;
        }
         
        body{
            background-color: rgb(239, 239, 239);
        }

        .fondo{
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10;
        }

        .bg-holder {
            position: absolute;
            width: 100%;
            min-height: 100%;
            top: 0;
            left:0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        .bg-holder::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


</body>

</html>