@extends ('books.layout')

@section ('content')

    @if ($errors -> any())
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Упс!</strong> Что то пошло не так, проверьте заново ваши данные...</p>
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="create-container">
        <div class="display-4 text-center my-1">Создание:</div>
        <form action="{{ route('books.store') }}" method="POST" class="mb-5">
            @csrf
            <div class="form-group">
                <label for="book_name">Название: </label>
                <input type="text" class="form-control" name="book_name" placeholder="Название объявления" id="book_name">
            </div>
            <div class="form-group">
                <label for="book-desc">Описание:</label>
                <textarea class="form-control" rows="2" name="book_description" placeholder="Описание книги" id="book-desc"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Цена в тенге: </label>
                <input type="number" class="form-control" name="price" placeholder="Цена" id="price">
            </div>
            <div class="form-group">
                <label for="book_image">Ссылка на фото:</label>
                <input class="form-control" name="book_image" placeholder="Ссылка" id="book_image">
            </div>

            <button type="submit" class="btn btn-success">Изменить</button>
        </form>
    </div>
@endsection
