@isset($brokers)
    @foreach ($brokers as $item)
    <div class="swiper-slide">
        <img src="https://masoud.olxfoes.com/asset/img/{{$item->logo}}" alt="{{$item->title}}"/>
      </div>
    @endforeach
@endisset