<?php include('includes/header.php'); ?>

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

<form role="form" method="post" action="edit_post.php">
    <div class="form-group">
        <label>Post Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter title" value="<?php echo $posts['title']; ?>" />
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control" placeholder="Enter content here" >
            <?php echo $posts['body']; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
            <?php while($rows=$categories->fetch_assoc()): ?>
              <?php if($rows['category_id']==$posts['category']){

                $selected ='selected';   
              }
              else{
                  $selected ='';
              }
              
              ?>
                        
                <option <?php echo $selected; ?>><?php echo $rows['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter author name"  value="<?php echo $posts['author']; ?>"/>
    </div>
    <div class="form-group">
        <label>Tags</label>
        <input type="text" name="tags" class="form-control" placeholder="Enter tags name" value="<?php echo $posts['tags']; ?>"/>
    </div>
    <div>
        <input name="submit" type="submit" class="btn btn-default" value="Submit" />
        <a class="btn btn-default" href="index.php">Cancel</a>
        <input name="delete" type="submit" class="btn btn-danger" value="Delete" /> 
    </div>
    <br />
</form>

<?php include('includes/fotter.php'); ?>