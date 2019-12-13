@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
    
   <table class="table" id="myTable">
       <thead>
           <tr>
                <th>#</th>
                <th>Name</th>
                <th>Parent</th>
                <th></th>
            </tr>
       </thead>
   
       <tbody>
           @foreach($categories as $category)
           <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->getParentName()}}</td>
                <td>
                    <a class="btn btn-warning" href="/admin/categories/{{$category->id}}/edit"> <i class="fa fa-edit"></i></a>
                    <form action="/admin/categories/{{$category->id}}" method="POST" class="inline">
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

