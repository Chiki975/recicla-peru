<?php
session_start();


require_once "php/conexion.php";
$usuarioID = $_SESSION['UsuariosID'];

?>
<!DOCTYPE html>
<html data-theme="fourt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="navbar bg-base-100">
    <div class="flex-1">
      <img src="https://perurecicla.net/wp-content/uploads/2024/04/img-logo-blanco.webp#126" width="120px" alt="">
    </div>
    <div class="flex-none">
      <label class="flex cursor-pointer gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="5" />
          <path
            d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
        </svg>
        <input type="checkbox" value="synthwave" class="toggle theme-controller" />
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
      </label>
      &nbsp;&nbsp;
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img alt="Tailwind CSS Navbar component" src="https://cdn-icons-png.flaticon.com/512/1053/1053244.png" />
          </div>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[10] p-2 shadow bg-base-100 rounded-box w-52">
          
          <li>
            <a href="admin/admin.php" class="justify-between">
              Administrador

            </a>
          </li>
       
          <li><a href="php/cerrar-sesion.php">Cerrar Sesión</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- component -->
  <div class="relative   flex items-center  n justify-center overflow-hidden z-1 ">

    <div
      class="relative mx-auto h-full px-4  pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
      <div class="flex flex-col items-center justify-between lg:flex-row py-16">
        <div class=" relative ">

          <div class="lg:max-w-xl lg:pr-5 relative z-40">
            <p class="flex text-sm uppercase text-g1  ">

              PERÚ RECICLA
            </p>
            <h2 class="mb-6 max-w-lg font-light leading-snug tracking-tight text-g1 sm:text-3xl sm:leading-snug">
              Empresa dedicada al desarrollo de las actividades de reciclaje con especialización en residuos de aparatos
              eléctricos y electrónicos.
            </h2>
            <p class="text-base text-gray-700">Nueva Iniciativa y Proyectos de Reciclaje Electrónico
         
            </p>
            <div class="mt-10 flex flex-col items-center md:flex-row">
              <a onclick="my_modal_7.showModal()"
                class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-green-600 px-6 font-medium tracking-wide text-white shadow-md transition hover:bg-blue-800 focus:outline-none md:mr-4 md:mb-0 md:w-auto">
                Mis Canjes</a>
              <a  onclick="my_modal_4.showModal()" aria-label="" class="group inline-flex items-center font-semibold text-g1">
                Lugares Establecidos
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="ml-4 h-6 w-6 transition-transform group-hover:translate-x-2" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
              </a>
            </div>
          </div>


        </div>
        <div class="relative hidden lg:ml-32 lg:block lg:w-1/2">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="my-6 mx-auto h-10 w-10 animate-bounce rounded-full bg-white p-2 lg:hidden" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
          </svg>
          <div class="abg-orange-400 mx-auto w-fit overflow-hidden rounded-[6rem] rounded-br-none rounded-tl-none">
            <img src="https://perurecicla.net/wp-content/uploads/2024/04/perurecicla-14-1200x801.webp">
          </div>
        </div>
      </div>
    </div>

    <div class=" absolute -bottom-24 left-10 z-0  opacity-10 ">
      <svg width="800px" height="800px" viewBox="0 0 24 24"
        class="w-96 z-0  h-full    object-fill fill-gray-300 text-gray-300" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M12 6C12 5.44772 11.5523 5 11 5C10.4477 5 10 5.44772 10 6V16C10 16.5523 10.4477 17 11 17C11.5523 17 12 16.5523 12 16V6ZM9 9C9 8.44772 8.55228 8 8 8C7.44772 8 7 8.44772 7 9V16C7 16.5523 7.44772 17 8 17C8.55228 17 9 16.5523 9 16V9ZM15 9C15 8.44772 14.5523 8 14 8C13.4477 8 13 8.44772 13 9V16C13 16.5523 13.4477 17 14 17C14.5523 17 15 16.5523 15 16V9ZM18 13C18 12.4477 17.5523 12 17 12C16.4477 12 16 12.4477 16 13V16C16 16.5523 16.4477 17 17 17C17.5523 17 18 16.5523 18 16V13ZM6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15V16C4 16.5523 4.44772 17 5 17C5.55228 17 6 16.5523 6 16V15ZM21 15C21 14.4477 20.5523 14 20 14C19.4477 14 19 14.4477 19 15V16C19 16.5523 19.4477 17 20 17C20.5523 17 21 16.5523 21 16V15ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H21C21.5523 20 22 19.5523 22 19C22 18.4477 21.5523 18 21 18H4Z">
        </path>
      </svg>
    </div>

    <div class=" absolute -bottom-0 left-3/4 z-0  opacity-10 ">
      <svg width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
        class="w-48 z-0  h-full -rotate-90   object-fill fill-red-300 text-red-300">
        <path
          d="M32 225h12.993A4.004 4.004 0 0 0 49 220.997V138.01c0-4.976.724-5.04 1.614-.16l12.167 66.708c.397 2.177 2.516 3.942 4.713 3.942h8.512a3.937 3.937 0 0 0 3.947-4S79 127.5 80 129s14.488 52.67 14.488 52.67c.559 2.115 2.8 3.83 5.008 3.83h8.008a3.993 3.993 0 0 0 3.996-3.995v-43.506c0-4.97 1.82-5.412 4.079-.965l10.608 20.895c1.001 1.972 3.604 3.571 5.806 3.571h9.514a3.999 3.999 0 0 0 3.993-4.001v-19.49c0-4.975 2.751-6.074 6.155-2.443l6.111 6.518c1.51 1.61 4.528 2.916 6.734 2.916h7c2.21 0 5.567-.855 7.52-1.92l9.46-5.16c1.944-1.06 5.309-1.92 7.524-1.92h23.992a4.002 4.002 0 0 0 4.004-3.992v-7.516a3.996 3.996 0 0 0-4.004-3.992h-23.992c-2.211 0-5.601.823-7.564 1.834l-4.932 2.54c-4.423 2.279-12.028 3.858-16.993 3.527l2.97.198c-4.962-.33-10.942-4.12-13.356-8.467l-11.19-20.14c-1.07-1.929-3.733-3.492-5.939-3.492h-7c-2.21 0-4 1.794-4 4.001v19.49c0 4.975-1.14 5.138-2.542.382l-12.827-43.535c-.625-2.12-2.92-3.838-5.127-3.838h-8.008c-2.207 0-3.916 1.784-3.817 4.005l1.92 42.998c.221 4.969-.489 5.068-1.585.224l-15.13-66.825c-.488-2.155-2.681-3.902-4.878-3.902h-8.512a3.937 3.937 0 0 0-3.947 4s.953 77-.047 75.5-13.937-92.072-13.937-92.072C49.252 34.758 47.21 33 45 33H31.999"
          fill-rule="evenodd"></path>
      </svg>
    </div>
    <div class=" absolute top-10 left-3/4 z-0  opacity-10 ">

      <svg fill="#000000" width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
        class="w-96 z-0  h-full    object-fill fill-blue-300 text-blue-300">
        <path
          d="M230.704 99.2a4.004 4.004 0 0 0-4.01-3.995h-50.981c-2.215 0-5.212-1.327-6.693-2.964L155.289 77.08c-17.795-19.65-41.628-16.256-53.234 7.58l-38.736 79.557C60.42 170.172 52.705 175 46.077 175H29.359a3.996 3.996 0 0 0-3.994 3.995v10.01A4 4 0 0 0 29.372 193h24.7c8.835 0 19.208-6.395 23.174-14.293l43.645-86.914c3.964-7.894 12.233-9.228 18.473-2.974l17.184 17.219c3.123 3.13 9.242 5.667 13.647 5.667H226.7a4.005 4.005 0 0 0 4.004-3.994v-8.512z"
          fill-rule="evenodd"></path>
      </svg>
    </div>

  </div>





  <div class="relative pt-2 lg:pt-2 min-h-screen">

    <div class="bg-cover w-full flex justify-center items-center"
      style="background-image: url('https://perurecicla.net/wp-content/uploads/2024/04/perurecicla-8.webp');">
      <div class="w-full  p-5  bg-opacity-40  backdrop-blur-lg">
        <div class="w-12/12 mx-auto rounded-2xl bg-white p-5 bg-opacity-10 backdrop-filter backdrop-blur-lg">

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-center px-2 mx-auto">


            <?php

            $query = "SELECT * FROM productos";
            $result = mysqli_query($link, $query);

            // Mostrar las imágenes en la galería
            while ($row = mysqli_fetch_assoc($result)) {
              $ProductosID = $row['ProductosID'];
              $Nombre = $row['Nombre'];
              $Descripción = $row['Descripción'];
              $PuntosNecesarios = $row['PuntosNecesarios'];
              $Imagen = $row['Imagen'];


              echo '  <article';
              echo ' class="bg-white text-primary  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">';
              echo '<a target="_self"  class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>';
              echo '  <div class="relative mb-4 rounded-2xl">';
              echo '    <img';
              echo '    class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"';
              echo '    src="img/PRODUCTOS/' . $Imagen . '" alt="">';
              echo '   <a class="flex justify-center items-center bg-green-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"';
              echo '   onclick="openModal(' . $ProductosID . ',' . $PuntosNecesarios . ')" target="_self" rel="noopener noreferrer">';
              echo '   Canjea por ' . $PuntosNecesarios . '';
              echo '   <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"';
              echo '    xmlns="http://www.w3.org/2000/svg">';
              echo '    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">';
              echo '     </path>';
              echo '   </svg>';
              echo '  </a>';
              echo ' </div>';

              echo ' <h3 class="font-medium text-xl leading-8">';
              echo '   <a class="block relative group-hover:text-red-700 transition-colors duration-200 ">';
              echo '     ' . $Nombre . '';

              echo '   </a>';

              echo '   </h3>';
              echo '  <div class="card-body">';

              echo '   <p> ' . $Descripción . '</p>';

              echo '   </div>';
              echo '  <div>';
              echo '   </div>';
              echo ' </article>';
            }


            ?>









          </div>

        </div>
      </div>
    </div>
  </div>




  <dialog id="my_modal_1" class="modal">
    <div class="modal-box">
      <h3 class="font-bold text-lg">Desea canjear el producto selecionado</h3>


      <p> ¡No te quedes sin tu canje! Completa el proceso ahora.</p>

      <form id="formulario" action="php/canjear.php" method="post">
        <div class="text-center">
          <input type="Hidden" class="form-control" id="DNI" name="DNI" value="<?php echo $_SESSION["UsuariosID"] ?>"
            required>
          <input type="Hidden" class="form-control" id="miInput" name="CODIGO" required>
          <label class="form-control w-full ">
            <div class="label">
              <span class="label-text">Correo</span>
            </div>
            <input type="text" class="input input-bordered w-full " id="correo" name="correo"  value="<?php echo $_SESSION["Email"] ?>" required />

            <div class="label">
              <span class="label-text">Dni</span>
            </div>
            <input type="text" class="input input-bordered w-full " name="DNI"
              value="<?php echo $_SESSION["UsuariosID"] ?>" disabled />


            <div class="label">
              <span class="label-text">Nombre</span>
            </div>
            <input type="text" class="input input-bordered w-full " value="<?php echo $_SESSION["Nombre"] ?>"
              required />





            <div class="label">
              <span class="label-text">Confirmar Contraseña</span>
            </div>
            <input type="password" class="input input-bordered w-full" id="contra" name="contra"  value="" required />

          </label>

          <br>
          <h3>Términos y Condiciones</h3>
          <p>Al canjear este producto, usted acepta los siguientes términos y condiciones:</p>
          <ul>
            <li>El código de canje es válido por un período de 30 días a partir de la fecha de canje.</li>
            <li>El código de canje es válido para un solo uso y no acomulable.</li>
          </ul>
          <br>
          <button type="submit" class="btn bg-secondary">Enviar</button>
          <a href="./inicio.php" class="btn btn-danger" data-dismiss="modal">Cancelar</a>

      </form>
    </div>
    </div>
  </dialog>


  <dialog id="my_modal_2" class="modal">
    <div class="modal-box">
      <h3 class="font-bold text-lg">¡Lo sentimos! No se pudo canjear el beneficio</h3>
      <p class="py-4" id="error">En este momento, no tienes suficientes puntos para canjear este beneficio. Sigue reciclando para acumular más puntos y poder disfrutar de las recompensas disponibles.</p>
      <div class="modal-action">
        <form method="dialog">


  
          <a href="./inicio.php" class="btn btn-danger" data-dismiss="modal">Cancelar</a>

        </form>
      </div>
    </div>
  </dialog>








  <footer class="footer footer-center p-10 text-primary-content">
    <aside>
      <img src="https://perurecicla.net/wp-content/uploads/2024/04/img-logo-blanco.webp#126" width="150px" alt="">
      <p class="font-bold">
        Perú Recicla
      </p>
      <p>Copyright © 2024 - Grupo Innovación</p>
    </aside>

  </footer>




  <dialog id="my_modal_3" class="modal">
    <div class="modal-box text-center item-center">
      <h3 class="font-bold text-lg">Canje Exitoso</h3>
      <p class="py-4">¡Has hecho un gran trabajo al reciclar y ganar puntos! Sigue así para obtener más recompensas.</p>
      <img class="mx-auto" src="img/check.gif" alt="">

      <input type="text" class="input input-bordered input-success w-full text-center" id="CODIGO"  value="" disabled />

      <div class="modal-action">
        <form method="dialog">
          <h3> Al reciclar y canjear puntos, estás demostrando que te preocupas por el medio ambiente y por ti mismo.
            ¡Felicidades por tu éxito doble!</h3>

          <br>
          <a href="./inicio.php" class="btn bg-secondary" data-dismiss="modal">Ver mis Codigos</a>

        </form>
      </div>
    </div>
  </dialog>



  <dialog id="my_modal_4" class="modal">
  <div class="modal-box w-11/12 max-w-5xl">
    <h3 class="text-lg font-bold">lUGARES ESTABLECIDOS</h3>
    <p class="py-4">Estos son puntos de recolección de residuos reciclables administrados por las autoridades locales.</p>
    <div class="modal-action">
