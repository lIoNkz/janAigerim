@extends('frontend.layouts.master')

@section('head')
  <title>Товары</title>
  <link rel="stylesheet" href="/css/pages/goods.css">
  <link rel="stylesheet" href="/css/vendor/ion.rangeSlider.css">
  <link rel="stylesheet" href="/css/vendor/ion.rangeSlider.skinHTML5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
  
@section('content')


<div class="container">
  <div class="title-row">
    <p class="breadcrumbs">
      <a href="#">Главная > </a>
      <a href="#">Отделочные материалы ></a>
      <a href="#">Напольные покрытия ></a>
      <a href="#">Грязезащитные коврики и покрытия </a>
    </p>
    <h1 class="main-title">Грязезащитные коврики и покрытия</h1>
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
      <input type="radio" name="stock" value="В наличии">
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
          <div></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star-o checked" data-id="1"></span>
            <span class="fa fa-star-o checked" data-id="2"></span>
            <span class="fa fa-star-o checked" data-id="3"></span>
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
          <div></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star-o checked" data-id="1"></span>
            <span class="fa fa-star-o checked" data-id="2"></span>
            <span class="fa fa-star-o checked" data-id="3"></span>
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
          <div></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star-o checked" data-id="1"></span>
            <span class="fa fa-star-o checked" data-id="2"></span>
            <span class="fa fa-star-o checked" data-id="3"></span>
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
          <div></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star-o checked" data-id="1"></span>
            <span class="fa fa-star-o checked" data-id="2"></span>
            <span class="fa fa-star-o checked" data-id="3"></span>
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
          <div></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star-o checked" data-id="1"></span>
            <span class="fa fa-star-o checked" data-id="2"></span>
            <span class="fa fa-star-o checked" data-id="3"></span>
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
          <div></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star-o checked" data-id="1"></span>
            <span class="fa fa-star-o checked" data-id="2"></span>
            <span class="fa fa-star-o checked" data-id="3"></span>
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
          <div></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star-o checked" data-id="1"></span>
            <span class="fa fa-star-o checked" data-id="2"></span>
            <span class="fa fa-star-o checked" data-id="3"></span>
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
          <div></div>
          <img src="/img/products/carpet.png" alt="product">
        </div>
        <div class="p-text">
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p>Коврик Stonehenge Grey 60x91</p>
          <p class="p-price">11 990 тг</p>
          <div class="p-stars">
            <p>7 отзывов</p>
            <span class="fa fa-star-o checked" data-id="1"></span>
            <span class="fa fa-star-o checked" data-id="2"></span>
            <span class="fa fa-star-o checked" data-id="3"></span>
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


</script>
@endsection