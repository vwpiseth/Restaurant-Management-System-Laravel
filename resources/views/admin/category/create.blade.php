@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    @if(Session::has('admin_store'))
                <div class="alert alert-primary alert-dismissible"  style="background-color: green; color: white; margin-top: 100px; margin-bottom: 0px;">
                                <strong>{!! session('admin_store') !!}</strong>
                <button type="button" class="btn-close" aria-hidden="true" aria-label="Close" onclick="this.parentElement.style.display='none'"><span aria-hidden="true">&times;</span></button>
                </div>
                @endif
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add new Category</h4>
                        </div>
                        <div class="card-content">
                          <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
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