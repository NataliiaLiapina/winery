<?
$local = get_locale();
include( 'translate.php' );
?>

<!DOCTYPE html>
<html class="<?echo $local;?>">

<head>
    <meta charset="utf-8" />
	
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?> 
</head>

    <body <?php body_class(); ?>>
        <header>
            <nav class="mob_nav">
			
                <nav class="navbar navbar-inverse navlower_wrap">
                    <div class="container-fluid">
                        <div class="nav navbar-nav mob-head">
                            <img src="<?php bloginfo("template_directory");?>/img/main/logo.png" alt="logo" class="logo">
                            <div class="mob-head_contact">
                                <span class="text-color_blue"><?the_field('field_5adc390812460', 16);?></span>
                                <p>
                                    <a href="tel:<?the_field('field_5adc3aa59b531', 22);?>"><span class="glyphicon glyphicon-phone"></span><?the_field('field_5adc3aa59b531', 22);?></a>
                                    <a href="tel:<?the_field('field_5adc3aba9b532', 22);?>"><?the_field('field_5adc3aba9b532', 22);?></a>
                                </p>
                            </div>
                            <button type="button" class="navbar-toggle burger" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </nav>
				
                <div class="left-menu">
                    <ul>
                        <li class="mob_close"><a href="#">Закрыть <span class="fas fa-times"></span></a></li>
                        <?
								wp_nav_menu( array(
								'theme_location'  => 'header_menu',
								'menu'            => '', 
								'container'       => '', 
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '%3$s',
								));
						?>	 
                        
						<li class="dropdown">
							<? 
							$translate_info = $GLOBALS['q_config']; 
							$html = ''; 
							foreach ($translate_info['language_name'] as $key => $value) {				  
								if($key == $translate_info['language']){
									$html .= '
										<a class="dropdown-toggle" data-toggle="dropdown" href="/'.$key.'/">
											<span class="glyphicon glyphicon-globe"></span> '.$value.'
										</a> 
									';
								}
							} 
							$html .= '<ul class="dropdown-menu">'; 
							foreach ($translate_info['language_name'] as $key => $value) { 
								if($key != $translate_info['language']){
									$html .= '
										<li><a href="/'.$key.'/">'.$value.'</a></li>
									';
								} 
							} 
							$html .= '</ul>'; 
							
							echo $html;
							?>  
                        </li>
						
                        <li class="mob-form_wrap">
                            <form class="navbar-form mob-search" action="<?php echo home_url( '/' ) ?>">
                                <div class="input-group">
                                    <input type="text" class="form-control mob-form-control" placeholder="<?echo $serc;?>" name="s" id="s">
                                    <button class="btn btn-default mob-form_btn" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
				
            </nav>  
            <div class="main_menu">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
							<li class="dropdown">
							/*<?
							  
							$translate_info = $GLOBALS['q_config'];
							 
							 
							$html = ''; 
							foreach ($translate_info['language_name'] as $key => $value) {				  
								if($key == $translate_info['language']){
									$html .= '
										<a class="dropdown-toggle" data-toggle="dropdown" href="/'.$key.'/">
											<span class="glyphicon glyphicon-globe"></span> '.$value.'
										</a> 
									';
								}
							} 
							$html .= '<ul class="dropdown-menu">'; 
							foreach ($translate_info['language_name'] as $key => $value) { 
								if($key != $translate_info['language']){
									$html .= '
										<li><a href="/'.$key.'/">'.$value.'</a></li>
									';
								} 
							} 
							$html .= '</ul>'; 
							
							echo $html;
							?>   */
							<?php qtrans_generateLanguageSelectCode('text', 'language'); ?>
                            </li>
							<?
								wp_nav_menu( array(
								'theme_location'  => 'header_menu',
								'menu'            => '', 
								'container'       => '', 
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								));
							?>	 
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="tel:<?the_field('field_5adc3aa59b531', 22);?>"><span class="glyphicon glyphicon-phone"></span> <?the_field('field_5adc3aa59b531', 22);?></a></li>
                            <li><a href="tel:<?the_field('field_5adc3aba9b532', 22);?>"><?the_field('field_5adc3aba9b532', 22);?></a></li>
                        </ul>
                    </div>
                </nav>
				
                <div>
                    <nav class="navbar navbar-inverse navlower_wrap">
                        <div class="container-fluid">
                            <div class="nav navbar-nav">
                                <img src="<?php bloginfo("template_directory");?>/img/main/logo.png" alt="logo" class="logo">
                                <span class="text-color_blue"><?the_field('field_5adc390812460', 16);?></span>
                            </div>
							
                            <form class="navbar-form navbar-right" action="<?php echo home_url( '/' ) ?>">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?echo $serc;?>" name="s" id="s">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
							
                        </div>
                    </nav>
                </div>
				
            </div>
        </header>
		 
		