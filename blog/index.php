<?php include 'includes/header.php'; ?>
    
<?php 
//Create DB Object
$db = new Database();

//Create Query
$query = "Select * From posts";
//Run Query
$posts = $db->select($query);

//Create Query
$query = "Select * From categories";
//Run Query
$categories = $db->select($query);

?>

   <?php if($posts): ?>
   
   
   <?php while($row = $posts->fetch_assoc()): ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
        <p class="blog-post-meta"><?php echo formateDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

        <?php echo shortenText($row['body']); ?>
        <a class="read-more" href="post.php?id=<?php echo urlencode($row['post_id']); ?>" >Read More</a>
    </div>
    <!-- /.blog-post -->

  <?php endwhile; ?>
    
    <?php else: ?>
        <p>There are no post yet!</p>
    <?php endif; ?>

<?php include 'includes/footer.php'; ?>