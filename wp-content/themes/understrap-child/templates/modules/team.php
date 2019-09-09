<section class="ftco-section d-flex align-items-center justify-content-center" di="team">
        <div class="container ">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center fadeInUp ftco-animated">
              <h2 class="mb-4">Team</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="row d-flex align-items-center justify-content-center">
                <?php if( have_rows('team') ): ?>
                <?php while( have_rows('team') ): the_row(); 

                // vars
                $name = get_sub_field('name');
                $position = get_sub_field('position');
                $text = get_sub_field('text');
                $image = get_sub_field('image');
    
    
                ?>
                <div class="col-lg-6 d-flex mb-sm-4 ftco-animate fadeInUp ftco-animated mb-5">
                  <div class="staff">
                      <div class="d-flex mb-4 flex-direction">
                          <div class="img" style="background-image: url(<?php echo $image; ?>);"></div>
                          <div class="info">
                              <h3><?php echo $name; ?></h3>
                              <span class="position"><?php echo $position; ?></span>
                                  <p><?php echo $text; ?></p>
                          </div>
                      </div>
                  </div>
              </div>
                <?php endwhile; ?>
                <?php endif; ?>
          </div>
        </div>
      </section>