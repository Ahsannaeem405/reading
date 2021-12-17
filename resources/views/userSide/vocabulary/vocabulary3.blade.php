@extends('userSide.layouts.main')

@section('content')


    <style>
        @media screen and (max-width: 980px) {
            .div2{
                height: 400px !important;
            }
            .border_question{
                border-right: none !important;
                border-bottom: 1px solid deepskyblue;
            }

        }

    </style>
    <main style="background-color: #c9faf3">
        <div class="container">
            <div class="row " >
                <div class="col-lg-12 mt-5" >
                    <div class="text p-3" style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">Type the form of the word that will best completete the sentence.</span>
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">Then press the "Check Me" button.</span>
                    </div>

                    <div class="container-fluid">
                        <div class="row bg-white " style="min-height: 500px;border-radius:0px 0px 25px 25px">
                            <div class="col-lg-8 d-inline-block border_question" style="padding: 0px !important;border-right: 1px solid deepskyblue" >
                                <br>
                                <div class="flash" style="display: inline-block;width: 100%"  >
                                    <input type="button" class="btn btn-success d-inline-block ml-4" style="height:47px;width:30%;padding: 16px;background-color: #35922d !important;border-radius: 10px" value="FLASH">



                                </div>

                                <div class="point mt-2" style="display: inline-block;float: right;margin-right: 5px" >
                                    <span style="border: 1px solid lightgray;padding:2px;border-radius:5px;color: lightgray">6 POTENTIAL POINTS</span>
                                </div>


                                <div class="bottom mt-5 ml-lg-4 mb-5">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 p-3">


<b ><span style="">What is your name</span><input class="ml-2" style="border-top: none;
    border-right: none;
    border-left: none;" type="text"><span>?</span></b>


                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="col-lg-4 d-inline-block div2" style="padding: 0px  !important;"  >

                                <div class="p-3">
                                    <div class="top-head" style="border-bottom: 2px solid lightgray">
                                        <h5 style="color: lightgray">Lesson Words</h5>
                                        <span style="color: lightgray">Earn 7+ Points Word Mastery</span>

                                    </div>


                                    <div class="bottom mt-4">
                                        <div style="border-bottom: 3px dotted gray">
                                            <input type="radio" disabled>
                                            <span style="color: gray " >margin</span>
                                        </div>

                                        <div style="border-bottom: 3px dotted gray">
                                            <input type="radio" disabled>
                                            <span style="color: gray " >margin</span>
                                        </div>

                                        <div style="border-bottom: 3px dotted gray">
                                            <input type="radio" disabled>
                                            <span style="color: gray " >margin</span>
                                        </div>

                                        <div style="border-bottom: 3px dotted gray">
                                            <input type="radio" disabled>
                                            <span style="color: gray " >margin</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="w3-container" style="position: absolute;width: 100%;bottom: 62px;">

                                    <div class="w3-light-grey">
                                        <div class="w3-container w3-green w3-center" style="width:25%">25%</div>
                                    </div>

                                </div>


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
                            <a href="{{url('')}}"><input type="button" class="btn btn-success" style="border-radius: 0px 0px 0px 25px;background: #35922d !important; "  value="Check Me">
                            </a>
                        </div>

                        <div class="right-btn" style="display: inline-block;float: right">
                            <a href="{{url('vocabulary/step4')}}"><input type="button" class="btn btn-success" style="border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="GO ON">
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
