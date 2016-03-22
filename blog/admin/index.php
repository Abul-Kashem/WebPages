<?php include('includes/header.php'); ?>

<?php
//Create DB Obj
$db=new Database;
//Create Query
$query="SELECT p.post_id,p.category,p.title,p.body,p.author,p.tags,p.date,c.name
FROM posts p
INNER JOIN categories c ON p.category=c.category_id";
//Run Query
$post=$db->select($query);


//Create Query
$query="SELECT c.category_id,c.name FROM categories c";
//Run Query
$category=$db->select($query);
?>

<table class="table table-striped">
    <tr>
        <th>Post ID#</th>
        <th>Post Title</th>
        <th>Category</th>
        <th>Author</th>
        <th>Date</th>
    </tr>
   
    <?php  while($row=$post->fetch_assoc()): ?>

    <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><a href="edit_post.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['author']; ?></td>
        <td><?php echo formateDate( $row['date']); ?></td>
    </tr>
    <?php endwhile; ?>
    
</table>

<table class="table table-striped">
    <tr>
        <th>Category ID#</th>
        <th>Category Name</th>

    </tr>
    <?php  while($row=$category->fetch_assoc()): ?>

    <tr>
        <td><?php echo $row['category_id']; ?></td>
        <td><a href="edit_category.php" ?id="<?php $row['category_id']; ?>"><?php echo $row['name']; ?></a></td>
    </tr>
    <?php endwhile; ?>


</table>
<?php include('includes/fotter.php'); ?>

