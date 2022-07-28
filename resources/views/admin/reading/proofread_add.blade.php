@extends('admin.layouts.main')
@section('content')

    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Proofread</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{url('admin/readings/proofread/save')}}" method="post" enctype="multipart/form-data"  class="steps-validation wizard-circle">
                             @csrf
                                <!-- Step 1 -->
                                <h6><i class="step-icon feather icon-home"></i> Step 1</h6>
                                <fieldset>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstName3">
                                                  Title for proofread
                                                </label>
                                                <input type="text" class="form-control required" id="firstName3" name="story_title">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName3">
                                                    proofread writer name
                                                </label>
                                                <input type="text" class="form-control required" id="lastName3" name="writer_name">
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
                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </fieldset>

                                <!-- step 2 -->
                                <h6><i class="step-icon feather icon-briefcase"></i> Step 2</h6>
                                <fieldset>
                                    
                                    <div class="container-fluid" id="append_data">
                                        <div class="row" id="row_1">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="proposalTitle3">
                                                        Proofread content
                                                    </label>
                                                    <!-- <input type="text" class="form-control required" id="q1" name="question[]"> -->
                                                    <textarea name="content" cols="20" id="longdesc" rows="10" class="form-control required"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- Step 2 -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    

@endsection
