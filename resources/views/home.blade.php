@extends('layouts.app-full')

@section('content')
<section class="row-1 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>твори наших авторів</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores dolor error excepturi obcaecati quaerat tempore! Maiores neque odit ullam!</p><p>Cum delectus dignissimos, doloribus exercitationem hic ipsa libero minus nam necessitatibus nostrum odio officiis, quibusdam, rerum sint temporibus totam velit.</p>
                <a class="btn btn-default" href="">Перейти</a>
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
        <div class="row align-items-center">
            <div class="col-md-3 first-col">Календар <br> событий</div>
            <div class="col-md-3">
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

@endsection
