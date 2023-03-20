@extends('webadmin.layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Blog-Categories-Index</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="pull-right">
                                <a class="btn btn-sm btn-success" href="{{ route('webadmin.blogcategories.create') }}"> Create New Blog
                                    Category</a>
                            </div>
                            {{-- <div class="widget-body clearfix"> --}}
                                {!! $dataTable->table(['class' => 'table table-striped table-responsive', 'id' => 'datatable-buttons' , 'style' => 'width:100%']) !!}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('webadmin.layouts.partials.datatable_scripts')
@endsection
