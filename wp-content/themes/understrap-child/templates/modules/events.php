<div class="container-fluid events " id="events">
  <div class="row ftco-section bg-light d-flex align-items-center justify-content-center">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <h2 class="mb-4">Our Latest Events</h2>
    </div>
    <?php 
      //***************** Arguments for fetching all the posts ****************//
      //how many posts per page. 
      $posts_per_page = 3;


      $args = array(
          'posts_per_page'   => $posts_per_page,
          'orderby'          => 'date',
          'order'            => 'DESC',
          'suppress_filters' => true,
          'post_type'        => $cpt_name,
          'paged'        => $paged,
          );
      //****************** end ***********************//

      //Fetching posts

      $lastposts = get_posts($args);
      if ( $lastposts ) {
          foreach ( $lastposts as $post ) : setup_postdata( $post ); $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); $author = get_the_author();?>
    <div class="col-md-3 ftco-animate fadeInUp ftco-animated event mb-5">
      <div class="blog-entry align-self-stretch">
          <a href="<?php echo get_permalink() ?>" class="block-20" style="background-image:url('<?php echo $featured_img_url;?>'), url('/wp-content/themes/understrap-child/img/twc_school.png')">
              </a>
              <div class="row">
          <div class="col-12 image"></div>
          <div class="col-12 d-flex align-items-center justify-content-center">
              <div class="text p-4 d-block">
                <?php $date = get_the_date(); ?>
                <div class="meta mb-3">
                  <div><a href="#"><?php the_field('date'); ?></a></div>
                </div>
                <h3 class="heading mb-4"><?php the_title() ?></h3>
                <p class="time-loc mb-3"><span class="mr-2"><i class="far fa-clock"></i> <?php the_field('start-time'); ?>-<?php the_field('end-time'); ?></span> <span><i class="fas fa-map-marker-smile"></i><?php the_field('venue'); ?></span></p>
                <p><?php echo excerpt(20); ?></p>
                <a class="btn btn_primary mt-3" href="<?php echo get_permalink() ?>">Read More</a>
              </div>
          </div>
      </div>
      </div>
    </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata();  } ?>
  </div>
</div>