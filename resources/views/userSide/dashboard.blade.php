@extends('userSide.layouts.main')

@section('content')



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
                <div class="col-lg-4">
                    <span style="font-weight: bolder" class="ml-lg-3 mb-2">{{Auth::user()->name}} <i class="fa fa-setting"></i></span>
                    <div style="background-color: #0D7091;border-radius: 25px">
                        <div style="padding: 53px;text-align: center">
<i class="fa fa-question d-block" style="color: white;font-size: 120px;margin-bottom: 20px"></i>
                    <span style="color: white;font-size: 22px;" class="" >Select profile image</span>

                        </div>
                        </div>

                </div>

                <div class="col-lg-8">

                    <div class="row mb-2">
                        <div class="col-lg-8">


                    <span style="font-weight: bolder;">Select a program and begin lessons!</span>
                        </div>

                        <div class="col-lg-4">
                     <span style="float: right;font-weight: bolder" class="">This week's Lessons<i class="fa fa-question ml-2" style="color: grey;border: 1px solid gray;border-radius: 50%;padding: 5px"></i></span>
                        </div>
                        </div>

                    <div class="container-fluid" style="padding: 0px !important;">
                    <div class="row" style="padding: 0px !important;margin: 0px !important;">

                        <div class="col-12 mb-2" style="padding: 0px">

                            <div style="border: 2px solid greenyellow;padding: 10px;border-radius: 10px">


                                <div class="row">
                                 <div class="col-lg-1 col-2">
                                    <img src="{{asset('userSide/assets/img/gallery/story1.jpg')}}" style="width: 60px;height: 60px;border-radius: 5px;border: 1px solid greenyellow">
                                   </div>
                                    <div class="col-lg-8 col-6">
                                        <span class="ml-3" style="font-weight: bolder">Reading</span>
                                    </div>

                                    <div class="col-lg-3 mt-2 mt-lg-0" style="border-left: 1px solid lightgreen; ">

                                        @foreach($reading as $read)
                                            @php $avg=($read->obtain / $read->total)*100; @endphp

                                      <a href="{{url('students/reading/report/'.$read->id.'')}}">
                                          <i class="fa @if($avg>50) fa-check @else fa-times @endif mb-1" style="font-weight: bolder;color: white;border-radius:5px; @if($avg>50)background-color: greenyellow; @else background-color: orangered;  @endif padding: 5px"></i>
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
                                        <img src="{{asset('userSide/assets/img/gallery/story1.jpg')}}" style="width: 60px;height: 60px;border-radius: 5px;border: 1px solid greenyellow">
                                    </div>
                                    <div class="col-lg-8 col-6">
                                        <span class="ml-3" style="font-weight: bolder">Vocabulary</span>
                                    </div>

                                    <div class="col-lg-3 mt-2 mt-lg-0" style="border-left: 1px solid lightgreen; ">
                                        <i class="fa fa-check " style="font-weight: bolder;color: white;border-radius:5px;background-color: greenyellow;padding: 5px"></i>
                                    </div>

                                </div>




                            </div>
                        </div>

                        <div class="col-12 " style="padding: 0px">

                            <div style="border: 2px solid greenyellow;padding: 10px;border-radius: 10px">


                                <div class="row">
                                    <div class="col-lg-1 col-2">
                                        <img src="{{asset('userSide/assets/img/gallery/story1.jpg')}}" style="width: 60px;height: 60px;border-radius: 5px;border: 1px solid greenyellow">
                                    </div>
                                    <div class="col-lg-8 col-6">
                                        <span class="ml-3" style="font-weight: bolder">Writing</span>
                                    </div>

                                    <div class="col-lg-3 mt-2 mt-lg-0" style="border-left: 1px solid lightgreen; ">

                                        @foreach($writing_topic as $topic)
                                            @if($topic->teacher_read==1 )


                                    <a href="{{url('student/writing/topic/report/'.$topic->id.'')}}">    <i class="fa fa-check " style="font-weight: bolder;color: white;border-radius:5px;background-color: @if($topic->obtain>2)greenyellow @else red @endif;padding: 5px"></i></a>

                                            @else
                                                <a href="{{url('student/writing/topic/report/'.$topic->id.'')}}">    <i class="fa fa-question" style="font-weight: bolder;color: white;border-radius:5px;background-color: #ff9966;padding: 5px"></i></a>

                                            @endif

                                            @endforeach

                                        @foreach($writing_grammer as $gram)
                                                @php $avg=($gram->obtain / $gram->total)*100; @endphp

                                                <a href="{{url('student/writing/grammer/report/'.$gram->id.'')}}">    <i class="fa @if($avg>50) fa-check @else fa-times  @endif" style="font-weight: bolder;color: white;border-radius:5px;background-color: @if($avg>50) greenyellow @else red @endif;padding: 5px"></i></a>


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
@endsection
