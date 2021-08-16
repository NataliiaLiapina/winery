<?php get_header(); ?>
<?
include( 'translate.php' );
$post_title = get_the_title( $post );
$post_ID = get_the_ID();
?>



        <main class="">
             
			
            <section class="container-fluid">
                <div class="row-article">
                    <div class="articles">
					<?while ( have_posts() ) : the_post();?>
						 
						<h2><?echo get_the_title()?></h2>
						
						<?the_content();?>
						
      
						 
					<?endwhile;?>	
                    </div>
                </div>
            </section>
			
        </main>

		
		
<?php get_footer(); ?> 