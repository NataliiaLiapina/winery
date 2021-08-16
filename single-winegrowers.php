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
                    <li><a href="#" class="breadcrumbs-serv_good"><?echo $winegr;?></a></li>
					<li><a href="#" class="breadcrumbs-news"><?echo get_the_title()?></a></li>
                </ul>  
            </div>
			<?while ( have_posts() ) : the_post();?>
            <section class="container-fluid profile-container">
                <div class="row-profile">
                    <div class="left-column-wrap col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="card">
                            
							<div class="avatar">
                                <img src="<?the_field('field_5ae069b9e5aee');?>" alt="Avatar">
                                <h3><?echo get_the_title()?></h3>
                            </div>
							
                            <div class="card-container">  
								<? while ( have_rows('field_5ae06a329bf13') ) : the_row(); ?>
									<p><?the_sub_field('field_5ae06a3e9bf14');?></p>
								<? endwhile; ?>	 
                                <br>
                            </div>
							
                        </div>
                        <br>
                    </div>
					
                    <div class="right-column-wrap col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="profi-row parent-container">
							<? while ( have_rows('field_5ae06b25450c2') ) : the_row(); ?>
							<div class="profi-column">
                                <div class="profi-content">
                                    <a href="<?the_sub_field('field_5ae06b2f450c3');?>" class="popup_content"><img src="<?the_sub_field('field_5ae06b2f450c3');?>" alt=""></a>
                                </div>
                            </div>
							<? endwhile; ?>	 
						</div>
                        <div class="profi-text">
							<?the_field('field_5ae06bb51b5c0');?>
                        </div>
                    </div>
                </div>
                
				<div class="button-back_wrap"><a href="" onclick="window.history.go(-1); return false;" class="article-button_back"><span>&#8592;</span><?echo $nazad;?></a></div>
   
            </section>
			<?endwhile;?>	
		</main>


<?php get_footer(); ?> 