<form action="" method="post">
    <select id="municipalitySelect2" name="municipalidad" class="select select-accent w-full max-w" data-show-subtext="true" data-live-search="true">
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
    </select><br></form>

    <div id="municipality-address"></div>

    </div>
    <form method="dialog">
        <!-- if there is a button, it will close the modal -->
        <button class="btn">Cerrar</button>
      </form>
  </div>
</dialog>


<dialog id="my_modal_7" class="modal">
  <div class="modal-box w-11/12 max-w-5xl">
    <h3 class="text-lg font-bold">Mis canjes</h3>
    <p class="py-4">Recuerda que reciclando puedes obtener mas puntos para recibir y canjear descuentos para tu servio del hogar. </p>
   


    <?php

$query = "SELECT productos.Nombre as NombredePrd,cajeados.fecha as Fecha,cajeados.Codigo as Codigo,cajeados.estado as Estado FROM cajeados JOIN productos ON cajeados.ProductoID = productos.ProductosID where cajeados.UsuariosID= $usuarioID";

$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $NombredePrd = $row['NombredePrd'];
    $Fecha = $row['Fecha'];
    $Codigo = $row['Codigo'];
    $Estado = $row['Estado'];
   


    echo '<div class="py-4">';
     echo '<div class="collapse collapse-arrow bg-base-200">';
 echo '<input type="radio" name="my-accordion-2 " />';
  echo ' <div class="collapse-title text-xl font-medium">' . $NombredePrd . '</div>';
  echo ' <div class="collapse-content">';
  echo ' <p> Fecha de Caneja: ' . $Fecha . '</p>';
    echo ' <p> Tu codigo de Caneje es : ' . $Codigo . '</p>';
    echo ' <p> Tu Estado : : ' . $Estado . '</p>';
   echo '</div>  ';
 echo '</div>';
 echo '</div>';
 
}
?>




  
    <form method="dialog">
        <!-- if there is a button, it will close the modal -->
        <button class="btn">Cerrar</button>
      </form>
  </div>
