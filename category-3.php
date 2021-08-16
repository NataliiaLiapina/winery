<?php get_header(); ?>
<?
include( 'translate.php' );
$post_title = get_the_title( $post );
$post_ID = get_the_ID();
?>



        <main class="">
		
            <div class="breadcrumbs-wrap">
              
			   <ul class="breadcrumbs">
                    <li><a href="<?php echo get_home_url(); ?>" class="fas fa-home breadcrumbs-home"></a></li>
                    <li><a href="#" class="breadcrumbs-news"><?echo $news;?></a></li>
                </ul>
            </div>
			
            <section class="container-fluid">
                <div class="row row-news">
                    <?
					$i=0;
						if ( have_posts() ) :  
						query_posts('cat=3&orderby=date&order=DESC');    
						while (have_posts()) : the_post();   
					?>		
                    <article class="column <?the_field('field_5ae04d5bd6c6f');?>">
                        <div class="content">
                            <img src="<?the_field('field_5ae04ba355436');?>" alt="Image">
                            <time class="time"><?php the_date('j.m.Y'); ?></time>
                            <h5 class="<?the_field('field_5aecd85755f63'); ?>"><?echo get_the_title()?></h5>
                           <p><?echo get_short_content(80);?></p>
                            <a href="<?php the_permalink(); ?>" class="article-button"><?echo $reedm;?>
                                <span>&#8594;</span>
                            </a>
                        </div>
                    </article>
					<?
							$i++;
							endwhile;   
							endif;
							wp_reset_query();
					?>
					
                </div>
            </section>
        </main>
 


<?php get_footer(); ?>