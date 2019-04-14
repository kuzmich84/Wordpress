<?php get_header(); ?>

    <div class="conteiner">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <!-- post -->
                <div class="col-md-12">
                    <div class="card" >

                        <div class="card-body">
                           <h1 class="card-title"><?php the_title(); ?></h1>
                            <?php the_post_thumbnail('my-post');?>
                            <p class="card-text"><?php the_content(''); ?></p>

                        </div>
                    </div>


                </div>

            <?php endwhile; ?>
                <!-- post navigation -->

        </div>
    </div>



<?php get_footer(); ?>