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
                        <form class="form form-horizontal" action="{{url('admin/readings/grammer/update/'.$grammer->id.'')}}" method="post" >
                 @csrf


                            <div class="form-body">
                                <div class="container-fluid">


                                    



                                    <div class="row mb-5" style="padding: 0px !important;">



                                            <div class="col-lg-4">
                                                <label>Question part 1</label>
                                                <input type="text" id="first-name" required class="form-control" name="q_1" value="{{$grammer->q_part1}}" placeholder="Please Enter Question...">
                                            </div>



                                            <div class="col-lg-4">
                                                <label>Question part 2</label>
                                                <input type="text" id="first-name" required class="form-control" name="q_2" value="{{$grammer->q_part2}}" placeholder="Please Enter Question...">
                                            </div>




                                            <div class="col-lg-4">
                                                <label>Question part 3</label>
                                                <input type="text" id="first-name" class="form-control" name="q_3" value="{{$grammer->q_part3}}" placeholder="Please Enter Question...">
                                            </div>
                                    </div>
                                    <div class="container-fluid mb-3">
                                        <div class="row">
                                            <div  class="col-lg-12 p-0">
                                                Correct Answer
                                                <input type="text" class="form-control " value="{{$grammer->correct_answer}}" name="Correct Answer" required placeholder="Top heading">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>Points</span>


                                                <input type="number" class="form-control required" placeholder="points" name="points" value="{{$grammer->points}}" id="points" required>



                                            </div>
                                            <div class="col-md-8">
                                                <span>Question Category</span>
                                                <select   class="form-control" required name="question_category" >
                                                    <option value="" >Please Select</option>
                                                    @foreach($question_categorys as $category)
                                                    <option value="{{$category->id}}" {{ $category->id == $grammer->category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
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
