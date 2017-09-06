//-------tag search

$search = get_terms('post_tag');
				var_dump($search); 


//-------if key pressed
<?php function testfun()
{
   echo esc_url(home_url('/cart')); 
}
if(array_key_exists('atc1',$_POST)){
   testfun();
} ?>----- -->

pass one arg with query var
// '.esc_url( add_query_arg( 'book_id', get_the_ID(), site_url('/cart'))).'



//pass  args with query var
add_query_arg( array(
    'key1' => 'value1',
    'key2' => 'value2',
), 'http://example.com' );

//-------pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

 <nav class="prev-next-posts">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Entries', $book->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Newer Entries' ,$book->max_num_pages); // display newer posts link ?>
    </div>
  </nav