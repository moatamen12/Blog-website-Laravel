@extends('layouts.app')
@section('hello')
    

      <div class="container">
        <div class="card mt-5">
            <h5 class="card-header">Post info</h5>
            <div class="card-body">
                <h5 class="card-title">Title: {{$post['title']}}</h5>
                <p class="card-text">Description: {{$post['description']}}</p>
            </div>
        </div>
    
        <div class="card mt-5">
            <h5 class="card-header">Post Creator info</h5>
            <div class="card-body">
                <h5 class="card-title">Name: {{$post['postedBy']}}</h5>
                <p class="card-text">Email: {{$post['email']}}</p>
                <p class="card-text">Created At: {{$post['createdAt']}}</p>
            </div>
        </div>
@endsection