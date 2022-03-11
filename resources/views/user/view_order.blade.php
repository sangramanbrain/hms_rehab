
@extends('user.layouts.common')
@section('user_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">View Order</h1>
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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Order List
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">

                                    <table id="user_order_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>sl. no</th>
                                                <th>Prescription</th>
                                                <th>Order Date</th>
                                                <th>Status</th>
                                                <th>Reorder</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order_list as $each)
                                            <tr>
                                                <td>{{$i++}}</td>
{{--                                                <td><a href="{{asset('uploads/prescription/'.$each->prescription)}}"><img src="{{asset('uploads/prescription/'.$each->prescription)}}" alt="" height="20px"></a></td>--}}
                                                <td>
                                                    @php
                                                        $file = asset('uploads/prescription/'.$each->prescription);
                                                         $ext = pathinfo($file  , PATHINFO_EXTENSION);
                                                        //  $ext1 = $file->getClientOriginalExtension();
                                                    @endphp
                                                    @if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg')
                                                        <a href="{{asset('uploads/prescription/'.$each->prescription)}}"><img src="{{asset('uploads/prescription/'.$each->prescription)}}" alt="prescription" height="50px" width="100">
                                                        </a>
                                                    @elseif($ext == 'pdf')
                                                        <a href="{{asset('uploads/prescription/'.$each->prescription)}}">Download</a>
                                                        <iframe src="{{asset('uploads/prescription/'.$each->prescription)}}" title="prescription" width="100%" height="80"></iframe>
                                                    @endif
                                                </td>
                                                <td>{{$each->created_at}}</td>
                                                <td>
                                                    @if($each->status == 1)
                                                            @if($each->track == 1)
                                                            <button type="button" class="btn-primary">packed successfully</button>
                                                            @elseif($each->track == 2)
                                                                <button type="button" class="btn-primary">Shipped successfully</button>
                                                            @else
                                                            <button type="button" class="btn-success">Delivered</button>
                                                            @endif
                                                    @else
                                                        @if($each->status == 2)
                                                            <button type="button" class="btn-danger">Not Available</button>
                                                        @else
                                                            <button type="button" class="btn-warning">Not Approved</button>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($each->track == 3)
                                                        <a href="{{url('/reorder/'.$each->id.'/'.$each->user_id)}}">Reorder</a>
                                                    @else
                                                        Not Applicable
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.card-body -->
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
