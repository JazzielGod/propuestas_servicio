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
            <div class="bg-holder" style="background-image: url(fondo.jpeg);"></div>
        </div>

        <div class="col-lg-6">

            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sn-0">
                <div class=" col col-sm-6 col-lg-7 col-xl-7 ">
                    <div class="container-fluid border border-secondaty rounded p-4">
                        <a href="#" class="d-flex justify-content-center mb-4">
                            <img src="logoUabcs.png" alt="" width="60">
                        </a>

                        <div class="text-center mb-5">

                            <h3 class="title">Iniciar Sesión</h3>
                            <p class="">Bienvenido por favor ingresa tus datos</p>
                        </div>
                        <form action="auth.php" method="POST">

                            <div class="form-group mb-4">
                                <label for="email" class="fw-bold">Correo electronico</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                                    placeholder="Ingresa tu correo electronico">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="fw-bold">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Ingresa tu contraseña">
                            </div>
                            <button class="btn btn-primary btn-lg w-100 mt-5">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>