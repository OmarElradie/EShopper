<?php 
/*
Template Name: product-details
*/
	get_header();
?>
	
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
											<li><a href="">Nike </a></li>
											<li><a href="">Under Armour </a></li>
											<li><a href="">Adidas </a></li>
											<li><a href="">Puma</a></li>
											<li><a href="">ASICS </a></li>
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
											<li><a href="">Fendi</a></li>
											<li><a href="">Guess</a></li>
											<li><a href="">Valentino</a></li>
											<li><a href="">Dior</a></li>
											<li><a href="">Versace</a></li>
											<li><a href="">Armani</a></li>
											<li><a href="">Prada</a></li>
											<li><a href="">Dolce and Gabbana</a></li>
											<li><a href="">Chanel</a></li>
											<li><a href="">Gucci</a></li>
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
											<li><a href="">Fendi</a></li>
											<li><a href="">Guess</a></li>
											<li><a href="">Valentino</a></li>
											<li><a href="">Dior</a></li>
											<li><a href="">Versace</a></li>
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
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
	
					</div>
				</div>
				<?php 
							
						$args = array(
								'post_type' => 'book',
				 				'post_status'=> 'publish',
				 				'p' => get_query_var('book_id')
				 				);
				
						$book = new wp_query($args);
						$book->the_post();
						$cat = get_post_meta( get_the_ID(), 'bbx_category',true);
						?>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<?php
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'thumbnail' ); 

										if ($image) : 
										  echo '<img src="'. $image[0].'" alt="" />';	
								endif; ?>
								<h3>Show Full Size</h3>
							</div>

						</div>

						<div class="col-sm-7">

							<div class="product-information"><!--/product-information-->
								<?php 
								
								$diff = date_difference_in_days(get_the_ID());
									if ($diff < 90){
										?>
										<img src="<?php echo get_template_directory_uri();?>/assets/images/product-details/new.jpg" class="newarrival" alt="" />
										<?php
									}
									
								?>
								
								<h2><?php echo the_title(); ?></h2>
								<p><b>ISBN:</b> <?php  echo get_post_meta( get_the_ID(), 'ISBN',true);?></p>
								<p><b>Author:</b> <?php  echo get_post_meta( get_the_ID(), 'author_name',true);?></p>
								<img src="<?php echo get_template_directory_uri();?>/assets/images/product-details/rating.png" alt="" />
								<span>
									<span>US <?php echo get_post_meta( get_the_ID(), 'book_price',true);?></span>
									<label>Quantity:</label>
									<input type="text" value="1" />
						
									<button type="submit"  class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"> </i>
										Add to cart
									</button>
										
							
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> <?php echo ucfirst(get_post_meta( get_the_ID(), 'book_type',true));?></p>
								<p><b>Category:</b> <?php echo $cat;?></p>
								
								<p><b>Edition:</b> <?php echo ucfirst(get_post_meta( get_the_ID(), 'edition',true));?></p>
								<p><b>Publish date:</b> <?php echo ucfirst(get_post_meta( get_the_ID(), 'book_publish_date',true));?></p>
								
								<p><b>Since:</b> <?php echo $diff . " Days";?></p>
								<p><b>NO of volumes:</b> <?php echo ucfirst(get_post_meta( get_the_ID(), 'NO_of_volumes',true));?></p>
								

								<a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#thebook" data-toggle="tab">the book</a></li>
								<li><a href="#similaritems" data-toggle="tab">similar items</a></li>
								<li ><a href="#reviews" data-toggle="tab">Reviews</a></li>		
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="thebook" >
								<div class="col-sm-12">
								<h4><?php  the_title(); ?></h4>
									<b>Rating: </b> <img src="<?php echo get_template_directory_uri();?>/assets/images/product-details/rating.png" alt="" />
									<p><?php the_content(); ?></p>
									</p>
									
									</form>
								</div>
							</div>
							
							<div class="tab-pane fade" id="similaritems" >
							<?php 
							//$cat = get_post_meta( get_the_ID(), 'bbx_category',true);
							
							wp_reset_postdata();
							$args1 = array(
									'post_type' => 'book',
    				 				'post_status'=> 'publish',
    				 				//'order'=> 'DSC',
    				 				//'orderby' => 'publish_date',
								 	'posts_per_page' => 4,
				 					'meta_query' => array(
				 						//'relation' => 'and',
							 				array(
							 					'key' => 'bbx_category','value' => $cat,
												'type' => 'text','compare' => 'like')
							 				)
				 					);
				
								$books = new wp_query($args1);
								
								while($books -> have_posts()){
									$books->the_post();
									
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
												echo '<a href="'.esc_url(home_url('/cart')).'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>'; }  wp_reset_postdata(); ?>

							</div>
				
							<div class="tab-pane fade in" id="reviews" >
								<div class="col-sm-12">

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="<?php echo get_template_directory_uri();?>/assets/images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>

						</div>
					</div><!--/category-tab-->
					
				</div>
			</div>
		</div>
	</section>
	
<?php 
get_footer();
?>