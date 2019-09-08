<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<div class="wrapper post-hero hero d-flex align-items-center justify-content-center" style="background-image:url('<?php echo $featured_img_url; ?>')">
  <div class="container-fluid  d-flex align-items-center justify-content-center" >
  <a href="/" class="back"><i class="far fa-times-circle"></i></a>
    <div class="container-fluid d-flex align-items-center justify-content-center hero-content">
      <div class="row ">
        <div class="col-md-12">
          <?php $date = get_the_date(); ?>
          <div class="hero--subtitle">
            <?php echo $date; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>