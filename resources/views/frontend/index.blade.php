@extends('frontend.layouts.master')

@section('head')
  <title>Jana Aygerim</title>
  <link rel="stylesheet" href="/css/pages/indexPage.css">
@endsection
  
@section('content')


<div class="container">
  <div class="first-row">
    <div class="js-slider-left">
      <div>
        <p>Болгарки</p>
        <p>от 5000 тг.</p>
      </div>
      <div>
        <p>Болгарки</p>
        <p>от 70000 тг.</p>
      </div>
      <div>
        <p>Болгарки</p>
        <p>от 900000 тг.</p>
      </div>
    </div>
    <div class="js-slider-center">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="js-slider-right">
      <div>
        <p>Набор ключей</p>
        <p>от 5000 тг.</p>
      </div>
      <div>
        <p>НАбор ключей</p>
        <p>от 70000 тг.</p>
      </div>
      <div>
        <p>Набор ключей</p>
        <p>от 900000 тг.</p>
      </div>
    </div>
  </div>
<!-- end of first-row -->
  <div class="second-row">
      <h2>Каталог строительных материалов</h2>




      <div class="show-catalogue" id="c1">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Стройматериалы"</p>
        <div class="catalogue-content">
          <div class="block">
            <p>Напольное покрытие</p>
            <a href="#">Грязезащитные покрытия</a>
            <a href="#">Доска паркетная</a>
            <a href="#">Ковролин</a>
            <a href="#">Ковры</a>
            <a href="#">Ламинат</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Обои</p>
            <a href="#">Бумажные обои</a>
            <a href="#">Обои виниловые на бумаге</a>
            <a href="#">Обои виниловые на флизелине</a>
            <a href="#">Обои из натуральных материалов</a>
            <a href="#">Пленка самоклеящаяся</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Плитка</p>
            <a href="#">Бордюр</a>
            <a href="#">Декор облицовочный</a>
            <a href="#">Керамогранит</a>
            <a href="#">Мозаика</a>
            <a href="#">Плитка стеновая и напольная</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Порожки, раскладки, стыки</p>
            <a href="#">Порожки</a>
            <a href="#">Профиль для плитки</a>
            <a href="#">Профиль крепежный и стыковочный</a>
            <a href="#">Раскладка для плитки</a>
            <a href="#">Стыки для ванн</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Потолочные покрытия</p>
            <a href="#">Армстронг</a>
            <a href="#">Декоративные элементы</a>
            <a href="#">Плинтус потолочный</a>
            <a href="#">Плитка потолочная</a>
            <a href="#">Розетки</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Стеновые покрытия</p>
            <a href="#">Комплектующие к подоконникам</a>
            <a href="#">Панели стеновые МДФ</a>
            <a href="#">Панели стеновые ПВХ</a>
            <a href="#">Уголок арочный, отделочный</a>
            <a href="#">Показать все</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c2">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Отделочные материалы"</p>
        <div class="catalogue-content">
          <div class="block">
            <p>Напольное покрытие</p>
            <a href="#">Грязезащитные покрытия</a>
            <a href="#">Доска паркетная</a>
            <a href="#">Ковролин</a>
            <a href="#">Ковры</a>
            <a href="#">Ламинат</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Обои</p>
            <a href="#">Бумажные обои</a>
            <a href="#">Обои виниловые на бумаге</a>
            <a href="#">Обои виниловые на флизелине</a>
            <a href="#">Обои из натуральных материалов</a>
            <a href="#">Пленка самоклеящаяся</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Плитка</p>
            <a href="#">Бордюр</a>
            <a href="#">Декор облицовочный</a>
            <a href="#">Керамогранит</a>
            <a href="#">Мозаика</a>
            <a href="#">Плитка стеновая и напольная</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Порожки, раскладки, стыки</p>
            <a href="#">Порожки</a>
            <a href="#">Профиль для плитки</a>
            <a href="#">Профиль крепежный и стыковочный</a>
            <a href="#">Раскладка для плитки</a>
            <a href="#">Стыки для ванн</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Потолочные покрытия</p>
            <a href="#">Армстронг</a>
            <a href="#">Декоративные элементы</a>
            <a href="#">Плинтус потолочный</a>
            <a href="#">Плитка потолочная</a>
            <a href="#">Розетки</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Стеновые покрытия</p>
            <a href="#">Комплектующие к подоконникам</a>
            <a href="#">Панели стеновые МДФ</a>
            <a href="#">Панели стеновые ПВХ</a>
            <a href="#">Уголок арочный, отделочный</a>
            <a href="#">Показать все</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c3">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "САнтехника, отопление и водоснабжение"</p>
        <div class="catalogue-content">
          <div class="block">
            <p>Напольное покрытие</p>
            <a href="#">Грязезащитные покрытия</a>
            <a href="#">Доска паркетная</a>
            <a href="#">Ковролин</a>
            <a href="#">Ковры</a>
            <a href="#">Ламинат</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Обои</p>
            <a href="#">Бумажные обои</a>
            <a href="#">Обои виниловые на бумаге</a>
            <a href="#">Обои виниловые на флизелине</a>
            <a href="#">Обои из натуральных материалов</a>
            <a href="#">Пленка самоклеящаяся</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Плитка</p>
            <a href="#">Бордюр</a>
            <a href="#">Декор облицовочный</a>
            <a href="#">Керамогранит</a>
            <a href="#">Мозаика</a>
            <a href="#">Плитка стеновая и напольная</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Порожки, раскладки, стыки</p>
            <a href="#">Порожки</a>
            <a href="#">Профиль для плитки</a>
            <a href="#">Профиль крепежный и стыковочный</a>
            <a href="#">Раскладка для плитки</a>
            <a href="#">Стыки для ванн</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Потолочные покрытия</p>
            <a href="#">Армстронг</a>
            <a href="#">Декоративные элементы</a>
            <a href="#">Плинтус потолочный</a>
            <a href="#">Плитка потолочная</a>
            <a href="#">Розетки</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Стеновые покрытия</p>
            <a href="#">Комплектующие к подоконникам</a>
            <a href="#">Панели стеновые МДФ</a>
            <a href="#">Панели стеновые ПВХ</a>
            <a href="#">Уголок арочный, отделочный</a>
            <a href="#">Показать все</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c4">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Электрика и освещение"</p>
        <div class="catalogue-content">
          <div class="block">
            <p>Напольное покрытие</p>
            <a href="#">Грязезащитные покрытия</a>
            <a href="#">Доска паркетная</a>
            <a href="#">Ковролин</a>
            <a href="#">Ковры</a>
            <a href="#">Ламинат</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Обои</p>
            <a href="#">Бумажные обои</a>
            <a href="#">Обои виниловые на бумаге</a>
            <a href="#">Обои виниловые на флизелине</a>
            <a href="#">Обои из натуральных материалов</a>
            <a href="#">Пленка самоклеящаяся</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Плитка</p>
            <a href="#">Бордюр</a>
            <a href="#">Декор облицовочный</a>
            <a href="#">Керамогранит</a>
            <a href="#">Мозаика</a>
            <a href="#">Плитка стеновая и напольная</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Порожки, раскладки, стыки</p>
            <a href="#">Порожки</a>
            <a href="#">Профиль для плитки</a>
            <a href="#">Профиль крепежный и стыковочный</a>
            <a href="#">Раскладка для плитки</a>
            <a href="#">Стыки для ванн</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Потолочные покрытия</p>
            <a href="#">Армстронг</a>
            <a href="#">Декоративные элементы</a>
            <a href="#">Плинтус потолочный</a>
            <a href="#">Плитка потолочная</a>
            <a href="#">Розетки</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Стеновые покрытия</p>
            <a href="#">Комплектующие к подоконникам</a>
            <a href="#">Панели стеновые МДФ</a>
            <a href="#">Панели стеновые ПВХ</a>
            <a href="#">Уголок арочный, отделочный</a>
            <a href="#">Показать все</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c5">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Геоматериалы"</p>
        <div class="catalogue-content">
          <div class="block">
            <p>Напольное покрытие</p>
            <a href="#">Грязезащитные покрытия</a>
            <a href="#">Доска паркетная</a>
            <a href="#">Ковролин</a>
            <a href="#">Ковры</a>
            <a href="#">Ламинат</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Обои</p>
            <a href="#">Бумажные обои</a>
            <a href="#">Обои виниловые на бумаге</a>
            <a href="#">Обои виниловые на флизелине</a>
            <a href="#">Обои из натуральных материалов</a>
            <a href="#">Пленка самоклеящаяся</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Плитка</p>
            <a href="#">Бордюр</a>
            <a href="#">Декор облицовочный</a>
            <a href="#">Керамогранит</a>
            <a href="#">Мозаика</a>
            <a href="#">Плитка стеновая и напольная</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Порожки, раскладки, стыки</p>
            <a href="#">Порожки</a>
            <a href="#">Профиль для плитки</a>
            <a href="#">Профиль крепежный и стыковочный</a>
            <a href="#">Раскладка для плитки</a>
            <a href="#">Стыки для ванн</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Потолочные покрытия</p>
            <a href="#">Армстронг</a>
            <a href="#">Декоративные элементы</a>
            <a href="#">Плинтус потолочный</a>
            <a href="#">Плитка потолочная</a>
            <a href="#">Розетки</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Стеновые покрытия</p>
            <a href="#">Комплектующие к подоконникам</a>
            <a href="#">Панели стеновые МДФ</a>
            <a href="#">Панели стеновые ПВХ</a>
            <a href="#">Уголок арочный, отделочный</a>
            <a href="#">Показать все</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c6">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Инструменты и оборудования"</p>
        <div class="catalogue-content">
          <div class="block">
            <p>Напольное покрытие</p>
            <a href="#">Грязезащитные покрытия</a>
            <a href="#">Доска паркетная</a>
            <a href="#">Ковролин</a>
            <a href="#">Ковры</a>
            <a href="#">Ламинат</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Обои</p>
            <a href="#">Бумажные обои</a>
            <a href="#">Обои виниловые на бумаге</a>
            <a href="#">Обои виниловые на флизелине</a>
            <a href="#">Обои из натуральных материалов</a>
            <a href="#">Пленка самоклеящаяся</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Плитка</p>
            <a href="#">Бордюр</a>
            <a href="#">Декор облицовочный</a>
            <a href="#">Керамогранит</a>
            <a href="#">Мозаика</a>
            <a href="#">Плитка стеновая и напольная</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Порожки, раскладки, стыки</p>
            <a href="#">Порожки</a>
            <a href="#">Профиль для плитки</a>
            <a href="#">Профиль крепежный и стыковочный</a>
            <a href="#">Раскладка для плитки</a>
            <a href="#">Стыки для ванн</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Потолочные покрытия</p>
            <a href="#">Армстронг</a>
            <a href="#">Декоративные элементы</a>
            <a href="#">Плинтус потолочный</a>
            <a href="#">Плитка потолочная</a>
            <a href="#">Розетки</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Стеновые покрытия</p>
            <a href="#">Комплектующие к подоконникам</a>
            <a href="#">Панели стеновые МДФ</a>
            <a href="#">Панели стеновые ПВХ</a>
            <a href="#">Уголок арочный, отделочный</a>
            <a href="#">Показать все</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c7">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Дача и сад"</p>
        <div class="catalogue-content">
          <div class="block">
            <p>Напольное покрытие</p>
            <a href="#">Грязезащитные покрытия</a>
            <a href="#">Доска паркетная</a>
            <a href="#">Ковролин</a>
            <a href="#">Ковры</a>
            <a href="#">Ламинат</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Обои</p>
            <a href="#">Бумажные обои</a>
            <a href="#">Обои виниловые на бумаге</a>
            <a href="#">Обои виниловые на флизелине</a>
            <a href="#">Обои из натуральных материалов</a>
            <a href="#">Пленка самоклеящаяся</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Плитка</p>
            <a href="#">Бордюр</a>
            <a href="#">Декор облицовочный</a>
            <a href="#">Керамогранит</a>
            <a href="#">Мозаика</a>
            <a href="#">Плитка стеновая и напольная</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Порожки, раскладки, стыки</p>
            <a href="#">Порожки</a>
            <a href="#">Профиль для плитки</a>
            <a href="#">Профиль крепежный и стыковочный</a>
            <a href="#">Раскладка для плитки</a>
            <a href="#">Стыки для ванн</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Потолочные покрытия</p>
            <a href="#">Армстронг</a>
            <a href="#">Декоративные элементы</a>
            <a href="#">Плинтус потолочный</a>
            <a href="#">Плитка потолочная</a>
            <a href="#">Розетки</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Стеновые покрытия</p>
            <a href="#">Комплектующие к подоконникам</a>
            <a href="#">Панели стеновые МДФ</a>
            <a href="#">Панели стеновые ПВХ</a>
            <a href="#">Уголок арочный, отделочный</a>
            <a href="#">Показать все</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c8">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Акции"</p>
        <div class="catalogue-content">
          <div class="block">
            <p>Напольное покрытие</p>
            <a href="#">Грязезащитные покрытия</a>
            <a href="#">Доска паркетная</a>
            <a href="#">Ковролин</a>
            <a href="#">Ковры</a>
            <a href="#">Ламинат</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Обои</p>
            <a href="#">Бумажные обои</a>
            <a href="#">Обои виниловые на бумаге</a>
            <a href="#">Обои виниловые на флизелине</a>
            <a href="#">Обои из натуральных материалов</a>
            <a href="#">Пленка самоклеящаяся</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Плитка</p>
            <a href="#">Бордюр</a>
            <a href="#">Декор облицовочный</a>
            <a href="#">Керамогранит</a>
            <a href="#">Мозаика</a>
            <a href="#">Плитка стеновая и напольная</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Порожки, раскладки, стыки</p>
            <a href="#">Порожки</a>
            <a href="#">Профиль для плитки</a>
            <a href="#">Профиль крепежный и стыковочный</a>
            <a href="#">Раскладка для плитки</a>
            <a href="#">Стыки для ванн</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Потолочные покрытия</p>
            <a href="#">Армстронг</a>
            <a href="#">Декоративные элементы</a>
            <a href="#">Плинтус потолочный</a>
            <a href="#">Плитка потолочная</a>
            <a href="#">Розетки</a>
            <a href="#">Показать все</a>
          </div>
          <div class="block">
            <p>Стеновые покрытия</p>
            <a href="#">Комплектующие к подоконникам</a>
            <a href="#">Панели стеновые МДФ</a>
            <a href="#">Панели стеновые ПВХ</a>
            <a href="#">Уголок арочный, отделочный</a>
            <a href="#">Показать все</a>
          </div>
        </div>
      </div>





      <div class="catalogue-wrap">
        <a href="#spec" class="catalogue" data-id="c1"><div></div><span>Стройматериалы</span></a>
        <a href="#spec" class="catalogue" data-id="c2"><div></div><span>Отделочные материалы</span></a>
        <a href="#spec" class="catalogue" data-id="c3"><div></div><span>Сантехника, отопление и водоснабжение</span></a>
        <a href="#spec" class="catalogue" data-id="c4"><div></div><span>Электрика и освещение</span></a>
        <a href="#spec" class="catalogue" data-id="c5"><div></div><span>Геоматериалы</span></a>
        <a href="#spec" class="catalogue" data-id="c6"><div></div><span>Инструмент и оборудование</span></a>
        <a href="#spec" class="catalogue" data-id="c7"><div></div><span>Дача и сад</span></a>
        <a href="#spec" class="catalogue" data-id="c8"><div></div><span>Акции</span></a>
      </div>
  </div>
