<?php
include "include/header.php";
include "include/db.php";
?>

    <!-- Navigation -->
    <?php
    include "include/navigation.php";
    ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
           






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
                $query = "SELECT * FROM posts";
                $show_all_posts_query = mysqli_query($connection, $query);
                if(!$show_all_posts_query){
                    echo "failed";
                }
                while($row = mysqli_fetch_assoc($show_all_posts_query)){
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