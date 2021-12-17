@extends('admin.layouts.main')

@section('content')


    <div class="container">
        <div class="container-fluid">

            <div class="row mb-5 mt-5">


                <div class="col-lg-12">

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
                                            <i class="fa fa-check " style="font-weight: bolder;color: white;border-radius:5px;background-color: greenyellow;padding: 5px"></i>
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
                                            <i class="fa fa-check " style="font-weight: bolder;color: white;border-radius:5px;background-color: greenyellow;padding: 5px"></i>
                                        </div>

                                    </div>




                                </div>
                            </div>






                        </div>
                    </div>

                </div>

            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">

                        <div>
                            <span style="color: grey">ACHIVEMENTS & WORDS<sup style="background-color: darkgray;color: white;padding: 5px;border-radius: 50%">2</sup></span>

                            <span style="color: grey;float: right"> view</span>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-lg-0  mt-5">

                        <span style="float: right;font-weight: bolder"> 3 days, 3 hours left for this week's assignments to be completed.</span>










                    </div>

                </div>
                <br>


                <div class="row mb-5">



                    <div class="col-lg-12">
                        <div class="row mb-2">
                            <div class="col-lg-8">


                                <span style="font-weight: bolder;">Your Total Assignment Completion</span>
                            </div>

                            <div class="col-lg-4">
                                <span  style="float: right;font-weight: bolder" class="mr-5">Goal</span>
                            </div>
                        </div>

                        <div class="container-fluid" style="padding: 0px !important;">
                            <div class="row" style="padding: 0px !important;margin: 0px !important;">

                                <div class="col-12 mb-2" style="padding: 0px">

                                    <div style="border: 2px solid greenyellow;border-radius: 10px">


                                        <div class="row" style="margin: 0px">
                                            <div class="col-lg-1 col-3" style="border-right:1px solid white;background-color: grey;border-radius:10px 0px 0px 10px  ">
                                                <span style="color: white;font-size: 27px;padding: 1px;">ST</span>
                                            </div>
                                            <div class="col-lg-9 col-6">

                                            </div>

                                            <div class="col-lg-2 col-3 mt-2 mb-2 mt-lg-0" style="border-left: 1px solid lightgreen; ">
                                                <span style="text-align: center;font-weight: bolder">100</span>
                                            </div>

                                        </div>




                                    </div>
                                </div>


                                <div class="col-12 mb-2" style="padding: 0px">

                                    <div style="border: 2px solid greenyellow;border-radius: 10px">


                                        <div class="row" style="margin: 0px">
                                            <div class="col-lg-1 col-3" style="border-right:1px solid white;background-color: grey;border-radius:10px 0px 0px 10px  ">
                                                <span style="color: white;font-size: 27px;padding: 1px;">RA</span>
                                            </div>
                                            <div class="col-lg-9 col-6">

                                            </div>

                                            <div class="col-lg-2 col-3 mt-2 mb-2 mt-lg-0" style="border-left: 1px solid lightgreen; ">
                                                <span style="text-align: center;font-weight: bolder">100</span>
                                            </div>

                                        </div>




                                    </div>
                                </div>

                                <div class="col-12 mb-2" style="padding: 0px">

                                    <div style="border: 2px solid greenyellow;border-radius: 10px">


                                        <div class="row" style="margin: 0px">
                                            <div class="col-lg-1 col-3" style="border-right:1px solid white;background-color: grey;border-radius:10px 0px 0px 10px  ">
                                                <span style="color: white;font-size: 27px;padding: 1px;">IB</span>
                                            </div>
                                            <div class="col-lg-9 col-6">

                                            </div>

                                            <div class="col-lg-2 col-3 mt-2 mb-2 mt-lg-0" style="border-left: 1px solid lightgreen; ">
                                                <span style="text-align: center;font-weight: bolder">100</span>
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



@endsection
