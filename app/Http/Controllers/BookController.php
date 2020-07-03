<?php


namespace App\Http\Controllers;


use App\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    
    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    
    public function create()
    {
        return view('books.create');
    }


   
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        Book::create($request->all());


        return redirect()->route('books.index')
                        ->with('success','Book created successfully.');
    }


    
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }


   
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }


   
    public function update(Request $request, Book $book)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $book->update($request->all());


        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
    }
    
    public function destroy(Book $book)
    {
        $book->delete();


        return redirect()->route('books.index')
                        ->with('success','Book deleted successfully');
    }
}