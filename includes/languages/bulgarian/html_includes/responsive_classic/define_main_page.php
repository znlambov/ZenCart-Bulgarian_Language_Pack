<?php if ( $detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' ) { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book-mobile.png" alt="вземи своето ръководство днес" title="Имаш ли вече свое? Присъедини се към хилядите Zen Cart потребители, които вече закупиха своето единствено и най-подробно ръководство на потребителя!" class="home-image" /></a>
  
<?php  } else if ( $detect->isTablet() || $_SESSION['layoutType'] == 'tablet' ){ ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="вземи своето ръководство днес" title="Имаш ли вече свое? Присъедини се към хилядите Zen Cart потребители, които вече закупиха своето единствено и най-подробно ръководство на потребителя!" class="home-image" /></a>

<?php  } else if ( $_SESSION['layoutType'] == 'full' ) { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="вземи своето ръководство днес" title="Имаш ли вече свое? Присъедини се към хилядите Zen Cart потребители, които вече закупиха своето единствено и най-подробно ръководство на потребителя!" class="home-image" /></a>

<?php  } else { ?>

<a href="http://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="вземи своето ръководство днес" title="Имаш ли вече свое? Присъедини се към хилядите Zen Cart потребители, които вече закупиха своето единствено и най-подробно ръководство на потребителя!" class="home-image" /></a>

<?php  } ?>
<p class="biggerText">Шаблонът използва PHP Mobile Detect за да оптимизира разположението на страницата според устройството.  
    Ако сте на настолен компютър и искате да видите разположението за таблет <a class="red" href="index.php?main_page=index&amp;layoutType=tablet">използвйте тази връзка.</a>  
    Ако искате да видите мобилното разположение <a class="red" href="index.php?main_page=index&amp;layoutType=mobile">използвайте тази връзка.</a>  
    За да се върнете към стандартно разположение <a class="red" href="index.php?main_page=index&amp;layoutType=default">използвайте тази връзка.</a></p>
    
<p>Това съдържание се намира във файл: <code> /languages/bulgarian/html_includes/YOUR_TEMPLATE/define_main_page.php</code></p>
<p>Можете бързо да редактирате съдържанието през Админ->Инструменти->Редактор на дефинирани страница, изберете define_main_page от падащото меню.</p>
<p><strong>Забележка: Винаги правете резервно копие на файловете в<code> /languages/bulgarian/html_includes/your_template</code></strong></p>
 