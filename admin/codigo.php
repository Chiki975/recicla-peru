<?php


require_once "../php/conexion.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>
</head>

<body class="bg-gray-100 font-family-karla flex">

    <?php include ("layouts/header.php"); ?>



        <main class="w-full flex-grow p-6">

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i>  Reportes de Canjeados&nbsp;
        <a onclick="my_modal_1.showModal()"
                class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-green-600 px-6 font-medium tracking-wide text-white shadow-md transition hover:bg-blue-800 focus:outline-none md:mr-4 md:mb-0 md:w-auto">
                Agregar</a>
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">N</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Usuario</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Producto</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Fecha</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Codigo</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">estado</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            <?php

                            $query = "SELECT cajeados.CajeadosID,cajeados.UsuariosID,productos.Nombre as producto,cajeados.fecha,cajeados.Codigo,cajeados.estado FROM cajeados JOIN productos ON cajeados.ProductoID=productos.ProductosID";
                            $result = mysqli_query($link, $query);

                            // Mostrar las imágenes en la galería
                            while ($row = mysqli_fetch_assoc($result)) {
                                $CajeadosID = $row['CajeadosID'];
                                $UsuariosID = $row['UsuariosID'];
                                $ProductoID = $row['producto'];
                                $fecha = $row['fecha'];
                                $Codigo = $row['Codigo'];
                                $estado = $row['estado'];


                                echo '<td class=" text-left py-3 px-4">' . $CajeadosID . '</td>';
                                echo '<td class=" text-left py-3 px-4">' . $UsuariosID . '</td>';
                                echo '<td class="text-left py-3 px-4"><a class="hover:text-blue-500" >' . $ProductoID . '</a></td>';
                                echo '<td class="text-left py-3 px-4"><a class="hover:text-blue-500">' . $fecha . '</a></td>';
                                echo '<td class=" text-left py-3 px-4">' . $Codigo . '</td>';
                                echo '<td class=" text-left py-3 px-4">' . $estado . '</td>';
                                 echo '</tr>';
                            }


                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </main>

    

    
        <main class="w-full flex-grow p-6">

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i>  Reportes de Productos&nbsp;
        <a onclick="my_modal_1.showModal()"
                class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-green-600 px-6 font-medium tracking-wide text-white shadow-md transition hover:bg-blue-800 focus:outline-none md:mr-4 md:mb-0 md:w-auto">
                Agregar</a>
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">N</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Descripción</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">PuntosNecesarios</th>

                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            <?php

                            $query2 = "SELECT * FROM productos";
                            $result2 = mysqli_query($link, $query2);

                            // Mostrar las imágenes en la galería
                            while ($row = mysqli_fetch_assoc($result2)) {
                                $ProductosID  = $row['ProductosID'];
                                $Nombre = $row['Nombre'];
                                $Descripción = $row['Descripción'];
                                $PuntosNecesarios = $row['PuntosNecesarios'];
                                


                                echo '<td class=" text-left py-3 px-4">' . $ProductosID . '</td>';
                                echo '<td class=" text-left py-3 px-4">' . $Nombre . '</td>';
                                echo '<td class=" text-left py-3 px-4">' . $Descripción . '</td>';
                                echo '<td class=" text-left py-3 px-4">' . $PuntosNecesarios . '</td>';
                                 echo '</tr>';
                            }


                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </main>

   

    
  
        <main class="w-full flex-grow p-6">

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i>  Reportes de Ingreso
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">N</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Usuario</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Municipalidad</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Residuo</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Cantidad</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Fecha</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Puntos</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            <?php

                            $query3 = "SELECT registroingreso.Idregistroingreso,registroingreso.UsuariosID, municipalidades.Nombre as municipalidad,residuos.Nombre as Residuos,registroingreso.Cantidad,registroingreso.FechaHoraReciclaje ,registroingreso.puntos FROM registroingreso JOIN municipalidades ON registroingreso.IdMunicipalidades = municipalidades.IdMunicipalidades JOIN residuos ON registroingreso.ResiduosID = residuos.ResiduosID;";
                            $result3 = mysqli_query($link, $query3);

                            // Mostrar las imágenes en la galería
                            while ($row = mysqli_fetch_assoc($result3)) {
                                $Idregistroingreso = $row['Idregistroingreso'];
                                $UsuariosID = $row['UsuariosID'];
                                $IdMunicipalidades = $row['municipalidad'];
                                $ResiduosID = $row['Residuos'];
                                $Cantidad = $row['Cantidad'];
                                $FechaHoraReciclaje = $row['FechaHoraReciclaje'];
                                $puntos = $row['puntos'];


                                echo '<td class=" text-left py-3 px-4">' . $Idregistroingreso . '</td>';
                                echo '<td class=" text-left py-3 px-4">' . $UsuariosID . '</td>';
                                echo '<td class="text-left py-3 px-4"><a class="hover:text-blue-500" >' . $IdMunicipalidades . '</a></td>';
                                echo '<td class="text-left py-3 px-4"><a class="hover:text-blue-500">' . $ResiduosID . '</a></td>';
                                echo '<td class=" text-left py-3 px-4">' . $Cantidad . '</td>';
                                echo '<td class=" text-left py-3 px-4">' . $FechaHoraReciclaje . '</td>';
                                echo '<td class=" text-left py-3 px-4">' . $puntos . '</td>';
                                 echo '</tr>';
                            }


                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <main class="w-full flex-grow p-6">

