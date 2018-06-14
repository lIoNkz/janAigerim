@extends('frontend.layouts.master')

@section('head')
  <title>{{ $category_name }}</title>
  <link rel="stylesheet" href="/css/pages/goods.css">
  <link rel="stylesheet" href="/css/pages/delivery.guarantee.product-popup.css">
  <link rel="stylesheet" href="/css/vendor/ion.rangeSlider.css">
  <link rel="stylesheet" href="/css/vendor/ion.rangeSlider.skinHTML5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
  
@section('content')


<div class="container">
  <div class="title-row">
    <p class="breadcrumbs">
      <a href="#">Главная > </a>
      <a href="/shop/{{ $category_slug }}">{{ $category_name }}</a>
    </p>
    <h1 class="main-title">{{ $category_name }}</h1>
    <div class="filtering">
      <div class="buttons">
        <span>Поиск по фильтру</span>
        <button id="show">Показать</button>
        <button>Применить</button>
        <button>Сбросить</button>
      </div>
      <div class="sorting">
        <span>Тип сортировки</span>
        <select name="select">
          <option value="">По умолчанию</option>
          <option value="">Новинки</option>
          <option value="">Лучшие товары</option>
          <option value="">Цены вниз</option>
          <option value="">По возрастанию цены</option>
          <option value="">По уменьшению цены</option>
        </select>
      </div>
      <div class="quantity">
        <span>Показать</span>
        <select name="select">
          <option value="128">128</option>
          <option value="64">64</option>
          <option value="32">32</option>
        </select>
      </div>
      <div class="pagination">
        <a href="#" class="left"></a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#" class="right"></a>
      </div>
    </div>
  </div>
  <div class="filter-row">
    <div class="f1">
      <p class="f-title">Товар</p>
      <input type="radio" name="stock" value="В наличии" checked>
      <span>Есть в наличии (72)</span><br>
      <input type="radio" name="stock" value="Все">
      <span>Все (155)</span>
      <p class="f-title">Цена</p>
      <div class="price">
        C <input type="text" name="from" id="from" value="200"> До <input type="text" name="to" id="fromto" value="1000"> Тенге
      </div>
      <span id="range_03"></span>
    </div>
    <div class="f2">
      <p class="f-title">Тип</p>
      <div class="vp-type">
        <div class="half">
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (35)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (10)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Покрытие щетинистое (5)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (11)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Покрытие щетинистое (5)</span><br>
        </div>
        <div class="half">
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (25)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (38)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Покрытие щетинистое (17)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (155)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Покрытие щетинистое (9)</span><br>
        </div>
        <div class="half">
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (25)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (38)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Покрытие щетинистое (17)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (155)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Покрытие щетинистое (9)</span><br>
        </div>
                <div class="half">
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (25)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (38)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Покрытие щетинистое (17)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Коврик (155)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Покрытие щетинистое (9)</span><br>
        </div>
      </div>

    </div>
    <div class="f3">
      <p class="f-title">Бренд</p>
      <div class="vp-brand">
        <div class="half">
          <input type="checkbox" name="type" class="checkbox">
          <span>Apache (35)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Balltraf (10)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>K. S.Rety (5)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>MOhawk (11)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Beaulieu (5)</span><br>
        </div>
        <div class="half">
          <input type="checkbox" name="type" class="checkbox">
          <span>Apache (35)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Balltraf (10)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>K. S.Rety (5)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>MOhawk (11)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Beaulieu (5)</span><br>
        </div>
        <div class="half">
          <input type="checkbox" name="type" class="checkbox">
          <span>Apache (35)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Balltraf (10)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>K. S.Rety (5)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>MOhawk (11)</span><br>
          <input type="checkbox" name="type" class="checkbox">
          <span>Beaulieu (5)</span><br>
        </div>
      </div>
    </div>
  </div>
  <div class="page-row">
    <div class="product">
      <div class="p-container">
        <div class="p-photo">
          <div class="fa fa-search"></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star checked" data-id="1"></span>
            <span class="fa fa-star checked" data-id="2"></span>
            <span class="fa fa-star checked" data-id="3"></span>
            <span class="fa fa-star-o" data-id="4"></span>
            <span class="fa fa-star-o" data-id="5"></span>
          </div>
          <button class="tocart">
            <span class="fa fa-shopping-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="p-container">
        <div class="p-photo">
          <div class="fa fa-search"></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star checked" data-id="1"></span>
            <span class="fa fa-star checked" data-id="2"></span>
            <span class="fa fa-star checked" data-id="3"></span>
            <span class="fa fa-star-o" data-id="4"></span>
            <span class="fa fa-star-o" data-id="5"></span>
          </div>
          <button class="tocart">
            <span class="fa fa-shopping-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
      </div>
    </div>
    <div class="p-popup">
      <div class="p-center">
        <div class="leftBlock">
                <div class="prod_slider">
                  <div class="slHeader">
                    <h1>Коврик Stonehedge Grey 60х91</h1>
                    <div class="slButton rightBtn"></div>
                    <div class="slButton leftBtn"></div>
                  </div>
                  <div class="sliderWrap">
                    <div class="mySlide">
                    <img src="/img/product.jpg" alt="">
                    <span class="loupe"></span>
                  </div>
                  </div>
                  <div class="prodData">
                    <h3>Stonehedge Grey 60х91</h3>
                    <p>код: 733664 </p>
                    <p>есть в наличии</p>
                    <h4 style="margin: 20px 0 5px 0">Дополнительная информация</h4>
                    <p>Единица измерения: шт.</p>
                    <p>Материал: ПВХ</p>
                    <p>Материал основы: резина</p>
                    <p>Тип: Коврик</p>
                    <p>Ширина, см: 60</p>
                    <p>Страна производитель: США</p>
                  </div>
                  <div class="clear"></div>
                  <div class="prodDescription">
                    <h4>Описание</h4>
                    <ul>
                      <li>- Отличный, влаго и грязепоглощающий коврик поможет Вам избежать резкого увеличения количества уборок с наступлением слякотной погоды!</li>
                      <li>- Коврик максимально задержит распространение принесенной в помещение на обуви грязи и влаги, защитит пол от сырости, поддержит порядок.</li>
                      <li>- Большой коврик превосходно очистит подошвы Ваших гостей и посетителей офиса, чем избавит их от неловкости перед хозяевами за лишние хлопоты.</li>
                      <li>- Удобный коврик, весом всего 3,5 кг., проще вытряхнуть от пыли, чем производить уборку за каждым вошедшим в офис, кафе или магазин.</li>
                      <li>- А ухаживать за ковриком одно удовольствие - вытряхнул, сполоснул и высушил на воздухе - сплошная гигиена и никакого неприятного запаха!</li>
                    </ul>
                  </div>
                </div>

                <div class="action_info">
                  <p>к этому товару действует скидки</p>
                  <span class="ten">-10%</span>
                  <p>ПРИ ПОКУПКЕ БОЛЬШЕ <span class="five">5шт.</span></p>
                </div>
                
                <div class="promotion">
                  <h4>акции И специальные предложения</h4>
                  <div class="pSlides">
                    <img src="/img/pProducts.jpg" alt="">
                    <span class="ploupe"></span> 
                    <h5>Коврик Stonehedge Grey 60х91 цена: 5000 ТНГ. </h5>
                  </div>
                  <div class="pSlides">
                    <img src="/img/pProducts.jpg" alt="">
                    <span class="ploupe"></span> 
                    <h5>Коврик Stonehedge Grey 60х91 цена: 5000 ТНГ. </h5>
                  </div>
                  <div class="pSlides">
                    <img src="/img/pProducts.jpg" alt="">
                    <span class="ploupe"></span> 
                    <h5>Коврик Stonehedge Grey 60х91 цена: 5000 ТНГ. </h5>
                  </div>
                  <div class="pBtn pArrowLeft"></div>
                  <div class="pBtn pArrowRight"></div>
                </div>
                <div class="saveProd">
                  <h5><span class="fa fa-star stra"></span>Сохранить товар в избранное</h5>
                </div>
              </div>
              <!-- Right block -->
              <div class="rightBlock">
                <div class="rightHeader">
                  <div class="closeButton"></div>
                </div>
                <div class="testimonialsArea">
                  <h3>Отзывы (7 Отзывов)</h3>
                  <div class="testi">
                    <h4>Серик</h4>
                    <div class="advanced">
                      <div class="raiting"></div>
                      <span>25.05.2018 г.</span>
                    </div>
                    <div class="clear"></div>
                    <p>Отличный, влаго и грязепоглощающий коврик поможет Вам избежать</p>
                  </div>
                  <div class="testi">
                    <h4>Серик</h4>
                    <div class="advanced">
                      <div class="raiting"></div>
                      <span>25.05.2018 г.</span>
                    </div>
                    <div class="clear"></div>
                    <p>Отличный, влаго и грязепоглощающий коврик поможет Вам избежать</p>
                  </div>
                </div>
                <div class="form">
                  <span class="mys">Имя</span><input type="text" name="name">
                  <span  class="mys"for="">Email</span><input type="text" name="email">
                  <span  class="mys"for="text">Сообщение</span>
                  <textarea name="text">
                  </textarea>
                  <div class="fb-stars">
                      <span class="fa fa-star checked" data-id="1"></span>
                      <span class="fa fa-star checked" data-id="2"></span>
                      <span class="fa fa-star checked" data-id="3"></span>
                      <span class="fa fa-star-o" data-id="4"></span>
                      <span class="fa fa-star-o" data-id="5"></span>
                      <button type="submit" class="addTestiBtn">Оставить отзыв</button>
                  </div>

                </div>
                <form class="priceBlock">
                  <p class="titlePrice">Цена</p>
                  <p class="titleCena">11 990 ТНГ.</p>
                  <p class="col">Количество&nbsp;&nbsp;<span class="minus">&#8211;</span><span class="plus">+</span></p>
                  <p class="col_cena">10 шт. Х 11 990 ТНГ. (-10%) = </p>
                  <p class="total_sum">107 910 ТНГ.</p>
                  <p class="titleTotalSumWithSale">ОБЩАЯ СУММА (СО СКИДКОЙ)</p>
                  <button type="submit" class="inBasket">В Корзину</button>
                </form>
              </div>
              <div class="clear"></div>
      </div>
    </div>
    <div class="product">
      <div class="p-container">
        <div class="p-photo">
          <div class="fa fa-search"></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star checked" data-id="1"></span>
            <span class="fa fa-star checked" data-id="2"></span>
            <span class="fa fa-star checked" data-id="3"></span>
            <span class="fa fa-star-o" data-id="4"></span>
            <span class="fa fa-star-o" data-id="5"></span>
          </div>
          <button class="tocart">
            <span class="fa fa-shopping-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="p-container">
        <div class="p-photo">
          <div class="fa fa-search"></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star checked" data-id="1"></span>
            <span class="fa fa-star checked" data-id="2"></span>
            <span class="fa fa-star checked" data-id="3"></span>
            <span class="fa fa-star-o" data-id="4"></span>
            <span class="fa fa-star-o" data-id="5"></span>
          </div>
          <button class="tocart">
            <span class="fa fa-shopping-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="p-container">
        <div class="p-photo">
          <div class="fa fa-search"></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star checked" data-id="1"></span>
            <span class="fa fa-star checked" data-id="2"></span>
            <span class="fa fa-star checked" data-id="3"></span>
            <span class="fa fa-star-o" data-id="4"></span>
            <span class="fa fa-star-o" data-id="5"></span>
          </div>
          <button class="tocart">
            <span class="fa fa-shopping-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="p-container">
        <div class="p-photo">
          <div class="fa fa-search"></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star checked" data-id="1"></span>
            <span class="fa fa-star checked" data-id="2"></span>
            <span class="fa fa-star checked" data-id="3"></span>
            <span class="fa fa-star-o" data-id="4"></span>
            <span class="fa fa-star-o" data-id="5"></span>
          </div>
          <button class="tocart">
            <span class="fa fa-shopping-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="p-container">
        <div class="p-photo">
          <div class="fa fa-search"></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star checked" data-id="1"></span>
            <span class="fa fa-star checked" data-id="2"></span>
            <span class="fa fa-star checked" data-id="3"></span>
            <span class="fa fa-star-o" data-id="4"></span>
            <span class="fa fa-star-o" data-id="5"></span>
          </div>
          <button class="tocart">
            <span class="fa fa-shopping-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="p-container">
        <div class="p-photo">
          <div class="fa fa-search"></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star checked" data-id="1"></span>
            <span class="fa fa-star checked" data-id="2"></span>
            <span class="fa fa-star checked" data-id="3"></span>
            <span class="fa fa-star-o" data-id="4"></span>
            <span class="fa fa-star-o" data-id="5"></span>
          </div>
          <button class="tocart">
            <span class="fa fa-shopping-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div><!-- container -->
