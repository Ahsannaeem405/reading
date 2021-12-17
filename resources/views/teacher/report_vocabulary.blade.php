@extends('userSide.layouts.main')

@section('content')


    <style>


    </style>
    <main style="background-color: #c9faf3">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 mt-5 p-0" >
                    <div class="text p-3" style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">(Student Name) Story [Title]</span>
                    </div>


                </div>

                <div class="container-fluid">



                    <div class="row">





                        <div class="col-lg-12 " style="padding: 0px !important;background-color: white;border-radius: 0px 0px 25px 25px" >
                            <div class="container-fluid">


                                <div class="row text-center mb-5">

                                    <div class="col-lg-6 mt-4">
                                        <b> Spend Time</b>
                                    </div>
                                    <div class="col-lg-6 mt-4 ">
                                        <b>02:56</b>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-8 p-4 "  >

                                        <div class="q_1 ">
                                            <b><span>Question# 1:</span></b>
                                            <span>What is yoyr Name?</span>
                                            <div class="bottom mt-5 ml-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">

                                                        <div style="background-color: #b8e8c3" class="col-lg-6  mb-3 col-12">
                                                            <input type="radio" name="check" class="custom-checkbox" style="  transform: scale(2);">
                                                            <span class="ml-2" style="color: #5c5cb1;font-size: 20px" >option 1</span>
                                                        </div>
                                                        <div style="background-color: #b8e8c3" class="col-lg-6  mb-3 col-12">
                                                            <input type="radio" name="check" class="custom-checkbox" style="  transform: scale(2);">
                                                            <span class="ml-2" style="color: #5c5cb1;font-size: 20px" >option 2</span>
                                                        </div>
                                                        <div style="background-color: orangered" class="col-lg-6  mb-3 col-12">
                                                            <input type="radio" checked name="check" class="custom-checkbox" style="  transform: scale(2);">
                                                            <span class="ml-2" style="color: white;font-size: 20px" >option 3</span>
                                                        </div>
                                                        <div style="background-color: #b8e8c3" class="col-lg-6  mb-3 col-12">
                                                            <input type="radio" name="check" class="custom-checkbox" style="  transform: scale(2);">
                                                            <span class="ml-2" style="color: #5c5cb1;font-size: 20px" >option 4</span>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-4  p-lg-4">


                                        <div class="point" style="display: inline-block;float: right;margin-right: 5px" >
                                            <span style="border: 1px solid lightgray;padding:2px;border-radius:5px;color: red">4 POTENTIAL POINTS</span>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-8 p-4 "  >

                                        <div class="q_1 ">
                                            <b><span>Question# 1:</span></b>
                                            <span>What is yoyr Name?</span>
                                            <div class="bottom mt-5 ml-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">

                                                        <div style="background-color: #b8e8c3" class="col-lg-6  mb-3 col-12">
                                                            <input type="radio" name="check" class="custom-checkbox" style="  transform: scale(2);">
                                                            <span class="ml-2" style="color: #5c5cb1;font-size: 20px" >option 1</span>
                                                        </div>
                                                        <div style="background-color: #b8e8c3" class="col-lg-6  mb-3 col-12">
                                                            <input type="radio" name="check" class="custom-checkbox" style="  transform: scale(2);">
                                                            <span class="ml-2" style="color: #5c5cb1;font-size: 20px" >option 2</span>
                                                        </div>
                                                        <div style="background-color: darkgreen" class="col-lg-6  mb-3 col-12">
                                                            <input type="radio" checked name="check" class="custom-checkbox" style="  transform: scale(2);">
                                                            <span class="ml-2" style="color: white;font-size: 20px" >option 3</span>
                                                        </div>
                                                        <div style="background-color: #b8e8c3" class="col-lg-6  mb-3 col-12">
                                                            <input type="radio" name="check" class="custom-checkbox" style="  transform: scale(2);">
                                                            <span class="ml-2" style="color: #5c5cb1;font-size: 20px" >option 4</span>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-4  p-lg-4">


                                        <div class="point" style="display: inline-block;float: right;margin-right: 5px" >
                                            <span style="border: 1px solid lightgray;padding:2px;border-radius:5px;color: red">4 POTENTIAL POINTS</span>
                                        </div>

                                    </div>
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
                            <a href="{{url('readings')}}"><input type="button" class="btn btn-success" style="    left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="Submit">
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

@endsection
