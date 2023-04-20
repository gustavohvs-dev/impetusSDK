<?php 
  include_once "app/components/Core.php";
  use app\components\Core;
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="light">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Impetus - Foto</title>

    <link href="app/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/vendor/fontAwesome/css/all.min.css" rel="stylesheet">
    <link href="app/vendor/fontAwesome/css/solid.min.css" rel="stylesheet">
    <link href="app/vendor/fontAwesome/css/brands.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="app/public/css/impetusLayout.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="app/public/assets/logo.png" type="image/x-icon">
     
  </head>
  <body>

    <?php Core::navbar();?>

    <!--Content-->
    <div class="container-fluid">
      <div class="row">
        
        <?php Core::sidebar();?>

        <!--Main content-->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content-padding">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Foto</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span data-feather="user" class="align-text-bottom"></span>Ação
              </button>
            </div>
          </div>

          <button id="start-camera">Start Camera</button>
          <video id="video" width="320" height="240" autoplay></video>
          <button id="click-photo">Click Photo</button>
          <canvas id="canvas" width="320" height="240"></canvas>

        </main>
      </div>
    </div>

    <!--Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ação</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Esse é um modal de exemplo
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Prosseguir</button>
          </div>
        </div>
      </div>
    </div>

    <?php Core::logoutModal();?>

    <?php Core::notifications();?>

    <!-- Scripts -->
    <script src="app/vendor/jquery/jquery@3.6.4.min.js"></script>
    <script src="app/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="app/vendor/popperJs/popper@2.11.7.min.js"></script>

    <script>
      let camera_button = document.querySelector("#start-camera");
      let video = document.querySelector("#video");
      let click_button = document.querySelector("#click-photo");
      let canvas = document.querySelector("#canvas");

      camera_button.addEventListener('click', async function() {
          let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
        video.srcObject = stream;
      });

      click_button.addEventListener('click', function() {
          canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
          let image_data_url = canvas.toDataURL('image/jpeg');

          // data url of the image
          console.log(image_data_url);
      });
    </script>

  </body>
</html>
