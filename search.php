<?php 
/*
Template Name: Search
*/
	get_header();
?>
	
<!-- 	<section id="advertisement">
		<div class="container">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/shop/advertisement.jpg" alt="" />
		</div>
	</section> -->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Advanced seaech</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<?php get_search_form(); ?>
									<!-- <h4 class="panel-title"><a href="#">Kids</a></h4> -->
								</div>
							</div>

						</div><!--/category-productsr-->
					
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
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
					
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
					<?php 

						global $wp_query;
  						$search_text =  get_query_var('search_input');
						$adv_s_title= get_query_var('adv_s_title');
						$adv_s_author= get_query_var('adv_s_author');
						$adv_s_category= get_query_var('adv_s_category');
						$adv_s_tags= get_query_var('adv_s_tags');
						$p = explode("/", $_SERVER['REQUEST_URI']);
                    	$pag = (int)($p[4]*1);
                    	if ($pag == 0 || $pag== null){$paged =1;} else {$paged=$pag;}
                   		// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						 // $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;

						if(!($adv_s_title=='' && $adv_s_author =='' && $adv_s_category=='' && $adv_s_tags==''))
							{
							$wp_query = bbx_adv_search($adv_s_title, $adv_s_author, $adv_s_category,$adv_s_tags, $paged);
							}else if(!$search_text=='')
							{							
								$wp_query = bbx_search($search_text, $paged);   
							} else 
							{echo '<h2>Please, enter some text for search</h2>';
								exit;
							}
						
						//$post_count = $wp_query ->post_count;
						echo '<h2 class="title text-center">Search Results contain  .  ('.$wp_query->found_posts .') . Matches</h2>';
						?>
						<?php
								
							while($wp_query -> have_posts()){
								$wp_query->the_post();
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
												<h2> $' . $book_price .'</h2>';
												echo '<p>'. $author_name .' ' . the_excerpt() .'</p>
												<a href="'.esc_url( add_query_arg( 'book_id', get_the_ID(), site_url('/cart'))).'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="'.esc_url( add_query_arg( 'book_id', get_the_ID(), site_url( '/product-details' ) ) ).'"><i class="fa fa-book" aria-hidden="true""></i>Book details</a></li>
									</ul>
								</div>
							</div>
						</div>';
							
						 }  ?>
						 <section>
						 <ul class="pagination">
						
						 
						</ul>
						 </section>
						 <?php  ?>
					</div>
				</div>
<!-- -------------- pagination-->
				<div class="col-sm-9 padding-right">
						<div class="col-sm-2"></div>
						<div class="col-sm-6">
							<ul class="pagination">
							<li><?php  echo paginate_links(array (
                            'current' => $paged,
                            'total'=> $wp_query->max_num_pages)); //wp_reset_postdata();
                             ?></li>
                             </ul>
						</div>		
						<div class="col-sm-2"></div>
				</div>

<!-- ------------ /pagination -->
			</div>
		</div>
	</section>
	
<?php 
get_footer();
?>
