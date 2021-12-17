@extends('userSide.layouts.main2')

@section('content')


    <style>
        #jquerybuddy span {
            text-shadow: 0 0 4px rgb(16, 15, 15);
            color: transparent;
        }
        #jquerybuddy{
            user-select: none;
          -webkit-user-select: none;
        }

    </style>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('userSide/assets/js/jquery.lettering.js')}}"></script>
    <script src="{{asset('userSide/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('userSide/assets/js/color.js')}}"></script>
    <script src="{{asset('userSide/assets/js/textshadow.js')}}"></script>

    <script>
        $(function () {
            var first = 0;


            $("#jquerybuddy").lettering();

            // hack to get animations to run again


            var text = $("#jquerybuddy"),
                numLetters = text.find("span").length;
            var count = 0;
            var count2 = 45;
            var count3 = 30;
            var blur_again = 0;
            var fun1;
            var fun2;
            var fun3;

            function randomBlurize() {
                console.log('fun1');
                if (first == 0) {
                    text.find("span:nth-child(" + (count++) + ")")
                        .animate({
                            'textShadowBlur': Math.floor(10) + 4,
                            'textShadowColor': 'rgba(0,1,0,' + (15) + ')'
                        });
                    if (count >= numLetters) {
                        first = 1;

                        clearTimeout(fun1);
                        clearblur();
                    }

                    // Call itself recurssively
                    fun1 = setTimeout(randomBlurize, 10);
                }
            }// Call once
            randomBlurize();

            function clearblur() {
                console.log(count2);
                text.find("span:nth-child(" + (count2++) + ")")
                    .animate({
                        'textShadowBlur': Math.floor(0) + 0,
                        'textShadowColor': 'rgba(39,51,141,' + (0) + ')'
                    });

                if (blur_again == 0) {
                    blur_again = 1;
                    blur_again2();
                }


                fun2 = setTimeout(clearblur, 120);

                if (count2 >= numLetters) {


                    clearTimeout(fun2);
                }
            }

            // apply spans

            function blur_again2() {
                console.log('fun3');
                text.find("span:nth-child(" + (count3++) + ")")
                    .animate({
                        'textShadowBlur': Math.floor(10) + 4,
                        'textShadowColor': 'rgba(0,1,0,' + (15) + ')'
                    });
                fun3 = setTimeout(blur_again2, 120);
                if (count3 >= numLetters) {
                    clearTimeout(fun3);
                }
            }


        });
    </script>

    <form style="background-color: #c9faf3" action="{{url('start/story/questions/'.$story->id.'')}}">
        <div class="container">


            <input type="hidden" name="time" id="spend_time">
            <div class="row">
                <div class="col-lg-12 mt-5 p-0">
                    <div class="text p-3"
                         style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">Your Story [{{$story->story_title}}]</span>
                    </div>


                </div>

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12 d-inline-block "
                             style="padding: 0px !important; height: 700px;background-color: lightgray;border-radius: 0px 0px 25px 25px">

                            <div class="inner-row text-center">
                                <div class="row "
                                     style="min-height: 700px;background-color: white;width: 84%;margin-left: 8%;margin-left: 8%">
                                    <div class="m-5">
                                        <p id="jquerybuddy" class="table-responsive blackblur "
                                           style="max-height:700px;color: #2f5497;font-size: 22px;line-height: 40px;">

                                            {{$story->content}}

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 100%">
                <div class="col-lg-12">
                    <div class="buttons" style="position:absolute;bottom: 25px;width: 100%">

                        <div class="right-btn" style="display: inline-block;float: right">
                            <input type="submit" class="btn btn-success"
                                   style="    bottom: -24px;left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "
                                   value="GO ON">

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <br>

    </form>
    </div>
    </main>



    <script>


        $(document).ready(function () {
            var start = 1;

            setInterval(function () {


                $('#spend_time').val(start++);


            }, 1000);


        });
    </script>

@endsection
