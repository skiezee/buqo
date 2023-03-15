<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books= Book::all();
        return view('home', ['books' => $books]);
    }
    public function search(Request $request)
    {
    $query = $request->input('query');

    $books = Book::where('judul', 'LIKE', "%$query%")
                 ->orWhere('pengarang', 'LIKE', "%$query%")
                 ->orWhere('penerbit', 'LIKE', "%$query%")
                 ->orWhere('id', $query)
                 ->get();

    return view('home', ['books' => $books]);
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('home', ['book' => $book]);
    }


    public function destroy($id)
    {
        $books = Book::all();
        Book::destroy($id);
        foreach ($books as $key => $book) {
            $book->id = $key+1;
            $book->save();
        }

        return redirect('/home')->with('success', 'Buku berhasil dihapus');
    }
}
