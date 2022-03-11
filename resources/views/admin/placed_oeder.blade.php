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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        {{--                        <div class="card">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <h3 class="card-title">--}}
                        {{--                                    <i class="fas fa-chart-pie mr-1"></i>--}}
                        {{--                                    Upload Prescription Here--}}
                        {{--                                </h3>--}}
                        {{--                            </div><!-- /.card-header -->--}}
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <table border="0" cellspacing="5" cellpadding="5">
                                    <tbody>
                                    <tr>
                                        <td>Minimum date:</td>
                                        <td><input type="text" id="min" name="min"></td>
                                    </tr>
                                    <tr>
                                        <td>Maximum date:</td>
                                        <td><input type="text" id="max" name="max"></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <div class="row">
                                        <div>

                                            <button type="submit" id="t_report">
                                                <a href="{{url('admin/view-orders/today')}}">Today</a>
                                            </button>

                                        </div>
                                        <div>
                                            <button type="submit" id="t_report">
                                                <a href="{{url('admin/view-orders/weekly')}}">week</a>
                                            </button>
                                            <div>
                                                <button type="submit" id="t_report">
                                                    <a href="{{url('admin/view-orders/monthly')}}">month</a>
                                                </button>
                                            </div>
                                            <div>
                                                <button type="submit" id="t_report">
                                                    <a href="{{url('admin/view-orders')}}">All</a>
                                                </button>
                                            </div>
                                        </div>

                                    </tfoot>
                                </table>
                                <table id="example2" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Prescription</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $each)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$each->prescription}}</td>
                                            <td>{{$each->desc}}</td>
                                            <td>{{$each->created_at}}</td>
                                            <td>
                                                @if($each->status == 0)
                                                    <button type="button" class="btn-primary">
                                                        <a href="{{url('admin/orders/approve/'.$each->id)}}" class="text-white">
                                                            Approve
                                                        </a>
                                                    </button>
                                                @elseif($each->status == 1)
                                                    <button type="button" class="btn-success">
                                                        <a href="{{url('admin/orders/approve/'.$each->id)}}" class="text-white">
                                                            Approved
                                                        </a>
                                                    </button>
                                                @endif


                                                @if($each->status == 2)
                                                    <button type="button" class="btn-danger">
                                                        <a href="" class="text-white">
                                                            Rejected
                                                        </a>
                                                    </button>
                                                @else
                                                    <button type="button" class="btn-warning">
                                                        <a href="{{url('admin/orders/reject/'.$each->id)}}" class="text-white">
                                                            Reject
                                                        </a>
                                                    </button>
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
