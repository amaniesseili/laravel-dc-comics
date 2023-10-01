<?php



namespace App\Http\Controllers;

use app\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() // index funzione per mostrare i dati 
    {
        $dati = Comic::all();  // legge i dati dal db
        return view('comics.index'); // la view si chiama sempre index e la risorsa sempre al plurale comics
    }


};
