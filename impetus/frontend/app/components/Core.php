<?php

namespace app\components;

class Core
{
    static public function navbar()
    {
        echo '
        <!--Navbar-->
        <nav class="navbar fixed-top bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index">
                    <img src="app/public/assets/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    Impetus
                </a>
                <div>
                    <button class="btn btn-primary position-relative d-md-none d-inline-block me-2"  type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <button type="button" class="btn btn-primary position-relative d-inline-block me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#notificationsOffcanvasExample" aria-controls="notificationsOffcanvasExample">
                        <i class="fa-solid fa-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4</span>
                    </button>
                    <div class="dropdown position-relative d-inline-block me-2">
                        <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end mt-4">
                        <li><a class="dropdown-item" href="#"><span data-feather="user" class="mb-1"></span> Perfil</a></li>
                        <li><a class="dropdown-item" href="#"><span data-feather="book" class="mb-1"></span> Tutorial</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"><span data-feather="log-out" class="mb-1"></span> Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        ';
    }

    static public function sidebar()
    {
        echo '
        <!--Sidebar-->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
          <div class="position-sticky pt-3 sidebar-sticky mt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <button class="btn nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#submenu" aria-expanded="false">
                  <i class="fa-solid fa-chart-simple"></i>
                  Chart.js
                </button>
                <div class="collapse" id="submenu">
                  <ul class="nav flex-column bg-sidebar-submenu">
                    <li class="nav-item">
                      <a class="nav-link" href="chartjs">Submenu Item 1</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="chartjs">Submenu Item 2</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fullcalendar">
                  <i class="fa-solid fa-calendar"></i>
                  Fullcalendar
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="foto">
                  <i class="fa-solid fa-camera"></i>
                  Foto
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="geolocalizacao">
                  <i class="fa-solid fa-compass"></i>
                  Geolocalização
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="datatables">
                  <i class="fa-solid fa-table"></i>
                  Datatables
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="videojs">
                  <i class="fa-solid fa-film"></i>
                  Video.js
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sweetalert2">
                  <i class="fa-solid fa-check"></i>
                  SweetAlert2
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
              <span>Relatórios</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <i class="fa-solid fa-plus"></i>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-solid fa-file"></i>
                  Relatório 1
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-solid fa-file"></i>
                  Relatório 2
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-solid fa-file"></i>
                  Relatório 3
                </a>
              </li>
            </ul>
          </div>
        </nav>
        ';
    }

    static public function logoutModal()
    {
        echo '
        <!--LogoutModal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="logoutModalLabel">Você deseja sair?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Clique no botão "sair" para realizar o log-out do sistema.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Sair</button>
            </div>
            </div>
        </div>
        </div>
        ';
    }

    static public function notifications()
    {
        echo '
        <!--Notifications-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="notificationsOffcanvasExample" aria-labelledby="notificationsOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="notificationsOffcanvasLabel">Notificações</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex flex-column flex-md-row gap-4 align-items-center justify-content-center">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">List group item heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">now</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Another title here</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph that goes a little longer so it wraps to a new line.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">3d</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                    <h6 class="mb-0">Third heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                    </div>
                    <small class="opacity-50 text-nowrap">1w</small>
                </div>
                </a>
            </div>
            </div>
        </div>
        </div>
        ';
    }
}