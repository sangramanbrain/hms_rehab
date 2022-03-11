@extends('admin.layouts.common')
@section('admin_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">View Report</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

{{--        @if(session()->has('o_msg_success'))--}}
{{--            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                <strong> {{ session()->get('o_msg_success') }}</strong>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @if(session()->has('o_msg_error'))--}}
{{--            <div class="alert alert-warning alert-dismissible fade show" role="alert">--}}
{{--                <strong>{{ session()->get('o_msg_error') }}</strong>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @if(session()->has('track_msg'))--}}
{{--            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                <strong> {{ session()->get('track_msg') }}</strong>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>--}}
{{--            </div>--}}
{{--    @endif--}}

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <table id="user_table" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>E-mail</th>
                                        <th>Address</th>
                                        <th>Date of regd.</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $each)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$each->name}}</td>
                                            <td>{{$each->email}}</td>
                                            <td>{{$each->contact}}</td>
                                            <td>{{$each->address}}</td>
                                            <td>{{$each->created_at}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.card-body -->
                    </section>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
