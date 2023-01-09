<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

/**
 * Class AsignacionController
 * @package App\Http\Controllers
 */
class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacions = Asignacion::paginate();

        return view('asignacion.index', compact('asignacions'))
            ->with('i', (request()->input('page', 1) - 1) * $asignacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
        $asignacion = new Asignacion();
        if ($id ==2 ) {
            $mensa = 'CREAR REMOCIÓN DE ROLES EN REDES SOCIALES INSTITUCIONALES';
        } else {
            $mensa = 'CREAR ASIGNACIÓN DE ROLES EN REDES SOCIALES INSTITUCIONALES';
        }
        return view('asignacion.create', compact('asignacion','id', 'mensa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asignacion::$rules);

        $asignacion = new Asignacion();
        $asignacion->funcionario = $request->get('funcionario');
        $asignacion->fecha = now();
        $asignacion->hora = date("H:i:s", time());
        $asignacion->userid = Auth::id();
        $asignacion->estadoid = 1;
        $asignacion->save();

        $codigo = $asignacion->id;
        return $codigo;
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignacion = Asignacion::find($id);

        return view('asignacion.show', compact('asignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignacion = Asignacion::find($id);

        return view('asignacion.edit', compact('asignacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asignacion $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        request()->validate(Asignacion::$rules);

        $asignacion->update($request->all());

        return redirect()->route('asignacions.index')
            ->with('success', 'Asignacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignacion = Asignacion::find($id)->delete();

        return redirect()->route('asignacion.index')
            ->with('success', 'asignacion deleted successfully');
    }

    public function solicirecarga(Request $request)
    {
        if ($request->get('causa') ) {
            $detalle = 'Mediante el presente formulario solicitamos la Remoción de rol de administración en la comunidad digital '.$request->get('comunidad'). ' al funcionario '.$request->get('funcionario'). ', con cargo '.$request->cgo. ', quién a partir de ahora dejará de tener la responsabilidad de administrar la comunidad digital institucional del Gobierno Autónomo Municipal de Cochabamba, manteniendo la confidencialidad de la responsabilidad que se le dejó de asignar' ;
            $soli = 'Solicitud  REMOCION ';
            $fir = 'Funcionario de la remoción ';
        } else {
            $detalle = 'Mediante el presente formulario solicitamos la Asignación de rol de administración en la comunidad digital '.$request->get('comunidad'). ' al funcionario '.$request->get('funcionario'). ', con cargo '.$request->cgo. ', quién a partir de ahora cumplirá la responsabilidad de administrar la comunidad digital institucional del Gobierno Autónomo Municipal de Cochabamba, manteniendo la confidencialidad de la responsabilidad que se le asignó' ;
            $soli = 'Solicitud  ASIGNACION ';
            $fir = 'Funcionario de la asignación ';
        }
        $func=$request->get('funcionario');
        $cgo=$request->get('cgo');
        $codigo=100;
        $uni='Unidad Organizacional '.$request->get('uni');
        $redsoc='Red social de la solicitud '.$request->get('redsoc');
        $comu ='Nombre de la comunidad digital '.$request->get('comu');

        $pdf = PDF::loadView('asignacion.pdfasig', ['detalles'=>$detalle, 'codigo'=>$codigo, 'redsoc'=>$redsoc, 'comu'=>$comu, 'cgo'=>$cgo, 'uni'=>$uni, 'func'=>$func, 'soli'=>$soli, 'fir'=>$fir]);
                
        return $pdf->stream();
    }

    
    
};
