
<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
  <title>
    SealyDesk - Sistema de Atendimento de Assistências e Vistorias
  </title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!--     Fonts and icons     -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="{{asset('https://kit.fontawesome.com/42d5adcbca.js')}}" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="asset('css/custom.css')}}">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('css/odyssey.css')}}" rel="stylesheet" />
  <!-- Anti-flicker snippet (recommended)  -->
</head>


<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="{{asset('img/logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">SealyDesk</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a href="{{route('dashboard')}}" class="nav-link  " aria-controls="dashboardsExamples" >
            <i class="fa fa-tachometer" aria-hidden="true"></i>
            
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('chamados')}}" class="nav-link " >
            <i class="fa fa-ticket" aria-hidden="true"></i>
            
            <span class="nav-link-text ms-1">Chamados</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('rma')}}" class="nav-link " >
            <i class="fa fa-truck" aria-hidden="true"></i>
            
            <span class="nav-link-text ms-1">RMA</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{route('pendencias')}}" class="nav-link active" >
            <i class="fa fa-exclamation-triangle " aria-hidden="true"></i>
            
            <span class="nav-link-text ms-1">Pendências</span>
          </a>
        </li>
        <!--

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#relatorios" class="nav-link " aria-controls="componentsExamples" role="button" aria-expanded="false" >
            <i class="fa fa-file-text" aria-hidden="true"></i>
            
            <span class="nav-link-text ms-1">Relatórios</span>
          </a>
        </li>
        <div class="collapse " id="relatorios">
          <ul class="nav ms-4 ps-3">
            <li class="nav-item ">
              <a class="nav-link " href="#">
                <i class="fa fa-ticket"></i>
                <span class="sidenav-normal"> Chamados </span>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link " href="#">
                <i class="fa fa-truck"></i>
                <span class="sidenav-normal"> RMAs </span>
              </a>
            </li>
          </ul>
        </div>
        -->
