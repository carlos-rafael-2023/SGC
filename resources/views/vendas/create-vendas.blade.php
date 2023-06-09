<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vendor/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="vendor/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vendor/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vendor/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="vendor/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<style>
    #marcas {
        display: none;
    }
</style>
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contato</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <center><b><span style="color:#fff" class="brand-text font-weight-light">SGC</span></b></center>
      <h6 class="brand-text font-weight-light">Sistema de gerenciamento comercial</h6>
    </a>

    <!-- Sidebar -->
    @foreach($usuarios as $usuario)
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
        </div>
        <div class="info">
        <span style="color:#fff" class="brand-text font-weight-light">Usuario: {{$usuario->name}}</span>
          <a href="#" class="d-block"></a>
        </div>
      </div>
      @endforeach
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @include('layouts.menu')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Painel Administrativo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Lançar venda</h3>
              </div>
            
              <form class="form-horizontal" action="insert_vendas" method="Post">
                <div class="card-body">

                <div class="form-group row">
                    <label for="tipo_venda" class="col-sm-2 col-form-label" >Pagamento<span style="color:red">*</span></label>
                    <div class="col-sm-10">
                    <select class="form-control" id="tipo_vendas" name="tipo_venda">
                    <option value="">Selecione a forma de pagamento</option>
                    <option value="Cartão de Debito">Cartão de Debito</option>
                    <option value="credito">Cartão de Crédito</option>
                    <option value="dinheiro">Dinheiro</option>
                    <option value="pix">Pix</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="codigo_barra" class="col-sm-2 col-form-label">Codigo de Barras</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="codigo_barras" name="codigo_barra" placeholder="codigo_barras">
                    <select class="form-control"  id="codigo_barras" name="codigo_barraxx">
                        <option value="">Selecione um produto</option>
                        @foreach ($dados as $produto)
                          <option value="{{ $produto->codigo_barras }}">{{ $produto->codigo_barras }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  @csrf
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" >Produto</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="produto" name="produto">
                    <option value="primeiroProduto">Aguarde...</option>
                </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" >Marca</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="marca" name="marca">
                    <option value="">Aguarde...</option>
                </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" >Preço</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="preco" name="preco" oninput="calcularTotal()">
                    <option value="">Aguarde...</option>
                </select>
                    </div>
                  </div>
                   
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Quantidade</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control"  id="quantidade" name="quantidade" onchange="calcularTotal()" placeholder="Quantidade"required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Total</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="total_venda" name="total" placeholder="Total">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label style="font-size:50px; color:#008110" for="inputPassword3" class="col-sm-2 col-form-label">Total</label>
                    <div class="col-sm-10" >
                    <span style="font-size:50px; color:green" id ="total" name="total"></span>
                    </div>
                  </div>
                  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Salvar</button>
                    <a href="produtos" class="btn btn-default">Voltar</a>
                  </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer -->
              </form>
            </div>
  
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="vendor/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="vendor/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="vendor/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="vendor/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="vendor/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="vendor/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="vendor/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="vendor/plugins/moment/moment.min.js"></script>
<script src="vendor/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="vendor/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="vendor/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vendor/adminlte/dist/js/pages/dashboard.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  

  //Calcular venda
  function calcularTotal() {
  var quantidade = parseFloat(document.getElementById('quantidade').value);
  var preco = parseFloat(document.getElementById('preco').value);
  var total = quantidade * preco;
  document.getElementById('total').innerHTML = total.toFixed(2);
}

</script>

<script>
		// atualiza o valor do input quando o valor do span é atualizado
		document.getElementById("total").addEventListener("DOMSubtreeModified", function() {
			var spanValue = document.getElementById("total").innerHTML;
			document.getElementById("total_venda").value = spanValue;
		});
	</script>


<script>
        // Obtém o elemento <select> com id "produto"
        var produtoSelect = document.getElementById("codigo_barras");

        // Adiciona um evento "change" no elemento <select>
        produtoSelect.addEventListener("change", function() {
            // Obtém o valor selecionado do elemento <select>
            var produtoSelecionado = produtoSelect.value;

            // Faz uma chamada AJAX para buscar as marcas correspondentes ao produto selecionado
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'exibir_marcas?codigo_barras=' + produtoSelecionado);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Atualiza a lista de marcas com as marcas correspondentes
                    document.getElementById('marca').innerHTML = xhr.responseText;
                }
                else {
                    // Exibe uma mensagem de erro se ocorrer um erro na chamada AJAX
                    alert('Erro na chamada AJAX');
                }
            };
            xhr.send();
        });

    </script>

<script>
        // Obtém o elemento <select> com id "produto"
        var produtoSelect = document.getElementById("codigo_barras");

        // Adiciona um evento "change" no elemento <select>
        produtoSelect.addEventListener("change", function() {
            // Obtém o valor selecionado do elemento <select>
            var produtoSelecionado = produtoSelect.value;

            // Faz uma chamada AJAX para buscar as marcas correspondentes ao produto selecionado
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'buscarPrecoPorMarca?codigo_barras=' + produtoSelecionado);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Atualiza a lista de marcas com as marcas correspondentes
                    document.getElementById('preco').innerHTML = xhr.responseText;
                }
                else {
                    // Exibe uma mensagem de erro se ocorrer um erro na chamada AJAX
                    alert('Erro na chamada AJAX');
                }
            };
            xhr.send();
        });


        </script>

<script>
        // Obtém o elemento <select> com id "produto"
        var produtoSelect = document.getElementById("codigo_barras");

        // Adiciona um evento "change" no elemento <select>
        produtoSelect.addEventListener("change", function() {
            // Obtém o valor selecionado do elemento <select>
            var produtoSelecionado = produtoSelect.value;

            // Faz uma chamada AJAX para buscar as marcas correspondentes ao produto selecionado
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'buscarprodutoPorbarras?codigo_barras=' + produtoSelecionado);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Atualiza a lista de marcas com as marcas correspondentes
                    document.getElementById('produto').innerHTML = xhr.responseText;
                }
                else {
                    // Exibe uma mensagem de erro se ocorrer um erro na chamada AJAX
                    alert('Erro na chamada AJAX');
                }
            };
            xhr.send();
        });
        </script>


        @stack('scripts')
</body>
</html>
