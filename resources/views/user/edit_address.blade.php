@extends('user.layouts.common')
@section('user_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
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
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit mr-1"></i>
                                    @if(empty($table))
                                        Add or Edit Address
                                    @elseif($table == "add_address")
                                        Add New Address Here
                                    @else
                                        Edit Address
                                    @endif
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <form action="{{url('/add-edit-order-address')}}" method="post">
                                        @csrf

                                        <input type="hidden" value="{{$id}}" name="id">
                                        <input type="hidden" value="{{$table}}" name="table">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"></label>
                                            <textarea class="form-control" name="edit_address" id="" cols="7">{{$address}}</textarea>
                                        </div>
                                        <button type="submit" id="p_upload" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
