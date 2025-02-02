<div class="page-section page-section-dark-blue" id="case-studies">





       <div class="row">
           <div class="small-12 column">
               <h2 class="page-section-title colour-white">
                           <?php echo esc_html(get_field('case_studies_section_title')); ?>
               </h2>
           </div>
       </div>








       <div class="row icon-boxes mobile-slider-icon-boxes">
               <?php while (have_rows(selector: 'case_studies_repeater')):
                   the_row(); ?>
               <div class="small-12 medium-6 large-4 column">
                   <div class="icon-box">
                       <div class="icon-box-icon">
                       <?php echo wp_get_attachment_image(get_sub_field('case_image'), 'full'); ?>
                   </div>


                       <h3 class="icon-box-title colour-white">
                   <?php echo esc_html(get_sub_field('case_studies_sub_title')); ?>
                   </h3>


                       <div class="icon-box-content">
                   <?php the_sub_field('case_studies_content'); ?>
               </div>
           </div>
        </div>
            <?php endwhile; ?>
   </div>






   </div>


<?php endif; ?>




