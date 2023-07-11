@extends('layout.app')
@section('title', 'show')
@section('content')
    <div class="card">
        <div class="card-header">Contacts Information</div>
        <div class="card-body">
            <h5 class="card-title">Name: {{$contact->name}} </h5>
            <h5 class="card-title">Family: {{$contact->family}} </h5>
            <h5 class="card-title">Phone: {{$contact->phone}} </h5>
            <h5 class="card-title">Email: {{$contact->email}} </h5>
            <p class="card-text">Address: {{$contact->address}} </p>
        </div>
    </div>
@endsection
