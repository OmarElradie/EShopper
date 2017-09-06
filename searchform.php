<form  method="get" action="<?php echo site_url('/search'); ?>">
   
   <label class="panel-title" for=""><h4 class="panel-title"><a>Title</a></h4></label>
  <input type="text" size="14" class="search_box pull-right" name="adv_s_title" id="">
  <br><br>

  <label class="panel-title" for=""><h4 class="panel-title"><a>Author</a></h4></label>
  <input type="text" size="14" class="search_box pull-right" name="adv_s_author" id="">
  <br><br>
  
  <?php
  $categories = get_type_categories('book', 'bbx_category');
  ?>
  
  <label   class="panel-title" for=""><h4 class="panel-title"><a>Category</a></h4></label>
  <select name="adv_s_category" id="" style="width: 125px" class="search_box pull-right">
    <option value=""> </option>
    <?php
    foreach($categories as $category){
      ?>
      <option  value="<?php echo $category;?>"><?php echo $category; ?></option>
      <?php
    }
    ?>
  </select>
  <br><br>

  <label class="panel-title" for=""><h4 class="panel-title"><a>Tags</a></h4></label>
  <input type="text" size="14" class="search_box pull-right" name="adv_s_tags" id="">
  <br><br>

  
<!-- </form>
<form action="<?php echo esc_url( add_query_arg( 'book_id', get_the_ID(), site_url('/search')));?>">> -->
  <input type="submit" name= "adv_search" id="adv_search" value="Search">

</form>