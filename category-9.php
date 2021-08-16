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
                    <li><a href="#" class=""><?echo $winegr;?></a></li>
                </ul>
            </div>
			
            <section class="winegrowers-wrap container-fluid">
                <div class="container winegrowers-btn-container">
                    <div class="btn-group filter-btn">
                        <div class="btn-group dropdown-wrap">
                            <button type="button" class="btn white-btn dropdown-toggle" data-toggle="dropdown">
                                <?echo $VBOB;?> <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li onclick="filterSelection('andj')"><a href="#">Андижанская область </a></li>
                                <li onclick="filterSelection('buchar')"><a href="#">Бухарская область</a></li>
                                <li onclick="filterSelection('guzar')"><a href="#">Джизакская область</a></li>
                                <li onclick="filterSelection('kashkad')"><a href="#">Кашкадарьинская область</a></li>
                                <li onclick="filterSelection('naman')"><a href="#">Наманганская область</a></li>
                                <li onclick="filterSelection('novo')"><a href="#">Навоийская область</a></li>
                                <li onclick="filterSelection('samar')"><a href="#">Самаркандская область</a></li>
                                <li onclick="filterSelection('hyrhan')"><a href="#">Сурхандарьинская область</a></li>
                                <li onclick="filterSelection('surd')"><a href="#">Сырдарьинская область</a></li>
                                <li onclick="filterSelection('tash')"><a href="#">Ташкентская область</a></li>
                                <li onclick="filterSelection('ferg')"><a href="#">Ферганская область</a></li>
                                <li onclick="filterSelection('horzem')"><a href="#">Хорезмская область</a></li>
                                <li onclick="filterSelection('resp')"><a href="#">Республика Каракалпакстан</a></li>
                            </ul>
                        </div>
						
                        <button type="button" class="btn green-btn first-green-btn" onclick="filterSelection('till_one')"><?echo $do1ga;?></button>
                        <button type="button" class="btn green-btn" onclick="filterSelection('one_ten')"><?echo $do1ga;?></button>
                        <button type="button" class="btn green-btn" onclick="filterSelection('ten_hun')"><?echo $do1ga;?></button>
                        <button type="button" class="btn green-btn" onclick="filterSelection('more')"><?echo $do1ga;?></button>
                    </div>
                </div>
				
                <div class="container">
                    <ul class="list">
						<?
					 
						if ( have_posts() ) :  
						query_posts('cat=9&orderby=date&order=DESC');    
						while (have_posts()) : the_post();   
					?>
                        <li class="list-name column <?the_field('field_5ae0656a13854');?> <?the_field('field_5ae066b1a15d2');?>"><a href="<?php the_permalink(); ?>"><?echo get_the_title()?></a></li>
                    <?
							 
							endwhile;   
							endif;
							wp_reset_query();
					?>    	 
                    </ul>
                </div>
            </section>
        </main>


<?php get_footer(); ?>