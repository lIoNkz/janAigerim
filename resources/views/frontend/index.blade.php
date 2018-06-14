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
        <span class="js-close-catalogue"></span>
        <p class="c-title">Категории раздела "Обои и Декор"</p>
        <div class="catalogue-content">
          <div class="block">
            <a href="/wallpaper/acrylic">Акриловые обои</a>
            <a href="/wallpaper/selfglue">Самоклеющиеся обои</a>
            <a href="/wallpaper/vinyl">Виниловые (супермоющиеся, протирающиеся)</a>
            <a href="/wallpaper/pokrasku">Обои под покраску</a>
            <a href="/wallpaper/steklo">Обои для армирования стен (стекло обои)</a>
            <a href="/wallpaper/photo">Фотообои</a>
            <a href="/wallpaper/freski">Фрески, модульное панно </a>
            <a href="/wallpaper/zakaz">Заказные, эксклюзивные  обои </a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c2">
        <span class="js-close-catalogue"></span>
        <p class="c-title">Категории раздела "Лаки и краски"</p>
        <div class="catalogue-content">
          <div class="block">
            <a href="/paint/decor-kraski">Декоратиные краски</a>
            <a href="/paint/vodoemulsia">Водоимульсия(фасадная  и для внутренней отделки)</a>
            <a href="/paint/laki">Лаки</a>
            <a href="/paint/kraski">Краски(радиаторные ,напольные ,палубные и т.д)</a>
            <a href="/paint/decor-shtuki">Декаративные штукатурки( леонардо, виницианка и т.д)</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c3">
        <span class="js-close-catalogue"></span>
        <p class="c-title">Категории раздела "Напольные покрытия"</p>
        <div class="catalogue-content">
          <div class="block">
            <a href="/floor-covering/laminat">Ламинат</a>
            <a href="/floor-covering/kovrolan">Ковролан</a>
            <a href="/floor-covering/dorozhki">Дорожки</a>
            <a href="/floor-covering/linolium">Линолиум</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c4">
        <span class="js-close-catalogue"></span>
        <p class="c-title">Категории раздела "Потолочка"</p>
        <div class="catalogue-content">
          <div class="block">
            <a href="/ceiling/galteli">Галтели(пенополистерол,полиуретан)</a>
            <a href="/ceiling/moldingi">Молдинги</a>
            <a href="/ceiling/razetki">Разетки</a>
            <a href="/ceiling/pilyastry">Пилястры</a>
            <a href="/ceiling/bagety">Багеты</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c5">
        <span class="js-close-catalogue"></span>
        <p class="c-title">Категории раздела "Плинтусы"</p>
        <div class="catalogue-content">
          <div class="block">
            <a href="/plinth/plintus">Плинтусы</a>
            <a href="/plinth/porozhki">Порожки</a>
            <a href="/plinth/ugolki">Уголки</a>
            <a href="/plinth/raskladki">Раскладки</a>
            <a href="/plinth/genezius">Генезиус</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c6">
        <span class="js-close-catalogue"></span>
        <p class="c-title">Категории раздела "Клеи и жидкие гвозди"</p>
        <div class="catalogue-content">
          <div class="block">
            <a href="/glue/oboi">Обоиный клей</a>
            <a href="/glue/potochki">Клей для поточки</a>
            <a href="/glue/gvozdi">Жидкие гвозди</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c7">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Мелочевка"</p>
        <div class="catalogue-content">
          <div class="block">
            <a href="/misc/kistochki">Кисточки</a>
            <a href="/misc/valiki">Валики</a>
            <a href="/misc/reshotki">Решетки (радиаторные, вентиляционные)</a>
            <a href="/misc/paneli">Панели пластиковые </a>
            <a href="/misc/nakleiki">Наклейки  джекоративные</a>
          </div>
        </div>
      </div>


      <div class="show-catalogue" id="c8">
        <span class="js-close-catalogue">
  
        </span>
        <p class="c-title">Категории раздела "Интрументы"</p>
        <div class="catalogue-content">
          <div class="block">
            <a href="/tools/otvertki">Отвертки</a>
            <a href="/tools/ploskogubcy">Плоскогубцы</a>
            <a href="/tools/kovrolin">Ковролин</a>
            <a href="/tools/kusachki">Кусачки</a>
            <a href="/tools/uroven">Уровень</a>
            <a href="/tools/shpatel">Шпатель</a>
          </div>
        </div>
      </div>





      <div class="catalogue-wrap">
        <a href="#spec" class="catalogue" data-id="c1"><div></div><span>Обои и декор</span></a>
        <a href="#spec" class="catalogue" data-id="c2"><div></div><span>Лаки и краски</span></a>
        <a href="#spec" class="catalogue" data-id="c3"><div></div><span>Напольные покрытия</span></a>
        <a href="#spec" class="catalogue" data-id="c4"><div></div><span>Потолочка</span></a>
        <a href="#spec" class="catalogue" data-id="c5"><div></div><span>Плинтусы</span></a>
        <a href="#spec" class="catalogue" data-id="c6"><div></div><span>Клеи и жидкие гвозди</span></a>
        <a href="#spec" class="catalogue" data-id="c7"><div></div><span>Мелочевка</span></a>
        <a href="#spec" class="catalogue" data-id="c8"><div></div><span>Интсрументы</span></a>
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
      <a href="#send">Куда отправлять письма ?</a>
      <a href="#sign">Подписаться</a>
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