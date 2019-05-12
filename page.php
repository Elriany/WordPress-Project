<?php /*Template Name:Home */ ?>
<?php get_header(); ?>
<?php 
// About Section
	//Tab one
	$tab1Title  = get_field('tab1_title');
	$tab1Text   = get_field('tab1_text');
	$tab1List1  = get_field('tab1_list1');
	$tab1List2  = get_field('tab1_list2');
	$tab1List3  = get_field('tab1_list3');
	//Tab Two
	$tab2Title  = get_field('tab2_title');
	$tab2Text   = get_field('tab2_text');
	$tab2List1  = get_field('tab2_list1');
	$tab2List2  = get_field('tab2_list2');
	$tab2List3  = get_field('tab2_list3');
	//Tab Third
	$tab3Title  = get_field('tab3_title');
	$tab3Text   = get_field('tab3_text');
	$tab3List1  = get_field('tab3_list1');
	$tab3List2  = get_field('tab3_list2');
	$tab3List3  = get_field('tab3_list3');
	//About Images And Video
	$aboutImg1 = get_field('about_image1');
	$aboutImg2 = get_field('about_image2');
	$aboutImg3 = get_field('about_image3');
	$aboutImg4 = get_field('about_image4');
	$video_url = get_field('video_url');
	//Services Section 
	$serviceHead = get_field('service_header');
	$ServiceText = get_field('service_description');
	//Team Section 
	$teamHead = get_field('team_title');
	$teamText = get_field('team_description');
	//Contact Section 
	$contactHead = get_field('contact_title');
	$contactText = get_field('contact_text');
	$contactCode = get_field('contact_code');

?>
<div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
                 <!-- Indicators -->
                  <ol class="carousel-indicators hidden-xs">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
<?php 
	$posts = new WP_Query(['post_type'=>'Slider','orderby'=>'post_id','order'=>'ASC']);
	while($posts->have_posts())
	{
		$posts->the_post();
		$sliderImg = get_field('slider_image');
?>
                    <div class="item <?php if ($posts->current_post ==0 ){ ?> active <?php } ?>">
                      <img src="<?php echo $sliderImg['url']; ?>" alt="Chania">
                      <div class="carousel-caption hidden-xs">
                        <h3><?php the_field('slider_title'); ?></h3>
                        <p class="lead"><?php the_field('slider_text'); ?></p>
                      </div>
                    </div>
<?php } wp_reset_query(); ?>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
<!-- End carousel -->
<div id="fh5co-about" style="margin-top:20px;" data-section="about">
			<div class="fh5co-2col">				
				<div class="fh5co-2col-inner left">
						<div class="fh5co-tabs-container">
							<ul class="fh5co-tabs fh5co-three">
								<li class="active"><a href="#" data-tab="marketing"><?php echo $tab1Title; ?></a></li>
								<li><a href="#" data-tab="analysis"><?php echo $tab2Title; ?></a></li>
								<li><a href="#" data-tab="strategy"><?php echo $tab3Title; ?></a></li>
							</ul>
							<div class="fh5co-tab-content active" data-tab-content="marketing">
								<?php echo $tab1Text; ?>
								<ul class="checked">
									<li><?php echo $tab1List1; ?></li>
									<li><?php echo $tab1List2; ?></li>
									<li><?php echo $tab1List3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>
							<div class="fh5co-tab-content" data-tab-content="analysis">
								<?php echo $tab2Text; ?>
								<ul class="checked">
									<li><?php echo $tab2List1; ?></li>
									<li><?php echo $tab2List2; ?></li>
									<li><?php echo $tab2List3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>
							<div class="fh5co-tab-content" data-tab-content="strategy">
								<?php echo $tab3Text; ?>
								<ul class="checked">
									<li><?php echo $tab3List1; ?></li>
									<li><?php echo $tab3List2; ?></li>
									<li><?php echo $tab3List3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>
						</div>
				</div>
			</div>
			<div class="fh5co-2col fh5co-text">
				<div class="fh5co-grid">
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $aboutImg1['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $aboutImg2['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $aboutImg3['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $aboutImg4['url']; ?>);"></div>
				</div>
			</div>
		</div> <!-- END fh5co-about -->

		<div id="fh5co-services" data-section="services">
			<div class="fh5co-video"><a href="<?php echo $video_url; ?>" class="popup-vimeo"><i class="icon-play2"></i></a></div>
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $serviceHead; ?></h2>
					<p><?php echo  $ServiceText; ?></p>
				</div>
<?php 
	$posts = new WP_Query(['post_type'=>'Services','orderby'=>'post_id','order'=>'ASC']);
	while($posts->have_posts())
	{
		$posts->the_post();
?>
				<div class="col-md-4">
					<div class="service">
						<div class="icon"><i class="<?php the_field('service_icon'); ?>"></i></div>
						<h3><?php the_field('service_header'); ?></h3>
						<p><?php the_field('service_text'); ?></p>
					</div>
				</div>
<?php } wp_reset_query(); ?>
				<div class="col-md-12 text-center">
					<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
				</div>
			</div>
		</div> <!-- END fh5co-services -->

		<div id="fh5co-gallery">
<?php 
	$posts = new WP_Query(['post_type'=>'Gallery','orderby'=>'post_id','order'=>'ASC']);
	while($posts->have_posts())
	{
		$posts->the_post();
		$galleryImg = get_field('gallery_image');
?>
			<a href="<?php echo $galleryImg['url'];  ?>" class="fh5co-item image-popup" style="background-image: url(<?php echo $galleryImg['url']; ?>)">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-copy">
					<div class="fh5co-copy-inner">
						<h2><?php the_field('gallery_header'); ?></h2>
						<h3><?php the_field('gallery_category'); ?></h3>
					</div>
				</div>
			</a>
<?php } wp_reset_query(); ?>
		</div> <!-- END fh5co-gallery -->

		<div id="fh5co-team" data-section="team">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $teamHead; ?></h2>
					<p><?php echo $teamText; ?></p>
				</div>
<?php 
	$posts = new WP_Query(['post_type'=>'Team','orderby'=>'post_id','order'=>'ASC']);
	while($posts->have_posts())
	{
		$posts->the_post();
		$TeamImg = get_field('team_image');
?>
			<div class="col-md-4">
					<div class="person">
						<img src="<?php echo $TeamImg['url'];  ?>" alt="" class="img-responsive">
						<h3><?php the_field('team_member'); ?></h3>
						<h4><?php the_field('team_job'); ?></h4>
						<p><?php the_field('team_text'); ?></p>
						<ul class="social">
							<li><a href="#"><i class="<?php the_field('team_facebook'); ?>"></i></a></li>
							<li><a href="#"><i class="<?php the_field('team_twitter'); ?>"></i></a></li>
							<li><a href="#"><i class="<?php the_field('team_behance'); ?>"></i></a></li>
							<li><a href="#"><i class="<?php the_field('team_instagram');?>"></i></a></li>
						</ul>
					</div>
			</div>
<?php } wp_reset_query(); ?>
			</div>
		</div> <!-- END fh5co-team -->

		<div id="fh5co-contact" data-section="contact">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $contactHead; ?></h2>
					<p><?php echo $contactText; ?></p>
				</div>
				<form action="#" method="post">
					<div class="row">
						<?php echo $contactCode; ?>
					</div>					
				</form>
			</div>
		</div>
<?php get_footer(); ?>
