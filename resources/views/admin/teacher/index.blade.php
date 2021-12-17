@extends('admin.layouts.main')

@section('content')

    <section id="column-selectors">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teacher</h4>
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
                                        <th>Students</th>
                                        <th>Register date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php $count=1; @endphp
                                    @foreach($teacher  as $tec)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$tec->name}}</td>
                                        <td>{{$tec->email}}</td>
                                        <td>{{$tec->phone}}</td>
                                        <td><div style="text-align:center;background-color: greenyellow;padding: 5px;width: 25px;height: 25px;border-radius: 50%"><span style="color: white">{{count($tec->student)}} </span></div></td>
                                        <td>{{$tec->created_at}}</td>

                                        <td><a href="{{url('admin/teacher/edit/'.$tec->id.'')}}"><i style="color: blue;font-size: 20px" class="fa fa-edit"></i></a><a href="{{url('admin/teacher/del/'.$tec->id.'')}}" onclick="return confirm('Are you sure you want to Remove?');"><i style="color: red;font-size: 20px"  class="fa fa-trash p-2"></i></a></td>
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
