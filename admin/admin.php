<?php


require_once "../php/conexion.php";


?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />

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

<?php include("layouts/header.php"); ?>

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <div class="flex flex-wrap mt-6">
                    <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-plus mr-3"></i> Reportes de Recaudo 
                        </p>
                        <div class="p-6 bg-white">
                            <canvas id="chartOne" width="400" height="200"></canvas>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-check mr-3"></i> Reporte de Reciclaje
                        </p>
                        <div class="p-6 bg-white">
                            <canvas id="chartTwo" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <div class="py-2 flex items-center justify-center w-full">
        <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="my_modal_4.showModal()">Agregar Almacen</button>&nbsp; 
        <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="my_modal_3.showModal()">Agregar Reciclaje</button>&nbsp; 
        <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="my_modal_5.showModal()">Agregar Municipalidad</button>&nbsp; 
        <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="my_modal_6.showModal()">Agregar Residuo</button>
    </div>
     
    
    
<dialog id="my_modal_3" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="font-bold text-lg">Ingresar Residuo</h3>
    <p class="py-4"></p>
    <form id="formulario" action="../php/reciclar.php" method="post">
    <h2 class="card-title py-2" id="dni">Dni</h2>
    <input type="text" name="dni" class="input input-bordered input-info w-full max-w" />
    <h2 class="card-title py-2">Municipalidad</h2>
    <select id="municipalitySelect" name="municipalidad" class="select select-accent w-full max-w" data-show-subtext="true" data-live-search="true">
        <option disabled selected>Municipalidad</option>
        <?php
            $querymuni = "SELECT municipalidades.IdMunicipalidades, municipalidades.Nombre FROM almacen JOIN municipalidades ON almacen.Ubicacion = municipalidades.IdMunicipalidades GROUP BY almacen.Ubicacion;";
            $resultmuni = mysqli_query($link, $querymuni);
            while ($row = mysqli_fetch_assoc($resultmuni)) {
                $Nombre = $row['Nombre'];
                $IdMunicipalidades = $row['IdMunicipalidades'];
                echo '<option value="' . $IdMunicipalidades . '">' . $Nombre . '</option>';
            }
        ?>
    </select>
    <h2 class="card-title py-2">Residuo</h2>
    <select id="residueSelect" name="residuo" class="select select-accent w-full max-w" data-show-subtext="true" data-live-search="true">
        <option disabled selected>Residuo</option>
    </select>
    <h2 class="card-title py-2">Cantidad</h2>
    <input type="decimal" name="cantidad" class="input input-bordered input-info w-full max-w" />
    <div class="py-5 flex items-center justify-center ">
        <button type="submit" class="btn bg-green">Enviar</button>
    </div>
</form>
  </div>
  </div> 
</dialog>

    







                <div class="overflow-x-auto text-black">
                    <table class="table table-xs ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>NOMBRE</th>
                                <th>UBICACION</th>
                                <th>CAPACIDAD</th>
                                <th>CAPACIDAD MAX</th>
                                <th>RESIDUO</th>
                                <th>PORCENTAJE</th>
                                <th>RECAUDADO</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $query = "SELECT almacen.AlmacenID,almacen.Nombre, municipalidades.Nombre as municipalidad,almacen.Capacidad, almacen.capacidadMax , residuos.Nombre as Residuos,almacen.Recaudado FROM almacen JOIN municipalidades ON almacen.Ubicacion = municipalidades.IdMunicipalidades JOIN residuos ON almacen.Ubicacion = residuos.ResiduosID;";

                            $result = mysqli_query($link, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $AlmacenID = $row['AlmacenID'];
                                $Nombre = $row['Nombre'];
                                $Ubicacion = $row['municipalidad'];
                                $Capacidad = $row['Capacidad'];
                                $capacidadMax = $row['capacidadMax'];
                                $ResiduosID = $row['Residuos'];
                                $Recaudado = $row['Recaudado'];

                                $porcentaje = ($Capacidad * 100) / $capacidadMax;


                                echo ' <tr>';
                                echo '<th>' . $AlmacenID . '</th> ';
                                echo ' <td>' . $Nombre . '</td> ';
                                echo '<td>' . $Ubicacion . '</td> ';
                                echo ' <td>' . $Capacidad . '</td> ';
                                echo ' <td>' . $capacidadMax . '</td> ';
                                echo ' <td>' . $ResiduosID . '</td> ';
                                echo '  <td>' . $porcentaje . ' %</td>';
                                echo '  <td>' . $Recaudado . '</td>';
                                echo ' </tr>';
                            }
                            ?>



                        </tbody>
                        <tfoot>
                            <tr>
                            <th></th>
                                <th>NOMBRE</th>
                                <th>UBICACION</th>
                                <th>CAPACIDAD</th>
                                <th>CAPACIDAD MAX</th>
                                <th>RESIDUO</th>
                                <th>PORCENTAJE</th>
                                <th>RECAUDADO</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </main>

   
        </div>
   
                

    </div>
    <dialog id="my_modal_4" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="font-bold text-lg">Crear Almacen</h3>
    <p class="py-4"></p>
    <form id="formulario" action="../php/agregaralmacen.php" method="post">
    <h2 class="card-title py-2" id="dni">Nombre</h2>
    <input type="text" name="Nombre" class="input input-bordered input-info w-full max-w" />
    <h2 class="card-title py-2">Municipalidad</h2>
    <select id="municipalitySelect" name="municipalidad" class="select select-accent w-full max-w" data-show-subtext="true" data-live-search="true">
        <option disabled selected>Municipalidad</option>
        <?php
            $querymuni = "SELECT * from municipalidades";
            $resultmuni = mysqli_query($link, $querymuni);
            while ($row = mysqli_fetch_assoc($resultmuni)) {
                $Nombre = $row['Nombre'];
                $IdMunicipalidades = $row['IdMunicipalidades'];
                echo '<option value="' . $IdMunicipalidades . '">' . $Nombre . '</option>';
            }
        ?>
    </select>
    <h2 class="card-title py-2">Residuo</h2>
    <select id="municipalitySelect" name="residuo" class="select select-accent w-full max-w" data-show-subtext="true" data-live-search="true">
        <option disabled selected>Residuos</option>
        <?php
            $querymuni = "SELECT * from residuos";
            $resultmuni = mysqli_query($link, $querymuni);
            while ($row = mysqli_fetch_assoc($resultmuni)) {
                $Nombre = $row['Nombre'];
                $ResiduosID = $row['ResiduosID'];
                echo '<option value="' . $ResiduosID . '">' . $Nombre . '</option>';
            }
        ?>
    </select>
    <h2 class="card-title py-2">Cantidad maxima</h2>
    <input type="decimal" name="cantidad" class="input input-bordered input-info w-full max-w" />
    <div class="py-5 flex items-center justify-center ">
        <button type="submit" class="btn bg-green">Enviar</button>
    </div>
