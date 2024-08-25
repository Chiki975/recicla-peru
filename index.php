<?php
require "php/code-login.php";
?>
<!DOCTYPE html>
<html data-theme="forest">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>


    <div class="bg-no-repeat bg-cover bg-center relative"
        style="background-image: url(https://perurecicla.net/wp-content/uploads/2024/04/perurecicla-2.webp);">
        <div class="absolute bg-gradient-to-b from-green-500 to-green-400 opacity-65 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
            <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
                <div class="self-start hidden lg:flex flex-col  text-white">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 font-bold text-5xl">Reciclaje Seguro, Etico y Responsable </h1>
                    <p class="pr-3">Especializado en residuos de aparatos eléctricos y electrónicos.</p>
                </div>
            </div>
            <div class="flex justify-center self-center  z-10">
                <div class="p-12 bg-primary mx-auto rounded-2xl w-100 ">
                    <div class="mb-4 items-center">
                        <img src="https://perurecicla.net/wp-content/uploads/2024/04/img-logo-blanco.webp#126"
                            width="80px" alt="">
                        <h3 class="font-semibold text-2xl text-white">Iniciar sesión</h3>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="space-y-5">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white tracking-wide">Correo</label>
                                <input
                                    class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                                    type="" placeholder="Recicla@gmail.com" name="correo">
                            </div>
                            <div class="space-y-2">
                                <label class="mb-5 text-sm font-medium text-white tracking-wide">
                                    Contraseña
                                </label>
                                <input
                                    class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                                    type="password" placeholder="Ingresa tu contraseña" name="contrasena">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">

                                </div>

                                <div class="text-sm">
                                    <a href="php/NuevoUsuario.php" class="text-white hover:text-green-500">
                                        Crear Cuenta &nbsp;&nbsp;
                                    </a> <a href="php/NuevoUsuario.php" class="text-white hover:text-green-500">
                                      
                                    </a>
                                </div>
                            </div>
                            <div>
                                <input type="submit"
                                    class="w-full flex justify-center bg-green-400  hover:bg-green-500 text-white p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500"
                                    value="Iniciar Sesión" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>