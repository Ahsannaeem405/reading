@extends('userSide.layouts.main')
@section('content')
    <style>

    </style>
    <main style="background-color: #c9faf3">
        <div class="container">
        <div class="row ">
    <div class="col-lg-12 mt-5 p-0">
        <div class="text p-3"
            style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
            <span class="d-block text-white ml-lg-5" style="font-size: 22px">({{$reading->user->name}}) Grammer</span>
        </div>


    </div>

    <div class="container-fluid">



        <div class="row">





            <div class="col-lg-12 "
                style="padding: 0px !important;background-color: white;border-radius: 0px 0px 25px 25px">
                <div class="container-fluid">


                    <div class="row text-center mb-1">

                        <div class="col-lg-6 mt-4">
                            <b> Spend Time</b>
                        </div>
                        <div class="col-lg-6 mt-4 ">
                            <b>{{$reading->spend_time}}</b>
                        </div>

                    </div>


                    <div class="row text-center mb-5">

                        <div class="col-lg-6 mt-4">
                            <b> Marks</b>
                        </div>
                        <div class="col-lg-6 mt-4 ">
                            <b>{{$reading->obtain}}{{'/'}}{{$reading->total}}</b>
                        </div>

                    </div>
                    <div class="row" style="overflow-y: scroll; max-height: 500px;">

                        @php $count=1; @endphp

                        @foreach($reading->report_question as $question)
                        <div class="col-lg-8 p-4 ">

                            <div class="q_1 ">
                                <b><span>Question# {{$count}}:</span></b>
                                <span>
                                <input type="hidden" name="q_id[]" value="{{$question->id}}">

                                <div class="bottom mt-5 ml-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <p>{{$question->user_answer}}
                                                <span
                                                    style="padding: 1px; color: white; @if($question->correct == 'yes') background: green; @else background: red; @endif"
                                                    class="px-1"><i
                                                        class="fa @if($question->correct == 'yes') fa-check @else fa-times @endif"></i></span>
                                            </p>


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-4  p-lg-4">


                            <div class="point" style="display: inline-block;float: right;margin-right: 5px">
                                <span
                                    style="border: 1px solid lightgray;padding:2px;border-radius:5px;color: red"><input
                                        type="hidden" name="point[]" value="{{$question->points}}">{{$question->points}}
                                    POTENTIAL POINTS</span>
                            </div>

                        </div>

                        @php $count++; @endphp
                        @endforeach

                    </div>



                    <br>
                    <br>
                    <br>
                    <br>





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
                            <a href="{{url('students/dashboard')}}"><input type="button" class="btn btn-success" style="    left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="Go Back">
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

@endsection