</form>
  </div>
  </div> 
</dialog>

<dialog id="my_modal_5" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="font-bold text-lg">Ingresar Municipalidad</h3>
    <p class="py-4"></p>
    <form id="formulario" action="../php/agregarmuni.php" method="post">
    <h2 class="card-title py-2" id="">Nombre de Municipalidad</h2>
    <input type="text" name="nombre" class="input input-bordered input-info w-full max-w" />
    <h2 class="card-title py-2">Dirección</h2>
    <input type="text" name="direccion" class="input input-bordered input-info w-full max-w" />
    <div class="py-5 flex items-center justify-center ">
        <button type="submit" class="btn bg-green">Enviar</button>
    </div>
</form>
  </div>
  </div> 
</dialog>


<dialog id="my_modal_6" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="font-bold text-lg">Ingresar Residuo</h3>
    <p class="py-4"></p>
    <form id="formulario" action="../php/agregarResiduo.php" method="post">
    <h2 class="card-title py-2" id="dni">Nombre de Residuo</h2>
    <input type="text" name="nombre" class="input input-bordered input-info w-full max-w" />
    <h2 class="card-title py-2" id="">Descripción</h2>
    <input type="text" name="descripcion" class="input input-bordered input-info w-full max-w" />
    <h2 class="card-title py-2">Categoria</h2>
    <input type="text" name="categoria" class="input input-bordered input-info w-full max-w" />
    <h2 class="card-title py-2">Puntos</h2>
    <input type="number" name="puntos" class="input input-bordered input-info w-full max-w" />
    <h2 class="card-title py-2">Precio</h2>
    <input type="decimal" name="precio" class="input input-bordered input-info w-full max-w" />
    <h2 class="card-title py-2">Unidad</h2>
    <input type="text" name="unidad" class="input input-bordered input-info w-full max-w" />
    <div class="py-5 flex items-center justify-center ">
        <button type="submit" class="btn bg-green">Enviar</button>
    </div>
</form>
  </div>
  </div> 
</dialog>


    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: [      <?php  $sqlalmacen = "SELECT CONCAT(\"\'\", municipalidades.Nombre, \"\'\") AS Ubicacion  from almacen JOIN municipalidades
ON almacen.Ubicacion = municipalidades.IdMunicipalidades GROUP by almacen.Ubicacion"; 
                $resultalacen = mysqli_query($link, $sqlalmacen);
                while ($row2 = mysqli_fetch_assoc($resultalacen)) {
                   
                    $ubicaciones = $row2['Ubicacion'];
                    echo '"'.$ubicaciones.'", ';
                }
                ?>],
                datasets: [{
                    label: '# Municipales',
                    data: [ <?php  $sqlalmacen = "SELECT SUM(Recaudado) as suma from almacen group by Ubicacion"; 
                $resultalacen = mysqli_query($link, $sqlalmacen);
                while ($row2 = mysqli_fetch_assoc($resultalacen)) {
                   
                    $ubicaciones = $row2['suma'];
                    echo '"'.$ubicaciones.'", ';
                }
                ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: [<?php  $sqlmes = "SELECT DATE_FORMAT(FechaHoraReciclaje, '%Y-%m') AS mes, COUNT(*) AS cantidad FROM registroingreso GROUP BY mes ORDER BY mes;"; 
                $resultmes = mysqli_query($link, $sqlmes);
                while ($row3 = mysqli_fetch_assoc($resultmes)) {
                   
                    $mes = $row3['mes'];
                    echo '"'.$mes.'", ';
                }
                ?>],
                datasets: [{
                    label: 'Meses',
                    data: [<?php  $sqlmes = "SELECT DATE_FORMAT(FechaHoraReciclaje, '%Y-%m') AS mes, COUNT(*) AS cantidad FROM registroingreso GROUP BY mes ORDER BY mes;"; 
                $resultmes = mysqli_query($link, $sqlmes);
                while ($row3 = mysqli_fetch_assoc($resultmes)) {
                   
                    $mes = $row3['cantidad'];
                    echo '"'.$mes.'", ';
                }
                ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#municipalitySelect').change(function() {
            var municipalityId = $(this).val();
            $.ajax({
                url: 'get_residues.php',
                type: 'POST',
                data: {municipalityId: municipalityId},
                success: function(response) {
                    $('#residueSelect').html(response);
                }
            });
        });
    });
</script>
</body>

</html>