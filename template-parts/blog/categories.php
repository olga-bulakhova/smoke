 <?php
  $args_cat = [
    'order' => 'ASC',
    'hide_empty' => true,
  ];

  $ctg = get_categories($args_cat);

  ?>


 <div class="categories-list">
   <?php foreach ($ctg as $c) : ?>
     <a class="categories-item custom-border-color-primary <?php if (get_queried_object() !== null && $c->term_id == get_queried_object()->term_id) echo 'active' ?>" href="<?php echo get_category_link($c->term_id) ?>">
       <?php echo $c->name ?>
     </a>
   <?php endforeach; ?>
 </div>

