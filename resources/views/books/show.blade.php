@extends ('books.layout')

@section ('content')
<div id="show-container">
    <img src="{{$book->book_image}}" alt="Book Image" class="img-fluid mx-auto d-block mb-4" id="book-image"/>
    <h1 class="my-3">{{$book->book_name}}</h1>
    <h5 class="my-2">Цена в тенге: {{$book->price}}</h5>
    <h5 class="my-2">Ссылка на фото: {{$book->writer_name}}</h5>
    <h5 class="my-2">Описание: {{$book->book_description}} </h5>
    <h5 class="my-2">Описание: {{$book->book_image}} </h5>


</div>
@endsection
