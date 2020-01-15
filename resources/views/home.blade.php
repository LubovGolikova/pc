@extends('layouts.app-full')

@section('content')
<section class="row-1 py-5">
<img src="{{asset('assets/images/girl.jpg')}}" alt="logoIcon" class="d-block width-100 d-none d-sm-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h3>твори наших авторів</h3>
                <p>Вони винні так само, як і ті, хто через душевну слабкість, тобто через бажання уникнути страждань і болю відмовляється від виконання свого обов’язку. Якщо скористатися найпростішим прикладом, </p><p>Дійсно, ніхто не відкидає, не зневажає, не уникає насолод тільки через те, що це насолоди, але лише через те, що тих, хто не вміє розумно вдаватися насолоді, осягають великі страждання. Якщо скористатися найпростішим прикладом, то хто з нас став би займатися якими б то не було тяжкими фізичними вправами</p>
                <a class="btn btn-default" href="/verses/authors">Перейти</a>
            </div>
        </div>
    </div>
</section>

<section class="row-2 py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 col-md-4 p-0 position-relative">
                <img src="{{asset('assets/images/girl2.jpg')}}" alt="logoIcon" class="d-block width-100">
                <img src="{{asset('assets/images/books-row2.jpg')}}" alt="logoIcon" class="books-row2">
            </div>
            <div class="col-sm-7 col-md-8 m-0">
                <div class="bg-blue py-5 row">
                    <div class="col-lg-6 offset-lg-3">
                        <bloquote>Але щоб ви зрозуміли, звідки виникає це хибне уявлення людей, цуратись насолоди і вихваляти страждання, я розкрию перед вами всю картину і роз’ясню, що саме говорив цей чоловік, який відкрив істину, якого я б назвав зодчим щасливого життя....</bloquote>
                        <a class="btn btn-default mt-5" href="">Перейти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row-3 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>твори наших авторів</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores dolor error excepturi obcaecati quaerat tempore! Maiores neque odit ullam!</p><p>Cum delectus dignissimos, doloribus exercitationem hic ipsa libero minus nam necessitatibus nostrum odio officiis, quibusdam, rerum sint temporibus totam velit.</p>
                <a class="btn btn-default mt-3" href="">Читати</a>
            </div>
            <div class="col-md-4">
                <h3>твори наших авторів</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores dolor error excepturi obcaecati quaerat tempore! Maiores neque odit ullam!</p><p>Cum delectus dignissimos, doloribus exercitationem hic ipsa libero minus nam necessitatibus nostrum odio officiis, quibusdam, rerum sint temporibus totam velit.</p>
                <a class="btn btn-default mt-3" href="">Читати</a>
            </div>
            <div class="col-md-4">
                <h3>твори наших авторів</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores dolor error excepturi obcaecati quaerat tempore! Maiores neque odit ullam!</p><p>Cum delectus dignissimos, doloribus exercitationem hic ipsa libero minus nam necessitatibus nostrum odio officiis, quibusdam, rerum sint temporibus totam velit.</p>
                <a class="btn btn-default mt-3" href="">Читати</a>
            </div>
        </div>
    </div>
</section>

    <section class="calendar-home my-5">
        <div class="container">
        <div class="row">
            <div class="col-md-2 first-col row m-0 align-items-center text-center justify-content-center py-2 py-md-0">Календар <br> событий</div>
            <div class="col-md-3 offset-1">
                <div class="data">23/01</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
            <div class="col-md-3">
                <div class="data">23/01</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
            <div class="col-md-3">
                <div class="data">23/01</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
            </div>
        </div>
    </section>


    <section class="home-footer">
    <div class="container">
        <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center"><span>Як стати учасником</span> <small>поетичного клубу</small></h3>

               <form method="POST" action="{{ route('register') }}">
                @csrf
                 <div  class="logo">
                    <img src="{{asset('assets/images/lg.png')}}"
                         alt="logoIcon" class="d-block mx-auto   mb-5">
                </div>
                <div class="form-group row">
                    <div class="col">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="{{ __('Name') }}" required autocomplete="name" >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                      <div class="col">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="{{ __('Password') }}" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="role" value="author" id="role" {{ old('role') ? 'checked' : '' }}>

                            <label class="form-check-label" for="role">
                                {{ __('Author?') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

                <div class="form-group row mb-0 mt-3">
                    <div class="col-md-12 text-center">
                        {{ __('Have you got account?') }} <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                 </div>
                <div class="form-group  mb-0 mt-3  text-center">
                    <h2><span>Швидка авторизація через соцмережі</span></h2>
                    <div class="social-home">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google"  aria-hidden="true"></i></a>
                     </div>
                </div>
            </form>
        </div>
        </div>
        </div>
    </section>

@endsection
