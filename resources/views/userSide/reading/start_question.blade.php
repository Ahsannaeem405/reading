@extends('userSide.layouts.main')

@section('content')


<style>


</style>
<main style="background-color: #c9faf3">
    <div class="container">
        <form method="post" action="{{url('story/save/'.$story->id.'')}}">
            @csrf
            <input type="hidden" name="story_title" value="{{$story->story_title}}">
            <div class="row " style="">
                <div class="col-lg-12 mt-5 p-0">
                    <div class="text p-3"
                        style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">Start Question Answers about
                            Story [{{$story->story_title}}]</span>
                    </div>


                </div>

                <div class="container-fluid">



                    <div class="row">

                        <div class="col-lg-12 "
                            style="padding: 0px !important;background-color: white;border-radius:0px 0px 25px 25px">
                            <div class="container-fluid">
                                

                                    @php $count=1; @endphp

                                    @foreach($story->question as $question)
                                    <div class="row main2 {{$loop->first ? 'active':'d-none'}}">
                                        <div class="col-lg-8 p-4 ">

                                            <div class="q_1 ">
                                                <b><span>Question# {{$count}}:</span></b>
                                                <span><input type="hidden" value="{{$question->question}}"
                                                        name="question[]">{{$question->question}}?</span>
                                                <input type="hidden" name="q_id[]" value="{{$question->id}}">
                                                <input type="text" name="q_catg_id[]" value="{{$question->catg_quest_id}}">
                                                <div class="bottom mt-5 ml-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12">
                                                            @php $count2=1; @endphp
                                                            @foreach($question->detail as $option)
                                                            <div style="background-color: #b8e8c3"
                                                                class="col-lg-6  mb-3 col-12">
                                                                <input type="radio" name="check_{{$count}}"
                                                                    value="{{$count2++}}" required
                                                                    class="custom-checkbox"
                                                                    style="  transform: scale(2);">
                                                                <span class="ml-2"
                                                                    style="color: #5c5cb1;font-size: 20px"> <input
                                                                        type="hidden" name="option[]"
                                                                        value="{{$option->option}}">{{$option->option}}</span>
                                                            </div>

                                                            @endforeach

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
                                        <div class="w-100" style="position: absolute; top: 36px;">
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
            <br>

            
        </form>
    </div>
</main>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
    $(document).ready(function(){
     
        $(document).on("click",".next",function() {
            if($('.main2.active').find('.custom-checkbox').is(':checked')) {
                
                $('.main2.active').addClass('d-none').removeClass('active').next().next().removeClass('d-none').addClass('active');
                $('.main3.active2').addClass('d-none').removeClass('active2').next().next().removeClass('d-none').addClass('active2');

            }else{
                
                toastr.error('Please answer this question');
            }

        });
        $(document).on("click",".previous",function() {
  
            $('.main2.active').addClass('d-none').removeClass('active').prev().prev().removeClass('d-none').addClass('active');
            $('.main3.active2').addClass('d-none').removeClass('active2').prev().prev().removeClass('d-none').addClass('active2');
            

        });
    });
</script>
    
@endsection
