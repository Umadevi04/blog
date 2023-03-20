@extends('webadmin.layouts.login_layout')
@section('content')
@section('title',"Login")

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
        {{ Form::open(['route' => ["webadmin.login"],'method' => 'POST', 'data-parsley-validate' => true, "data-parsley-trigger" => "change", 'autocomplete' => 'off' ]) }}
        <div class="input-group mb-3">
          {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => "Email", 'required' => 'true', 'autofocus' => true]) }}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          {{ Form::password('password', ['class' => 'form-control', 'placeholder' => "Password", 'required' => 'true', 'data-parsley-minlength' => 6 	]) }}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">

            {{ Form::submit('Login', [ 'class' => 'btn btn-block btn-sm btn-primary text-uppercase fs-12 fw-600' ]) }}
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('webadmin.register') }}"
        class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@endsection

