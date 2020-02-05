<?php

function set_message($msg){
	if(!empty($msg)){
		$_SESSION['message'] = $msg;
	}else{
		$msg = "";
	}
}


function display_message(){
	if(isset($_SESSION['message'])){

		echo $_SESSION['message'];
		unset($_SESSION['message']);

	}
}


// if($connection){
// 	echo "is connected";
// }

function redirect($location){
	header("Location: $location");
}

function query($sql){
	global $connection;
	return mysqli_query($connection, $sql);
}

function confirm($result){
	global $connection;

	if(!$reset){
		die("Query Failed" . mysqli_error($connection));
	}
}

function escape_string($string){
	global $connection;
	return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
	return mysqli_fetch_array($result);
}


/**************************************************FRONT END FUNCTIONS***************************************************/


function get_orders() {

$query = query('SELECT * FROM orders');
//confirm($query);

while ($row = fetch_array($query)) {

$orders = <<<DELIMETER

 <tbody>
        <tr>
            <td>{$row['order_id']}</td>
            <td>{$row['product_id']}</td>
            <td>&#36;{$row['order_amount']}</td>
            <td>{$row['order_transaction']}</td>
            <td>{$row['order_status']}</td>
            <td>{$row['order_currency']}</td>
      
        </tr>
        

    </tbody>

DELIMETER;

echo $orders;

}
}


// get product





function get_products() {

$query = query('SELECT * FROM products');
//confirm($query);

while ($row = fetch_array($query)) {

$product = <<<DELIMETER

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
            <div class="caption">
                <h4 class="pull-right">{$row['product_price']}</h4>
                <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                </h4>
              
                <a class="btn btn-primary" target="_blank" href="../recources/cart.php?add={$row['product_id']}">Add to Cart</a>
            </div>
                            
                                  
    </div>
</div>

DELIMETER;

echo $product;

}
}



function get_products_in_cat_page() {

$query = query('SELECT * FROM products WHERE product_category_id = ' . escape_string($_GET['id']) .' ');
                //confirm($query);

            while ($row = fetch_array($query)) {


$product = <<<DELIMETER
<link href="css/styles.css" rel="stylesheet">
 <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../recources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;

}
}





function get_products_in_shop_page() {

$query = query('SELECT * FROM products');
                //confirm($query);

            while ($row = fetch_array($query)) {


$product = <<<DELIMETER
<link href="css/styles.css" rel="stylesheet">
 <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../recources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;

}
}

function get_categories(){


$query = query('SELECT * FROM categories');
//confirm($query);

while ($row = fetch_array($query)) {
                			
$categories_links = <<<DELIMETER

<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>

DELIMETER;

echo $categories_links;
	}


}



function login_user(){

if(isset($_POST['submit'])){

$username =	escape_string($_POST['username']);
$password =	escape_string($_POST['password']);

$query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");
//confirm($query);

if(mysqli_num_rows($query) == 0){

	set_message("your password or username Wrong");
	redirect("login.php");

} else {
	$_SESSION['username'] = $username;

	redirect("admin");
}


}


}

function send_message() {

	if(isset($_POST['submit'])){

		$to       = "hmrohankumara@gmail.com";
		$form_name = $_POST['name'];
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$message = $_POST['message'];


		$headers = "From: {$form_name} {$email}";

		$result = mail($to, $subject, $message ,$headers);

		if(!$result){
			echo "ERROR";

		}else{
			echo "SENT";
		}
	}

} 


/***********************************FRONT END FUNCTIONS***************************************************/


function add_product() {


if(isset($_POST['publish'])) {


$product_title          = escape_string($_POST['product_title']);
$product_category_id    = escape_string($_POST['product_category_id']);
$product_price          = escape_string($_POST['product_price']);
$product_description    = escape_string($_POST['product_description']);
$short_desc             = escape_string($_POST['short_desc']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);

move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);


$query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, short_desc, product_quantity, product_image) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$short_desc}', '{$product_quantity}', '{$product_image}')");
$last_id = last_id();
confirm($query);
set_message("New Product with id {$last_id} was Added");
redirect("index.php?products");


        }


}


function show_categories_add_product_page(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_options = <<<DELIMETER

 <option value="{$row['cat_id']}">{$row['cat_title']}</option>


DELIMETER;

echo $categories_options;

     }



}
?>