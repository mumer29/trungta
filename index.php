<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trungta
 */

get_header();
?>

	<main id="primary" class="site-main">

    <div class="about-header u-center-text u-margin-bottom-big">
            <h2 class="heading-subpage">Tervetuloa blogkirjoitukseeni</h2>
            <p class="paragraph-subpage">Täällä saat vinkkiä ja ohjeita nettisivun toteutuksessa</p>
    </div>

    <!--BLOG-->
    <div class="section-blog">
        <div class="row">
            <div class="col section-blog__card-columns">
                <?php  
                    while(have_posts()) {
                        the_post(); ?>
                <div class="section-blog__card triple">
                    <img src="https://source.unsplash.com/random/300x200" alt="Image One" class="section-blog__blog-img">
                    <div class="section-blog__card-body">
                        <h4 class="heading-tertiary"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <small class="text-muted"><?php the_author_posts_link(); ?> kirjoitti <?php the_time('n.j.y') ?> ja postattu tähän kategoriin nimellä <?php echo get_the_category_list(', '); ?></small>
                        <hr>
                        <?php the_excerpt(); ?>
                        <p><a class= "btnblog btnblog--primary" href="<?php the_permalink(); ?>">Lue kirjoittamani tarina &raquo;</a></p>
                    </div>
                </div>
                    <?php }
                echo paginate_links();
                ?>
                 
                <div class="section-blog__card">
                    <blockquote class="section-blog__card-body">
                        <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, quia.</p>
                        <footer class="section-blog__blockquote-footer">
                            <small class="text-muted">Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
            </div>
            

            <div class="col-1-of-3 section-blog__card-columns">
                <div class="section-blog__card">
                    <img src="https://source.unsplash.com/random/300x200" alt="Image Two" class="section-blog__blog-img">
                    <div class="section-blog__card-body">
                        <h4 class="heading-tertiary">Blog Two Post</h4>
                        <small class="text-muted">Trung Ta kirjoitti</small>
                        <hr>
                        <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem quas quisquam 
                            assumenda magnam repudiandae laudantium nobis molestias similique dolorum quae.</p>
                    </div>
                </div>

                <div class="section-blog__card">
                    <blockquote class="section-blog__card-body">
                        <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, quia.</p>
                        <footer class="section-blog__blockquote-footer">
                            <small class="text-muted">Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
            </div>

            <div class="col-1-of-3 section-blog__card-columns">
                <div class="section-blog__card">
                    <img src="https://source.unsplash.com/random/300x200" alt="Image One" class="section-blog__blog-img">
                    <div class="section-blog__card-body">
                        <h4 class="heading-tertiary">Blog Three Post</h4>
                        <small class="text-muted">Trung Ta kirjoitti</small>
                        <hr>
                        <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem quas quisquam 
                            assumenda magnam repudiandae laudantium nobis molestias similique dolorum quae.</p>
                    </div>
                </div>

                <div class="section-blog__card">
                    <blockquote class="section-blog__card-body">
                        <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, quia.</p>
                        <footer class="section-blog__blockquote-footer">
                            <small class="text-muted">Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

	</main><!-- #main -->

<?php
get_footer();