@if ($message = Session::get('success'))
	<div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		<i class="material-icons list-icon">check_circle</i>  {{ $message }}
	</div>
@endif


@if ($message = Session::get('error'))
	<div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		<i class="material-icons list-icon">not_interested</i> {{ $message }}
	</div>
@endif


@if ($message = Session::get('warning'))
	<div class="alert alert-icon alert-warning border-warning alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		<i class="material-icons list-icon">warning</i> {{ $message }}
	</div>
@endif


@if ($message = Session::get('info'))
	<div class="alert alert-icon alert-info border-info alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		<i class="material-icons list-icon">info</i> {{ $message }}
	</div>
@endif
