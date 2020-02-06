<div class="book-card">
    <div class="book-card-image">
        <img class="card-img-top" src="{{$book->path}}" alt="...">
    </div>
    <div class="book-card-body">
        <h5>{{$book->name}}</h5>
         <h5>{{$book->price}} грн.</h5>
          <a href="/book/{{$book->id}}"> <button class="btn btn-default-shop mt-3 mr-3">Купить</button></a>
    </div>
</div>