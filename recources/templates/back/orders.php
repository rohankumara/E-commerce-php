<?php require_once("../../recources/config.php"); ?>
<?php include("../../recources/templates/back/header.php"); ?>

<h1 class="page-header">
   All Orders

</h1>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>Order ID</th>
           <th>Product ID</th>
           <th>Order Amount</th>
           <th>Order Transaction</th>
           <th>Order Status</th>
           <th>Order Currency</th>
      </tr>
    </thead>

<?php get_orders()?>

</table>       <!-- /#page-wrapper -->
<?php include("../../recources/templates/back/footer.php"); ?>