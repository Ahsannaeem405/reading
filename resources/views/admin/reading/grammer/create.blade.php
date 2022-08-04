@extends('admin.layouts.main')

@section('content')

    <main>



        <div id="fill_1"  class="col-md-12 col-12">
            <div class="card" style="height: auto">
                <div class="card-header">
                    <h4 class="card-title">Grammer Question </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="" action="{{url('admin/readings/grammer/save')}}" method="post" >
                        @csrf


                            <div class="form-body">
                                <div class="container-fluid">


                                    
                                    



                                    <div class="row mb-5" style="padding: 0px !important;">



                                            <div class="col-lg-4">
                                                <label>Question part 1</label>
                                                <input type="text" id="first-name" required class="form-control" name="q_1" placeholder="Please Enter Question...">
                                            </div>



                                            <div class="col-lg-4">
                                                <label>Question part 2</label>
                                                <input type="text" id="first-name" required class="form-control" name="q_2" placeholder="Please Enter Question...">
                                            </div>




                                            <div class="col-lg-4">
                                                <label>Question part 3</label>
                                                <input type="text" id="first-name" required class="form-control" name="q_3" placeholder="Please Enter Question...">
                                            </div>
                                    </div>
                                    <div class="container-fluid mb-3">
                                        <div class="row">
                                            <div  class="col-lg-12 p-0">
                                                <label>Correct Answer</label>
                                                <input type="text" class="form-control " name="correct_answer" required placeholder="Correct Answer">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>Points</span> 


                                                <input type="number" class="form-control required" placeholder="points" name="points" id="points" required>


                                            </div>
                                            <div class="col-md-8">
                                                <span>Question Category</span>
                                                <select   class="form-control" required name="question_category" >
                                                    <option value="" selected>Please Select</option>
                                                    @foreach($question_categorys as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
