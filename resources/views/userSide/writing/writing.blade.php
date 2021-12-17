@extends('userSide.layouts.main')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Writing</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="count-down-area pt-90 pb-60 section-bg" data-background="{{asset('userSide/assets/img/gallery/section_bg01.png')}}">
            <div class="container">

                <div class="col-lg-12 col-md-12">

                    <div class="row ">


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Grammer</h5>
                                        <p class="card-text">“Grammarly allows me to get those communications out and feel confident that I’m putting my best foot forward. Grammarly is like a little superpower, especially when I need to be at 110%.”</p>
                                        <a href="{{url('writing/grammer')}}" class="btn btn-primary">Click Here to Continue</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Topics</h5>
                                        <p class="card-text">“Grammarly allows me to get those communications out and feel confident that I’m putting my best foot forward. Grammarly is like a little superpower, especially when I need to be at 110%.”</p>
                                        <a href="{{url('writing/topics')}}" class="btn btn-primary">Click Here to Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>





                </div>
            </div>
        </div>


    </main>
@endsection
