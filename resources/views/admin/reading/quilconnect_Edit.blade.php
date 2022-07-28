@extends('admin.layouts.main')
@section('content')
    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Connect </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{url('admin/readings/quilconnect/update/'.$reading->id.'')}}" method="post" enctype="multipart/form-data"  class="steps-validation wizard-circle">
                             @csrf
                                <!-- Step 1 -->
                                <h6><i class="step-icon feather icon-home"></i> Step 1</h6>
                                <fieldset>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstName3">
                                                    Title for connect
                                                </label>
                                                <input type="text" value="{{$reading->story_title}}" class="form-control required" id="firstName3" name="story_title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName3">
                                                    Connect writer name
                                                </label>
                                                <input type="text" class="form-control required" id="lastName3" value="{{$reading->writer_name}}" name="writer_name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress67">
                                                    Select Category
                                                </label>
                                                <select class="form-control required" id="cat" name="cat">
                                                    <option selected value="">Select category</option>
                                                    @foreach($category as $cat)
                                                        <option @if($cat->id==$reading->cat_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                       


                                    </div>
                                </fieldset>

                                <!-- Step 2 -->
                                <!-- Step 3 -->
                                <h6><i class="step-icon feather icon-briefcase"></i> Step 2</h6>
                                <fieldset>
                                    <input type="button" class=" btn-primary waves-input-wrapper waves-effect waves-light mb-2" id="add_ques" value="Add Question">
                                    <div class="container-fluid" id="append_data">

                                        @php $count=1; @endphp
                                        @foreach($reading->quil_question as $ques)
                                        
                                        <div class="row" id="row_{{$count}}">
                                        <h3  class="col-md-12">Question</h3>
                                        


                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="proposalTitle3">
                                                        First Sentence
                                                    </label>
                                                    <input type="text" value="{{ $ques->first_sentence }}" class="form-control required" id="q1" name="sentence1[]">
                                                </div>

                                            </div>
                                            <div class="col-md-5">

                                                <div class="form-group">
                                                    <label for="proposalTitle3">
                                                        Second Sentence
                                                    </label>
                                                    <input type="text" value="{{ $ques->second_sentence }}"  class="form-control required" id="q2" name="sentence2[]">
                                                    
                                                </div>

                                            </div>
                                            @if(!$loop->first)
                                            <i class="fa fa-trash d-inline-block remove_div" abc="{{$count}}" style="color: red;font-size: 20px;margin-top: 25px;" ></i>
                                            @endif
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="proposalTitle3">
                                                        Answer
                                                    </label>
                                                    <!-- <input type="text" class="form-control required" id="q1" name="question[]"> -->
                                                    <textarea name="answer[]" cols="20" id="longdesc" rows="4" class="form-control required">{{ $ques->answer }}</textarea>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <label for="proposalTitle3">
                                                    Points
                                                </label><br>
                                                <input  type="number" class="form-control required col-md-8 d-inline-block" id="p1" name="point[]" value="{{ $ques->points }}" >

                                                

                                            </div>
                                           

                                            <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 p-1 "  >

                                                    <div class="q_1 ">

                                                        <div class="bottom  ">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-sm-12">

                                                                    <!--  -->


                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>


@php $count++ @endphp
                                    @endforeach
                                </fieldset>

                                <!-- Step 3 -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var count={{$count}};
            $("#add_ques").click(function(){
                var op=' ';


                ++count;
             var   count2=5;
             
                

                op+='<div class="row" id="row_'+ count +'">';
                op+='<h3  class="col-md-12">Question</h3>';
                op+='<div class="col-md-6">';
                op+='<div class="form-group">';
                op+='<label for="">First Sentence </label>';
                 op+='<input type="text" class="form-control required" id="q'+count+'" name="sentence1[]">';
                    op+='</div>';
                op+='</div>';

                op+='<div class="col-md-5">';
                op+='<div class="form-group">';
                op+='<label for="">Second Sentence </label>';
                 op+='<input type="text" class="form-control required" id="q'+count+'" name="sentence2[]">';
                    op+='</div>';
                


           op+=' </div><i class="fa fa-trash d-inline-block remove_div" abc="'+ count +'" style="color: red;font-size: 20px;margin-top: 25px;" ></i>';

                op+='<div class="col-md-6">';
                op+='<div class="form-group">';
                op+='<label for="proposalTitle3">Answer</label>';
                 op+='<textarea name="answer[]" cols="20" id="longdesc" rows="4" class="form-control required"></textarea>';
                    op+='</div>';
                op+='</div>';


            op+='<div class="col-md-6">';
            op+='<label for="proposalTitle3">Points </label><br>';
           op+='<input  type="number" class="form-control required col-md-8 d-inline-block" id="p'+count+'" name="point[]"> </div>';
          


          



                op+='</div>';

         $('#append_data').append(op);

        });

            $(document).on('click','.remove_div',function(){

                id=$(this).attr('abc');

                $('#row_'+id).remove();


            });

        });
    </script>

@endsection
