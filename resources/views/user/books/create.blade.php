@extends('layouts.app')

@section('content')
<div class="container authors mb-5">
    <h1><span>{{ __('all.addBook') }}</span></h1>
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
    <form method="POST" action="/profile/books" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('all.nameBook') }}</label>

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
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('all.price') }}</label>

                    <div class="col">
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

         <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('all.Description') }}</label>
            <div class="col">
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


            <div class="form-group row">
            <label for="path" class="col-md-4 col-form-label text-md-right">{{ __('all.file') }}</label>

            <div class="col">
                <input id="path" type="file" class="form-control @error('audio') is-invalid @enderror" name="path">
                @error('path')
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
               <i class="fa fa-picture-o"></i>{{ __('all.Choose') }}
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
                    {{ __('all.Save') }}
                </button>
            </div>
        </div>
    </form>
    <br>
</div>
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