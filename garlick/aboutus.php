<?php
/*
 Template Name:About use
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			
						<div class="tizeraboutuse"></div>


						<div class="maintext">
						<div class="breadcrumb_m"> 
<ul class="breadcrumbs_m" id="breadcrumbs_m"> 
<?php prom_the_breadcrumb();?> 
</ul> 
</div>
							<h2>Чем мы отличаемся от конкурентов</h2>
							<p>Чесночок - это компания , которая занимается выращиванием и продажей чеснока. Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Чесночок - это компания , которая занимается выращиванием и продажей чеснока. Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь.

Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём.</p>
                         <img src="http://wptuts.loc/wp-content/uploads/2017/03/abouttext.png"><br>
                          <h2> Кто мы?</h2>
                         <p>Чесночок - это компания , которая занимается выращиванием и продажей чеснока. Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца.</p>
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

                          
							

						

				
<?php get_footer(); ?>
