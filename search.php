
<?php
include "include/header.php";
include "include/db.php";
?>

    <!-- Navigation -->
    <?php
    include "include/navigation.php";
    ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                    $query = "SELECT * FROM categories";
                    $select_all_categories_query = mysqli_query($connection, $query);
                    if(!$select_all_categories_query){
                        echo "failed";
                    }
                    while($row = mysqli_fetch_assoc($select_all_categories_query)){
                        $category_title = $row['category_title'];
                        echo "<li><a href='#'>$category_title</a></li>";
                    }
                    ?>






                    <!-- <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <?php

                if(isset($_POST['submit'])){
                    $object = $_POST['search'];
                    // echo "<h1>$object</h1>";


                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$object%' ";
                    $search_query = mysqli_query($connection, $query);

                    if(!$search_query){

                        die("QUERY FAILED". mysqli_error($connection));
                    }
                    $count = mysqli_num_rows($search_query);
                    if($count == 0){
                        echo "<h1>'No Results found'</h1>";
                    
                    }
                    else{
                        while($row = mysqli_fetch_assoc($search_query)){
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];
                            ?>
                            <h1 class="page-header">
                            Page Heading
                            <small>Secondary Text</small>
                        </h1>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?php echo $post_title; ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $post_author; ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                        <hr>
                        <p><?php echo $post_content; ?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                        <?php
                        }
                    }
                }?>
                    
                    















                
                







              

                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php
            include "include/sidebar.php";
            ?>

        </div>
        <!-- /.row -->

        <hr>

       <?php
       include "include/footer.php";
       ?>