@extends('frontend.layouts.master')

@section('head')
  <title>Контакты</title>
  <link rel="stylesheet" href="/css/pages/contacts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
  
@section('content')


<div class="container">
	<div class="contacts-row">
		<h1>Контакты и наши адреса :</h1>
		<p><span class="fa fa-map-marker"></span>г.Шымкент, Алматинская трасса 7/12</p>
		<p><span class="fa fa-envelope-o"></span>support@mail.ru</p>
		<p><span class="fa fa-mobile"></span>+7 777 000 00 00</p>
		<p><span class="fa fa-mobile"></span>+7 777 111 11 11</p>
		<p><span class="fa fa-clock-o"></span>Пн-Пт: 10:00-19:00 Сб-Вс: 10:00-15:00</p>
		<p><span class="fa fa-skype"></span>Jana-aygerim</p>
	</div>
	<div id="map">
		<iframe src="https://yandex.kz/map-widget/v1/-/CBqPfLHS0B" width="100%" height="400" frameborder="0"></iframe>
	</div>
</div><!-- container -->
@endsection






@section('scripts')

@endsection