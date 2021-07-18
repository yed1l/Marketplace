@extends ('books.layout')

@section ('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ $message }}</p>
    </div>
@endif

<div id="index-container">
    <div class="display-4 text-center my-2">Все объявление
    </div>
    <div class="row mt-4 mb-2">
        <div class="col-sm-9 pt-2">
            <!-- Links For Sorting Start -->
            <ul class="nav">
                <li class="nav-item ml-3">
                    <a href="{{ URL::current() }}"
                    class="nav-text {{Request::has('sort') ? 'text-dark' : 'text-primary'}}">Сначала старые </a>
                </li>

                <li class="nav-item mx-2"><i class="fas fa-circle align-middle"></i></li>


                <li class="nav-item">
                    <a href="{{ URL::current()."?sort=old_to_new" }}"
                       class="nav-text {{Request::get('sort') === 'old_to_new' ? 'text-primary' : 'text-dark'}}">Сначала свежие</a>
                </li>
                <li class="nav-item mx-2"><i class="fas fa-circle align-middle"></i></li>

                <li class="nav-item">
                    <a href="{{ URL::current()."?sort=price_asc" }}"
                    class="nav-text {{Request::get('sort') === 'price_asc' ? 'text-primary' : 'text-dark'}}">От дешевых к дорогим</a>
                </li>

                <li class="nav-item mx-2"><i class="fas fa-circle align-middle"></i></li>

                <li class="nav-item">
                    <a href="{{ URL::current()."?sort=price_desc" }}"
                       class="nav-text {{Request::get('sort') === 'price_desc' ? 'text-primary' : 'text-dark'}}">От дорогих к дешевым</a>
                </li>

            </ul>
            <!-- Links For Sorting End -->
        </div>

        <div class="col-sm-3">
            <!-- Form For Search Start -->
            <form action="{{ route('books.index') }}" method="GET">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="search_key" placeholder="Поиск по названию">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Поиск</button>
                    </div>
                </div>
            </form>
            <!-- Form For Search End -->
        </div>
    </div>

    <table class="table table-bordered table-hover" id="table-index">
        <thead class="thead-dark text-center">
            <tr>
                <th>Название объявления</th>
                <th>Цена в тенге</th>
                <th>Ссылка на фото</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="bg-light text-center">
            @foreach ($books as $book)
            <tr>
                <td class="align-middle">{{$book->book_name}}</td>
                <td class="align-middle">{{$book->price}}</td>
                <td class="align-middle">{{$book->book_image}}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-success">
                           <i class="fas fa-eye"></i> Показать
                        </a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning mx-1">
                           <i class="fas fa-edit"></i> Изменить
                        </a>
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Удалить
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$books->links()}}
    <a href="{{ route('books.create') }}" class="btn btn-primary my-2 d-block mx-auto" style="width: 12%;">Создать новое</a>
</div>
@endsection
