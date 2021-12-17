@extends('userSide.layouts.main')

@section('content')


    <style>
        @media screen and (max-width: 980px) {
.story-img{
    height: 300px !important;
}

        }

    </style>
    <main style="background-color: #c9faf3">
        <div class="container">
            <div class="row " >
                <div class="col-lg-12 mt-5" >
                    <div class="text p-3" style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">Press Go on to continue.</span>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 d-inline-block " style="padding: 0px !important;" >

                                <img  class="story-img" src="{{asset('uploads/appsetting/'.$story->writer_image.'')}}" style="width: 100%;height: 600px;border-radius: 0px 0px 25px 25px">

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row" style="width: 100%">
                <div class="col-lg-12">
                    <div class="buttons" style="position:absolute;bottom: 23px;width: 100%">

                        <div class="right-btn" style="display: inline-block;float: right">
                            <a href="{{url('start/story/'.$story->id.'')}}"><input type="button" class="btn btn-success" style="border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="GO ON">
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

@endsection
