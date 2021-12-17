@extends('admin.layouts.main')

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User edit</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="{{url('admin/students/update/'.$stu->id.'')}}">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <label class="label-control">Name</label>
                                            <div class="form-label-group">

                                                <input type="text" id="first-name-column" class="form-control" placeholder=" Name" value="{{$stu->name}}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label class="label-control">Email</label>
                                            <div class="form-label-group">
                                                <input type="email" id="last-name-column" class="form-control" placeholder="Email" value="{{$stu->email}}" name="email">
                                                <label for="last-name-column">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label class="label-control">Phone</label>

                                            <div class="form-label-group">
                                                <input type="number" value="{{$stu->phone}}" id="city-column" class="form-control" placeholder="phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label class="label-control">Teacher</label>

                                            <div class="form-label-group">

                                                <select class="form-control" name="teacher_id" required>
                                                <option value="" selected>Please select Teacher</option>
                                                @foreach($teacher as $tec)
                                                    <option @if($stu->teacher_id==$tec->id)  selected @endif value="{{$tec->id}}">{{$tec->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <lable>password</lable>
                                            <div class="form-label-group">
                                                <input type="password"   class="form-control" name="password" placeholder="password">

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
