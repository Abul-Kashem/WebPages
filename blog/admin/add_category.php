<?php include('includes/header.php'); ?>
<form role="form" method="post" action="add_post.php">
    <div class="form-group">
        <label>Category</label>
        <input type="text" name="category" class="form-control" placeholder="Enter category name" />
    </div>
    <div>
        <input name="submit" type="submit" class="btn btn-default" value="Submit" />
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
    <br />
</form>
<?php include('includes/fotter.php'); ?>