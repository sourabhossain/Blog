<?php 

include("config/config.php");
include("lib/Database.php");
include("helpers/format.php");
include("inc/header.php");
include("inc/silder.php");

$db = new Database();
$fm = new Format();

?>
	

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			
			<?php 
			
				$query = "SELECT * FROM tbl_post LIMIT 3";
				$post = $db->select($query);

				if ($post) {
					while ($result = $post->fetch_assoc()) {

			?>
		
			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h2>
				<h4>=<?php echo $fm->formatDate($result['date']); ?>, By <a href="#">=<?php echo $result['author']; ?></a></h4>
				<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				=<?php echo $fm->textShorten($result['body']); ?>

				<div class="readmore clear">
				<a href="post.php?id=<?php echo $result['id']; ?>">Read More</a>
				</div>
			</div>

			<?php
					} // End While Loop
			 	} else {
                    header("Location:404.php");
				}

			?>
		</div>

<?php 

	include("inc/sidebar.php");
	include("inc/footer.php");

?>