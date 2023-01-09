<?php

namespace App\Http\Controllers;

use App\Models\Requerimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

/**
 * Class RequerimientoController
 * @package App\Http\Controllers
 */
class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requerimientos = Requerimiento::paginate();

        return view('requerimiento.index', compact('requerimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $requerimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $requerimiento = new Requerimiento();
        return view('requerimiento.create', compact('requerimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Requerimiento::$rules);

        $requerimiento = Requerimiento::create($request->all());

        return redirect()->route('requerimientos.index')
            ->with('success', 'Requerimiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requerimiento = Requerimiento::find($id);

        return view('requerimiento.show', compact('requerimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requerimiento = Requerimiento::find($id);

        return view('requerimiento.edit', compact('requerimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Requerimiento $requerimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requerimiento $requerimiento)
    {
        request()->validate(Requerimiento::$rules);

        $requerimiento->update($request->all());

        return redirect()->route('requerimientos.index')
            ->with('success', 'Requerimiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $requerimiento = Requerimiento::find($id)->delete();

        return redirect()->route('requerimientos.index')
            ->with('success', 'Requerimiento deleted successfully');
    }

    public function solicirecarga(Request $request)
    {
        if ($request->get('rd1') == 'option1') {
            $op1 = 'SI';
        } else {
            $op1 = 'NO';
        }
        if ($request->get('rd2') == 'option1') {
            $op2 = 'SI';
        } else {
            $op2 = 'NO';
        }
        if ($request->get('rd3') == 'option1') {
            $op3 = 'SI';
        } else {
            $op3 = 'NO';
        }
        if ($request->get('rd4') == 'option1') {
            $op4 = 'SI';
        } else {
            $op4 = 'NO';
        }
        if ($request->get('rd5') == 'option1') {
            $op5 = 'SI';
        } else {
            $op5 = 'NO';
        }

        $func=$request->get('funcionario');
        $cgo=$request->get('cgo');
        $rele=$request->get('rele');
        $codigo=100;
        $uni='Unidad Organizacional :'.$request->get('unidad');
        $redsoc='Red social de la solicitud :'.$request->get('redsoc');
        $comu ='Nombre de la comunidad digital :'.$request->get('comu');

        $pdf = PDF::loadView('requerimiento.pdfrequiere', ['codigo'=>$codigo, 'redsoc'=>$redsoc, 'comu'=>$comu, 'cgo'=>$cgo, 'rele'=>$rele, 'uni'=>$uni, 'func'=>$func, 'op1'=>$op1,'op2'=>$op2,'op3'=>$op3, 'op4'=>$op4, 'op5'=>$op5]);
                
        return $pdf->stream();
        
        /*return view('requerimiento.pdfrequiere', compact('op1','op2','op3','op4','op5','func','cgo','codigo','uni','redsoc','comu'));*/
        
    }
}
