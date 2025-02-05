@extends('layouts.app') {{-- extending the semmeler layouts --}}   
@section('hello') 
    <div class="container mt-5">
        <div class="text-center">
            <button type="button" class="btn btn-success">Creat Post</button>
        </div> 
        
       {{-- @dd ($posts) //print what is in the variable and stope the execution  --}}
        <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post['id']}}</th>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['postedBy']}}</td>
                    <td>{{$post['createdAt']}}</td>
                    <td>
                        {{-- /possts/{{$possts['id']}} --}}
                        <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
@endsection