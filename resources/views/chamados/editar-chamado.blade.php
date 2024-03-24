
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
          <a href="{{route('dashboard')}}" class="nav-link " aria-controls="dashboardsExamples" >
            <i class="fa fa-tachometer" aria-hidden="true"></i>
            
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('chamados')}}" class="nav-link active" >
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
          <a href="{{route('pendencias')}}" class="nav-link " >
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Editar Chamado</li>
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
      <div class="row">
        <div class="col-12">
          <div class="multisteps-form mb-5">
            <!--progress bar-->
            <div class="row">
              <div class="col-12 col-lg-8 mx-auto my-5">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                    
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Address"></button>
                  <button class="multisteps-form__progress-btn" type="button" title="Socials"></button>
                  <button class="multisteps-form__progress-btn" type="button" title="Profile"></button>
                </div>
              </div>
            </div>
            <!--form panels-->
            <div class="row">
              <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form mb-8" method="post" action="{{route('atualizar.chamados', $id)}}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="put">
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Cliente</label>
                          <input class="multisteps-form__input form-control" type="text" value="{{$chamado->nome}}" name="nome"/>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Número do Pedido</label>
                          <input class="multisteps-form__input form-control" type="text" value="{{$chamado->pedido}}" name="pedido" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                        <label >Loja</label>
                             <select class="form-control" name="loja" >
                              <option value="Bedstore Park Shopping" @if($chamado->loja == 'Bedstore Park Shopping') selected="selected" @endif >Bedstore Park Shopping</option>
                              <option value="Bedstore Madureira Shopping" @if($chamado->loja == 'Bedstore Madureira Shopping') selected="selected" @endif>Bedstore Madureira Shopping</option>
                              <option value="Sealy Park Shopping" @if($chamado->loja == 'Sealy Park Shopping') selected="selected" @endif>Sealy Park Shopping</option>
                              <option value="Sealy Américas Shopping" @if($chamado->loja == 'Sealy Américas Shopping') selected="selected" @endif>Sealy Américas Shopping</option>
                             </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label >Categoria</label>
                             <select class="form-control" name="categoria" >
                              <option value="Colchão" @if($chamado->categoria =='Colchão') selected="selected" @endif>Colchão</option>
                              <option value="Baú" @if($chamado->categoria =='Baú') selected="selected" @endif>Baú</option>
                              <option value="Box" @if($chamado->categoria =='Box') selected="selected" @endif>Box</option>
                              <option value="Cabeceira" @if($chamado->categoria =='Cabeceira') selected="selected" @endif>Cabeceira</option>
                              <option value="Recamier" @if($chamado->categoria =='Recamier') selected="selected" @endif>Recamier</option>
                              <option value="Bicama" @if($chamado->categoria =='Bicama') selected="selected" @endif>Bicama</option>
                             </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Produto</label>
                          <input class="multisteps-form__input form-control" type="text" value="{{$chamado->produto}}" />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Data da Compra</label>
                          <input class="multisteps-form__input form-control" type="date"  value="{{$chamado->datacompra}}"/>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Próximo">Próx</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <div class="multisteps-form__content">
                      <div class="row mt-3 ">
                        <div class="col-12 col-sm-6">
                          <label>Data da Solicitação</label>
                          <input class="multisteps-form__input form-control" type="date" value="{{$chamado->dataabertura}}"/>
                        </div>
                     
                        <div class="col-12 col-sm-6">
                          <label>Data da Vistoria</label>
                          <input class="multisteps-form__input form-control" type="date"  value="{{$chamado->datavistoria}}"/>
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-12">
                          <label>SLA</label>
                          <select class="form-control" name="sla" >
                              <option value="Crítica" @if($chamado->sla == 'Crítica') selected="selected" @endif>Crítica</option>
                              <option value="Muita Alta" @if($chamado->sla == 'Muita Alta') selected="selected" @endif>Muita Alta</option>
                              <option value="Alta" @if($chamado->sla == 'Alta') selected="selected" @endif>Alta</option>
                              <option value="Normal"@if($chamado->sla == 'Normal') selected="selected" @endif>Normal</option>
                             </select>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Anterior">Ant</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Próximo">Próx</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Observação</h5>
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col-12">
                          <textarea class ="multisteps-form__textarea form-control" name="observacao"  cols="30" rows="10">{{$chamado->ocorrencia}}</textarea>
                        </div>
                      
                      </div>
                      <div class="row">
                        <div class="button-row d-flex mt-4 col-12">
                          <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Anterior">Ant</button>
                          <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Próximo">Próx</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                    <div class="multisteps-form__content mt-3">
                      <div class="row">
                      <div class="col-12 mt-3">
                          <label>Parecer Técnico</label>
                          <textarea class="multisteps-form__textarea form-control" value="{{$chamado->parecer}}" rows="5" ></textarea>
                        </div>
                        <div class="row mt-3 ">
                        <div class="col-12 col-sm-6">
                          <label>Resolução</label>
                          <select class="form-control" name="resolucao" >
                              <option value="Trocar por mesmo produto" @if ($chamado->resolucao == 'Trocar por mesmo produto') selected="selected" @endif>Trocar por mesmo produto</option>
                              <option value="Trocar por produto diferente" @if ($chamado->resolucao == 'Trocar por produto diferente') selected="selected" @endif>Trocar por produto diferente</option>
                              <option value="Garantia com fabricante" @if ($chamado->resolucao == 'Garantia com fabricante') selected="selected" @endif>Garantia com fabricante</option>
                              <option value="Nada a fazer" @if ($chamado->resolucao == 'Nada a fazer') selected="selected" @endif>Nada a fazer</option>
                             </select>
                        </div>
                     
                        <div class="col-12 col-sm-6">
                          <label>Status</label>
                          <select class="form-control" name="status" >
                              <option value="Aberto" @if ($chamado->status == 'Aberto') selected="selected" @endif>Aberto</option>
                              <option value="Em Atendimento" @if ($chamado->status == 'Em Atendimento') selected="selected" @endif>Em Atendimento</option>
                              <option value="Arguardando compra" @if ($chamado->status == 'Aguardando compra') selected="selected" @endif>Arguardando compra</option>
                              <option value="Aguardando troca" @if ($chamado->status == 'Aguardando troca') selected="selected" @endif>Aguardando troca</option>
                              <option value="Concluído" @if ($chamado->status == 'Concluído') selected="selected" @endif>Concluído</option>
                             </select>
                        </div>
                      </div>
                      
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Anterior">Ant</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Salvar">Salvar</button>
                      </div>
                    </div>
                  </div>
                </form>
         
    </div>
            </div>  
           
            @if (Session::has('success'))
                 <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @elseif (Session::has('warnning'))
                    <div class="alert alert-danger">{{ Session::get('warnning')}}</div>
            @endif
    

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
  <script src="{{asset('js/plugins/multistep-form.js')}}"></script>
  <script src="{{asset('js/plugins/choices.min.js')}}"></script>
</body>

</html>