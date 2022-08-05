<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offormacion;
use Illuminate\Http\Request;

class OfformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // add
        $offormacions = (new Offormacion)->newQuery();
        if (request()->has('search')) {
            $offormacions->where('name', 'Like', '%' . request()->input('search') . '%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $offormacions->orderBy($attribute, $sort_order);
        } else {
            $offormacions->latest();
        }

        $offormacions = $offormacions->paginate(5);
        return view('admin.offormacion.index',compact('offormacions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add
        return view('admin.offormacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255:'.config('offormacion.table_names.offormacions', 'offormacions').',name',
        ]);
        Offormacion::create($request->all());
        return redirect()->route('offormacion.index')
            ->with('message','Oferta de formación created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offormacion  $offormacion
     * @return \Illuminate\Http\Response
     */
    public function show(Offormacion $offormacion)
    {
       // add
        return view('admin.offormacion.show', compact('offormacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offormacion  $offormacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Offormacion $offormacion)
    {
       // add
        return view('admin.offormacion.edit', compact('offormacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offormacion  $offormacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offormacion $offormacion)
    {
        // add
        $request->validate([
            'name' => 'required|string|max:255:'.config('offormacion.table_names.offormacions', 'offormacions').',name,'.$offormacion->id,
        ]);
        $offormacion->update($request->all());
        return redirect()->route('offormacion.index')
            ->with('message','Oferta de formación updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offormacion  $offormacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offormacion $offormacion)
    {
        // eliminar oferta existente
        $offormacion->delete();
        return redirect()->route('offormacion.index')
            ->with('message','Oferta de formación  deleted successfully');
  
    }

/**
 * The permission has been checked in the controller constructor by using middleware.
 */
    function __construct()
    {
        $this->middleware('can:offormacion list', ['only' => ['index','show']]);
        $this->middleware('can:offormacion create', ['only' => ['create','store']]);
        $this->middleware('can:offormacion edit', ['only' => ['edit','update']]);
        $this->middleware('can:offormacion delete', ['only' => ['destroy']]);
    }

}