@extends('userSide.layouts.main')

@section('content')


<style>

.cue {
    background-color: #fffed5;
    line-height: 28px;
    font-size: 20px;
    margin-right: 13px;
    padding: 0 5px;
    color: #3f3f3f;
}
.cues {
    display: inline-flex;
}
</style>
<main style="background-color: #c9faf3">
    <div class="container">
        <form method="post" action="{{url('proofread/save/'.$story->id.'')}}">
            @csrf
            <input type="hidden" name="story_title" value="{{$story->story_title}}">
            <input type="hidden" name="spended_time" value="" id="spended_time">
            <input type="hidden" name="cat_id" value="{{ $story->cat_id }}">
            <div class="row " style="">
                


                
                <div class="div3 col-12 ">
                    <div class="col-lg-12 mt-5 p-0">
                        <div class="text p-3" style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
                            <span class="d-block text-white ml-lg-5" style="font-size: 22px">{{$story->story_title}}</span>
                        </div>


                    </div>

                    <div class="container-fluid">
                        


                        <div class="row">

                            <div class="col-lg-12 "
                                style="padding: 0px !important;background-color: white;border-radius:0px 0px 25px 25px">
                                <div class="container-fluid">
                                    

                                       
                                        <div class="row main2 active" style="justify-content: center;">
                                            <div class="col-lg-10 p-4 ">

                                                <div class="q_1 ">
                                                    <div class="col-12 pb-1 my-2" style="padding-top: 1rem!important;background-color: #e5e5e5;">
                                                    <p>Read the passage and correct any grammar or punctuation errors you find.</p>
                                                    </div>

                                                    <div class="col-12 pb-1 my-2" style="padding-top: 1rem!important;">
                                                    
                                                        <textarea class="form-control d-none" name="content" id="" cols="30" rows="20">{{$story->proofdetail->content}}</textarea>
                                                        <textarea class="form-control" name="proofread_content" id="" cols="30" rows="16" style="text-align:justify;">{{$story->proofdetail->content}}</textarea>
                                                    </div>
                                                    


                                                </div>
                                            </div>
                                            


                                            
                                        </div>
                                        <div class="row main3 active2" style="position:relative;">
                                            <div class="w-100" style="position: absolute; top: 31px;">
                                               
                                                <div class="" style="">
                                                
                                                    <div class="right-btn" style="float: right;margin-right: 15px;">
                                                        <input type="submit" class="btn btn-success"
                                                            style="left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "
                                                            value="Submit">
                                                        
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

            </div>
            <br>

            
        </form>
    </div>
</main>

</body>









<script>
    $(document).ready(function(){
        // Find Difference Between Two String
        var start = 1;
            setInterval(function () {
                $('#spended_time').val(start++);
            }, 1000);
        
    });
</script>
    
@endsection
