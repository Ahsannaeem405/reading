@extends('userSide.layouts.main')

@section('content')


    <style>

        @media screen and (max-width: 980px) {
            .text-about-story {
                position: relative !important;
                height: 200px;
                top: 0px !important;
            }


            .text-about {
                border-radius: 0px 0px 25px 25px !important;
            }
            .story-img {
                border-right: 0px solid white !important;
                border-bottom: 1px solid black;
                border-radius: 0px 0px 0px 0px !important;
                height: 300px !important;
            }

        }

    </style>
    <main style="background-color: #c9faf3">
<div class="container">
    <div class="row " >
 <div class="col-lg-12 mt-5" >
     <div class="text p-3" style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
     <span class="d-block text-white ml-lg-5" style="font-size: 22px">Does this selection look intresting?</span>
     <span class="d-block text-white ml-lg-5" >Press GO ON to continue.</span>
     </div>

     <div class="container-fluid">
     <div class="row">
     <div class="col-lg-8 d-inline-block " style="padding: 0px !important;" >

         <img  class="story-img" src="{{asset('uploads/appsetting/'.$story->story_image.'')}}" style="width: 100%;height: 600px;border-right: 1px solid black;border-radius: 0px 0px 0px 25px">

     </div>
     <div class="col-lg-4 d-inline-block bg-white  text-about" style="padding-left: 0 !important;border-radius: 0px 0px 25px 0px">

         <div class="text-about-story p-3" style="top: 35%;position:absolute;">
<h3 style="color: blueviolet">{{$story->story_title}}</h3>
         <span style="color: gray;display: block">By {{$story->writer_name}}</span>

         <span style="color: blue">{{$story->short_detail}}</span>
     </div>
     </div>
     </div>
     </div>
 </div>

    </div>
<br>
<div class="row" style="width: 100%">
    <div class="col-lg-12">
        <div class="buttons" style="position:absolute;bottom: 23px;width: 100%">
            <div class="left-btn" style="display: inline-block">
              <a href="{{url('reading')}}">
                  <input type="button" style="border-radius: 0px 0px 0px 25px;background: #35922d !important;" class="btn btn-secondary" value="Back">
              </a>
            </div>
            <div class="right-btn" style="display: inline-block;float: right">
               <a href="{{url('readnow/step2/'.$story->id.'')}}"><input type="button" class="btn btn-success" style="border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="GO ON">
               </a>
            </div>
        </div>

    </div>

</div>

</div>
    </main>

@endsection
