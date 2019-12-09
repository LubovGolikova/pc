@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit {{$verse->name}}</h1>
@stop

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    {!! Form::model($verse, ['route' => ['verses.update', $verse->id], 'files'=>true, 'method' => 'put']) !!}
    <div class="row">
    <div class="col-md-7">
    <div class="box box-primary">
    <div class="box-body">
         <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category', 'Category') !!}
            {!! Form::select('category', $categories , null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content', 'Content') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        </div>
        </div>
    </div></div>

    <div class="col-md-5">
     <div class="box box-primary">
        <div class="box-body">
        <div class="form-group form-check">
            {!! Form::checkbox('approved', '1', null,['class'=>'form-check-input'] ) !!}
            {!! Form::label('approved', 'Approved',['class'=>'form-check-label']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('writed_at', 'Writed') !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>


                {!! Form::date('writed_at', null, ['class'=>"form-control pull-right" ]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('youtube', 'Youtube') !!}
                {!! Form::text('youtube', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
             {!!Form::label('audio', 'Audio') !!}
            @if($verse->audio)
                <audio controls>
                    <source src="/{{$verse->audio}}" type="audio/mpeg">
                </audio>
            @endif

                {!! Form::file('audio', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                            <div class="col offset-md-4">
                <div class="input-group">
                   <span class="input-group-btn">
                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose
                     </a>
                   </span>
                   <input id="thumbnail" class="form-control" type="text" name="filepath">
                 </div>
                 <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>
            </div>

            <div class="form-group">
                {!! Form::label('likes', 'Likes') !!}
                {!! Form::number('likes', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('views', 'Views') !!}
                {!! Form::number('views', null, ['class'=>'form-control']) !!}
            </div>
    </div>
    </div></div></div>

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

