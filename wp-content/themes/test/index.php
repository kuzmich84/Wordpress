<?php get_header(); ?>

<div class="conteiner">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
        <div class="col-md-9">
            <div class="card" >
                <div class="card-header">

                    <a href="<?php the_permalink()?>"> <?php the_title('<h5 class="card-title"</h5>'); ?></a>
                </div>



                <div class="card-body">
                    <?php if ( has_post_thumbnail()) : ?>

                        <?php the_post_thumbnail('my-thumb',
                            array('class'=>'float-left mr-3')); ?>
                    <?php else : ?>
                        <img src="https://picsum.photos/150/150/?random" alt="картинко" width="100px" height="100px" class="float-left mr-3" >
                    <?php endif ?>

                    <p class="card-text"><?php the_excerpt();?></p>

                </div>

                    <div class="card-footer"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a></div>


            </div>


        </div>

        <?php endwhile; ?>
            <!-- post navigation -->
        <?php the_posts_pagination(array(
            'show_all' => false,
            'end_size' => 1,
            'mid_size' => 2,
            'type'     =>'list',
                'prev_text'    => ('« '),
                'next_text'    => (' » '),

            )); ?>
        <?php else: ?>
            <!-- no posts found -->
            <p>Постов нет...</p>
        <?php endif; ?>
    </div>
</div>



<?php get_footer(); ?>