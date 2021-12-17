@extends('admin.layouts.main')
@section('content')

    <section id="column-selectors">
        <div class="row" >

            <div class="col-12">
                <div class="row">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Words</h4>
                        <input type="button" class="btn btn-primary" value="ADD">

                    </div>


                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">

                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Questions</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Rehman</td>
                                        <td><span class="btn btn-success">3</span></td>

                                        <td><a href="{{url('admin/vocabulary/add/question')}}"><i style="color: blue;font-size: 20px;padding: 10px" class="fa fa-question"></i></a><a><i style="color: blue;font-size: 20px" class="fa fa-edit"></i></a><a><i style="color: red;font-size: 20px;padding: 5px"  class="fa fa-trash"></i></a></td>
                                    </tr>


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
