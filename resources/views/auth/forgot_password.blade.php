@extends('layouts.app')

@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>GST</b>Billing</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Forgot Password</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Forgot</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{ url('/') }}">Login</a>
      </p>
      <p class="mb-0">
        <a href="{{ url('register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@endsection