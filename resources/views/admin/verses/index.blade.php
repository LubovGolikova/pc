@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Стихи</h1>
@stop

@section('content')
    
   <table class="table" id="myTable">
       <thead>
           <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Author</th>
                <th>Approved</th>
                <th>Likes</th>
                <th>Views</th>
                <th></th>
            </tr>
       </thead>
   
       <tbody>
           @foreach($verses as $verse)
           <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$verse->name}}</td>
                <td>{{$verse->category->name}}</td>
                <td>{{$verse->user->name}}</td>
                <td>{!!$verse->approved?'<i class="fa fa-chevron-down text-primary"></i>':''!!}</td>
                <td>{{$verse->likes}}</td>
                <td>{{$verse->views}}</td>
                <td>
                    <a class="btn btn-warning" href="/admin/verses/{{$verse->id}}/edit"> <i class="fa fa-edit"></i></a>
                    <form action="/admin/verses/{{$verse->id}}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" > <i class="fa fa-trash"></i></button>
                    </form>
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

