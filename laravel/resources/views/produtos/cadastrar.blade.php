<!DOCTYPE html>
<html lang="en">

@extends('layouts.app')
@extends('layouts.menu')




<style>
.cadastro-produtos {
  display: flex;
  flex-direction: column;
  max-width: 600px;
  margin: 0 auto;
}

label {
  margin-top: 10px;
}

input[type="text"],
select,
textarea,
input[type="number"],
input[type="file"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 5px;
}

select {
  appearance: none;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath d='M8 10.5l4.4-4.4L14 7l-6 6-6-6 1.6-1.6L8 10.5z'/%3E%3C/svg%3E")
    no-repeat right 8px center;
  background-size: 12px 
}

input[type="submit"]{
width: 100px;
border-radius: 10px;
font-size: 18px;
background-color: #ccc;
color: black;
border-style: none;
}

input:hover[type="submit"]{
color: #fff;    
background-color: red;
}

</style>
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="Sair"></input>
            </form>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <!-- Content Wrapper. Contains page content -->
  <div style="background-color: #1063a5; width: 950px; margin-left: 550px;border-radius:5px" ><h3 style="color:#ffff; margin-top: 150px;"><center>Produtos</center></h3></div>
    <div class="card card-outline card-blue" style="margin-top:18px; width: 950px; margin-left: 550px;">
      <br>
      <div class="container">
        <!-- CHECKOUT -->
        <div class="checkout">
          <div class="form-header">
          </div>
          <br>
          <form action="processar.php" method="POST" role="form">

            <div class="checkboxArea">
            <label for="">Produto <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="poduto" name="produto" placeholder="Digite o codigo" required>
            </div>

            <div class="form-group">
            <label for="">Preço <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o ramal" required>
            </div>
            
            <div class="form-group">
            <label for="">Kg <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="kg" name="kg" placeholder="funcionario" required>
            </div>
            <div class="form-group">
              <label for="nome_usuario">Marca<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Função" required>
              </span>
            </div>
            <div class="form-group">
            <label for="">Quantidade<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Setor">
            </div>
            <div class="form-group">
            <label for="">Codigo de barras</label>
                    <input type="text" class="form-control" id="codigo_barras" name="codigo_barras" placeholder="Digite o nome">
            </div>
          
            <div class="checkboxArea">
            <a href="javascript: history.go(-1)" class="btn btn-danger"><i class="fas fa-sign-out-alt fa-rotate-180"></i> Cancelar</a>
            <button type="submit" class="btn btn-success float-right"><i class="fas fa-save"></i> Salvar</button>
            </div>
            <br><br>
          </form>
        </div>
        </div>
        </div>






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
<script src="vendor/adminlte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="vendor/adminlte/dist/js/pages/dashboard.js"></script>
        


</body>
</html>








  