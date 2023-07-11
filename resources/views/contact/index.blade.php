@extends('layout.app')
@section('title', 'Contact Management System')
@section('content')
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('images/contacts/'.$item->image)}}" alt="" width="50"></td>
                            <td>{{$item->name." ".$item->family}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->address}}</td>

                            <td>
                                <a href="{{url('view/'.$item->id)}}" class="btn btn-info"><i class="fa fa-user" title="view contact"></i></a>
                                <a href="{{url('edit/'.$item->id)}}" class="btn btn-warning"><i class="fa fa-pencil" title="edit contact"></i></a>
                                <a href="{{route('trash',$item->id)}}" class="btn btn-danger"><i class="fa fa-trash" title="delete contact"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$contacts->links()}}
            </div>
        </div>
    </div>

@endsection
