<?php 
  include "includes/header.php";
  include "includes/navbar.php"; 
  ob_start();
?>


<?php 

	if(isset($_POST['create_post'])){

		$post_title 	= $_POST['post_title'] ;
		$post_cat 		= $_POST['post_cat'] ;
		$post_author 	= $_POST['post_author'];
		$post_desc 		= $_POST['post_desc'] ;
		$post_status 	= $_POST['post_status'];

		$post_image		= $_FILES['post_thumbnail']['name'] ;
		$post_tmp		= $_FILES['post_thumbnail']['tmp_name'];

		move_uploaded_file($post_tmp, '../assets/images/posts/' .$post_image) ;

		$post_date 		= Date('d-m-y') ;
		$post_view		= 1;	



		$query	= "INSERT INTO posts (id, post_title, post_cat, post_author, post_desc, post_status, post_media, post_time, post_view) 
					VALUES ('','$post_title', '$post_cat', '$post_author', '$post_desc', '$post_status', '$post_image', '$post_date','$post_view')";


		$insert_new_post = mysqli_query($db_connect, $query);

			if ($insert_new_post){

				//This is for page redirection after successfully post submission
				header('Location: all-posts.php');		
			}
				else{
					echo '<div class="alert alert-warning"> Khub Sabdhan </div>';
				}

	}

?>




<div class="container-fluid">
	<h1>Add New Post</h1>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="post_title" placeholder="Post Title Here" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="post_cat" placeholder="Post Category Here" class="form-control" value="1">
					</div>
					<div class="form-group">
						<input type="text" name="post_author" placeholder="Post Author Here" class="form-control">
					</div>
					<div class="form-group">
						<textarea rows="5" cols="60" name="post_desc" placeholder="Post Description Here"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="post_status" placeholder="Post Status" class="form-control" value="1">
					</div>
					<div class="form-group">
						<input type="file" name="post_thumbnail" placeholder="Post Thumbnail" class="form-control" >
					</div>
					<div class="form-group">
						<input type="submit" name="create_post" value="Add Post" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<?php include "includes/footer.php"; ?>

