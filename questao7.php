<?php
    @$gerar  =   $_POST['quantidade'];

    for($i=1; $i<=$gerar;$i++){
      if($i % 2 == 0){
      }

    }
?>


<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP AdminLTE 3 | Dashboard</title>
  <link rel="icon" href="dist/img/php.ico">

  <?php
    include "_includes/header.php";
  ?>
  
  </head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
    include "_includes/leftnav.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Questão 7</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Questão 7</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>7.Faça um algoritmo leia 100 números randômicos, calcule e mostre a soma dos 10 primeiros números pares.</h2>
                   <!-- Horizontal Form -->
                   <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Gerar Numeros</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_numeros" id="form_numeros" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="quantidade" class="col-sm-2 col-form-label">Numeros</label>
                        <div class="col-sm-10">
                        <input class="form-control" id="quantidade" name="quantidade" disabled="disabled" placeholder="<?php  echo rand(1,100). "";?>" >
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Somar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  <?php
    include "_includes/footer.php";
  ?>

</body>
</html>