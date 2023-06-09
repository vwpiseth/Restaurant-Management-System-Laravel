@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('item.create') }}" class="btn btn-success">Add New</a>
                    @if(Session::has('item_store'))
                <div class="alert alert-primary alert-dismissible"  style="background-color: #4CAF4F; color: white;">
                                <strong>{!! session('item_store') !!}</strong>
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
                @if(Session::has('item_update'))
                <div class="alert alert-primary alert-dismissible"  style="background-color: #4CAF4F; color: white;">
                                <strong>{!! session('item_update') !!}</strong>
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
                @if(Session::has('item_delete'))
                <div class="alert alert-primary alert-dismissible"  style="background-color: #4CAF4F; color: white;">
                                <strong>{!! session('item_delete') !!}</strong>
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
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">All Items</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table table-striped table-bordered"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($items as $key=>$item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/item/'.$item->image) }}"
                                                     style="height: 100px; width: 100px;"></td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                            <td><a href="{{ route('item.edit',$item->id) }}" class="btn btn-info btn-sm">
                                             <i class="material-icons">mode_edit</i></a>
                                            
                                             <form id="delete-form-{{ $item->id }}" method="post" action="{{ route('item.destroy',$item->id) }}"
                                                   style="display: none;">
                                                 @csrf
                                                 @method('DELETE')
                                             </form>
                                                <button type="button" class="btn btn-danger btn-sm" 
                                                    onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $item->id }}').submit();
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