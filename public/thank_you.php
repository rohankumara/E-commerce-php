<?php require_once("../recources/config.php"); ?>
<?php require_once("../recources/cart.php"); ?>

<?php include("../recources/templates/font/header.php"); ?>

<?php

  if (isset($_GET['tx'])) {

      $amount = $_GET['amt'];
      $currency = $_GET['cc'];
      $transaction = $_GET['tx'];
      $status = $_GET['st'];



      $query = query("INSERT INTO orders(order_amount, order_transaction,order_status, order_currency) VALUES('{$amount}','{$transaction}','{$status}','{$currency}')");


      report();

  }else{

    //redirect("index.php");
  }


?>


    <!-- Page Content -->
    <div class="container">

       <h1 class="text-center">THANK YOU</h1>

     </div><!--Main Content-->


<?php include("../recources/templates/font/footer.php"); ?>
