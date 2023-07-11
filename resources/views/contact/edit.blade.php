@extends('layout.app')
@section('title', 'edit')
@section('content')
    <div class="card">
        <div class="card-header">Edit Contacts</div>
        <div class="card-body">
            <form action=" {{route('update',$contact->id)}} " method="post">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <label for="">Name</label><br>
                <input type="text" name="name" class="form-control" value="{{$contact->name}}"><br>

                <label for="">Family</label><br>
                <input type="text" name="family" class="form-control" value="{{$contact->family}}"><br>

                <label for="">Email</label><br>
                <input type="text" name="email" class="form-control" value="{{$contact->email}}"><br>

                <label for="">Phone</label><br>
                <input type="text" name="phone" class="form-control" value="{{$contact->phone}}"><br>

                <label for="">Address</label><br>
                <input type="text" name="address" class="form-control" value="{{$contact->address}}"><br>

                <a href="{{route('home')}}" class="btn btn-danger">cancell</a>
                <input type="submit" value="update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
