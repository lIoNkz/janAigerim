@extends('frontend.layouts.master')

@section('head')
  <title>Оплата и доставка</title>
  <link rel="stylesheet" href="/css/pages/delivery.guarantee.product-popup.css">

@endsection
  
@section('content')


   <div class="wrapper">
      <div class="payment_methods">
        <h1 class="title">Способы оплаты</h1>
        <div class="three_blocks payment_methods_blocks">
          <h4>оплата наличныными курьеру при получении</h4>
          <p>Сумма к оплате будет равна стоимости заказа + стоимость доставки.
            <br>
            <br>
            При оплате Вам будет выдан кассовый чек и товарная накладная.
          </p>
        </div>
        <div class="three_blocks payment_methods_blocks">
          <h4>Оплата на карточку Сбербанка</h4>
          <p>оплата на карточку № 4279 6600 1053 9291.
            <br>
            <br>
            В комментарии к платежу указывать номер заказа
          </p>
        </div>
        <div class="three_blocks payment_methods_blocks">
          <h4>Предоплата через банк для юридических лиц</h4>
          <p>После оформления заказа и уточнения стоимости доставки, менеджер магазина высылает Вам квитанцию для оплаты в любом банке.
            <br>
            <br>
            Мы отправляем Вам заказ после 
          </p>
        </div>
      </div>
      <div class="clear"></div>
      <div class="ways_of_delivery">
        <h1 class="title right_title">Способы доставки</h1>
        <div class="three_blocks wofd_blocks">
          <h4>Самовывоз</h4>
          <p>вы можете бесплатно забрать товар в магазинах «жана айгерим»
            <br>
            <br>
            При получении товара необходимо предъявить номер заказа и удостоверение личности.
          </p>
        </div>
        <div class="three_blocks wofd_blocks">
          <h4>Доставка до подъезда</h4>
          <p>При заказе товара на сумму свыше 30000 тенге, доставка в черте города осуществляется бесплатно.
            <br>
            <br>
          При заказе товара на сумму до 30000 тенге, стоимость доставки составляет: 1000 тенге.
          </p>
        </div>
        <div class="three_blocks wofd_blocks">
          <h4>ДОСТАВКА ПО КАЗАХСТАНУ</h4>
          <p>Мы доставим товар в любой город Казахстана, а также города и поселки областных и районных центров.
          <br>
          <br>
          стоимость доставки по казахстану рассчитывается индивидуально
          </p>
        </div>
      </div>
      <div class="clear"></div>
      <div class="text">
        <h5 class="textTitle">получение товара</h5>
        <p class="desc">Осмотрите коробку на наличие повреждений. Если упаковка не нарушена (нет следов вскрытия, повреждений, помятостей) — вскройте коробку, произведите осмотр товара по внешнему виду, проверьте комплектность. Подпись в заявке и на товарном чеке, будет являться подтверждением того, что вам доставили товар надлежащего качества. Если упаковка цела, а сам товар имеет видимые повреждения или не доукомплектован, то вы должны указать в бланке заказа, что повреждений упаковки не обнаружено, но вы отказываетесь от получения товара. А в заявке необходимо описать повреждения/некомплектность товара. После этого курьер забирает товар для последующего возврата и замены на другой товар.</p>
        <h5 class="textTitle">ОТКАЗ ОТ ЗАКАЗА</h5>
        <p class="desc">Вы можете отказаться от заказа в любой момент до передачи его в службу доставки. В случае отказа от покупки в момент фактического получения заказа (при надлежащем качестве и комплектации товара), либо отказа от покупки после того как заказ был передан в службу, осуществляющую доставку, вам (владельцу учетной записи) необходимо оплатить стоимость доставки (на основании ч.3 ст.450 ГК РК, п.5 ст.25 Закона РК «О регулировании торговой деятельности»). При бесплатной доставке, стоимость рассчитывается в соответствии с действующими тарифами интернет-магазина или службы, осуществляющей доставку.

 </p>
      </div>
    </div>

@endsection






@section('scripts')


@endsection