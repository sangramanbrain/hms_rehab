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
                                    {{Auth::user()->name}} profile
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <form action="{{url('/profile_update')}}" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Name:- <input type="text" class="form-control" name="name" value="{{$user_data[0]->name}}" required>
                                                </div>
                                                <div class="col-md-6">
                                                    E-mail:- <input type="email" class="form-control" name="email" value="{{$user_data[0]->email}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Contact:- <input type="text" class="form-control" name="contact" value="{{$user_data[0]->contact}}" max="12" required>
                                                </div>
                                                <div class="col-md-6">
                                                    Password:- <input type="text" class="form-control" name="password" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Profile Address</label>
                                            <textarea name="address" class="form-control" rows="2" required>{{$user_data[0]->address}}</textarea>
                                        </div>
                                        <button type="submit" id="p_upload" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div><!-- /.card-body -->
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit mr-1"></i>
                                    Other Delivery Address
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    @foreach($user_data[0]->addres as $each)
                                        <form action="{{url('/edit_other_address')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$each->id}}" name="id">
                                            <div class="form-group">
                                                <textarea name="address" class="form-control" rows="2">{{$each->e_address}}</textarea>
                                            </div>
                                            <button type="submit" class="btn-primary">Update</button>
                                        </form>
                                    @endforeach
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
