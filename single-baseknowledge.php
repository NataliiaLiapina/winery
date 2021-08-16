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
                    <li><a href="#" class="breadcrumbs-news"><?echo $base;?></a></li>
					<li><a href="#" class="breadcrumbs-news"><?echo get_the_title()?></a></li>
                </ul>  
            </div>
            <section class="container-fluid">
                <div class="row-article">
                    <div class="articles">
						<?while ( have_posts() ) : the_post();?>
                        <h2 class="articles-title"><?echo get_the_title()?></h2>
						
						<?the_content();?>
						
                        <div class="button-back_wrap"><a href="" onclick="window.history.go(-1); return false;" class="article-button_back"><span>&#8592;</span><?echo $nazad;?></a></div>
                        
						<div class="share"><?echo $podel;?>
                            <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target=" _blank " class="fab fa-facebook-f icon-soc_popup-f "></a>
                            <a href="#" target=" _blank " class="fab fa-telegram icon-soc_popup-t"></a>
                        </div>
						<?endwhile;?>	
                    </div>
                </div>
            </section>
        </main>
 

<?php get_footer(); ?> 