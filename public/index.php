<?php require_once("../recources/config.php"); ?>

<?php include("../recources/templates/font/header.php"); ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

        <?php include("../recources/templates/font/side_nav.php"); ?>        
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                    
                        <?php include("../recources/templates/font/slider.php"); ?>  

                    </div>

                </div>

                <div class="row">
<!-- 
                    <h1>

                        <?php echo $_SESSION['product_1'];?>


                    </h1> -->

                    <?php get_products();?>

                    

                </div><!--End -->

            </div>

        </div>

    </div>
    <!-- /.container -->

 
<?php include("../recources/templates/font/footer.php"); ?>