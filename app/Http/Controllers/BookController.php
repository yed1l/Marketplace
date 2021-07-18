<?php

namespace App\Http\Controllers;

use App\Mail\ProductCreated;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{

    public function index(Request $request) {

        $books = '';

        if ($request->has('sort')) {

            $order = $request->get('sort');


            if ($order === "price_asc") {
                $books = Book::orderBy('price')->paginate(5);
            }

            else if ($order === "price_desc") {
                $books = Book::orderBy('price', 'desc')->paginate(5);
            }

            else if ($order === "old_to_new") {
                $books = Book::paginate(5);
            }

            return view('books.index', compact('books'));

        }
        else if($request->has('search_key')) {
            $search_keyword = $request->get('search_key');

            $books = Book::where('book_name', 'LIKE', '%'.$search_keyword.'%')->paginate(5);

            return view('books.index', compact('books'));
        }

        $books = Book::latest()->paginate(5);

        return view('books.index', compact('books'));
    }


    public function show(Book $book) {
        return view('books.show', compact('book'));
    }


    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $request->validate([
            'book_name'=>'required| max:200',
            'price'=>'required',
            'book_image'=>'required',
            'book_description'=>'required| max:1000'
        ]);

        Book::create($request->all());
        $email = auth::user()->email;
        Mail::to($email)->send(new ProductCreated());
        return redirect()->route('books.index')->with('success', "Ваше обьявление успешно создан!");
    }

    public function edit(Book $book) {
        return view('books.edit', compact('book'));
    }


    public function update(Request $request, Book $book) {
        $request->validate([
            'book_id'=>'required',
            'book_name'=>'required',
            'writer_name'=>'required',
            'published_year'=>'required',
            'price'=>'required',
            'book_image'=>'required',
            'book_description'=>'required'
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success', "Успешно!");
    }


    public function destroy(Book $book) {
        $book->delete();

        return redirect()->route('books.index')->with('success', "Успешно!");
    }
}