<!--
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#administracao" class="nav-link " aria-controls="componentsExamples" role="button" aria-expanded="false" >
            <i class="fa fa-desktop" aria-hidden="true"></i>
            
            <span class="nav-link-text ms-1">Administração</span>
          </a>
        </li>
        <div class="collapse " id="administracao">
          <ul class="nav ms-4 ps-3">
            <li class="nav-item ">
              <a class="nav-link " href="#">
                <i class="fa fa-bed"></i>
                <span class="sidenav-normal">Cadastro de Produtos</span>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link " href="#">
                <i class="fa fa-user"></i>
                <span class="sidenav-normal">Cadastro de Usuários</span>
              </a>
            </li>
          
            <li class="nav-item ">
              <a class="nav-link " href="#">
                <i class="fa fa-users"></i>
                <span class="sidenav-normal">Cadastro de Funcionários</span>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link " href="#">
                <i class="fa fa-store"></i>
                <span class="sidenav-normal">Cadastro de Lojas</span>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link " href="#">
                <i class="fa fa-database"></i>
                <span class="sidenav-normal">Backup</span>
              </a>
            </li>
          -->
          </ul>
        </div>

       </ul>
    </div>

    
  
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
         
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pendências</li>
          </ol>
          
        </nav>
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
          <a href="javascript:;" class="nav-link text-body p-0">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!--
            <li class="nav-item d-flex align-items-center">
              <a href="#" class="nav-link text-body font-weight-bold px-0" target="_blank">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Vinicius</span>
              </a>
            </li>
            -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
             
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="#" class="nav-link text-body p-0" >
                <i class="fa fa-sign-out cursor-pointer"></i>Sair
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Assistências Pendentes - Bedstore Park Shopping</h5>
              <p class="text-sm mb-0">
                Assistências que ainda não foram concluídas
              </p>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produto</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data da Solicitação</th>
                  
                  </tr>
                </thead>
                @foreach ($bedpark as $bpark)
               <tbody>
                 <tr>
                 <td class="text-sm font-weight-normal">{{$bpark->id}}</td>
                 <td class="text-sm font-weight-normal">{{$bpark->nome}}</td>
                 <td class="text-sm font-weight-normal">{{$bpark->produto}}</td>
                 <td class="text-sm font-weight-normal">{{$bpark->status}}</td>
                 <td class="text-sm font-weight-normal">{{\Carbon\Carbon::parse($bpark->dataabertura)->format('d/m/Y')}}</td>

                </tr>
               </tbody>
               @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Assistências Pendentes - Bedstore Madureira Shopping</h5>
              <p class="text-sm mb-0">
                Assistências que ainda não foram concluídas
              </p>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produto</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data da Solicitação</th>
                  
                  </tr>
                </thead>
                @foreach ($bedmadu as $bmadu)
               <tbody>
                 <tr>
                 <td class="text-sm font-weight-normal">{{$bmadu->id}}</td>
                 <td class="text-sm font-weight-normal">{{$bmadu->nome}}</td>
                 <td class="text-sm font-weight-normal">{{$bmadu->produto}}</td>
                 <td class="text-sm font-weight-normal">{{$bmadu->status}}/td>
                 <td class="text-sm font-weight-normal">{{\Carbon\Carbon::parse($bmadu->dataabertura)->format('d/m/Y')}}</td>

                </tr>
               </tbody>
               @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Assistências Pendentes - Sealy Park Shopping</h5>
              <p class="text-sm mb-0">
                Assistências que ainda não foram concluídas
              </p>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produto</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data da Solicitação</th>
                  
                  </tr>
                </thead>
                @foreach ($sealypark as $spark)
               <tbody>
                 <tr>
                 <td class="text-sm font-weight-normal">{{$spark->id}}</td>
                 <td class="text-sm font-weight-normal">{{$spark->nome}}</td>
                 <td class="text-sm font-weight-normal">{{$spark->produto}}</td>
                 <td class="text-sm font-weight-normal">{{$spark->status}}</td>
                 <td class="text-sm font-weight-normal">{{\Carbon\Carbon::parse($spark->dataabertura)->format('d/m/Y')}}</td>

                </tr>
               </tbody>
               @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Assistências Pendentes - Sealy Américas Shopping</h5>
              <p class="text-sm mb-0">
                Assistências que ainda não foram concluídas
              </p>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produto</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data da Solicitação</th>
                  
                  </tr>
                </thead>
                @foreach ($sealyame as $same)
               <tbody>
                 <tr>
                 <td class="text-sm font-weight-normal">{{$same->id}}</td>
                 <td class="text-sm font-weight-normal">{{$same->nome}}</td>
                 <td class="text-sm font-weight-normal">{{$same->produto}}</td>
                 <td class="text-sm font-weight-normal">{{$same->status}}</td>
                 <td class="text-sm font-weight-normal">{{\Carbon\Carbon::parse($same->dataabertura)->format('d/m/Y')}}</td>

                </tr>
               </tbody>
               @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Desenvolvido com <i class="fa fa-heart"></i> por
                <a href="#" class="font-weight-bold" target="_blank">Odyssey</a>
                
              </div>
            </div>
          
          </div>
        </div>
      </footer>
    </div>
  </main>
   <!--   Core JS Files   -->
   <script src="{{asset('js/core/popper.min.js')}}"></script>
  <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>
  <!-- Kanban scripts -->
  <script src="{{asset('js/plugins/dragula/dragula.min.js')}}"></script>
  <script src="{{asset('js/plugins/jkanban/jkanban.js')}}"></script>
  <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
  <script src="{{asset('js/plugins/threejs.js')}}"></script>
  <script src="{{asset('js/plugins/orbit-controls.js')}}"></script>
  <script src="{{asset('js/plugins/datatables.js')}}"></script>
  <!-- Github buttons -->
  <script async defer src="{{asset('https://buttons.github.io/buttons.js')}}"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/odyssey.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>