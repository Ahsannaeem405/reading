@extends('admin.layouts.main')
@section('content')


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Topic</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{'/admin/writing/topics/save'}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Title</label>
                                <input type="text"  required class="form-control mb-2" name="name" placeholder="Topic Title">
                            </div>


                            <div class="col-lg-12">
                                <label>Image</label>
                                <input type="file"  required class="form-control mb-2" name="image" placeholder="Topic Title">

                            </div>

                            <div class="col-lg-12">
                                <label>Short Description</label>
                                <textarea required  class="form-control mb-2" name="short_desc" placeholder="Desc">
                                </textarea>
                            </div>

                            <div class="col-lg-12">

                                <input type="submit"  class="btn btn-primary mb-2" value="Submit">
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



    <section id="column-selectors">
        <div class="row" >

            <div class="col-12">
                <div class="row">
                </div>
                <div class="card">
                    <div class="card-header" data-toggle="modal" data-target="#exampleModal">
                        <h4 class="card-title">Topics</h4>
                        <input type="button" class="btn btn-primary"  value=" ADD">

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
                                        <th>Image</th>
                                        <th>Short Decsription</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php $count=1; @endphp

                                    @foreach($topic as $topics)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$topics->name}}</td>
                                        <td><img style="width: 100px" src="{{asset('uploads/appsetting/'.$topics->image.'')}}"></td>

                                        <td>{{$topics->short_desc}}</td>

                                        <td><a data-toggle="modal" data-target="#exampleModal{{$topics->id}}" ><i style="color: blue;font-size: 20px" class="fa fa-edit"></i></a><a  onclick="return confirm('Are you sure you want to delete this item?');" href="{{url('admin/writing/topics/del/'.$topics->id.'')}}"><i style="color: red;font-size: 20px"  class="fa fa-trash p-2"></i></a></td>
                                    </tr>





                                    <div class="modal fade" id="exampleModal{{$topics->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Topic</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{'/admin/writing/topics/update/'.$topics->id.''}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Title</label>
                                                                <input type="text"  required class="form-control mb-2" name="name" value="{{$topics->name}}" placeholder="Topic Title">
                                                            </div>


                                                            <div class="col-lg-12">
                                                                <label>Image</label>
                                                                <input type="file"   class="form-control mb-2" name="image" placeholder="Topic Title">

                                                            </div>

                                                            <div class="col-lg-12">
                                                                <label>Short Description</label>
                                                                <textarea required  class="form-control mb-2" name="short_desc" placeholder="Desc">{{$topics->short_desc}}</textarea>
                                                            </div>

                                                            <div class="col-lg-12">

                                                                <input type="submit" style="background-color: #5344EC;color: white;border: none;border-radius: 5px;padding: 15px" class=" mb-2" value="Submit">
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
