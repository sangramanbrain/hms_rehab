@extends('user.layouts.common')
@section('user_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
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
        @if(session()->has('order_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session()->get('order_success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif
        @if(session()->has('order_error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('order_error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif
        @if(session()->has('add_address_success_mag'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{ session()->get('add_address_success_mag') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif
        @if(session()->has('add_address_error_mag'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('add_address_error_mag') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif
        @if(session()->has('reorder_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('reorder_msg') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>150</h3>--}}

{{--                                <p>New Orders</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-bag"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

{{--                                <p>Bounce Rate</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-stats-bars"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>44</h3>--}}

{{--                                <p>User Registrations</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-person-add"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>65</h3>--}}

{{--                                <p>Unique Visitors</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-pie-graph"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Upload Prescription Here
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <form action="{{url('/create-order')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Prescription</label>
                                            <input type="file" class="form-control" name="p_file" required>
                                            <small class="text-red">* Only pdf,jpg,jpeg and png are allowed </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Any Query?(optional)</label>
                                            <textarea name="desc" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Choose Delivery Address</label><br>
                                            @if(isset($user_default_address))
                                                <input type="radio" id="html" name="order_address"
                                                       value="{{$user_default_address}}" required>
                                                  <label for="html">{{$user_default_address}}</label>
                                                <a href="{{url('/edit-address/u_d_a/'.Auth::user()->id)}}" class="ml-1">Edit</a><br>

                                                    @endif
                                                    @if(!empty($user_extra_address))
                                                        @foreach($user_extra_address as $each)
                                                              <input type="radio" id="css" name="order_address"
                                                                     value="{{$each->e_address}}" required>
                                                              <label for="css">{{$each->e_address}}</label>
                                                            <a href="{{url('/edit-address/u_e_a/'.$each->id)}}"
                                                               class="ml-1">Edit</a><br>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn-primary"><a class="text-white" href="{{url('/edit-address/add_address/'. Auth::user()->id)}}">Add Address</a></button>
                                        </div>
                                        <button type="submit" id="p_upload" class="btn btn-primary">Submit</button>
                                    </form>
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
