<li class="nav-item dropdown">
    <p class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Brokers
    </p>
    <ul class="dropdown-menu">


      @isset($brokers)
      @foreach ($brokers as $item)
      <li><a class="dropdown-item" href="#">{{$item->title}}</a></li>
      @endforeach
      @endisset
      
    </ul>
</li>