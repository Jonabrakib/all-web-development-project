<!-- Database Connection -->
<?php include "includes/db.php"; ?>

<!-- Header File -->
<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>
    
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>


<?php

    $query = "SELECT * FROM posts";
    
    $select_all_posts_query = mysqli_query($db_connect, $query);
    
    while( $row = mysqli_fetch_assoc($select_all_posts_query) ){

        $id            = $row['id'];
        $post_title         = $row['post_title'];
        $post_desc         = $row['post_desc'];
        $post_media        = $row['post_media'];
        $post_author          = $row['post_author'];
        $post_time     = $row['post_time'];
        $post_view   = $row['post_view'];       
    
?>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?php echo $post_title; ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php">Posted By <?php echo $post_author; ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_time; ?></p>
                        <hr>
                        <img class="img-responsive" src="assets/images/<?php echo $post_media; ?>" alt="">
                        <hr>
                        <p><?php echo $post_desc; ?></p>
                        <p>Total View <?php echo $post_view; ?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <hr>

                <?php
                     }  
                ?>

            </div>

            <!-- Sidebar -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>

        