<!-- end of second-row -->

  <div class="third-row">
      <h2>Мы в соц.сетях</h2>
      <div>
        <a href="#sc" class="social"><span></span>jana-aigerim</a>
        <a href="#sc" class="social"><span></span>jana-aigerim</a>
        <a href="#sc" class="social"><span></span>jana-aigerim</a>
        <a href="#sc" class="social"><span></span>jana-aigerim</a>
      </div>
  </div>
<!-- end of third-row -->

  <div class="fourth-row">
    <p class="fr1">Не упустите</p>
    <p class="fr2">скидки до</p>
    <span class="percent">50%</span>
    <div class="subscribe">
      <a href="#">Куда отправлять письма ?</a>
      <a href="#">Подписаться</a>
    </div>
    <p class="fr3">Хотите быть в курсе уникальных акций и закрытых распродаж? Подпишитесь на нашу рассылку!</p>
  </div>
</div>

@endsection






@section('scripts')
<script>
  
/******************** SLICK SLIDERS **********************/
$('.js-slider-center').slick({
  autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    arrows: false
});

$('.js-slider-left').slick({
  autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: false,  
    fade: true,
    cssEase: 'linear',
    speed: 500
});

$('.js-slider-right').slick({
  autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: false,
    fade: true,
    cssEase: 'linear',
    speed: 500
});


