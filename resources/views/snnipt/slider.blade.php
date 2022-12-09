@if (count($sliders) == 0)
<div class="swiper-slide">
    <img src="{{ asset('asset/img/4.png') }}" />
    <div class="text">
      <h2>We are the investment pioneers</h2>
      <p>Start investing now</p>
      <a href="#" class="btn">Learn More</a>
    </div>
  </div>
@else
    @foreach ($sliders as $item)
    <div class="swiper-slide">
        <img src="https://masoud.olxforex.com/asset/img/{{$item->image}}" />
        <div class="text">
          <p>{{$item->conetnt}}</p>
          <a href="{{$item->link}}" class="btn">{{$btn->value}}</a>
        </div>
      </div>
      
    @endforeach
@endif