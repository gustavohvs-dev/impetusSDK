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

    <title>Impetus - Chart.js</title>

    <link href="app/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/vendor/fontAwesome/css/all.min.css" rel="stylesheet">
    <link href="app/vendor/fontAwesome/css/solid.min.css" rel="stylesheet">
    <link href="app/vendor/fontAwesome/css/brands.min.css" rel="stylesheet">
    <link href="app/vendor/jvectorMaps/main.css" rel="stylesheet">
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
            <h1 class="h2">Chart.js</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-bars"></i> Filtros
              </button>
            </div>
          </div>

          <div class="row pt-2 pb-4 mb-3 border-bottom">
            <h4>Filtros</h3>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <label class="mt-2">Tipo</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <label class="mt-2">Tipo 2</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <label class="mt-2">Data inicial</label>
              <input class="form-control "type="date" id="">
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <label class="mt-2">Data final</label>
              <input class="form-control "type="date" id="">
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="card mb-3">
                <div class="card-header">Primary card title</div>
                <div class="card-body">
                  <h1 class="card-title text-success">12 <i class="fa-solid fa-arrow-up"></i></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="card mb-3">
                <div class="card-header">Primary card title</div>
                <div class="card-body">
                  <h1 class="card-title text-danger">12 <i class="fa-solid fa-arrow-down"></i></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="card mb-3">
                <div class="card-header">Primary card title</div>
                <div class="card-body">
                  <h1 class="card-title text-danger">12 <i class="fa-solid fa-arrow-down"></i></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="card mb-3">
                <div class="card-header">Primary card title</div>
                <div class="card-body">
                  <h1 class="card-title">12</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <canvas class="my-4 w-100" id="lineChart"></canvas>
            </div>
            <div class="col-lg-6 col-sm-12">
              <canvas class="my-4 w-100" id="barChart"></canvas>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="my-4 w-100" id="brazil-map"></div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="row">
                <div class="col-lg-6 col-sm-12">
                  <div class="card mb-3">
                    <div class="card-header">Hovered Region</div>
                    <div class="card-body">
                      <h1 class="card-title" id="hovered-region"><span>-</span></h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <div class="card mb-3">
                    <div class="card-header">Clicked Region</div>
                    <div class="card-body">
                      <h1 class="card-title" id="clicked-region"><span>-</span></h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <div class="card mb-3">
                    <div class="card-header">Primary card title</div>
                    <div class="card-body">
                      <h1 class="card-title">$19283,00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <div class="card mb-3">
                    <div class="card-header">Primary card title</div>
                    <div class="card-body">
                      <h1 class="card-title">1248</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </main>
      </div>
    </div>

    <?php Core::logoutModal();?>

    <?php Core::notifications();?>

    <!-- Scripts -->
    <script src="app/vendor/jquery/jquery@3.6.4.min.js"></script>
    <script src="app/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="app/vendor/popperJs/popper@2.11.7.min.js"></script>
    <script src="app/vendor/chartJs/chart@4.2.1.umd.min.js"></script>
    <script src="app/vendor/jvectorMaps/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="app/vendor/jvectorMaps/brazil.js"></script>
    <script src="app/public/js/charts/lineChart.js"></script>
    <script src="app/public/js/charts/barChart.js"></script>
    <script src="app/public/js/jvectorMaps/testMap.js"></script>

  </body>
</html>
