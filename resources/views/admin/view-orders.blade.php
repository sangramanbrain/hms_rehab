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

        @if(session()->has('o_msg_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session()->get('o_msg_success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif
        @if(session()->has('o_msg_error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('o_msg_error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif
        @if(session()->has('track_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session()->get('track_msg') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif

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
                                        <form action="{{url('admin/view-orders')}}" method="get">
                                            Start Date: <input type="date" name="a_s_d">
                                            End Date: <input type="date" name="a_e_d">
                                            <button type="submit" class="btn btn-primary m-3" style="height: 33px;width: 137px;">search</button>
                                        </form>
                                    </tr>

                                    </tbody>
                                    <tfoot>
                                    <div class="row">
                                        <div class="col-md-3">
                                        <div>
                                            <button type="button" id="t_report" class="btn-success btn-block">
                                                <a class="text-white" href="{{url('admin/view-orders/today')}}">Today</a>
                                            </button>
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div>
                                            <button type="button" id="t_report" class="btn-success btn-block text-white">
                                                <a class="text-white" href="{{url('admin/view-orders/weekly')}}">week</a>
                                            </button>
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div>
                                                <button type="button" id="t_report" class="btn-success btn-block text-white">
                                                    <a class="text-white" href="{{url('admin/view-orders/monthly')}}">month</a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div>
                                                <button type="button" id="t_report" class="btn-success btn-block text-white">
                                                    <a class="text-white" href="{{url('admin/view-orders')}}">All</a>
                                                </button>
                                            </div>
                                        </div>
                                        </div>

                                    </tfoot>
                                </table>
                                <table id="example2" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Prescription</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Description</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                        <th>Track</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $each)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>
                                                @php
                                                    $file = asset('uploads/prescription/'.$each->prescription);
                                                     $ext = pathinfo($file  , PATHINFO_EXTENSION);
                                                @endphp
                                                @if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg')
                                                    <a href="{{asset('uploads/prescription/'.$each->prescription)}}"><img src="{{asset('uploads/prescription/'.$each->prescription)}}" alt="prescription" height="50px" width="100">
                                                    </a>
                                                @elseif($ext == 'pdf')
                                                    <a href="{{asset('uploads/prescription/'.$each->prescription)}}">Download</a>
                                                    <iframe src="{{asset('uploads/prescription/'.$each->prescription)}}" title="prescription" width="100%" height="80"></iframe>
                                                @endif
                                            </td>
                                            <td>{{$each->user->name}}</td>
                                            <td>{{$each->user->contact}}</td>
                                            <td>{{$each->desc}}</td>
                                            <td>{{$each->order_address}}</td>
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
                                                        <a href="{{url('admin/orders/approve/'.$each->id)}}"
                                                           class="text-white">
                                                            Approved
                                                        </a>
                                                    </button>
                                                @endif

                                                {{--                                                        {{$each->track}}--}}
                                                @if($each->status == 2)
                                                    <button type="button" class="btn-danger">
                                                        <a href="" class="text-white">
                                                            Rejected
                                                        </a>
                                                    </button>
                                                @else
                                                    @if($each->track == 3)
                                                    @else
                                                        <button type="button" class="btn-warning">
                                                            <a href="{{url('admin/orders/reject/'.$each->id)}}"
                                                               class="text-white">
                                                                Reject
                                                            </a>
                                                        </button>
                                                    @endif

                                                @endif


                                            </td>
                                            @if($each->status == 1)
                                                <td>
                                                    @if($each->track == null)
                                                        <form action="{{url('admin/track-order/'.$each->id)}}"
                                                              method="post">
                                                            @csrf
                                                            <select name="track_order">
                                                                <option selected disabled value="null">selected</option>
                                                                <option value="1">Packaging</option>
                                                                <option value="2">shipping</option>
                                                                <option value="3">Delivered</option>
                                                            </select>
                                                            <button type="submit">submit</button>
                                                        </form>
                                                    @else
                                                        @if($each->track == 1)
                                                            <form action="{{url('admin/track-order/'.$each->id)}}"
                                                                  method="post">
                                                                @csrf
                                                                <select name="track_order">
                                                                    <option value="null">selected</option>
                                                                    <option selected disabled value="1">Packaging
                                                                    </option>
                                                                    <option value="2">shipping</option>
                                                                    <option value="3">Delivered</option>
                                                                </select>
                                                                <button type="submit">submit</button>
                                                            </form>
                                                        @elseif($each->track == 2)
                                                        <form action="{{url('admin/track-order/'.$each->id)}}"
                                                              method="post">
                                                            @csrf
                                                            <select name="track_order">
                                                                <option value="null">selected</option>
                                                                <option value="1">Packaging</option>
                                                                <option selected disabled value="2">shipping</option>
                                                                <option value="3">Delivered</option>
                                                            </select>
                                                            <button type="submit">submit</button>
                                                        </form>
                                                        @else
                                                            <button type="button" class="btn-success">delivered</button>
                                                        @endif

                                                    @endif
                                                </td>
                                            @else
                                                <td>
                                                    @if($each->status == 2)
                                                        <p>Not Applicable</p>
                                                    @else
                                                        <p>Not Approved</p>
                                                    @endif
                                                </td>
                                            @endif
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
