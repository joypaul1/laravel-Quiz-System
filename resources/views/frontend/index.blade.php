@extends('layouts.app')
@section('title') Home @endsection
@section('content')

<!-- Blog carousel -->
    <!-- Bootstrap Carousel -->
    <div class="slider-container">
        <div class="container-slider-image-full nopadd ">

            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators d-none">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($BannerModel as $data)
                    <div class="carousel-item   {!! $loop->first ? 'active': '' !!}">
                        <img class="d-block w-100" src="{{ asset($data->image) }}" alt="First slide">
                        <div class="carousel-caption d-md-block text-center text-capitalize">
                            <h1 class="text-white animated fadeInUp nopadd" style="animation-delay:1s">{{$data->title}}</h1>
                            <p class="text-white animated fadeInDown text-center" style="animation-delay:2s">
                                {{$data->sub_title}}</p>
                            <div class="animated fadeInLeft d-none d-sm-block" style="animation-delay:2.6s">
                                <a href="{{$data->link}}" class="btn btn-primary text-uppercase"> {{$data->button_text}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span> -->
                    <i class="fa fa-2x fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span> -->
                    <i class="fa fa-2x fa-angle-right"></i>
                </a>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
    <!-- Blog carousel -->

<!-- Popular Blog -->
<section class="wrap__section popular__blog-top bg-light ">
    <div class="container">
        <!-- Title head -->
        <div class="title-head">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12 text-center">
                    <h3>
                        The Best Of Advanture In You....
                    </h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus nemo blanditiis optio
                        officiis. Nam,
                        harum.</p>
                </div>
            </div>
        </div>
        <!-- End Title head -->
        <div class="row">
            <div class="col-12 text-justify">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore impedit numquam consequuntur recusandae eos corporis, aut quos, natus tenetur corrupti qui magnam voluptatem excepturi velit omnis asperiores odit nostrum harum sequi laboriosam itaque dolor! Non perspiciatis officia cumque quo dignissimos quaerat nesciunt mollitia eius fuga modi! Reiciendis inventore omnis quaerat nisi, aperiam nam expedita non eius? Eligendi repellat magni earum, a ullam ab velit asperiores tenetur exercitationem aperiam totam explicabo soluta, rerum at. Ea omnis, deleniti pariatur nisi deserunt ut excepturi enim accusantium, at, commodi corrupti natus quasi veritatis est similique mollitia totam autem? Earum quia dolor quisquam asperiores. Modi dolore aperiam id eligendi, recusandae vero, inventore minima qui incidunt dolor magni? Nostrum nam consectetur laborum similique tempore illo accusamus debitis quam aut alias in beatae minus optio ex perspiciatis esse, sunt reprehenderit nemo sequi. Atque, mollitia optio reiciendis inventore nobis aspernatur animi cum dolores ea repudiandae reprehenderit sit, officiis quasi consectetur sapiente modi incidunt doloribus assumenda sed perferendis tenetur. Debitis at natus voluptates odio optio repellendus, incidunt porro atque dolor ducimus! Repellendus, repudiandae? Dolorum qui est nam deleniti, omnis exercitationem, eos autem incidunt perspiciatis aut quaerat, saepe nesciunt perferendis corrupti. Deleniti, ut, saepe doloribus incidunt minus consequatur aut non voluptatibus libero id sed ab dolorem eum ipsam iure adipisci illo laboriosam, aliquid architecto. Modi, nemo aliquam. Esse excepturi recusandae facilis labore a at explicabo ea omnis impedit placeat, quisquam deleniti maxime quis itaque deserunt eveniet id nostrum saepe facere? Officia repellat nobis laudantium nemo, id ad magni provident eos iste corporis.
            </div>

        </div>
    </div>
</section>
<!-- End Popular Blog -->





@endsection
