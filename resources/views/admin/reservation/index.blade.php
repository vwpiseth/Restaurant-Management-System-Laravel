@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                @if(Session::has('reservation_status'))
                <div class="alert alert-primary alert-dismissible"  style="background-color: #4CAF4F; color: white;">
                                <strong>{!! session('reservation_status') !!}</strong>
                <button type="button" class="btn-close" aria-hidden="true" aria-label="Close" onclick="this.parentElement.style.display='none'" style="color: black;"><span aria-hidden="true">&times;</span></button>
                </div>
                @endif
                @if (count($errors) > 0)
                    <!-- Form Error List -->
                    <div class="alert alert-danger">
                        <strong>Something is Wrong</strong>
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                @if(Session::has('reservation_delete'))
                <div class="alert alert-primary alert-dismissible"  style="background-color: #4CAF4F; color: white;">
                                <strong>{!! session('reservation_delete') !!}</strong>
                <button type="button" class="btn-close" aria-hidden="true" aria-label="Close" onclick="this.parentElement.style.display='none'" style="color: black;"><span aria-hidden="true">&times;</span></button>
                </div>
                @endif
                @if (count($errors) > 0)
                    <!-- Form Error List -->
                    <div class="alert alert-danger">
                        <strong>Something is Wrong</strong>
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif 
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Reservation</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table table-striped table-bordered"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Time and date</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $key=>$reservation)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->message }}</td>
                                            <td>{{ $reservation->date_and_time }}</td>
                                            <td>
                                            @if($reservation->status == true)
                                            <span class="label label-info">Confirmed</span>
                                            @else
                                            <span class="label label-info">Not Confirm yet</span>
                                            
                                            @endif
                                            </td>
                                            <td>{{ $reservation->created_at }}</td>
                                            <td>
                                        
                                        @if($reservation->status == false)
                                        
                                             <form id="status-form-{{ $reservation->id }}" method="post" action="{{ route('reservation.status',$reservation->id ) }}"
                                                   style="display: none;">
                                                 @csrf
                                             </form>
                                                <button type="button" class="btn btn-info btn-sm" 
                                                    onclick="if(confirm('Are you sure? You want to confirm this reservation?')){
                                                    event.preventDefault();
                                                    document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">done</i></button>
                                        @endif
                                        
                                             <form id="delete-form-{{ $reservation->id }}" method="post" action="{{ route('reservation.destroy',$reservation->id) }}"
                                                   style="display: none;">
                                                 @csrf
                                                 @method('DELETE')
                                             </form>
                                                <button type="button" class="btn btn-danger btn-sm" 
                                                    onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $reservation->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                   
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush