<?php get_header(); ?>




	




			<div id="content">
				<div id="inner-content" class="wrap cf">
				    <!--<div class="afternav"></div>-->
				    
		<div class="wrapper">

	                    <input type="radio" name="point" id="slide1" checked>
	                    <input type="radio" name="point" id="slide2">
	                    <input type="radio" name="point" id="slide3">
	                    <input type="radio" name="point" id="slide4">
	                    <input type="radio" name="point" id="slide5">

	<div class="slider">
		<div class="slides slide1"></div>
		<div class="slides slide2"></div>
		<div class="slides slide3"></div>
		
		<div class="texttizer">
		    
			<div class="text "><h1>Выращиваем и<br>продаем <span>чеснок</span></h1>
			<p>Честно, <span>самый</span> чесночный<br>чеснок в Украине!</p>
			</div>
			
            <div class="text">
				<h1>Чеснок только <span>лучшего</span> качества</h1>
				<p>Сделано в Украине</p>
			</div>
		</div>
	</div>
<div class="greentizer">
		<div class="flower">
			<div class="imggreen"><img src="http://wptuts.loc/wp-content/uploads/2017/03/sprout.png"></div>
			<div class="textgreen"><p>Экологически <br> чистый продукт</p></div>
		</div>
		<div class="like">
			<div class="imggreen"><img src="http://wptuts.loc/wp-content/uploads/2017/03/like.png"></div>
			<div class="textgreen"><p>отборное<br> качество</p></div>


		</div>
		<div class="truck" >
			<div class="imggreen"><img src="http://wptuts.loc/wp-content/uploads/2017/03/truck.png"></div>
			<div class="textgreen"><p>стабильный<br> поставщик</p></div>


		</div>
		<div class="bor" >
			<div class="imggreen"><img src="http://wptuts.loc/wp-content/uploads/2017/03/export.png"></div>
			<div class="textgreen"><p>экспортер <br> за границу</p></div>


		</div>
	</div>	


	<div class="controls">
		<label for="slide1"></label>
		<label for="slide2"></label>
		<label for="slide3"></label>

		
	</div>
	
	
</div>

				    <div class="chesnok " >

                         <div class="odnozubka  bounceInLeft animated  ">
                         
                         <div class="mask">
                              <img src="http://wptuts.loc/wp-content/uploads/2017/03/btn_podrobnee-1.png">
                             <a href="http://wptuts.loc/odnozubka/" class="info"><span>Подробнее</span></a>
                         </div>
                           
                         	
                         </div>
				         <div class="zubok  bounceInLeft animated  ">
				         	<div class="mask">
                              <img src="http://wptuts.loc/wp-content/uploads/2017/03/btn_podrobnee-1.png">
                             <a href="http://wptuts.loc/odnozubka/" class="info"><span>Подробнее</span></a>
                         </div>
				         </div>
				         <div class="vozduska  bounceInLeft animated  ">
				         	<div class="mask">
                              <img src="http://wptuts.loc/wp-content/uploads/2017/03/btn_podrobnee-1.png">
                             <a href="http://wptuts.loc/odnozubka/" class="info"><span>Подробнее</span></a>
                         </div>
				         </div>
				       </div>
				    <div class="ourwork fadeInUp animated">
				    	<h2>КАК МЫ РАБОТАЕМ</h2><br>
				    
				    	   <div class="ellipseelement1">
				    		
				              </div>
				    		
				        </div>
				        <div class="ourclient ">
				            <h2 class="client">НАШИ КЛИЕНТЫ </h2>
				            <div class="line"></div>
				            <div class="company bounceInRight animated">
				            	
				            </div>
				        	
				       </div>
				       <form id="contact" action="/wp-content/themes/eddiemachado-bones-79c7610/mail.php" method="post">
          <h3>Не нашли что искали?</h3>
          <p id="textform">Заполните форму и мы обязательно найдем продукцию именно для вас!<br>
Или свяжитесь с нами через контакты ниже и мы с радостью вам ответим.</p>
          <div id="fields">
	          <div id="text1"><input type="text" name="name" id="author" placeholder="Как к вам обращаться*" required></div>
	          <div id="email1"><input type="email" name="email" id="email" placeholder="E-mail" required></div>
	          <div id="message1"><input name="message" id="comment"  placeholder="Опишите вашу задачу..." required></input></div>
	          <button type="file" id="file" class="go" method="post"><span>Прикрепить файл</span></button>
	           <button type="image" id="submit" class="go"><span>Оставить заявку</span></button>
	          </div>
         </form>
        

				       
				    

				

						<!--<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<!--<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                                                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>-->

								<!--<section class="entry-content cf">-->
									<?php /*the_content();*/ ?>
									<!--<div class="centerpage">							   
								<div class="comments_number">
									<img src="wp-content/themes/eddiemachado-bones-79c7610/library/images/lukchesnok03.png" width="" height=""></span>
								</div>-->
								</section>

								<!--<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php //comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>


                 	<?php //printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php //the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>-->


								</footer>

							</article>

							<?php //endwhile; ?>

									<?php //bones_page_navi(); ?>

							<?php //else : ?>
								
								

										<!--<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php //endif; ?>


						</main>-->
						
						
                       <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                       <link rel="stylesheet" media="all" href="css/animate.css">
                       <script src="js/wow.min.js"></script>
                       <script>new WOW().init();</script>
						

					<div class="sidepage"><?php get_sidebar(); ?><div>

				</div>

			</div>
			


<?php get_footer(); ?>

