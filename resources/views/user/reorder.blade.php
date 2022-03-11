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
                                   Reorder Here
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <form action="{{url('/reorder')}}" method="post">
                                        @csrf

                                        <input type="hidden" value="{{$order[0]->id}}" name="order_id">
                                        <input type="hidden" value="{{$order[0]->user_id}}" name="table">
{{--                                        <div class="form-control">--}}
{{--                                            <img src="" alt="">--}}
{{--                                        </div>--}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <img src="{{asset('uploads/prescription/'.$order[0]->prescription)}}" alt="" width="150" height="80">
                                                </div>
                                                <div class="col-xs-6 ml-5">
                                                    <label for="">Choose your address</label><br>
                                                    @foreach($address as $each)
                                                        <input type="radio" name="order_address" value="{{$each->e_address}}" required>
                                                        <label for="css">{{$each->e_address}}</label><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Any Query(optional)</label>
                                            <textarea name="desc"  class="form-control" rows="5">{{$order[0]->desc}}</textarea>
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
