<?php

    //$n1 = 1;
    //$n2= 100;

    @$n1   =   $_POST['n1'];
    @$n2   =   $_POST['n2'];
    $j     =   0;
    $soma  =   0;
    
    //Alimentando o vetor a com 100 Posições
    for($i=1; $i<=100; $i++){
      $a[$i-1] = rand($n1,$n2);
    }

    //Numeros pares e armazenar no vetor B 10 posições
    for($i=1; $i<=100; $i++){
     
      //Numero é par?
      if(($a[$i-1] % 2) == 0 ){
        //controlando 10 valores no B
        if($j <= 9){
          $b[$j] = $a[$i-1];
          //Soma dos numeros pares
          $soma = $soma + $b[$j];
        }
          $j++;
        
      }
    }

    //var_dump($a);
    //echo"<br>";
    //var_dump($b);
    //echo"<br>";
    //echo "Soma = ".$soma;
    //echo"<br>";
    //echo "Soma com Array =".array_sum($b);

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
                    <h3 class="card-title"><b> Gerar Numeros</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_numeros" id="form_numeros" action="" method="POST" class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="n1" class="col-sm-2 col-form-label">Digite o primeiro numero: </label>
                        <div class="col-sm-10">
                        <input type="number"  class="form-control" id="n1" name="n1" placeholder="Ex.: 1" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="n2" class="col-sm-2 col-form-label">Digite o segundo numero: </label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="n2" name="n2" placeholder="Ex.: 35" required>
                        </div>
                    </div>
                    <div class="alert alert-info alert-dismissible">
                      <h5><i class="icon fas fa-check"></i><b>RESULTADO!</b></h5>
                      <p><?php echo "A soma dos 10 numeros pares é: ".array_sum($b);?></p>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="botton" class="btn btn-info">Calcular</button>
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