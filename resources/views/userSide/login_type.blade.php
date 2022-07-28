@extends('userSide.layouts.main')

@section('content')
    <main>
        <!--? Hero Start -->
        <!-- <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Login Type</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->



        <div class="count-down-area pt-90 pb-60 section-bg" data-background="{{asset('userSide/assets/img/gallery/section_bg01.png')}}">
            <div class="container">

                    <div class="col-lg-12 col-md-12">

                            <div class="row text-center">

                                <div class="col-lg-12 m-4">
                                    <a href="{{url('login')}}"><button style="min-width: 231px !important;" class="btn btn-primary">Student Login </button>
                                    </a></div>


                                <div class="col-lg-12 m-4">
                                    <a href="{{url('login')}}"> <button style="min-width: 231px !important;" class="btn btn-secondary">Teacher Login </button>
                                    </a>
                                </div>


                                <div class="col-lg-12 m-4">
                                    <a href="{{url('login')}}">    <button style="min-width: 231px !important;" class="btn btn-success">Admin Login </button>
                                    </a> </div>
                            </div>


                </div>
            </div>
        </div>


    </main>
@endsection