<div class="w-full mt-12">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i>  Reportes de Residuos
    </p> 
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">N</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Residuo</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Descripción</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Categoría</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Puntos</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Precio</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Unidad</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">

                <?php

                $query4 = "SELECT * FROM residuos";
                $result4 = mysqli_query($link, $query4);

                // Mostrar las imágenes en la galería
                while ($row = mysqli_fetch_assoc($result4)) {
                    $ResiduosID = $row['ResiduosID'];
                    $Nombre = $row['Nombre'];
                    $Descripción = $row['Descripción'];
                    $Categoría = $row['Categoría'];
                    $PuntosPorReciclaje = $row['PuntosPorReciclaje'];
                    $Precio = $row['Precio'];
                    $Unidad = $row['Unidad'];


                    echo '<td class=" text-left py-3 px-4">' . $ResiduosID . '</td>';
                    echo '<td class=" text-left py-3 px-4">' . $Nombre . '</td>';
                    echo '<td class="text-left py-3 px-4"><a class="hover:text-blue-500" >' . $Descripción . '</a></td>';
                    echo '<td class="text-left py-3 px-4"><a class="hover:text-blue-500">' . $Categoría . '</a></td>';
                    echo '<td class=" text-left py-3 px-4">' . $PuntosPorReciclaje . '</td>';
                    echo '<td class=" text-left py-3 px-4">' . $Precio . '</td>';
                    echo '<td class=" text-left py-3 px-4">' . $Unidad . '</td>';
                     echo '</tr>';
                }


                ?>


            </tbody>
        </table>
    </div>
</div>
</main>



<main class="w-full flex-grow p-6">

<div class="w-full mt-12">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i>  Reportes de Usuarios&nbsp;
        <a onclick="my_modal_5.showModal()"
                class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-green-600 px-6 font-medium tracking-wide text-white shadow-md transition hover:bg-blue-800 focus:outline-none md:mr-4 md:mb-0 md:w-auto">
                Agregar</a>
    </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Usuario</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Rol</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Puntos</th>

                </tr>
            </thead>
            <tbody class="text-gray-700">

                <?php

                $query5 = "SELECT * FROM usuarios";
                $result5 = mysqli_query($link, $query5);

                // Mostrar las imágenes en la galería
                while ($row = mysqli_fetch_assoc($result5)) {
                    $UsuariosID  = $row['UsuariosID'];
                    $Nombre = $row['Nombre'];
                    $Email = $row['Email'];
                    $Rol = $row['Rol'];
                    $Puntos = $row['Puntos'];


                    echo '<td class=" text-left py-3 px-4">' . $UsuariosID . '</td>';
                    echo '<td class=" text-left py-3 px-4">' . $Nombre . '</td>';
                    echo '<td class="text-left py-3 px-4"><a class="hover:text-blue-500" >' . $Email . '</a></td>';
                    echo '<td class="text-left py-3 px-4"><a class="hover:text-blue-500">' . $Rol . '</a></td>';
                    echo '<td class=" text-left py-3 px-4">' . $Puntos . '</td>';
                     echo '</tr>';
                }


                ?>


            </tbody>
        </table>
    </div>
</div>
</main>

   



    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    
</body>

</html>