<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // add
        $empresas = (new Empresa)->newQuery();
        if (request()->has('search')) {
            $empresas->where('name', 'Like', '%' . request()->input('search') . '%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $empresas->orderBy($attribute, $sort_order);
        } else {
            $empresas->latest();
        }

        $empresas = $empresas->paginate(5);
        return view('admin.empresa.index',compact('empresas'))
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
        return view('admin.empresa.create');
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
            'name' => 'required|string|max:255:'.config('empresa.table_names.empresas', 'empresas').',name',
        ]);
        Empresa::create($request->all());
        return redirect()->route('empresa.index')
            ->with('message','Empresa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        // add
        return view('admin.empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //// add
        return view('admin.empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
            // add
        $request->validate([
            'name' => 'required|string|max:255:'.config('empresa.table_names.empresas', 'empresas').',name,'.$empresa->id,
        ]);
        $empresa->update($request->all());
        return redirect()->route('empresa.index')
            ->with('message','Empresa updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        // eliminar empresa existente
        $empresa->delete();
        return redirect()->route('empresa.index')
            ->with('message','Empresa deleted successfully');
   
    }

/**
 * The permission has been checked in the controller constructor by using middleware.
 */
    function __construct()
    {
        $this->middleware('can:empresa list', ['only' => ['index','show']]);
        $this->middleware('can:empresa create', ['only' => ['create','store']]);
        $this->middleware('can:empresa edit', ['only' => ['edit','update']]);
        $this->middleware('can:empresa delete', ['only' => ['destroy']]);
    }

}
