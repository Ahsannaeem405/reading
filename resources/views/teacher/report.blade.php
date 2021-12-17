@extends('userSide.layouts.main')

@section('content')

    <main>

        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Rehman Ahmad Report</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="container-fluid">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row mb-5 mt-5">
                    <div class="col-lg-12">

                        <div class="row mb-2">
                            <div class="col-lg-8">
                                <span style="font-weight: bolder;">Select a program That you wants to check lessons!</span>
                            </div>

                            <div class="col-lg-4">
                                <span style="float: right;font-weight: bolder" class="">This week's Lessons<i
                                        class="fa fa-question ml-2"
                                        style="color: grey;border: 1px solid gray;border-radius: 50%;padding: 5px"></i></span>
                            </div>
                        </div>

                        <div class="container-fluid" style="padding: 0px !important;">
                            <div class="row" style="padding: 0px !important;margin: 0px !important;">

                                <div class="col-12 mb-2" style="padding: 0px">

                                    <div style="border: 2px solid greenyellow;padding: 10px;border-radius: 10px">


                                        <div class="row">
                                            <div class="col-lg-1 col-2">
                                                <img src="{{asset('userSide/assets/img/gallery/story1.jpg')}}"
                                                     style="width: 60px;height: 60px;border-radius: 5px;border: 1px solid greenyellow">
                                            </div>
                                            <div class="col-lg-8 col-6">
                                                <span class="ml-3" style="font-weight: bolder">Reading</span>
                                            </div>

                                            <div class="col-lg-3 mt-2 mt-lg-0"
                                                 style="border-left: 1px solid lightgreen; ">
                                                @foreach($reading as $read)
                                                @php $avg=($read->obtain / $read->total)*100; @endphp

                                                <a href="{{url('teacher/student/report/reading/'.$read->id.'')}}">  <div style="display: inline-block">

                                                      <i class="fa @if($avg>50) fa-check @else fa-times @endif mb-1 d-inline-block "
                                                       style="font-weight: bolder;color: white;border-radius:5px;@if($avg>50)background-color: greenyellow; @else background-color: orangered;  @endif ;padding: 5px"></i>

                                                   @if($read->read_teacher==0)
                                                    <div  class="d-inline-block" style="margin-left:-11px;background-color: red;width: 15px;height: 15px;border-radius: 50%;color: white;text-align: center;"><sup style="color: white" >1</sup></div>
                                                @endif
                                                    </div>
                                              </a>
                                                @endforeach

                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-12 mb-2" style="padding: 0px">

                                    <div style="border: 2px solid greenyellow;padding: 10px;border-radius: 10px">


                                        <div class="row">
                                            <div class="col-lg-1 col-2">
                                                <img src="{{asset('userSide/assets/img/gallery/story1.jpg')}}"
                                                     style="width: 60px;height: 60px;border-radius: 5px;border: 1px solid greenyellow">
                                            </div>
                                            <div class="col-lg-8 col-6">
                                                <span class="ml-3" style="font-weight: bolder">Vocabulary</span>
                                            </div>

                                            <div class="col-lg-3 mt-2 mt-lg-0"
                                                 style="border-left: 1px solid lightgreen; ">

                                                <a href="{{url('teacher/student/report/vocabulary')}}">
                                                <div style="display: inline-block">
                                                <i class="fa fa-check d-inline-block "
                                                   style="font-weight: bolder;color: white;border-radius:5px;background-color: greenyellow;padding: 5px"></i>
                                             <div  class="d-inline-block" style="margin-left:-11px;background-color: red;width: 15px;height: 15px;border-radius: 50%;color: white;text-align: center;"><sup style="color: white" >1</sup></div>
                                            </div>
                                                </a>


                                                <a href="{{url('teacher/student/report/vocabulary')}}">
                                                <div style="display: inline-block">
                                                    <i class="fa fa-times d-inline-block "
                                                       style="font-weight: bolder;color: white;border-radius:5px;background-color: orangered;padding: 5px"></i>
                                                    <div  class="d-inline-block" style="margin-left:-11px;background-color: red;width: 15px;height: 15px;border-radius: 50%;color: white;text-align: center;"><sup style="color: white" >1</sup></div>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 " style="padding: 0px">

                                    <div style="border: 2px solid greenyellow;padding: 10px;border-radius: 10px">


                                        <div class="row">
                                            <div class="col-lg-1 col-2">
                                                <img src="{{asset('userSide/assets/img/gallery/story1.jpg')}}"
                                                     style="width: 60px;height: 60px;border-radius: 5px;border: 1px solid greenyellow">
                                            </div>
                                            <div class="col-lg-8 col-6">
                                                <span class="ml-3" style="font-weight: bolder">Writing</span>
                                            </div>

                                            <div class="col-lg-3 mt-2 mt-lg-0"
                                                 style="border-left: 1px solid lightgreen; ">
                                                <div style="display: inline-block">
                                                    @foreach($writing_topic as $topic)
                                                        @if($topic->teacher_read==1 )


                                                            <a href="{{url('teacher/student/writing/topic/report/'.$topic->id.'')}}">    <i class="fa fa-check " style="font-weight: bolder;color: white;border-radius:5px;background-color: @if($topic->obtain>2)greenyellow @else red @endif;padding: 5px"></i></a>

                                                        @else
                                                            <a href="{{url('teacher/student/writing/topic/report/'.$topic->id.'')}}">    <i class="fa fa-question" style="font-weight: bolder;color: white;border-radius:5px;background-color: #ff9966;padding: 5px"></i></a>
                                                            <div  class="d-inline-block" style="margin-left:-11px;background-color: red;width: 15px;height: 15px;border-radius: 50%;color: white;text-align: center;"><sup style="color: white" >1</sup></div>

                                                        @endif

                                                    @endforeach
                                                </div>


                                            </div>

                                        </div>
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
