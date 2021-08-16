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
                    <li><a href="#" class=""><?echo $foto;?></a></li>
                </ul> 
            </div>
			
            <section class="photogallery-wrap container-fluid">
                <a class="video" href="<?the_field('field_5ae05e7647ed9', 20);?>">
                    <div class="photogallery-video" style="background-image: url(<?the_field('field_5aec1cb7f36cc');?>);">
                        <span class="glyphicon glyphicon-triangle-right"></span>
                    </div>
                </a>
				
                <div class="photogallery-row parent-container">
					<? while ( have_rows('field_5ae05f11649a7', 20) ) : the_row(); ?>
					<div class="photogallery-column">
					<? while ( have_rows('field_5ae0618eac757') ) : the_row(); ?>
					<div class="photogallery-img">
                            <a href="<?the_sub_field('field_5ae0619bac758');?>" class="popup_content">
                            <img class="popup_content" src="<?the_sub_field('field_5ae0619bac758');?>" alt="">
                            <span class="item_cont"><?the_sub_field('field_5ae061a5ac759');?></span>
                            </a>
                    </div>
					<? endwhile; ?>	 
					</div>
					<? endwhile; ?>	 
						
                 	
                </div>
				
				
            </section>
        </main>
 
		
<?php get_footer(); ?> 