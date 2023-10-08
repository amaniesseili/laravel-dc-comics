<?php



namespace App\Http\Controllers;

use app\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() // index funzione per mostrare i dati 
    {
        $comics = Comic::all();  // legge i dati dal db
        return view('comics.index', ["comics" => $comics]); // la view si chiama sempre index e la risorsa sempre al plurale comics
    }

    // creo la funzione show che riceve l'id che c'e scritto nel url 
    public function show($id)
    {
        $comic = Comic::find($id); // con quel id cerco l'elemento nel db
        return view('comics.show', ["comics" => $comics]); // lo ritorno alla mia view che dobbiamo crearla e chiamarla show.blade.php
    }

    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {
        // Validazione dei dati del modulo
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'description' => 'required',
        ]);

        // Creazione del nuovo fumetto
        Comic::create($validatedData);

        // Redirect alla pagina di elenco dei fumettiF
        return redirect('/comics');
    }
};
