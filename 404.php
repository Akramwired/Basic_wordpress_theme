<?php get_header(); ?>
    <div class="container-404" >
        <h2 class="page-heading">Error 404 not found!</h2>
        <img src="http://source.unsplash.com/640*480/?cats" />
        <h3>Sorry dude you are list. Try the following links:</h3>
        <ul>
            <li><a href="<?php echo site_url('/blog') ?>">Blog List</a></li>
            <li><a href="<?php echo site_url('/project') ?>">Project List</a></li>
            <li><a href="<?php echo site_url('/about') ?>">About Me</a></li>
            <li><a href="<?php echo site_url('') ?>">Home Page</a></li>
        </ul>
    </div>
<?php get_footer(); ?>