<?php

//require("controllers/autentication.php");

require("model/persistency/db.php");

$sql = "SELECT nome FROM usuario WHERE codigo=" . $_SESSION['usuario'];
$resultado = banco($sql);
$resultado = pg_fetch_assoc($resultado);
$usuario = $resultado['nome'];

$sql = "SELECT * FROM usuario  WHERE codigo_usuario=" . $_SESSION['usuario'];
$resultado = banco($sql);
?>

<!DOCTYPE html>
<html lang="pt-br" class="light-theme">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />
  <title>SVP Gestão - Sistema de vendas e produção</title>
</head>
<body>
  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">        
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Pesquise aqui...">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                  <a class="nav-link" href="#">
                    <div class="">
                      <i class="bi bi-search"></i>
                    </div>
                  </a>
              </li>
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                    <img src="https://via.placeholder.com/110X110" class="user-img" alt="">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="https://via.placeholder.com/110X110" alt="" class="rounded-circle" width="54" height="54">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name"><?= $usuario ?></h6>
                            <small class="mb-0 dropdown-user-designation text-secondary"><?= $empresa ?></small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" href="pages-user-profile.html">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-person-fill"></i></div>
                           <div class="ms-3"><span>Meu perfil</span></div>
                         </div>
                       </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-lock-fill"></i></div>
                           <div class="ms-3"><span>Sair</span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="projects">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                   <div class="row row-cols-3 gx-2">
                      <div class="col">
                        <a href="ecommerce-orders.html">
                         <div class="apps p-2 radius-10 text-center">
                            <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                              <i class="bi bi-basket2-fill"></i>
                            </div>
                            <p class="mb-0 apps-name">Orders</p>
                         </div>
                        </a>
                      </div>
                      <div class="col">
                        <a href="javascript:;">
                        <div class="apps p-2 radius-10 text-center">
                           <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                            <i class="bi bi-people-fill"></i>
                           </div>
                           <p class="mb-0 apps-name">Users</p>
                        </div>
                      </a>
                     </div>
                     <div class="col">
                      <a href="ecommerce-products-grid.html">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                          <i class="bi bi-trophy-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Products</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="component-media-object.html">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                          <i class="bi bi-collection-play-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Media</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="pages-user-profile.html">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                          <i class="bi bi-person-circle"></i>
                         </div>
                         <p class="mb-0 apps-name">Account</p>
                       </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="javascript:;">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                          <i class="bi bi-file-earmark-text-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Docs</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="ecommerce-orders-detail.html">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                          <i class="bi bi-credit-card-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Payment</p>
                      </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="javascript:;">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                          <i class="bi bi-calendar-check-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Events</p>
                      </div>
                    </a>
                    </div>
                    <div class="col">
                      <a href="javascript:;">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                          <i class="bi bi-book-half"></i>
                         </div>
                         <p class="mb-0 apps-name">Story</p>
                        </div>
                      </a>
                    </div>
                   </div><!--end row-->
                </div>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="notifications">
                    <i class="bi bi-bell-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                  <div class="p-2 border-bottom m-2">
                      <h5 class="h5 mb-0">Notificações</h5>
                  </div>
                  <div class="header-notifications-list p-2">
                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                           <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                           <div class="ms-3 flex-grow-1">
                             <h6 class="mb-0 dropdown-msg-user">Notificação <span class="msg-time float-end text-secondary">1 m</span></h6>
                             <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sua notificação</small>
                           </div>
                        </div>
                      </a>
                 </div>
                 <div class="p-2">
                   <div><hr class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                       <div class="text-center">Ver todas as notificações</div>
                     </a>
                 </div>
                </div>
              </li>
              <li><a href="index-escuro.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 30" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></a></li>
              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">SVP Gestão</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="javascript:;" class="">
                <div class="parent-icon"><i class="lni lni-home"></i>
                </div>
                <div class="menu-title">Painel de controle</div>
              </a>
            </li>
            
            <li class="menu-label">Vendas</li>
            <li>
              <a href="novavenda.html" class="">
                <div class="parent-icon"><i class="lni lni-cart"></i>
                </div>
                <div class="menu-title">Nova venda</div>
              </a>
            </li>
            <li>
              <a href="minhasvendas.html" class="">
                <div class="parent-icon"><i class="fadeIn animated bx bx-spreadsheet"></i>
                </div>
                <div class="menu-title">Minhas vendas</div>
              </a>
            </li>
            <li class="menu-label">Cadastros</li>
            <li>
              <a href="javascript:;" class="">
                <div class="parent-icon"><i class="fadeIn animated bx bx-cube"></i>
                </div>
                <div class="menu-title">Produtos</div>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="">
                <div class="parent-icon"><i class="lni lni-delivery"></i>
                </div>
                <div class="menu-title">Fornecedores</div>
              </a>
            </li>
            <li class="menu-label">Financeiro</li>
            <li>
              <a href="javascript:;" class="">
                <div class="parent-icon"><i class="lni lni-invest-monitor"></i>
                </div>
                <div class="menu-title">Comissões</div>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="">
                <div class="parent-icon"><i class="lni lni-coin"></i>
                </div>
                <div class="menu-title">Pagamentos</div>
              </a>
            </li>
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->

       <!--start content-->
          <main class="page-content">
              
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
              <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body p-2">
                     <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                      <div class="w-50 p-3 bg-light-primary">
                        <p>PEÇAS VENDIDAS NA SEMANA</p>
                        <h4 class="text-primary">0</h4>
                      </div>
                      <div class="w-50 bg-primary p-3">
                         <p class="mb-3 text-white">+ 0% <i class="bi bi-arrow-up"></i></p>
                         <div id="chart1"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body p-2">
                     <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                      <div class="w-50 p-3 bg-light-primary">
                        <p>PEDIDOS FECHADOS NA SEMANA</p>
                        <h4 class="text-primary">0</h4>
                      </div>
                      <div class="w-50 bg-primary p-3">
                         <p class="mb-3 text-white">- 0% <i class="bi bi-arrow-down"></i></p>
                         <div id="chart2"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body p-2">
                     <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                      <div class="w-50 p-3 bg-light-primary">
                        <p>VALOR TOTAL EM VENDAS NA SEMANA</p>
                        <h4 class="text-primary">R$ 0,00</h4>
                      </div>
                      <div class="w-50 bg-primary p-3">
                         <p class="mb-3 text-white">+ 0% <i class="bi bi-arrow-up"></i></p>
                         <div id="chart3"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body p-2">
                     <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                      <div class="w-50 p-3 bg-light-primary">
                        <p>VALOR DA COMISSÃO DE VENDAS NA SEMANA</p>
                        <h4 class="text-primary">R$ 0,00</h4>
                      </div>
                      <div class="w-50 bg-primary p-3">
                         <p class="mb-3 text-white">+ 0% <i class="bi bi-arrow-up"></i></p>
                         <div id="chart4"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
            </div><!--end row-->


            <div class="row">
              <div class="col-12 col-lg-6 col-xl-6 col-xxl-4 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                           <h6 class="mb-0">MAIS VENDIDOS</h6>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 mt-3 g-3">
                          <div class="col">
                            <div class="by-device-container">
                              <canvas id="chart5"></canvas>
                            </div>
                          </div>
                          <div class="col">
                            <div class="">
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-between border-0">
                                  <i class="bi bi-tablet-landscape-fill me-2 text-primary"></i> <span>PRODUTO 01 - </span> <span>0%</span>
                                </li>
                              </ul>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-6 col-xxl-4 d-flex">
                <div class="card radius-10 w-100 overflow-hidden">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0">VENDAS NO MÊS</h6>
                     </div>
                    <div id="chart7"></div>
                    <div class="d-flex align-items-center gap-5 justify-content-center mt-4 p-3 bg-light radius-10 border"> 
                      <div class="text-center">
                        <h2 class="mb-3 text-primary">R$ 0</h2>
                        <p>TOTAL <br> EM VALOR NO MÊS</p>
                      </div>
                      <div class="border-end sepration"></div>
                      <div class="text-center">
                       <h2 class="mb-3">0</h2>
                       <p>TOTAL <br> DE PRODUTOS</p>
                     </div>
                   </div>
                  </div>
                </div>
              </div>              
            </div><!--end row-->

            <div class="row">
              <div class="col-12 col-lg-12 col-xl-12 d-flex">
                <div class="card radius-10 w-100">
                  <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                      <div class="col">
                        <h5 class="mb-0">ULTIMOS PEDIDOS</h5>
                      </div>
                      <div class="col">
                        <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                        </div>
                      </div>
                     </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table align-middle mb-0">
                        <thead class="table-light">
                          <tr>
                            <th>CLIENTE</th>
                            <th>TELEFONE</th>
                            <th>CIDADE</th>
                            <th>EXCURSÃO</th>
                            <th>SETOR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>NOME DO CLIENTE</td>
                            <td>(00) 00000-0000</td>
                            <td>CIDADE DO CLIENTE</td>
                            <td>EXCURSÃO DO CLIENTE</td>
                            <td>SETOR DA EXCURSÃO</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--end row-->


          </main>
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->
  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
  <script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
  <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <!--app-->
  <script src="assets/js/app.js"></script>
  <script src="assets/js/index.js"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>


</body>

</html>