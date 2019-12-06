@extends('layouts.app-full')

@section('content')
    <h1>Добавить стих</h1>
    @if( session('success') )
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="/profile/verses" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-md-4 col-form-label text-md-right">Категория</label>
            <div class="col">
                <select class="form-control" name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
            <div class="col">
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="youtube" class="col-md-4 col-form-label text-md-right">Видео</label>

            <div class="col">
                <input id="youtube" type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ old('youtube') }}">
                @error('youtube')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

         <div class="form-group row">
            <label for="audio" class="col-md-4 col-form-label text-md-right">Аудио</label>

            <div class="col">
                <input id="audio" type="file" class="form-control @error('audio') is-invalid @enderror" name="audio">
                @error('audio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
         </div>



        <div class="form-group row">
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




        <div class="form-group row mb-0">
            <div class="col offset-md-4">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Save') }}
                </button>
            </div>
        </div>
    </form>
@endsection



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