</dialog>



<div class="container">
    <div class="chatbox">
        <div class="chatbox__support">
            <div class="chatbox__header">
                <div class="chatbox__image--header">
                    <img src="./img/bot.png" width="40px" />
                </div>
                <div class="chatbox__content--header">
                    <h4 class="chatbox__heading--header">ReciclaPeru</h4>
                    <p class="chatbox__description--header"> ♻️ Hola , Soy botchi , tu asistente de Recicla Perú 🌍🌱 </p>
                </div>
            </div>
        
            <div  id="chat-container"class="chatbox__messages">

                <div  class="messages__item messages__item--visitor"> 🌳🌳¿En qué puedo ayudarte?😊🌳🌳</div>
                

            </div>
            <div class="chatbox__footer">
                <input type="text"  id="user-input" placeholder="Escribe tu pregunta...">
                <button   onclick="enviarMensaje()" class="chatbox__send--footer send__button">Enviar</button>
            </div>
        </div>
        <div class="chatbox__button">
            <button ><img src="./img/bot.png" width="60px" /></button>
        </div>
    </div>
</div>



  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    function openModal(value, puntos) {
      const modal = document.getElementById('my_modal_1');
      const modalerror = document.getElementById('my_modal_2');

      const targetElement = modal.querySelector('#miInput');

      targetElement.value = value;
      if (puntos <= <?php echo $_SESSION["Puntos"] ?>) {
        modal.showModal();
      } else { modalerror.showModal(); }


    }


    const modalFormulario = document.getElementById('my_modal_1');
    const modalGracias = document.getElementById('my_modal_3');
    const formulario = document.getElementById('formulario');
    const modalerror = document.getElementById('my_modal_2');

    formulario.addEventListener('submit', function (event) {
      event.preventDefault();

      const dni = document.getElementById('DNI').value;
      const codigo = document.getElementById('miInput').value;
      const correo = document.getElementById('correo').value;
      const contra = document.getElementById('contra').value;

      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'php/canjear.php');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function () {
        if (xhr.status === 200) {
          const resultado = JSON.parse(xhr.responseText);
          if(resultado.mensaje !== "Contraseña incorrecta" && resultado.mensaje !== "Correo no encontrado") {
            const inputMensaje = document.getElementById('CODIGO');
          inputMensaje.value = resultado.mensaje;
          modalGracias.showModal();
          }else{
            const elementoMensaje  = document.getElementById('error');
            elementoMensaje.textContent = resultado.mensaje;
            modalerror.showModal();}
          
        } else {
          console.error('Error processing the form:', xhr.statusText);
        }
      };
      xhr.send('dni=' + dni + '&codigo=' + codigo + '&correo=' + correo + '&contra=' + contra);

      modalFormulario.style.display = 'none';
    });

    const cerrarModales = document.querySelectorAll('.cerrar');
    cerrarModales.forEach(cerrarModal => {
      cerrarModal.addEventListener('click', () => {
        const modal = cerrarModal.parentNode.parentNode;
        modal.style.display = 'none';
      });
    });
  </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#municipalitySelect2').change(function() {
            var municipalityId2 = $(this).val();
            $.ajax({
                url: 'admin/get_residues.php',
                type: 'POST',
                data: {municipalityId2: municipalityId2},
                success: function(response) {
                  $('#municipality-address').html(response);
                }
            });
        });
    });
</script>

<script src="./app.js"></script>
<script>
    function enviarMensaje() {
    var userInput = document.getElementById('user-input').value.trim();

    if (userInput !== '') {
        var chatContainer = document.getElementById('chat-container');
        var userMessage = '<div class="messages__item messages__item--operator">' + userInput + '</div>';
        chatContainer.innerHTML += userMessage;

        // Hacer la solicitud AJAX al archivo chatbot.php
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'php/chatbot.php?msg=' + userInput, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var botMessage = '<div class="messages__item messages__item--visitor">' + xhr.responseText + '</div>';
                chatContainer.innerHTML += botMessage;
                chatContainer.scrollTop = chatContainer.scrollHeight; // Desplazar hacia abajo automáticamente
            }
        };
        xhr.send();
    }

    document.getElementById('user-input').value = ''; // Limpiar el input después de enviar
}
</script>
</body>

</html>