/*************************************/

$('.catalogue div').mouseenter(function() {
  $(this).addClass('js-hover');
  $('.catalogue span').addClass('js-hover-text');
})

$('.catalogue div').mouseleave(function() {
  $(this).removeClass('js-hover');
  $('.catalogue span').addClass('js-hover-text');
})


// CLICK ON CATEGORY 

var numberOfCat,
    numberOfPrevCat = 1;

$(".catalogue").click(function() {
  numberOfCat = $(this).data('id');
  $("#"+numberOfPrevCat).removeClass("hide-cat");
  $("#"+numberOfCat).addClass("show-cat");
  $(".js-close-catalogue").show();
  $(".catalogue-content").show();
  $(".catalogue-wrap").addClass("catalogue-wrap-hide");
  $(".c-title").show();
  numberOfPrevCat = numberOfCat;
});

$(".js-close-catalogue").click(function() {
  $("#"+numberOfCat).removeClass("show-cat");
  $("#"+numberOfCat).addClass("hide-cat");
  $(".js-close-catalogue").hide();
  $(".catalogue-content").hide();
  $(".catalogue-wrap").removeClass("catalogue-wrap-hide");
  setTimeout(function () {
    $("#"+numberOfCat).removeClass("hide-cat");
}, 350);
  $(".c-title").hide();
});
</script>
@endsection