<?php get_header(); ?>

<div class="conteiner">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
        <div class="col-md-12">
            <div class="card" >
                <img src="..." class="card-img-top" alt="картинка">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title()?></h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>


        </div>

        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
            <p>Постов нет...</p>
        <?php endif; ?>
    </div>
</div>



<?php get_footer(); ?>