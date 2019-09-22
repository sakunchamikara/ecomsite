<?php 

include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert products</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
    
    <div class="row"><!--row begin-->

        <div class="col-lg-12"><!--col-lg-12 begin-->

            <ol class="breadcrumb"><!--breadcrumb begin-->

                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Insert Products 
                </li>
 
            </ol><!--breadcrumb end-->

        </div><!--col-lg-12 end-->

    </div><!--row end-->
    
    <div class="row"><!--row begin-->

        <div class="col-lg-12"><!--col-lg-12 begin-->

            <div class="pane panel-default"><!--pane panel-default begin-->

                <div class="panel-heading"><!--panel-heading begin-->

                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insert product
                    </h3>

                </div><!--panel-heading end-->

            </div><!--pane panel-default end-->

            <div class="panel-body"><!--panel-body begin-->

                <form action="" class="form-horizontal" enctype="multipart/form-data" method="post">
            
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Product Title</label>

                        <div class="col-md-6">

                        <input type="text" name="product_title" class="form-control" required> 

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Product Category</label>

                        <div class="col-md-6">

                            <select name="product_cat" class="form-control">

                            <option>Select a categoty Product</option>

                            <?php
                            $get_p_cats="select * from product_categories";
                            $run_p_cats=mysqli_query($con,$get_p_cats);

                            while($row_p_cats= mysqli_fetch_array($run_p_cats)){
                                $p_cat_id=$row_p_cats['p_cat_id'];
                                $p_cat_title=$row_p_cats['p_cat_title'];
                                echo "
                                <option value='$p_cat_id'>$p_cat_title</option>
                                ";
                            }
                            ?>

                            </select>

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Category</label>

                        <div class="col-md-6">

                            <select name="product_cat" class="form-control">

                            <option>Select a categoty</option>

                            <?php
                            $get_cat="select * from categories";
                            $run_cat=mysqli_query($con,$get_cat);

                            while($row_cat= mysqli_fetch_array($run_cat)){
                                $cat_id=$row_cat['cat_id'];
                                $cat_title=$row_cat['cat_title'];
                                echo "
                                <option value='$cat_id'>$cat_title</option>
                                ";
                            }
                            ?>

                            </select>

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Product Image 1</label>

                        <div class="col-md-6">

                            <input type="file" name="product_img1" class="form-control" required>

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Product Image 2</label>

                        <div class="col-md-6">

                            <input type="file" name="product_img2" class="form-control" required>

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Product Image 3</label>

                        <div class="col-md-6">

                            <input type="file" name="product_img3" class="form-control" required>

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Product price</label>

                        <div class="col-md-6">

                            <input type="text" name="product_price" class="form-control" required>

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Product Keywords</label>

                        <div class="col-md-6">

                            <input type="text" name="product_keywords" class="form-control" required>

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"> Product Desc</label>

                        <div class="col-md-6">

                            <textarea name="product_desc"  cols="19" rows="6" class="form-control"></textarea>    

                        </div>

                    </div><!--form-group end-->
                
                    <div class="form-group"><!--form-group begin-->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input value="Insert Product" type="submit" name="submit" class="btn btn-primary form-control">

                        </div>

                    </div><!--form-group end-->
                
                </form>

            </div><!--panel-body end-->

        </div><!--col-lg-12 end-->

    </div><!--row end-->



    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</body>
</html>