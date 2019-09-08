<section class="ftco-section" id="enterprenuers">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center fadeInUp ftco-animated">
            <h2 class="mb-4">Enterprenuers</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
            <?php if( have_rows('projects') ): ?>
            <?php while( have_rows('projects') ): the_row(); 

            // vars
            $title = get_sub_field('title');
            $content = get_sub_field('text');
            $image = get_sub_field('image');


            ?>
            <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                    <a class="block-20" style="background-image: url('<?php echo $image; ?>');">
                    </a>
                    <div class="text p-4 d-block">
                      <h3 class="heading mt-3"><?php echo $title; ?></h3>
                      <p><?php echo $title; ?></p>
                    </div>
                  </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
    </section>