@extends('layout.app')
@section('title', 'create')
@section('content')
    <div class="card">
        <div class="card-header">Add Contact</div>
        <div class="card-body">
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <label for="">Name</label><br>
                <input type="text" name="name" class="form-control"><br>

                <label for="">Family</label><br>
                <input type="text" name="family" class="form-control"><br>

                <label for="">Email</label><br>
                <input type="email" name="email" class="form-control"><br>

                <label for="">Phone</label><br>
                <input type="text" name="phone" class="form-control"><br>

                <label for="">Address</label><br>
                <input type="text" name="address" class="form-control"><br>

                <label for="">Image</label><br>
                <input type="file" name="image" class="form-control"><br>

                <a href="{{route('home')}}" class="btn btn-danger">cancell</a>
                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
