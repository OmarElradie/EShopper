
<?php 
/*
Template Name: Cart 
*/
    get_header();
  
?>


	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php echo esc_url(home_url('/'))?>">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">book</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>	
					</thead>

					<tbody>
					<?php 
							// if not in cart or count 2 and add others in cart 
						$args = array(
								'post_type' => 'book',
				 				'post_status'=> 'publish',
				 				'p' => get_query_var('book_id')
				 				);
				
						$book = new wp_query($args);
						$book->the_post();
						$cat = get_post_meta( get_the_ID(), 'bbx_category',true);
						?>
						<tr>
							<td class="cart_product">
								<a href="">
								<?php
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'thumbnail' ); 

										if ($image) : 
										  echo '<img src="'. $image[0].'" alt="" />';endif; ?>
								</a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php the_title(); ?></a></h4>
								<p>Author: <?php  echo get_post_meta( get_the_ID(), 'author_name',true);?></p>
								<p>ISBN: <?php  echo get_post_meta( get_the_ID(), 'ISBN',true);?></p>
							</td>
							<td class="cart_price">
								<p>$<?php  echo get_post_meta( get_the_ID(), 'book_price',true);?></p>
							</td>

							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" name = "cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price">$<?php  echo get_post_meta( get_the_ID(), 'book_price',true);?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>


					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section 
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php 
get_footer();
?>