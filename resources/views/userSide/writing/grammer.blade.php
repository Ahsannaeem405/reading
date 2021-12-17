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
                        <span class="d-block text-white ml-lg-5" id="top_append" style="font-size: 22px">{{$grammer->top_heading}}</span>
                        <span class="d-block text-white ml-lg-5" style="font-size: 22px">Then press the "GO ON" button.</span>
                    </div>

                    <div class="container-fluid">
                        <div class="row bg-white " style="min-height: 500px;border-radius:0px 0px 25px 25px">
                            <div class="col-lg-8 d-inline-block border_question" style="padding: 0px !important;border-right: 1px solid deepskyblue" >
                                <br>


                                <div class="point mt-2" style="display: inline-block;float: right;margin-right: 5px" >
                                    <span style="border: 1px solid lightgray;padding:2px;border-radius:5px;color: lightgray"><span id="append_point">{{$grammer->points}}</span> POTENTIAL POINTS</span>
                                    <input type="hidden" name="points" value="{{$grammer->points}}" id="points">
                                </div>


                                <div class="bottom mt-5 ml-lg-4 mb-2" style="margin-top: 30px">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 p-3">

                                   <span style="display: inline-block;color: midnightblue" class="mr-lg-2 mt-2">Question:-</span>
                                            <b>
                                                <input type="hidden" name="question_id" id="question_id" value="{{$grammer->id}}">
                                                <input type="hidden" name="step" id="step" value="1">
                                                <input type="hidden" name="correct" id="correct" value="{{$grammer->correct}}">
                                                <input type="hidden" name="prev_id" id="prev_id" value="{{$grammer->id}}">

                                                <span id="append_ques">
                                                @if($grammer->correct==1)<span style="text-decoration: underline;font-weight: bold"><input type="text" name="ans" id="ans" style="border: none;border-bottom: 1px solid black;color: green"></span> @else {{$grammer->q_1}}  @endif
                                                @if($grammer->correct==2)<span style="text-decoration: underline;font-weight: bold"><input type="text" name="ans" id="ans" style="border: none;border-bottom: 1px solid black;color: green"></span> @else {{$grammer->q_2}}  @endif
                                                @if($grammer->correct==3)<span style="text-decoration: underline;font-weight: bold"><input type="text" name="ans" id="ans" style="border: none;border-bottom: 1px solid black;color: green"></span> @else {{$grammer->q_3}}  @endif
                                                </span>
                                            </b>


                                        </div>
                                    </div>
                                </div>





                            </div>


                            <div class="col-lg-4 d-inline-block div2" style="padding: 0px  !important;"  >

                                <div class="p-3">
                                    <div class="top-head" style="border-bottom: 2px solid lightgray">
                                        <h5 style="color: lightgray">Grammer Question <span id="step_append">1</span>/10</h5>

                                    </div>


                                    <span id="append_data">



                                    </span>





                                </div>


                                <div class="w3-container" style="position: absolute;width: 100%;bottom: 62px;">

                                    <div class="w3-light-grey" id="progress_bar">
                                        <div class="w3-container w3-green w3-center" style="width:0%">0%</div>
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

                        </div>

                        <div class="right-btn" style="display: inline-block;float: right">
                            <input type="button" class="btn btn-success go_on" style="border-radius: 0px 0px 25px 0px;background: #35922d !important; "  value="GO ON">

                        </div>
                    </div>

                </div>

            </div>

        </div>
        <br>
        <br>
    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var first=0;
            $(".go_on").click(function(){
               var step=$('#step').val();
               if(parseInt(step)<3)
               {
                 var ans=$('#ans').val();
                 var q_id=$('#question_id').val();
                 var correct=$('#correct').val();
                 var points=$('#points').val();
                 var prev_id=$('#prev_id').val();
                 if(ans=="" || ans==" ")
                 {
                     alert('Please fill in the blank');
                 }
                 else {

                     var per=100/3;
                     var progress=' ';
                 var total=per * step;
                     progress='<div class="w3-container w3-green w3-center" style="width: '+total.toFixed(2)+'% !important;">'+total.toFixed(2)+'%</div>';

                     $('#progress_bar').empty();
                     $('#progress_bar').append(progress);

                     if(first==0) {
                         first=1;
                         $.ajax({
                             type: 'get',
                             url: '{{URL::to('writing/grammer/submit')}}',
                             data: {
                                 'q_id': q_id,
                                 'ans': ans,
                                 'correct': correct,
                                 'points': points,
                                 'prev_id': prev_id,
                                 'limit': 1
                             },
                             async:true,

                             success: function (data) {
                                 first=0;
                                 var question = data[0]['new_ques'];

                                 $('#question_id').val(question.id);
                                 $('#points').val(question.points);
                                 $('#append_point').empty();
                                 $('#step_append').empty();
                                 $('#append_point').append(question.points);
                                 $('#correct').val(question.correct);
                                 var pre = $('#prev_id').val();
                                 $('#prev_id').val(pre + ',' + question.id);
                                 var sep = $('#step').val();
                                 $('#step').val(parseInt(sep) + 1);
                                 $('#step_append').append(parseInt(sep) + 1);
                                 $('#append_ques').empty();
                                 var op = ' ';
                                 var op2 = ' ';


                                 if (data[0]['right'] == 1) {
                                     op2 += '   <div class="bottom mt-4">';
                                     op2 += '<div style="border-bottom: 3px dotted gray">';
                                     op2 += '<input type="radio" disabled class="mr-lg-2">';
                                     op2 += '<span style="color: gray " >' + data[0]['question'] + ' <i style="color: green" class="fa fa-check"></i></span>';
                                     op2 += ' </div>';

                                     op2 += '</div>';
                                 } else {

                                     op2 += '   <div class="bottom mt-4">';
                                     op2 += '<div style="border-bottom: 3px dotted gray">';
                                     op2 += '<input type="radio" disabled class="mr-lg-2">';
                                     op2 += '<span style="color: gray " >' + data[0]['question'] + ' <i style="color: red" class="fa fa-times"></i></span>';
                                     op2 += ' </div>';

                                     op2 += '</div>';
                                 }
                                 var space = ' ';
                                 if (question.correct == 1) {
                                     op += '<span style="font-weight: bold"><input type="text" name="ans" id="ans" style="border: none;border-bottom: 1px solid black;color: green"></span>';
                                 } else {
                                     op += '' + space + '' + question.q_1 + '';
                                 }

                                 if (question.correct == 2) {
                                     op += '<span style="font-weight: bold"><input type="text" name="ans" id="ans" style="border: none;border-bottom: 1px solid black;color: green"></span>';
                                 } else {
                                     op += '' + space + '' + question.q_2 + '';
                                 }


                                 if (question.correct == 3) {
                                     op += '<span style="font-weight: bold"><input type="text" name="ans" id="ans" style="border: none;border-bottom: 1px solid black;color: green"></span>';
                                 } else {
                                     op += '' + space + '' + question.q_3 + '';
                                 }

                                 console.log(op2);
                                 $('#append_ques').append(op);
                                 $('#append_data').append(op2);
                                 $('#top_append').append(question.top_heading);

                             },
                             error: function () {


                             }

                         });
                     }
                 }
               }

               else
               {
                   var ans=$('#ans').val();
                   var q_id=$('#question_id').val();
                   var correct=$('#correct').val();
                   var points=$('#points').val();
                   var prev_id=$('#prev_id').val();
                   if(ans=="" || ans==" ")
                   {
                       alert('Please fill in the blank');
                   }
                   else {
                     $('.go_on').prop('disabled',true);
                     var progress=" "
                       progress='<div class="w3-container w3-green w3-center" style="width:100%">100%</div>';

                       $('#progress_bar').empty();
                       $('#progress_bar').append(progress);
                       $.ajax({
                           type:'get',
                           url:'{{URL::to('writing/grammer/submit')}}',
                           data:{'q_id':q_id,'ans':ans,'correct':correct,'points':points,'prev_id':prev_id,'limit':0},

                           success:function(data){

                               var question=data[0]['new_ques'];

                               $('#question_id').val(question.id);
                               $('#points').val(question.points);
                               $('#append_point').empty();
                               $('#step_append').empty();
                               $('#append_point').append(question.points);
                               $('#correct').val(question.correct);
                               var pre=$('#prev_id').val();
                               $('#prev_id').val(pre+','+question.id);
                               var sep=$('#step').val();
                               $('#step').val(parseInt(sep) +1);
                               $('#step_append').append(parseInt(sep) +1);

                               var op=' ';
                               var op2=' ';


                               if(data[0]['right']==1) {
                                   op2 += '   <div class="bottom mt-4">';
                                   op2 += '<div style="border-bottom: 3px dotted gray">';
                                   op2 += '<input type="radio" disabled class="mr-lg-2">';
                                   op2 += '<span style="color: gray " >' + data[0]['question'] + ' <i style="color: green" class="fa fa-check"></i></span>';
                                   op2 += ' </div>';

                                   op2 += '</div>';
                               }

                               else {

                                   op2 += '   <div class="bottom mt-4">';
                                   op2 += '<div style="border-bottom: 3px dotted gray">';
                                   op2 += '<input type="radio" disabled class="mr-lg-2">';
                                   op2 += '<span style="color: gray " >' + data[0]['question'] + ' <i style="color: red" class="fa fa-times"></i></span>';
                                   op2 += ' </div>';

                                   op2 += '</div>';
                               }
                               var space=' ';




                               $('#append_data').append(op2);
                               $('#top_append').append(question.top_heading);


                               setInterval(function(){
                                   window.location.href='/students/dashboard';

                               }, 3000);


                           },
                           error:function(){


                           }

                       });

                   }
               }
            });
        });
    </script>

@endsection

