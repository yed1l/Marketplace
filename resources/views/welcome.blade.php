@extends ('books.layout')

@section ('content')
<div id="home-container">
    <div class="jumbotron bg-secondary my-2">
        <h1 class="text-center text-white">Добро пожаловать в наш Маркетплейс</h1>
        <p class="text-center text-red">Бесплатные объявления: доска бесплатных обявлений</p>
    </div>
    <div class="d-flex justify-content-around w-50 mx-auto mt-5">
        <a href="{{ route('books.create')}}" class="btn btn-primary px-4 py-2">Создать обявление</a>
        <a href="{{ route('books.index')}}" class="btn btn-success px-4 py-2">Показть все</a>
    </div>
    <blockquote class="blockquote text-center">
        <p class="mb-0" style="margin-top: 6rem; font-size: 30px">
            <q> Move fast and break things. Unless you are breaking stuff, you are not moving fast enough.
            </q>
        </p>
        <footer class="blockquote-footer text-right" style="font-size: 24px;">Mark Zuckerberg</footer>
    </blockquote>
</div>
@endsection
