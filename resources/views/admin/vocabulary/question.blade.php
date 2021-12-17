@extends('admin.layouts.main')

@section('content')
    <div class="col-md-6 col-12">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h4 class="card-title">Select Question type</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Please select</span>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="form-control" id="q_type">
                                                <option selected disabled>Please select</option>
                                                <option  value="1">Defination</option>
                                                <option  value="2">Sentance</option>
                                                <option value="3">Correct option</option>
                                                <option value="4">Fill in the blank (without options)</option>
                                                <option value="5">Fill in the blank (with options)</option>
                                                <option value="6">pronounce</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


    <div id="defination" class="col-md-6 col-12">
        <div class="card" style="height: auto">
            <div class="card-header">
                <h4 class="card-title">Defination Question</h4>

            </div>
            <h4 class="card-title text-center mt-2 mb-1">TOP HEADING</h4>
            <input type="text" class="form-control" placeholder="Top heading">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="radio" name="ques">
                                            <span>Option 1</span>

                                        </div>
                                        <div class="col-md-8">

                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="radio" name="ques">
                                            <span>Option 2</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="radio" name="ques">
                                            <span>Option 3</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="radio" name="ques">
                                            <span>Option 4</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div id="sentance" style="display: none" class="col-md-6 col-12">
        <div class="card" style="height: auto">
            <div class="card-header">
                <h4 class="card-title">Sentence Question</h4>
            </div>
            <h4 class="card-title text-center mt-2 mb-1">TOP HEADING</h4>
            <input type="text" class="form-control" placeholder="Top heading">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="checkbox" name="ques">
                                            <span>Option 1</span>

                                        </div>
                                        <div class="col-md-8">

                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="checkbox" name="ques">
                                            <span>Option 2</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="checkbox" name="ques">
                                            <span>Option 3</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="checkbox" name="ques">
                                            <span>Option 4</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="correct" style="display: none" class="col-md-6 col-12">
        <div class="card" style="height: auto">
            <div class="card-header">
                <h4 class="card-title">Correct option Question</h4>
            </div>
            <h4 class="card-title text-center mt-2 mb-1">TOP HEADING</h4>
            <input type="text" class="form-control" placeholder="Top heading">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="radio" name="ques">
                                            <span>Option 1</span>

                                        </div>
                                        <div class="col-md-8">

                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="radio" name="ques">
                                            <span>Option 2</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="radio" name="ques">
                                            <span>Option 3</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <input type="radio" name="ques">
                                            <span>Option 4</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div id="fill_1" style="display: none" class="col-md-6 col-12">
        <div class="card" style="height: auto">
            <div class="card-header">
                <h4 class="card-title">Fill in the Blank Question (without options)</h4>
            </div>
            <h4 class="card-title text-center mt-2 mb-1">TOP HEADING</h4>
            <input type="text" class="form-control" placeholder="Top heading">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question part 1</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question part 2</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question part 3</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">

                                            <span>Which one use as fill in the blank</span>

                                        </div>
                                        <div class="col-md-8">

                                            <select   class="form-control" name="email-id" >
                                            <option>Please Select</option>
                                            <option>Question part 1</option>
                                            <option>Question part 2</option>
                                            <option>Question part 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div id="fill_2" style="display: none" class="col-md-6 col-12">
        <div class="card" style="height: auto">
            <div class="card-header">
                <h4 class="card-title">Fill in the Blank Question (with options)</h4>
            </div>
            <h4 class="card-title text-center mt-2 mb-1">TOP HEADING</h4>
            <input type="text" class="form-control" placeholder="Top heading">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question part 1</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question part 2</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Question part 3</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="question" placeholder="Please Enter Question...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">

                                            <span>Which one use as fill in the blank</span>

                                        </div>
                                        <div class="col-md-8">

                                            <select   class="form-control" name="email-id" >
                                                <option>Please Select</option>
                                                <option>Question part 1</option>
                                                <option>Question part 2</option>
                                                <option>Question part 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input type="radio" name="ques">
                                                <span>Option 1</span>

                                            </div>
                                            <div class="col-md-8">

                                                <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input type="radio" name="ques">
                                                <span>Option 2</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input type="radio" name="ques">
                                                <span>Option 3</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input type="radio" name="ques">
                                                <span>Option 4</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="email-id" class="form-control" name="email-id" placeholder="option">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div id="pronounce" style="display: none" class="col-md-6 col-12">
        <div class="card" style="height: auto">
            <div class="card-header">
                <h4 class="card-title">pronounce Question </h4>
            </div>
            <h4 class="card-title text-center mt-2 mb-1">TOP HEADING</h4>
            <input type="text" class="form-control" placeholder="Top heading">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Defination</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="defination" placeholder="Please Enter Defination...">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Voice</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="file" id="first-name" class="form-control" name="defination" placeholder="Please Enter Defination...">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>how to pronounce</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="first-name" class="form-control" name="defination" placeholder="how to pronounce...">
                                        </div>
                                    </div>





                                </div>


                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">

                                                <span>Example 1</span>

                                            </div>
                                            <div class="col-md-8">

                                                <input type="text" id="email-id" class="form-control" name="email-id" placeholder="Example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">

                                                <span>Example 2</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="email-id" class="form-control" name="email-id" placeholder="Example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">

                                                <span>Example 3</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="email-id" class="form-control" name="email-id" placeholder="Example">
                                            </div>
                                        </div>
                                    </div>





                                </div>

                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#q_type").change(function(){
            var val=$(this).val();
            if(val==1){
              $('#defination').show();
              $('#sentance').hide();
              $('#correct').hide();
              $('#fill_1').hide();
              $('#fill_2').hide();
              $('#pronounce').hide();
            }

            else if(val==2)
            {
                $('#defination').hide();
                $('#sentance').show();
                $('#correct').hide();
                $('#fill_1').hide();
                $('#fill_2').hide();
                $('#pronounce').hide();
            }

            else if(val==3)
            {
                $('#defination').hide();
                $('#sentance').hide();
                $('#correct').show();
                $('#fill_1').hide();
                $('#fill_2').hide();
                $('#pronounce').hide();
            }

            else if(val==4)
            {
                $('#defination').hide();
                $('#sentance').hide();
                $('#correct').hide();
                $('#fill_1').show();
                $('#fill_2').hide();
                $('#pronounce').hide();
            }


            else if(val==5)
            {
                $('#defination').hide();
                $('#sentance').hide();
                $('#correct').hide();
                $('#fill_1').hide();
                $('#fill_2').show();
                $('#pronounce').hide();
            }

            else if(val==6)
            {
                $('#defination').hide();
                $('#sentance').hide();
                $('#correct').hide();
                $('#fill_1').hide();
                $('#fill_2').hide();
                $('#pronounce').show();
            }
            else
            {
                $('#defination').hide();
                $('#sentance').hide();
                $('#correct').hide();
                $('#fill_1').hide();
                $('#fill_2').hide();
                $('#pronounce').hide();
            }
            });
        });
    </script>

@endsection
