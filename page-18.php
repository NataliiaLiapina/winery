<?php get_header(); ?>
<?
$post_title = get_the_title( $post );
$post_ID = get_the_ID();
 
?>
        <main class="head_about">
		
            <div class="jumbotron parallax">
                <div class="container-fluid">
                    <div class="row">
                        <h1 class="head_about-title"><?echo $post_title?></h1>
                    </div>
                </div>
            </div>
			
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="photo_col">
                            <img class="photo" src="<?the_field('field_5addf53edb498', 18);?>" alt="photo">
                        </div> 
                        <div class="photo_col1">
                            <h3 class="img-responsive "><?the_field('field_5addf70e5d701', 18);?></h3>
                            <h3 class="photo_text"><?the_field('field_5addf71b5d702', 18);?></h3>
                        </div>
                    </div>
                </div>
            </section>
			
            <section class="about-text">
                <article class="about-text_col">
                    <div class="blue_line"></div>
                    <div>
						<?the_field('field_5addf75c3c489', 18);?>
                    </div>
                </article>
                <article class="about-text_col">
                    <div class="red_line"></div>
                    <div>
                        <?the_field('field_5addf76b3c48a', 18);?>
                    </div>
                </article class="about-text_col">
                <article>
                    <div class="green_line"></div>
                    <div>
                        <?the_field('field_5addf779d90e5', 18);?>
                    </div>
                </article>
            </section>
			
            <section>
                <div class="parent-container reward container-fluid">
                    <div class="reward-col">
                        <a href="<?the_field('field_5addf7ee9795b', 18);?>" class="popup_content"><img src="<?the_field('field_5addf7ee9795b', 18);?>" alt="diploma"></a>
                    </div>
                    <div class="reward-col">
                        <a href="<?the_field('field_5addf7fb9795c', 18);?>" class="popup_content"> <img src="<?the_field('field_5addf7fb9795c', 18);?>" alt="medal"></a>
                    </div>
                </div>
            </section>
			
        </main>
		
		
<?php get_footer(); ?> 