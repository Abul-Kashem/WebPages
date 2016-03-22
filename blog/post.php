<?php include 'includes/header.php'; ?>
    
<?php 

$id = $_GET['id'];
//Create DB Object
$db = new Database();

//Create Query
$query = "Select * From posts Where post_id = ".$id;

//Run Query
$posts = $db->select($query)->fetch_assoc();

//Create Query
$query = "Select * From categories";
//Run Query
$categories = $db->select($query);

?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $posts['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formateDate($posts['date']); ?> by <a href="#"><?php echo $posts['author']; ?></a></p>

            <?php echo $posts['body']; ?>
            
           
          </div><!-- /.blog-post -->

          
<?php include 'includes/footer.php'; ?>
         