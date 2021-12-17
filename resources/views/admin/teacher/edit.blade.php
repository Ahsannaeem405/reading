@extends('admin.layouts.main')
@section('content')

    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Teacher </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{url('admin/teacher/update/'.$stu->id.'')}}" method="post" class="steps-validation wizard-circle">

                             @csrf
                                <!-- Step 1 -->
                                <h6><i class="step-icon feather icon-home"></i> Personal Information</h6>
                                <fieldset>
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName3">
                                        Name
                                                </label>
                                                <input type="text" class="form-control required" id="lastName3" value="{{$stu->name}}" name="name">
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress5">
                                                    Email
                                                </label>
                                                <input type="email" class="form-control required" id="emailAddress5" name="email" value="{{$stu->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress67">
                                                    phone
                                                </label>
                                                <input type="number" value="{{$stu->phone}}" class="form-control required" id="emailAddress67" name="phone">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="age">
                                                    password
                                                </label>
                                                <input type="password" class="form-control " id="age" name="password">
                                            </div>
                                        </div>


                                    </div>
                                </fieldset>

                                <!-- Step 2 -->
                                <h6><i class="step-icon feather icon-briefcase"></i> Profile Information</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="proposalTitle3">
                                                    Proposal Title
                                                </label>
                                                <input type="text" value="{{$stu->perposal_title}}" class="form-control required" id="proposalTitle3" name="perposal_title">
                                            </div>
                                            <div class="form-group">
                                                <label for="jobTitle5">
                                                    Job Title
                                                </label>
                                                <input type="text" value="{{$stu->job_title}}" class="form-control required" id="jobTitle5" name="job_title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="shortDescription3">Short Description</label>
                                                <textarea name="short_desc"   id="shortDescription3" rows="4" class="form-control">

                                                {{$stu->short_desc}}
                                                </textarea>
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


@endsection
