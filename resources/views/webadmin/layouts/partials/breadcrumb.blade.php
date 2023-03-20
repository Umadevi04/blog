<!-- Page Title Area -->
<div class="row page-title clearfix">
    <div class="page-title-left">
        <h6 class="page-title-heading mr-0 mr-r-5">{{ $row_title }}</h6>
    </div>
    <!-- /.page-title-left -->
    @if($route_name != "webadmin.dashboard")
    <div class="page-title-right d-none d-sm-inline-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">{{ Breadcrumbs::render($route_name) }}</li>
        </ol>
    </div>
    @endif
    <!-- /.page-title-right -->
</div>
<!-- /.page-title -->

