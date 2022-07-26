@extends('admin.layouts.main')
@section('content')

    <section id="column-selectors">
        <div class="row" >

            <div class="col-12">
                <div class="row">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Quil Connect</h4>
                      <a href="{{url('admin/readings/quilconnect/add')}}">  <input type="button" class="btn btn-primary" value="ADD"></a>
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
                                        <th>Questions</th>
                                        <th>Writer</th>


                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php $count=1; @endphp
                                    @foreach($reading as $read)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        
                                        <td>{{$read->story_title}}</td>
                                        <td>{{$read->quil_question->count()}}</td>
                                        <td>{{$read->writer_name}}</td>


                                        <td><a href="{{url('admin/readings/quilconnect/edit/'.$read->id.'')}}"><i style="color: blue;font-size: 20px" class="fa fa-edit"></i></a><a href="{{url('admin/readings/story/del/'.$read->id.'')}}" onclick="return confirm('Are you sure you want to Remove?');"><i style="color: red;font-size: 20px"   class="fa fa-trash p-2"></i></a></td>
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
