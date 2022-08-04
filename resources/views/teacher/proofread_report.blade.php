
   

<form action="{{url('teacher/student/reading/report/submit/'.$reading->id.'')}}" method="post">
    @csrf
<div class="row ">

    <div class="col-lg-12 mt-5 p-0">
        <div class="text p-3"
            style="background-color: #46a7b8;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid #31b48f">
            <span class="d-block text-white ml-lg-5" style="font-size: 22px">({{$reading->user->name}}) Proofreading
                [{{$reading->story_title}}]</span>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 "
                style="padding: 0px !important;background-color: white;border-radius: 0px 0px 25px 25px">
                <div class="container-fluid">


                    
                   
                    <div class="row" style="justify-content:center;">

                        
                        <div class="col-lg-12 p-4 ">

                            
                                
                            <div class="bottom mt-5 ml-lg-4">
                                    <div class="row" style="justify-content: space-evenly; padding: -3px;">
                                        <div class="col-lg-5 col-sm-11 mr-2">
                                            <h4 for="">Proofreading content:</h4>
                                            <div id="div1" class="" style="text-align: justify; border-radius: 12px; padding: 20px; box-shadow: 0px 1px 6px 2px grey;">
                                            {{$reading->proofdetail->content}}

                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-sm-11 mr-2">

                                            <h4 class="" for="">After proofreading:</h4>
                                            <div id="div2" class="" style="text-align: justify; border-radius: 12px; padding: 20px; box-shadow: 0px 1px 6px 2px grey;">
                                            {{$reading->proofdetail->user_content}}

                                            </div>
                                        </div>

                                        
                                        <input type="hidden" name="stars" id="stars" value="{{$reading->obtain}}">
                                    </div>

                                    <div class="d-flex">
                                        <label class="mt-5 text">Please Add Your Remarks</label>
                                        
                                        <div class="rating mb-3 mt-5 mx-5">
                                        <span class="rating__result"></span>
                                            @php
                                                $max=5-$reading->obtain;
                                                $i=1;
                                                @endphp

                                            @for($i=1; $i<=$reading->obtain;$i++ )
                                            <i class="rating__star fas fa-star star_num" abc="{{$i}}"></i>
                                            @endfor

                                            @for($j=1; $j<=$max;$j++ )

                                                <i class="rating__star far fa-star star_num" abc="{{$i++}}"></i>
                                            @endfor
                                        </div>

                                    </div>
                                    <textarea name="remarks" id="" cols="30" rows="10" class="form-control" placeholder="Remarks">{{$reading->proofdetail->teacher_remarks}}</textarea>
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
                       <input type="submit"
                                class="btn btn-success"
                                style="    left: 15px;border-radius: 0px 0px 25px 0px;background: #35922d !important; "
                                value="Submit">
                        
                    </div>
                </div>
            </div>
        </div>
</form>
<script>
    $(document).ready(function(){
        // Find Difference Between Two String
        var text1 = $('#div1').text().trim();
        var text2 = $('#div2').text().trim();
        var text1_arr = text1.split(' ');
        var text1_temp = text1.split(' ');
        var text2_arr = text2.split(' ');  

        // text1_arr.map(function(ele, index){
        //     if($.inArray( ele, text2_arr)!=-1){
        //         text1_arr[index] = '<b>'+ele+'</b>';
        //     }
        // });

        text2_arr.map(function(ele, index){
            if($.inArray( ele, text1_temp)!=-1){
                text2_arr[index] = ele;
            }else{
                text2_arr[index] = '<b>'+ele+'</b>';
            }
        });

        $('#div1').html(text1_arr.join(' '));
        $('#div2').html(text2_arr.join(' '));
        
    });
</script>


<script>

const ratingStars = [...document.getElementsByClassName("rating__star")];
const ratingResult = document.querySelector(".rating__result");

printRatingResult(ratingResult);

function executeRating(stars, result) {
    const starClassActive = "rating__star fas fa-star";
    const starClassUnactive = "rating__star far fa-star";
    const starsLength = stars.length;
    let i;
    stars.map((star) => {
        star.onclick = () => {
            i = stars.indexOf(star);

            if (star.className.indexOf(starClassUnactive) !== -1) {
                printRatingResult(result, i + 1);
                for (i; i >= 0; --i) stars[i].className = starClassActive;
            } else {
                printRatingResult(result, i);
                for (i; i < starsLength; ++i) stars[i].className = starClassUnactive;
            }
        };
    });
}

function printRatingResult(result, num = 0) {
    result.textContent = `${num}/5`;
}

executeRating(ratingStars, ratingResult)
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){

$(".star_num").click(function(){
    var val=$(this).attr('abc');
    $('#stars').val(val);
});
});
</script>