@extends('admin.layouts.main')
@section('content')
    <section id="column-selectors">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Students</h4>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Teacher</th>
                                        <th>Joining Date</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count=1; @endphp
                                    @foreach($students as $stu)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$stu->name}}</td>
                                        <td>{{$stu->email}}</td>
                                        <td>{{$stu->phone}}</td>
                                        <td><span data-toggle="modal" data-target="#exampleModal{{$stu->id}}" style="@if($stu->status=='unassigned')  background-color: orangered; @else background-color: lightgreen; @endif color: white;padding: 5px;border-radius: 25px">{{$stu->status}}</span></td>
                                        <td>@if(isset($stu->teacher->name)){{$stu->teacher->name}} @endif</td>
                                        <td>{{date($stu->created_at->format('Y-m-d'))}}</td>

                                        <td><a href="{{url('admin/students/report')}}"><i style="color: blue;font-size: 20px;padding: 10px" class="fa fa-file"></i><a href="{{url("admin/students/edit/$stu->id")}}"> <i style="color: blue;font-size: 20px" class="fa fa-edit"></i></a></a><a onclick="return confirm('Are you sure you want to Remove?');" href="{{url("admin/students/del/$stu->id")}}"> <i style="color: red;font-size: 20px"  class="fa fa-trash p-2"></i></a></td>




                                        <div class="modal fade" id="exampleModal{{$stu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Teacher</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{url('admin/students/teacher/update')}}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <select class="form-control mb-2"  required name="teacher_id">
                                                                        <option value="" selected> Please Select Teacher</option>
                                                                        @foreach($teacher as $th)
                                                                        <option @if($stu->teacher_id==$th->id) selected @endif value="{{$th->id}}">{{$th->name}}</option>
                                                                        @endforeach
                                                                    </select>

                                                                    <input type="hidden" value="{{$stu->id}}" name="student_id">
                                                                    <input type="submit" style="    background-color: #22339e;padding: 10px;color: white;border: none;border-radius: 5px;}" value="submit">
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </tr>


                                    @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
