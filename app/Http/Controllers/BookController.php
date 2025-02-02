<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Book::orderBy('id','asc')->get();
        return view('book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book=new Book();
        $book->title=$request->title;
        $book->ISBN=$request->ISBN;
        $book->editorial=$request->editorial;
        $book->pages=$request->pages;

        $book->save();
        
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->title=$request->title;
        $book->ISBN=$request->ISBN;
        $book->editorial=$request->editorial;
        $book->pages=$request->pages;

        $book->save();
        
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index');
    }
}