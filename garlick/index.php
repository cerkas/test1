<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap cf">
				    <div class="afternav"></div>
				    <div class="chesnok">
                         <div class="odnozubka">
                         	
                         </div>
				         <div class="zubok"></div>
				         <div class="vozduska"></div>
				         </div>
				    <div class="ourwork">
				    	<h2>КАК МЫ РАБОТАЕМ</h2>
				    	<div class="ellipse1">
				    	   <div class="ellipseelement1">
				    		
				              </div>
				    		</div>
				        </div>
				        <div class="ourclient">
				            <h2 class="client">НАШИ КЛИЕНТЫ </h2>
				            <div class="line"></div>
				            <div class="company">
				            	
				            </div>
				        	
				       </div>
				       <div class="form">
				            <h3>Не нашли что искали?</h3>
				    <p>Заполните форму и мы обязательно найдем продукцию именно для вас!
                      Или свяжитесь с нами через контакты ниже и мы с радостью вам ответим.</p>
				       	    <input name="name" id="applicationName"  placeholder="Как к вам обращаться*" required />
				       	    <input name="email" type="email" id="applicationEmail"  placeholder="Ваш  E-mail*" required/>
				       	    <input name="" type="" id="applicationTask"  placeholder="Опишите вашу задачу..." required/>
				       	    <button class="applicationButton" type="submit" form="application"> Оставить заявку </button>
				       </div>
				    

				

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                                                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>

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
									</article>-->

							<?php //endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>
			


<?php get_footer(); ?>
