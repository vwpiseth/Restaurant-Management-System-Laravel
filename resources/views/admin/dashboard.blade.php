@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')

 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="background-color: green;">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                </div>
                  <p class="card-category" style="color: white;">Category/Item</p>
                  <h3 class="card-title" style="color: white;">{{ $categoryCount }}/{{ $itemCount }}
                  </h3>
  
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="background-color: blue;">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">slideshow</i>
                  </div>
                </div>
                  <p class="card-category" style="color: white;">Sliders</p>
                  <h3 class="card-title" style="color: white;">{{ $sliderCount }}</h3>
                
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="background-color: red">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">library_books</i>
                  </div>
                </div>
                  <p class="card-category" style="color: white;">Reservations </p>
                  <h3 class="card-title" style="color: white;">{{ $reservations->count() }}</h3>
                
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="background-color: orange">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_paste</i>
                  </div>
                </div>
                  <p class="card-category" style="color: white;">Contact</p>
                  <h3 class="card-title" style="color: white;">{{ $contactCount }}</h3>
                
              </div>
            </div>
          </div>
        </div>
      </div>


    
@endsection 


@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush