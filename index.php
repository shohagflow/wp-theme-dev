<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html <?php language_attributes( );?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Corporate 2</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">


<?php wp_head(  );?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire"></span> Logo</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <?php
                wp_nav_menu( [
                    'location'  =>'hm',
                    'container' =>' ',
                    'menu_class'=>'nav navbar-nav',
                    'menu_id'   =>' '
                ] )
                ?>
               

				<!-- Search -->
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="jumbotron feature">
		<div class="container">
		
		<div id="feature-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
			  <li data-target="#feature-carousel" data-slide-to="1"></li>
			  <li data-target="#feature-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<h1>Dramatically Engage</h1>
					<p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
					<p><a class="btn btn-primary" href="#">Engage Now</a></p>
				</div>
				<div class="item">
					<h1>Proactively Pontificate</h1>
					<p>Holistically pontificate installed base portals after maintainable products.</p>
					<p><a class="btn btn-primary" href="#">Pontificate Now</a></p>
				</div>
				<div class="item">
					<h1>Efficiently Unleash</h1>
					<p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
					<p><a class="btn btn-primary" href="#">Unleash Now</a></p>
				</div>			  
			</div>
			<a class="left carousel-control" href="#feature-carousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#feature-carousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>

		</div>
	</div>



    <!-- Content -->
    <div class="container">

        <!-- Page Intro -->
        <div class="row page-intro">
            <div class="col-lg-12">
                <h1>Superior Collaboration
                    <small>Visualize Quality</small>
                </h1>
                <p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
            <!-- <article class="col-md-4 article-intro"> -->
                <?php while(have_posts(  )): the_post(  );?>
                <a href="#">
                    <?php the_post_thumbnail(); ?>
                </a>
                <h3>
                    <a href="#"><?php the_title(  );?></a>
                </h3>
                <p>[By:<?php the_author( );?> | <?php the_time( 'M d Y' );?> <?php the_time( 'g:i:a' );?></p>
                <p><?php the_content(  );?></p>
           <?php endwhile;?>
            </article>
           
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
	
	<footer>
		<div class="footer-blurb">
			<div class="container">
				<div class="row">
                    <?php while( have_posts(  )): the_post(  );?>
					<!-- <div class="col-sm-4 footer-blurb-item"> -->
                    <?php the_post_thumbnail(  );?>
						<h3><?php the_title( );?></h3>
						<p><?php the_content( )?></p>
						<p><a class="btn btn-default" href="#">Procrastinate</a></p>
					</div>
					<?php endwhile;?>

				</div>
				<!-- /.row -->	
			</div>
        </div>
        
        <div class="small-print">
        	<div class="container">
        		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<p>Copyright &copy; Example.com 2015 </p>
        	</div>
        </div>
	</footer>

	
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/holder.min.js"></script>

    <div class="notic">
        <h2>All Notic</h2>
       <p>woedpress</p>
       <p>php</p>
    </div>
	<?php wp_footer(  );?>
</body>

</html>
