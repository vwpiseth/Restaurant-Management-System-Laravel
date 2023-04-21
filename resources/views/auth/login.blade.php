@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-1">
                    <div class="card">
                    @if(Session::has('admin_login'))
                <div class="alert alert-primary alert-dismissible"  style="background-color: #4CAF4F; color: white;">
                                <strong>{!! session('admin_login') !!}</strong>
                <button type="button" class="btn-close" aria-hidden="true" aria-label="Close" onclick="this.parentElement.style.display='none'" style="color: black;"><span aria-hidden="true">&times;</span></button>
                </div>
                @endif
                @if (count($errors) > 0)
                    <!-- Form Error List -->
                    <div class="alert alert-danger">
                        <strong>Username or Password is incorrect.</strong>
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                        
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">CHAMPA RESTAURANT ADMIN LOGIN</h4>
                        </div>
                        <div class="card-content">
                          <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" name="email"
                                                   value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="text" class="form-control" name="password">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                                <a href="{{ route('indexView') }}" class="btn btn-danger">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
  
@endpush