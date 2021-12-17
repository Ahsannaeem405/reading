@extends('userSide.layouts.main')

@section('content')


    <main style="background-color: #c9faf3">
        <div class="container">
            <div class="row " >
                <div class="col-lg-12 mt-5" >
                    <div class="text p-3" style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                        <span class="d-block text-white ml-lg-5" id="top_append" style="font-size: 22px">{{Auth::user()->name}}</span>

                    </div>

                    <div class="container-fluid">
                        <div class="row bg-white " style="min-height: 500px;border-radius:0px 0px 25px 25px">
                            <div class="col-lg-12 d-inline-block border_question mb-5" style="padding: 0px !important;" >

                                <div class="row text-center mt-5">

                                    <div class="col-lg-6"><span><b>Marks</b></span></div>
                                    <div class="col-lg-6">{{$grammer_sub->obtain}}/{{$grammer_sub->total}}</div>

                                </div>
                                <br>
@php $count=1; @endphp
                                @foreach($grammer_sub->detail as $detail)



                                <div class="point mt-2" style="display: inline-block;float: right;margin-right: 5px" >
                                    <span style="border: 1px solid lightgray;padding:2px;border-radius:5px;color: lightgray"><span id="append_point">{{$detail->point}}</span> POTENTIAL POINTS</span>
                                </div>


                                <div class="bottom mt-5 ml-lg-4 mb-2" style="margin-top: 30px">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 p-3">

                                   <span style="display: inline-block;color: midnightblue" class="mr-lg-2 mt-2">Question {{$count++}}:-</span>
                                            <b>

@php $data=$detail->grammer; @endphp

                                                <span id="append_ques">
                                                @if($data->correct==1)<span style="text-decoration: underline;font-weight: bold">{{$detail->answer}}</span> @else {{$data->q_1}}  @endif
                                                @if($data->correct==2)<span style="text-decoration: underline;font-weight: bold">{{$detail->answer}}</span> @else {{$data->q_2}}  @endif
                                                @if($data->correct==3)<span style="text-decoration: underline;font-weight: bold">{{$detail->answer}}</span> @else {{$data->q_3}}  @endif
                                                </span>
                                            <i class="fa @if($detail->correct==1)fa-check @else fa-times @endif" style="color:@if($detail->correct==1)greenyellow @else red @endif "></i>
                                            </b>



                                        </div>
                                    </div>
                                </div>


                                @endforeach


                            </div>



                        </div>
                    </div>

                </div>
                <br>

            </div>
            <div class="row" style="width: 100%">
                <div class="col-lg-12">
                    <div class="buttons" style="position:absolute;bottom: 0px;width: 100%">


                        <div class="left-btn" style="display: inline-block;">

                        </div>

                        <div class="right-btn" style="display: inline-block;float: right">
                           <a href="{{url('students/dashboard')}}"> <input type="button" class="btn btn-success go_on" style="border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="Go Back">
                           </a>

                        </div>
                    </div>

                </div>

            </div>

        </div>
        <br>
        <br>
    </main>



@endsection

