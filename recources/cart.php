<?php require_once("config.php"); ?>

<?php

    if(isset($_GET['add'])){

        $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']));
        while ($row = fetch_array($query)) {

            if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){


         $_SESSION['product_' . $_GET['add']]+=1;

         redirect("../public/checkout.php");

            } else {

                set_message("we only have {$row['product_quantity']} " . $row['product_title'] . " " . "Available");
              redirect("../public/checkout.php");

            }
        }


    }

if (isset($_GET['remove'])) {
    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] < 1){
        unset($_SESSION['item_quantity']);
        unset($_SESSION['item_total']);

        redirect("../public/checkout.php");
    } else {
        redirect("../public/checkout.php");
    }
}

if (isset($_GET['delete'])) {

    $_SESSION['product_' . $_GET['delete']] = '0';
    unset($_SESSION['item_quantity']);
    unset($_SESSION['item_total']);


    redirect("../public/checkout.php");
}

function cart(){

$total = 0;
$item_quantity = 0;
$item_name =1;
$item_number =1;
$amount =1;
$quantity =1;

    foreach ($_SESSION as $name => $value) {

        if ($value > 0) {

        if(substr($name, 0, 8) == "product_") {

            $length = strlen($name -8);
            error_reporting(E_ALL ^ E_WARNING);
            error_reporting(0);

            $id = substr($name, 8 ,$length);

    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");

    while ($row = fetch_array($query)) {

        $sub = $row["product_price"]*$value;
        $item_quantity +=$value;

        $product = <<<DELIMETER
        <tr>
         <td>{$row["product_title"]}</td>
         <td>&#36;{$row["product_price"]}</td>
         <td>{$value}</td>
         <td>&#36;{$sub}</td>
         <td><a class ='btn btn-warning' href="../recources/cart.php?remove={$row['product_id']}"><span class="glyphicon glyphicon-minus"></span></a>
          <a class ='btn btn-success' href="../recources/cart.php?add={$row['product_id']}"><span class="glyphicon glyphicon-plus"></span></a>
          <a class ='btn btn-danger' href="../recources/cart.php?delete={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
  <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
  <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
  <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
  <input type="hidden" name="quantity_{$quantity}" value="{$row['product_quantity']}">
DELIMETER;

echo $product;

$item_name++;
$item_number++;
$amount++;
$quantity++;

}

$_SESSION['item_total'] = $total +=$sub;
$_SESSION['item_quantity'] = $item_quantity;

        }
    }
}}

function show_paypal() {

    if(isset($_SESSION['item_quantity'])){

    $paypal_button = <<<DELIMETER

    <input type="image" name="upload" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="Buy Now">

    DELIMETER;

    return $paypal_button;
}
}









function report(){

$total = 0;
$item_quantity = 0;


    foreach ($_SESSION as $name => $value) {

        if ($value > 0) {

        if(substr($name, 0, 8) == "product_") {

          $length = strlen($name -8);
            error_reporting(E_ALL ^ E_WARNING);
            error_reporting(0);

    $id = substr($name, 8 ,$length);

    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");

    while ($row = fetch_array($query)) {

    $sub = $row["product_price"]*$value;
    $item_quantity +=$value;

    $insert_report = query("INSERT INTO reports(product_id, product_price,product_quantity) VALUES('{$amount}','{$transaction}','{$status}','{$currency}')");

}

$total += $sub;
echo $item_quantity;

        }
    }
}}







error_reporting(0);
?>
