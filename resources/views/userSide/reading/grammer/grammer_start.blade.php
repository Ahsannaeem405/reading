@extends('userSide.layouts.main')

@section('content')


<main style="background-color: #c9faf3">
    <div class="container">
        <form method="post" action="{{url('quil_connect/save/')}}">
            @csrf
            
            <div class="row " style="">
                <div class="container div1 active">
                            <h2 class="title is-3 register">Welcome to Grammer!</h2>
                            <div class="register-container" style="line-height: 40px;">
                                    <ul class="register-list">
                                        <li>Follow the instructions for each prompt.</li>
                                        <li>Use the example as a guide.</li>
                                        <li>Type your sentence into the box.</li>
                                        <li>Remember to use correct spelling, capitalization, and punctuation!</li>
                                    </ul>
                                    <button class="px-4 mt-4 btn1" type="button" style="color: #ffffff; background-color: #35922d !important;border-radius: 6px;"><span>Begin</span></button>
                                    <br>
                            </div>
                </div>


                <div class="container div2 d-none" style="">
                    <div class="landing-page-html">
                        <h3><strong>Than, Then</strong></h3>
                        <p>Use than to compare two or more things.</p>
                        <p>Use then to say at that time.</p>
                        <p><strong><u>You See</u></strong></p>
                        <p>She is taller <b>then / than</b> him.</p><br>
                        <p><strong><u>You Write</u></strong></p>
                        <p>She is taller <b>than</b> him.</p><br>
                      
                        
                    </div>
                    <button class="py-2 px-4 mt-4 btn2" type="button" style="color: #ffffff; background-color: #35922d !important;border-radius: 6px;">Start activity</button>
                </div>
                <div class="div3 col-12 d-none">
                    <div class="col-lg-12 mt-5 p-0">
                        <div class="text p-3"
                            style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                            <span class="d-block text-white ml-lg-5" style="font-size: 22px"></span>
                        </div>


                    </div>

                    <div class="container-fluid">
                        


                        <div class="row">

                            <div class="col-lg-12 "
                                style="padding: 0px !important;background-color: white;border-radius:0px 0px 25px 25px">
                                <div class="container-fluid">
                                    

                                        @php $count=1; @endphp

                                        @foreach($grammer_questions as $question)
                                        <div class="row main2 {{$loop->first ? 'active':'d-none'}}">
                                            <div class="col-lg-8 p-4 ">

                                                <div class="q_1 ">
                                                    <b><span>Question# {{$count}} of {{$total_question}}:</span></b>
                                                    <span><input type="hidden" value="{{$question->first_sentence}}" name="sentence1[]"></span>
                                                    <span><input type="hidden" value="{{$question->second_sentence}}" name="sentence2[]"></span>
                                                    <span><input type="hidden" value="{{$question->answer}}" name="answer[]"></span>
                                                    <p>{{$question->q_part1}} <b><u>{{$question->q_part2}}</u></b> {{$question->q_part3}}</p>
                                                    <input type="hidden" name="q_id[]" value="{{$question->id}}">
                                                    <h2>{{ $question->first_sentence }}</h2>
                                                    <h2>{{ $question->second_sentence }}</h2>

                                                    
                                                    <div class="col-12 pb-1 my-2" style="padding-top: 1rem!important;background-color: #e5e5e5;">
                                                    <p>Rewrite the sentence with the correct underlined word.</p>
                                                    </div>

                                                    <div class="col-12 pb-1 my-2" style="padding-top: 1rem!important;">
                                                    <input class="form-control activeans" type="text" name="user_answer[]" required placeholder="Type your answer here" style="padding-top: 32px; padding-bottom: 32px; margin-left: -14px; width: 105%;">
                                                    </div>
                                                    <div class="bottom mt-5 ml-lg-4">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12">
                                                                @php $count2=1; @endphp
                                                                

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-lg-4  p-lg-4">


                                                <div class="point"
                                                    style="display: inline-block;float: right;margin-right: 5px">
                                                    <span
                                                        style="border: 1px solid lightgray;padding:2px;border-radius:5px;color: red"><input
                                                            type="hidden" name="point[]"
                                                            value="{{$question->points}}">{{$question->points}} POTENTIAL
                                                        POINTS</span>
                                                </div>

                                            </div>


                                            
                                        </div>
                                        <div class="row main3 {{$loop->first ? 'active2':'d-none'}}" style="position:relative;">
                                            <div class="w-100" style="position: absolute; top: 31px;">
                                                <div class="" style="">
                                                    @if(!$loop->first)
                                                    <div class="right-btn" style="float: left;">
                                                        <input type="button" class="btn btn-success previous"
                                                            style="border-radius: 0px 0px 0px 25px;background: #35922d !important; "
                                                            value="Previous">
                                                        
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="" style="">
                                                @if($loop->last)
                                                    <div class="right-btn" style="float: right;margin-right: 15px;">
                                                        <input type="submit" class="btn btn-success"
                                                            style="    left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "
                                                            value="Submit">
                                                        
                                                    </div>
                                                @else
                                                <div class="right-btn" style="float: right;margin-right: 15px;">
                                                        <input type="button" class="btn btn-success next"
                                                            style="    left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "
                                                            value="Next">
                                                        
                                                    </div>
                                                @endif
                                                </div>

                                            </div>
                                        </div>
                                        

                                        @php $count++; @endphp
                                        @endforeach

                                    








                                    <br>
                                    <br>
                                    <br>
                                    <br>





                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <br>

            
        </form>
    </div>
</main>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
    $(document).ready(function(){
     
        $(document).on("click",".next",function() {
            

            if($(this).closest('form').find('.main2.active').find('.activeans').val()) {
                
                $(this).closest('form').find('.main2.active').addClass('d-none').removeClass('active').next().next().removeClass('d-none').addClass('active');
                $(this).closest('form').find('.main3.active2').addClass('d-none').removeClass('active2').next().next().removeClass('d-none').addClass('active2');

            }else{
                
                toastr.error('Please answer this question');
                
            }

        });
        $(document).on("click",".previous",function() {
    
            $(this).closest('form').find('.main2.active').addClass('d-none').removeClass('active').prev().prev().removeClass('d-none').addClass('active');
            $(this).closest('form').find('.main3.active2').addClass('d-none').removeClass('active2').prev().prev().removeClass('d-none').addClass('active2');
        
        });

        

        


        $(document).on("click",".btn1",function() {
            $('.div1').removeClass('active').addClass('d-none');
            $('.div2').removeClass('d-none').addClass('active');
        });
        $(document).on("click",".btn2",function() {
            $('.div2').removeClass('active').addClass('d-none');
            
            $('.div3').removeClass('d-none').addClass('active');
            var start = 1;
            setInterval(function () {
                $('#spend_time').val(start++);
            }, 1000);
        });
    });
</script>
    
@endsection
