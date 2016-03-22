<?php include('includes/header.php'); ?>
<form role="form" method="post" action="add_post.php">
    <div class="form-group">
        <label>Post Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter title" />
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control" placeholder="Enter content here"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
            <option>News</option>
            <option>Events</option>
        </select>
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter author name" />
    </div>
    <div class="form-group">
        <label>Tags</label>
        <input type="text" name="tags" class="form-control" placeholder="Enter tags name" />
    </div>
    <div>
        <input name="submit" type="submit" class="btn btn-default" value="Submit" />
         <a class="btn btn-default" href="index.php">Cancel</a>
    </div>

    <br />
</form>

<?php include('includes/fotter.php'); ?>