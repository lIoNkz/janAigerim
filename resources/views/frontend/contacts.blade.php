@extends('frontend.layouts.master')

@section('head')
  <title>Контакты</title>
  <link rel="stylesheet" href="/css/pages/contacts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://api-maps.yandex.ru/2.1/?lang=en_US" type="text/javascript"></script>
@endsection
  
@section('content')


<div class="container">
	<div class="contacts-row">
		<h1>Контакты и наши адреса :</h1>
		<p><span class="fa fa-map-marker"></span> ул. Бекет-Батыра 149 (бывшая Фурманова)</p>
		<p><span class="fa fa-phone"></span>57-07-68</p>
		<p><span class="fa fa-mobile"></span>8 707-903-10-32</p>
		<p><span class="fa fa-mobile"></span>8 702-363-12-36</p>
		<br>

		<p><span class="fa fa-map-marker"></span>г.Шымкент, ул. Айтеке Би 116А (Старый город)</p>
		<p><span class="fa fa-mobile"></span>8 705-375-40-94</p>
<br>

		<p><span class="fa fa-map-marker"></span>ул. Жибек-Жолы 30/3  (Коктем)</p>
		<p><span class="fa fa-mobile"></span>8 702-649-59-17</p>
<br>
		<p><span class="fa fa-map-marker"></span>ул. Жиделей Байсын 95 (ТК Бекжан)</p>
		<p><span class="fa fa-mobile"></span>8 707-338-95-91</p>
<br>
		<p><span class="fa fa-envelope-o"></span>zhana.aygerim <span style="font-family: Verdana;font-size: 1em;margin-left: -3px;">@</span>mail.ru</p>

		<p><span class="fa fa-clock-o"></span>09:00-19:00 (без выходных)</p>


<!-- 		1)Бекет-Батыра 149 (бывшая Фурманова) тел: 57-07-68, сот: 8 707-903-10-32, 8 702-363-12-36
2)Айтеке Би 116А (Старый город) сот: 8 705-375-40-94
3)Жибек-Жолы 30/3  (Коктем) сот: 8 702-649-59-17
4)Жиделей Байсын 95  (ТК Бекжан) сот: 8 707-338-95-91 -->

	</div>
	<div id="map" style="width: 100%; height: 400px;"></div>
<!-- 	<div id="map">
	<iframe src="https://yandex.kz/map-widget/v1/-/CBqPfLHS0B" width="100%" height="400" frameborder="0"></iframe>
</div> -->
</div><!-- container -->
@endsection






@section('scripts')

<script>
	ymaps.ready(init);
    var myMap,
		myPlacemark,
		myPlacemark2,
		myPlacemark3,
		myPlacemark4;

    function init(){     
        myMap = new ymaps.Map("map", {
            center: [42.326284, 69.592901],
            zoom: 12
        });

        myPlacemark2 = new ymaps.Placemark([42.306284, 69.592901], { hintContent: 'Айтеке би'});
    	myPlacemark3 = new ymaps.Placemark([42.330722, 69.638885], { hintContent: 'Жибек жолы'});
    	myPlacemark4 = new ymaps.Placemark([42.348643, 69.529921], { hintContent: 'Жидели байсын'});
    	myPlacemark = new ymaps.Placemark([42.312546, 69.629338], { hintContent: 'Бекет батыра'});
            
            myMap.geoObjects.add(myPlacemark);
		    myMap.geoObjects.add(myPlacemark2);
		    myMap.geoObjects.add(myPlacemark3);
		    myMap.geoObjects.add(myPlacemark4);
    }







</script>
@endsection