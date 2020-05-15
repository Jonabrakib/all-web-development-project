<?php 
  include "includes/header.php";
  include "includes/navbar.php"; 
  ob_start();
?>

<div class="container-fluid">
	<h1>View All Posts</h1>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<table class="table table-responsive">
					<thead>
						<th>Post Id</th>
						<th>Post Title</th>
						<th>Post Category</th>
						<th>Post Author</th>
						<th>Post Description</th>
						<th>Post Media</th>
						<th>Post Date</th>
						<th>Post Views</th>
						<th>Update</th>
						<th>Delete</th>
					</thead>
					<tbody>

	<?php

    $query = "SELECT * FROM posts";
    
    $select_all_posts_query = mysqli_query($db_connect, $query);
    
    while( $row = mysqli_fetch_assoc($select_all_posts_query) ){

        $id            = $row['id'];
        $post_title    = $row['post_title'];
        $post_cat      = $row['post_cat'];        
        $post_author   = $row['post_author'];
        $post_desc     = $row['post_desc'];
        $post_media    = $row['post_media'];
        $post_time     = $row['post_time'];
        $post_view     = $row['post_view'];       
    
?>


						<tr>
							<td><?php echo $id ?></td>
							<td><?php echo $post_title ?></td>
							<td><?php echo $post_cat ?></td>
							<td><?php echo $post_author ?></td>
							<td><?php echo $post_desc ?></td>
							<td><img src="../assets/images/posts/<?php echo $post_media ; ?>"  width="100"/></td>
							<td><?php echo $post_time ?></td>
							<td><?php echo $post_view ?></td>
							<td><button type="button" class="btn btn-primary">Edit</button></td>
							<td><button type="button" class="btn btn-danger">Delete</button></td>

						</tr>
					
<?php } ?>

</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include "includes/footer.php"; ?>