@endsection






@section('scripts')
<script src="/js/ion.rangeSlider.min.js"></script>
<script>

// SHOW FILTER BLOCK 
var isFilterOpen = false;
$('#show').click(function() {
  if(isFilterOpen === false){
    $('#show').html('Скрыть');
    $('.filter-row').slideToggle(200);
    $('.filter-row > div').show();
    $('.filter-row').addClass('filter-row-show');
    isFilterOpen = true;
  } else {
    $('#show').html('Показать');
    $('.filter-row').slideToggle(200);
    $('.filter-row').removeClass('filter-row-show');
    $('.filter-row').addClass('filter-row-hide');
    $('.filter-row > div').hide();
    setTimeout(function(){
      $('.filter-row').removeClass('filter-row-hide');
    },200);
    isFilterOpen = false;
  }

});

// PRICE SLIDER ON FILTER BLOCK
$("#range_03").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: ""
});

$("#range_03").on("change", function () {
    var $this = $(this),
        value = $this.prop("value").split(";");

    $("#from").val(value[0]);
    $("#fromto").val(value[1]);
});

// RATING STARS

//CLICK ON CART BUTTON

$('.tocart').click(function() {
  if($('.fa-check', this).length == 0){
    $('.fa', this).removeClass('fa-shopping-cart');
    $('.fa', this).addClass('fa-check');
    $('span:last-child', this).html('В корзине');
 
  } else {
    $('.fa', this).removeClass('fa-check');
    $('.fa', this).addClass('fa-shopping-cart');
    $('span:last-child', this).html('В корзину');

  }
});

// close popup

$('.closeButton').click(function() {
  $('.p-popup').removeClass('popup-show');
});

$('.p-photo').click(function() {
  $('.p-popup').addClass('popup-show');
});

</script>
@endsection