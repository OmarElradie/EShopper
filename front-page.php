<?php 
/* 
Template Name: front page
*/
get_header();
?>
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						

						<?php 
								 $args1 = array(
								 	'post_type' => 'book',
    				 				'post_status'=> 'publish',
								 	'posts_per_page' => 5,
								 	'meta_query' => array(
								 			array(
								 				'key' => 'main_slider',
								 				'value' => 'yes',
												'type' => 'text',
							 					'compare' => '='
								 			)));
								 $book = new WP_Query( $args1 );
								 $post_count = $book ->post_count;
								for ($i = 0; $i < $post_count; $i++) {
									
									if($i == 0)
							echo '<li data-target="#slider-carousel" data-slide-to="'.$i.'" class="active"></li>';
							else echo '<li data-target="#slider-carousel" data-slide-to="'.$i.'"></li>';
							
							}?>
						</ol>
						
						<div class="carousel-inner">
											<?php 
								 $count =0;
								 while($book -> have_posts()){
									$book->the_post();
									$count++;
									$book_price = get_post_meta( get_the_ID(), 'book_price',true); 
									if($count == 1)	{echo '<div class="item active">';}else{ echo '<div class="item">';}
								
							
								echo '<div class="col-sm-6">';
									echo '<h1><span>Available</span>-NOW</h1>';
									echo '<h2>'; echo the_title(); echo '</h2>';
									echo '<p>'; echo the_excerpt(); echo '</p>';

									echo ' <form  action="'.esc_url(home_url('/cart')).'">
												<button type="submit" class="btn btn-default get">Get it now</button> </form>
										</div>
								
									<div class="col-sm-6">';			
									$image = the_post_thumbnail( array(484,441) );

									if ($image) : 
									 	echo '<img src="'. $image[0].'" alt="" />';
										endif; 
									
							echo '</div>
							</div>';
							 } wp_reset_postdata();?>

						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div> <!-- slider-carousel -->
					
				</div> <!-- col-sm-12 -->
			</div> <!-- class="row" -->
		</div> <!-- class="container" -->
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo get_template_directory_uri();?>/assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Selected Books</h2>
<!-- main page image wrapper -->
					
				<?php  
				
						$args = array(
    						'post_type' => 'book',
    						'post_status'=> 'publish',
    						'posts_per_page'=> 6
    						);
								
						$book = new WP_Query($args);
							
						while($book -> have_posts()){
								$book->the_post();
								$book_price = get_post_meta( get_the_ID(), 'book_price',true); 
								$author_name = get_post_meta( get_the_ID(), 'author_name',true);   
						
						echo '<div class="col-sm-4">';
							echo '<div class="product-image-wrapper">';
								echo '<div class="single-products">';
										echo '<div class="productinfo text-center">';
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'thumbnail' ); // or the_post_thumbnail('medium');

												if ($image) : 
												    echo '<img src="'. $image[0].'" alt="" />';
												endif; 

											echo '<h2> $'.$book_price .'</h2>';
											echo '<p>'. the_title().'</p>';
											echo '<a href="'.esc_url( add_query_arg( 'book_id', get_the_ID(), site_url('/cart'))).'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2> $' . $book_price  .'</h2>';
												echo '<p>'. $author_name .' ' . the_excerpt() .'</p>
												<a href="'.esc_url( add_query_arg( 'book_id', get_the_ID(), site_url('/cart'))).'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>';
										$diff = date_difference_in_days(get_the_ID());
											if ($diff < 90){
										echo '<img src="'.get_template_directory_uri().'/assets/images/home/new.png" class="new" alt="" />';}
							echo '	</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="'.esc_url( add_query_arg( 'book_id', get_the_ID(), site_url( '/product-details' ) ) ).'"><i class="fa fa-book" aria-hidden="true""></i>Book details</a></li>
									</ul>
								</div>
							</div>
						</div>';
							
						 }  wp_reset_postdata();   ?>
					</div><!-- Selected Books -->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
							
							<?php  $cats = array ('literature','poetry','science','cookbooks','children','art','biographies','journals');
							 $count =0;
							foreach($cats as $cat){
								if ($count == 0){
									$count++;
									echo '<li class="active"><a href="#'.$cat.'" data-toggle="tab">'.$cat.'</a></li>';
								} else {
									echo '<li><a href="#'.$cat.'" data-toggle="tab">'.$cat.'</a></li>';}
							}
							?>
	
							</ul>
						</div>

						<div class="tab-content">
							<?php 
							$count=0;
							 foreach ($cats as $cat){
 								if ($count == 0){
 									$count++;
 									echo '<div class="tab-pane fade active in" id="'. $cat.'" >';
 								} else{
									echo '<div class="tab-pane fade" id="'. $cat. '" >';}
								 $args1 = array(
								 	'post_type' => 'book',
    				 				'post_status'=> 'publish',
    				 				'posts_per_page'=> 4,
								 	'meta_query' => array(
								 			array(
								 				'key' => 'bbx_category',
								 				'value' => $cat,
												'type' => 'text',
							 					'compare' => '='
								 			)));
 
								 $book = new WP_Query( $args1 );

								 while($book -> have_posts()){
									$book->the_post();
									
									$book_price = get_post_meta( get_the_ID(), 'book_price',true); 
								echo '<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">';
											 
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); 

												if ($image) :
												  echo '<img src="'.$image[0].'" alt="" />';
												 endif; 
												echo '<h2>$' . $book_price .'</h2>';
												echo '<p>'. the_title().'</p>';
												echo '<a href="'.esc_url( add_query_arg( 'book_id', get_the_ID(), site_url('/cart'))).'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>'; }  wp_reset_postdata();
								echo  '</div>';
								  }	 
							 ?>
						</div>
					</div><!--/category-tab-->

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Recommended Books</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								
								<?php 
								 $args1 = array(
								 	'post_type' => 'book',
    				 				'post_status'=> 'publish',
    				 				'posts_per_page' => 30	
								 	);
 								$count = 0;
								 $book = new WP_Query( $args1 );

								 while($book -> have_posts()){
									$book->the_post();
									$count++;
								
									$book_price = get_post_meta( get_the_ID(), 'book_price',true); 
									if ($count == 1 ){
										echo '<div class="item active">';
									}
									if ($count %3 == 1 && $count>3) {
										echo '<div class="item">';
									} 
									echo '<div class="col-sm-4">';
										echo ' <div class="product-image-wrapper">';
											echo ' <div class="single-products">';
											echo ' 	<div class="productinfo text-center">';
													
														$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
														if ($image) : 
												 		  echo '<img src="'. $image[0].'" alt="" />';
															 endif;
													 echo '<h2>$'. $book_price  .'</h2>';
													echo '<p>'. the_title().'</p>';
													echo '<a href="'.esc_url( add_query_arg( 'book_id', get_the_ID(), site_url('/cart'))).'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>'	;
							 	if ($count==3){echo '</div>';	}//item active 

								if ($count%3 == 0 && $count>3) { echo '</div>';	} 
									 }  wp_reset_postdata();   ?>
							</div> <!-- carousel-inner -->
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div><!-- recommended-item-carousel -->
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<?php 
	get_footer();
	 ?>