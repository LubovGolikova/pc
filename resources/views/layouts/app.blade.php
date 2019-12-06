@include('layouts.header')
<div class="col-md-10 order-md-2">
     @yield('content')
</div>
<div class="col-md-2 order-md-1 bd-sidebar">
    <div class="row">
      <div class="col">
        <div class="nav flex-column nav-pills" id="v-pills-tab" aria-orientation="vertical">
          <a class="nav-link {{\Request::is('verses/authors')?'active':''}}" href="/verses/authors">{{ __('all.author') }}</a>
          <a class="nav-link {{\Request::is('verses/latest')?'active':''}}"  href="/verses/latest" >{{ __('all.new') }}</a>
          <a class="nav-link {{\Request::is('verses/popular')?'active':''}}"  href="/verses/popular" >{{ __('all.popular') }}</a>
          <a class="nav-link  {{\Request::is('verses')?'active':''}}"  href="/verses" >{{ __('all.full_list') }}</a>
          <a class="nav-link"  href="#v-pills-settings" >{{ __('all.left_') }}</a>
          <a class="nav-link"  href="#v-pills-settings" >{{ __('all.calendar') }}</a>
        </div>
      </div>
    </div>
</div>
@include('layouts.footer')