<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $docente = Docente::where('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('Apellido', 'LIKE', "%$keyword%")
                ->orWhere('Email', 'LIKE', "%$keyword%")
                ->orWhere('Telefono', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $docente = Docente::paginate($perPage);
        }

        return view('docente.index', compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Docente::create($requestData);

        return redirect('docente')->with('flash_message', 'Docente added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $docente = Docente::findOrFail($id);

        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $docente = Docente::findOrFail($id);

        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $docente = Docente::findOrFail($id);
        $docente->update($requestData);

        return redirect('docente')->with('flash_message', 'Docente updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Docente::destroy($id);

        return redirect('docente')->with('flash_message', 'Docente deleted!');
    }
}
