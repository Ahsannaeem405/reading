@extends('userSide.layouts.main')

@section('content')


<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

    * {
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px
    }

    body {
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        font-weight: 400;
        background: #eff6fa;
        color: #000000
    }

    div {
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .bbb_viewed {
        padding-top: 51px;
        padding-bottom: 60px;
        background: #eff6fa
    }

    .bbb_main_container {
        background-color: #fff;
        padding: 11px
    }

    .bbb_viewed_title_container {
        border-bottom: solid 1px #dadada
    }

    .bbb_viewed_title {
        margin-bottom: 16px;
        margin-top: 8px
    }

    .bbb_viewed_nav_container {
        position: absolute;
        right: -5px;
        bottom: 14px
    }

    .bbb_viewed_nav {
        display: inline-block;
        cursor: pointer
    }

    .bbb_viewed_nav i {
        color: #dadada;
        font-size: 18px;
        padding: 5px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .bbb_viewed_nav:hover i {
        color: #606264
    }

    .bbb_viewed_prev {
        margin-right: 15px
    }

    .bbb_viewed_slider_container {
        padding-top: 13px
    }

    .bbb_viewed_item {
        width: 100%;
        background: #FFFFFF;
        border-radius: 2px;
        padding-top: 25px;
        padding-bottom: 25px;
        padding-left: 30px;
        padding-right: 30px
    }

    .bbb_viewed_image {
        width: 150px;
        height: 150px
    }

    .bbb_viewed_image img {
        display: block;
        max-width: 100%
    }

    .bbb_viewed_content {
        width: 100%;
        margin-top: 25px
    }

    .bbb_viewed_price {
        font-size: 16px;
        color: #000000;
        font-weight: 500
    }

    .bbb_viewed_item.discount .bbb_viewed_price {
        color: #df3b3b
    }

    .bbb_viewed_price span {
        position: relative;
        font-size: 12px;
        font-weight: 400;
        color: rgba(0, 0, 0, 0.6);
        margin-left: 8px
    }

    .bbb_viewed_price span::after {
        display: block;
        position: absolute;
        top: 6px;
        left: -2px;
        width: calc(100% + 4px);
        height: 1px;
        background: #8d8d8d;
        content: ''
    }

    .bbb_viewed_name {
        margin-top: 3px
    }

    .bbb_viewed_name a {
        font-size: 14px;
        color: #000000;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .bbb_viewed_name a:hover {
        color: #0e8ce4
    }

    .item_marks {
        position: absolute;
        top: 18px;
        left: 18px
    }

    .item_mark {
        display: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        color: #FFFFFF;
        font-size: 10px;
        font-weight: 500;
        line-height: 36px;
        text-align: center
    }

    .item_discount {
        background: #df3b3b;
        margin-right: 5px
    }

    .item_new {
        background: #0e8ce4
    }

    .bbb_viewed_item.discount .item_discount {
        display: inline-block
    }

    .bbb_viewed_item.is_new .item_new {
        display: inline-block
    }
</style>
    <main>
        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Connect</h2>
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
                                <h3 class="bbb_viewed_title">Connect Categories</h3>
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
                                                <div class="bbb_viewed_name"><a href="{{url('quil_connect/'.$cat->id.'')}}">
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
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{$stor->story_title}}</h5>
                        <h5 class="card-title">Questions: {{$stor->quil_question->count()}}</h5>
                        <a href="{{url('start/quil_connect/'.$stor->id.'')}}" style="border-radius: 25px"  class="btn btn-primary">Start Activity</a>
                    </div>
                </div>

                @endforeach








            </div>
        </div>
</div>
    </main>


    <!--  -->

  <textarea  class="ckeditor " name="" id="" cols="30" rows="10">sdkafjksdafjsdkf</textarea>


    <!--  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://nightly.ckeditor.com/full/ckeditor.js"></script> -->
<!-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
    .create( document.querySelector( '.ckeditor' ) )
    
    .catch( error => {
    console.error( error );
    } );
</script>
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
