<?php require_once("../../recources/config.php"); ?>
<?php include("../../recources/templates/back/header.php"); ?>

<?php

if(!isset($_SESSION['username'])){
    redirect("../../public");
}

?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

    <?php 
        if($_SERVER['REQUEST_URI'] == "/ecom/public/admin/" || $_SERVER['REQUEST_URI'] == "/ecom/public/admin/index.php"){
    include("../../recources/templates/back/admin_content.php");    }

    if(isset($_GET['orders'])){
        include("../../recources/templates/back/orders.php");  
    }
    if(isset($_GET['categories'])){
        include("../../recources/templates/back/categories.php");  
    }

    if(isset($_GET['products'])){
        include("../../recources/templates/back/products.php");  
    }

    if(isset($_GET['add_product'])){
        include("../../recources/templates/back/add_product.php");  
    }

    if(isset($_GET['users'])){
        include("../../recources/templates/back/users.php");  
    }



    ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include("../../recources/templates/back/footer.php"); ?>