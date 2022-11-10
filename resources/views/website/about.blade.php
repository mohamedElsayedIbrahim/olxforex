@extends('layouts.app')

@section('title')
    Olxforex | About us
@endsection

@section('content')
    <!-- main sec -->

    <div id="about">

    
    <section id="main">
        <div class="container">
            <h1 class="text-center">who are we</h1>
            <div class="row center mb-3">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <img src="{{ asset('asset/img/undraw_navigator_a479.svg') }}" style="width: 100%">
                </div>
                <div class="about-text col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <h2>We are your way to a successful investment</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minima hic reprehenderit
                        atque, voluptates esse itaque sed quas. Exercitationem sapiente aspernatur, expedita, molestias
                        nesciunt nihil commodi ducimus placeat accusantium cum architecto perferendis doloremque ratione
                        deleniti omnis optio odio deserunt rerum ut fugit, quibusdam eius minus voluptatem. Fuga odio
                        earum hic!</p>
                    <a href="{{ route('contact') }}" class="btn mouse-cursor-gradient-tracking">Connect us</a>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Our Message
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text-start">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum nisi consectetur in nemo harum
                            hic fugit consequatur quae placeat atque.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Our Goal
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text-start">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus libero nulla ex
                            corrupti earum incidunt, iure nam adipisci distinctio dolor ab a est ad beatae consectetur,
                            amet dignissimos labore repellendus sequi quibusdam deserunt. Consequuntur dolorem
                            cupiditate, aspernatur rerum amet quod.
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
</div>
@endsection