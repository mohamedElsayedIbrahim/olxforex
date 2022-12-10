@isset($borkers_slider)
    @foreach ($borkers_slider as $item)
    <div class="swiper-slide">
        <img src="https://masoud.olxfoes.com/asset/img/{{$item->logo}}" alt="{{$item->title}}"/>
      </div>
    @endforeach
@endisset