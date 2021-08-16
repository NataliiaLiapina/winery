 <?
$local = get_locale();
include( 'translate.php' );
?>
 <footer>
            <div class="container-fluid">
                <div class="row footer_row_wrap">
				
                    <article class="col-lg-3 col-md-3 col-sm-3">
                        <div class="footer-col_wrap">
                            <h3 class="footer-logo">UZUMFERMER.UZ</h3>
                        </div>
                    </article>
					
                    <article class="col-lg-4 col-md-4 col-sm-5">
                        <div class="footer-col_wrap">
                            <h4 class="footer-title">Контанты</h4>
                            <p><span class="glyphicon glyphicon-phone icon"></span><a href="tel:<?the_field('field_5adc3aa59b531', 22);?>"><span class="footer-text_tel"><?the_field('field_5adc3aa59b531', 22);?></span></a>
                                <br>
                                <a href="tel:<?the_field('field_5adc3aba9b532', 22);?>"><span class="footer-text_tel1"><?the_field('field_5adc3aba9b532', 22);?></span></a></p>
								
                            <p><span class="glyphicon glyphicon-envelope icon"></span><a href="mailto:<?the_field('field_5adc3b6740e41', 22);?>"><span class="footer-text_email"><?the_field('field_5adc3b6740e41', 22);?></span></a></p>
							
                            <p><span class="fab fa-skype icon"></span><a href="callto:<?the_field('field_5adc3b82ccfcf', 22);?>"><span class="footer-text_skype"><?the_field('field_5adc3b82ccfcf', 22);?></span></a></p>
                            <p>
								<span class="glyphicon glyphicon-map-marker icon"></span> 
								<?the_field('field_5adc3b9614e20', 22);?>
							</p>
								
                            <p>
                                <a href="<?the_field('field_5adc3bb494396', 22);?>" target="_blank" class="fab fa-facebook icon-soc_f"></a>
                                <a href="<?the_field('field_5adc3bbe94397', 22);?>" target="_blank" class="fab fa-telegram icon-soc_t"></a>
                            </p>
                        </div>
                    </article>
					
                    <article class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                        <div class="footer-col_wrap">
                            <h4 class="footer-title fb_title"><?echo $obrsv;?></h4>
                            <form action="http://formspree.io/gav11016@mail.ru" class="main_form" novalidate target="_blank" method="post">
                                <label class="form-group">
                                    <input type="text" name="name" placeholder="<?echo $name;?>" data-validation-required-message="Вы не ввели Ваше имя" required />
                                    <span class="help-block text-danger"></span>
                                </label>
                                <label class="form-group">
                                    <input type="tel" name="tel" placeholder="<?echo $tel;?>" data-validation-required-message="Вы не ввели номер телефона" required />
                                    <span class="help-block text-danger"></span>
                                </label>
                                <label class="form-group">
                                    <input type="email" name="email" placeholder="<?echo $email;?>" data-validation-required-message="Вы не ввели E-mail" required />
                                    <span class="help-block text-danger"></span>
                                </label>
                                <label class="form-group">
                                    <textarea name="message" placeholder="<?echo $message;?>" data-validation-required-message="Вы не ввели сообщение" required></textarea>
                                    <span class="help-block text-danger"></span>
                                </label>
                                <button type="submit" class="form-btn"><?echo $send;?><span>&#8594;</span></button>
							</form>
                        </div>
                    </article>
                </div>
                <p class="dev">Developed by Zhukov & Liapina </p>
            </div>
        </footer>	
		
		<?php wp_footer(); ?> 
		
    </body>
</html>