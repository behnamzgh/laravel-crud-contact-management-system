@extends('layout.app')
@section('title','Trash')
@section('content')
<div class="card">
    <div class="card-header">Contacts</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Family</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($contact as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->family}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>

                        <td>
                            <a href="{{route('restore',$item->id)}}"><i class="btn btn-success fa fa-share" title="restore"></i></a>
                            <a href="{{route('destroy',$item->id)}}"><i class="btn btn-danger fa fa-close" title="delete"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
