@extends('admin.layouts.main')
@section('content')

    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Story </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{url('admin/readings/story/save')}}" method="post" enctype="multipart/form-data"  class="steps-validation wizard-circle">
                             @csrf
                                <!-- Step 1 -->
                                <h6><i class="step-icon feather icon-home"></i> Step 1</h6>
                                <fieldset>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstName3">
                                                  Story Title
                                                </label>
                                                <input type="text" class="form-control required" id="firstName3" name="story_title">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName3">
                                                  Story Writer Name
                                                </label>
                                                <input type="text" class="form-control required" id="lastName3" name="writer_name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress5">
                                                    Story Image
                                                </label>
                                                <input type="file" class="form-control required" id="emailAddress5" name="story_image">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress67">
                                                    writer Image
                                                </label>
                                                <input type="file" class="form-control required" id="emailAddress67" name="writer_image">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress67">
                                                    Select Category
                                                </label>
                                                <select class="form-control required" id="cat" name="cat">
                                                    <option selected value="">Select category</option>
                                                    @foreach($category as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                </fieldset>

                                <!-- Step 2 -->
                                <h6><i class="step-icon feather icon-briefcase"></i> Step 2</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="proposalTitle3">
                                                    Short detail
                                                </label>
                                                <input type="text" class="form-control required" id="proposalTitle3" name="short_detail">
                                            </div>
                                            <div class="form-group">
                                                <label for="jobTitle5">
                                                    Long detail
                                                </label>
                                                <textarea name="long_detail" cols="20"  id="longdesc" rows="10" class="form-control required"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="shortDescription3">Content of story</label>
                                                <textarea name="content_story" cols="20"  id="shortDescription3" rows="15" class="form-control required"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>



                                <h6><i class="step-icon feather icon-briefcase"></i> Step 3</h6>
                                <fieldset>
                                    <input type="button" class=" btn-secondary mb-2" id="add_ques" value="Add Question?">
                                    <div class="container-fluid" id="append_data">

                                        <div class="row" id="row_1">



                                            <div class="col-md-8">

                                                <div class="form-group">
                                                    <label for="proposalTitle3">
                                                        Questions
                                                    </label>
                                                    <input type="text" class="form-control required" id="q1" name="question[]">
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <label for="proposalTitle3">
                                                    Points
                                                </label><br>
                                                <input  type="number" class="form-control required col-md-8 d-inline-block" id="p1" name="point[]">

                                                <i class="fa fa-trash d-inline-block remove_div" abc="1" style="color: red;font-size: 20px" ></i>

                                            </div>
                                            <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 p-1 "  >

                                                    <div class="q_1 ">

                                                        <div class="bottom  ">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-sm-12">

                                                                    <div style="" class="col-lg-6  mb-1 col-12">
                                                                        <input type="radio" name="check_1" value="1" checked required class="custom-checkbox" style="  transform: scale(2);">
                                                                        <span class="ml-2" style="color: #5c5cb1;font-size: 20px" ><input type="text" id="option1" name="option[]" class="required" placeholder="option"></span>
                                                                    </div>
                                                                    <div  class="col-lg-6  mb-1 col-12">
                                                                        <input type="radio" name="check_1" value="2" required class="custom-checkbox" style="  transform: scale(2);">
                                                                        <span class="ml-2" style="color: #5c5cb1;font-size: 20px" ><input type="text" name="option[]" id="option2" placeholder="option" class="required"></span>
                                                                    </div>
                                                                    <div  class="col-lg-6  mb-1 col-12">
                                                                        <input type="radio" name="check_1" value="3" required class="custom-checkbox" style="  transform: scale(2);">
                                                                        <span class="ml-2" style="color: #5c5cb1;font-size: 20px" ><input type="text" name="option[]"  id="option3" class="required" placeholder="option"></span>
                                                                    </div>
                                                                    <div  class="col-lg-6  mb-1 col-12">
                                                                        <input type="radio" name="check_1" value="4" required class="custom-checkbox" style="  transform: scale(2);">
                                                                        <span class="ml-2" style="color: #5c5cb1;font-size: 20px" ><input type="text" name="option[]" id="option4" class="required" placeholder="option"></span>
                                                                    </div>



                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
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
            var count=1;
            $("#add_ques").click(function(){
                var op=' ';


                ++count;
             var   count2=5;
                op+='<div class="row" id="row_'+ count +'">';
                op+='<div class="col-md-8">';
                op+='<div class="form-group">';
                op+='<label for="proposalTitle3">Questions </label>';
                 op+='<input type="text" class="form-control required" id="q'+count+'" name="question[]">';
                    op+='</div>';
                op+='</div>';
            op+='<div class="col-md-4">';
            op+='<label for="proposalTitle3">Points </label><br>';
           op+='<input  type="number" class="form-control required col-md-8 d-inline-block" id="p'+count+'" name="point[]">';
          op+=' <i class="fa fa-trash d-inline-block remove_div" abc="'+ count +'" style="color: red;font-size: 20px" ></i> </div>';


          op+='   <div class="container-fluid">';
                op+='<div class="row">';
                op+='<div class="col-lg-12 p-1 " >';
                op+='<div class="q_1 ">';
                op+='<div class="bottom  ">';
                op+='<div class="row">';
                op+='<div class="col-lg-12 col-sm-12">';
                op+='<div style="" class="col-lg-6  mb-1 col-12">';
                op+='<input type="radio" value="1" name="check_'+count+'" checked class="custom-checkbox" style="  transform: scale(2);">';
                op+='<span class="ml-2" style="color: #5c5cb1;font-size: 20px" ><input type="text" name="option[]" id="option'+ ++count2 +'" class="required" id="option" placeholder="option"></span>';
                op+='</div>';
                op+='<div style="" class="col-lg-6  mb-1 col-12">';
                    op+='<input type="radio" value="2" name="check_'+count+'" class="custom-checkbox" style="  transform: scale(2);">';
                        op+='<span class="ml-2" style="color: #5c5cb1;font-size: 20px" ><input type="text" name="option[]" id="option'+ ++count2 +'" class="required" placeholder="option"></span>';
                        op+='</div>';
            op+='<div style="" class="col-lg-6  mb-1 col-12">';
                    op+='<input type="radio" value="3" name="check_'+count+'" class="custom-checkbox" style="  transform: scale(2);">';
                        op+='<span class="ml-2" style="color: #5c5cb1;font-size: 20px" ><input type="text" name="option[]" id="option'+ ++count2 +'" class="required" placeholder="option"></span>';
                        op+='</div>';
            op+='<div style="" class="col-lg-6  mb-1 col-12">';
                    op+='<input type="radio" value="4" name="check_'+count+'" class="custom-checkbox" style="  transform: scale(2);">';
                        op+='<span class="ml-2" style="color: #5c5cb1;font-size: 20px" ><input type="text" name="option[]" id="option'+ ++count2 +'" class="required" placeholder="option"></span>';
                        op+='</div>';
            op+='</div>';
            op+='</div>';
            op+='</div>';
                op+='</div>';
                op+=' </div>';
                op+='</div>';

           op+=' </div>';



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
