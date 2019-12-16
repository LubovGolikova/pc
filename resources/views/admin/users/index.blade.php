@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    
   <table class="table" id="myTable">
       <thead>
           <tr>
                <th>#</th>
                <th>Path</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
            </tr>
       </thead>
   
       <tbody>
           @foreach($users as $user)
           <tr>
                <td>{{$loop->iteration}}</td>
                <td><img src="{{$user->path}}" alt="" style="width: 70px" class="thumbnail"/></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <a class="btn btn-warning" href="/admin/users/{{$user->id}}/edit"> <i class="fa fa-edit"></i></a>
                    @if(!$user->isAdmin())
                    <form action="/admin/users/{{$user->id}}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" > <i class="fa fa-trash"></i></button>
                    </form>
                    @endif
                </td>
           </tr>
           @endforeach
       </tbody>
   </table>
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
            });
    </script>
@stop

