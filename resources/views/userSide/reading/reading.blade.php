@extends('userSide.layouts.main')

@section('content')

    <main>
        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Reading</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
        <div class="bbb_viewed">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="bbb_main_container">
                            <div class="bbb_viewed_title_container">
                                <h3 class="bbb_viewed_title">Stories Categories</h3>
                                <div class="bbb_viewed_nav_container">
                                    <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                                    <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="bbb_viewed_slider_container">
                                <div class="owl-carousel owl-theme bbb_viewed_slider">

                                    @foreach($category as $cat)

                                    <div class="owl-item">
                                        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="bbb_viewed_content text-center">
                                                <div class="bbb_viewed_name"><a href="{{url('readings/'.$cat->id.'')}}">
                                                    <span style="display: flex;justify-content: center;"><img src="{{ asset('uploads/category_images/'.$cat->image) }}" style="height: 70px; width: auto;"></span>{{$cat->name}}</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container">
        <div class="row mb-5 ml-1 ml-lg-5  " style="width: 100%">
            <div class="col-lg-12" >

                @foreach($story as $stor)
                <div class="card col-lg-3 mb-5   m-lg-4"  style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;display: inline-block" >
                    <img class="card-img-top mt-3" style="height: 160px" src="{{asset('uploads/appsetting/'.$stor->story_image.'')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{$stor->story_title}}</h5>
                        <p class="card-text">{{$stor->short_detail}}</p>
                        <h5 class="card-title">Words: {{strlen($stor->content)}}</h5>
                        <a href="{{url('readnow/'.$stor->id.'')}}" style="border-radius: 25px"  class="btn btn-primary">Read Now</a>
                    </div>
                </div>

                @endforeach








            </div>
        </div>
</div>
    </main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {


            if($('.bbb_viewed_slider').length)
            {
                var viewedSlider = $('.bbb_viewed_slider');

                viewedSlider.owlCarousel(
                    {
                        loop:true,
                        margin:30,
                        autoplay:true,
                        autoplayTimeout:6000,
                        nav:false,
                        dots:false,
                        responsive:
                            {
                                0:{items:1},
                                575:{items:2},
                                768:{items:3},
                                991:{items:4},
                                1199:{items:6}
                            }
                    });

                if($('.bbb_viewed_prev').length)
                {
                    var prev = $('.bbb_viewed_prev');
                    prev.on('click', function()
                    {
                        viewedSlider.trigger('prev.owl.carousel');
                    });
                }

                if($('.bbb_viewed_next').length)
                {
                    var next = $('.bbb_viewed_next');
                    next.on('click', function()
                    {
                        viewedSlider.trigger('next.owl.carousel');
                    });
                }
            }


        });
    </script>

@endsection
