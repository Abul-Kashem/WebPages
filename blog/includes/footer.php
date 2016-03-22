</div>
<!-- /.blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p><?php echo $site_description; ?></p>
    </div>
    <div class="sidebar-module">
        <h4>Categories</h4>
        <?php if($categories) : ?>
            <ol class="list-unstyled">
                <?php while($row = $categories->fetch_assoc()): ?>
                    <li>
                        <a href="#">
                            <?php echo $row['name']; ?>
                        </a>
                    </li>

                    <?php endwhile; ?>

            </ol>


        <?php else: ?>
            <p>There are no categories.</p>
        <?php endif; ?>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</div>
<!-- /.blog-sidebar -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<footer class="blog-footer">
    <p>copyright @2015 made by Kashem</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>