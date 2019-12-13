@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Verse</h1>
@stop

@section('content')

 @include('admin.errors')
 @include('admin.success')
    {!! Form::model($verse, ['route' => ['verses.store'], 'files'=>true]) !!}
        @include('admin.verses.form')
        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop

@section('js')

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  CKEDITOR.replace('content', options);
   $('#lfm').filemanager('image');
</script>
@endsection



