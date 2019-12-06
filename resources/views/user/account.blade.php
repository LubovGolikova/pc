@extends('layouts.app-full')

@section('content')
    <h1>Личные данные</h1>
    @if( session('success') )
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <form method="POST" action="/profile/account">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col">
                <input id="name" type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <div class="col">
                <input id="email" type="email"  value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="role" value="author" {{$user->role=='author'?'checked':''}} id="role" {{ old('role') ? 'checked' : '' }}>
                    <label class="form-check-label" for="role">
                        {{ __('Author?') }}
                    </label>
                </div>
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

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
            <div class="col">
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description')?old('description'):$user->description }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
$('#lfm').filemanager('image');
</script>
@endsection