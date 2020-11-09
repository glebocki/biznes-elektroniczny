<?php
/* Smarty version 3.1.33, created on 2020-11-09 19:14:07
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa986efa0fe95_62848009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1600952248,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5fa986efa0fe95_62848009 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/c99a9c01680575194fae6e55dd93113eed8b4bc2_kolekcja-jesien-zima-2020-buty-i-torebki-casu-pl-new.jpg" alt="Test">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Próba</h2>
                  <div class="caption-description"><p>To jest test</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/sample-2.jpg" alt="">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">2slajd</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-EN&amp;utm_content=download">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/sample-3.jpg" alt="">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">3 slajd</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Poprzedni</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Następny</span>
      </a>
    </div>
  </div>
<?php }
}
