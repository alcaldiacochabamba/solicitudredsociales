<?php

namespace App\Http\Controllers;

use App\Models\Confiden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;


/**
 * Class ConfidenController
 * @package App\Http\Controllers
 */
class ConfidenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confidens = Confiden::paginate();

        return view('confiden.index', compact('confidens'))
            ->with('i', (request()->input('page', 1) - 1) * $confidens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $confiden = new Confiden();
        return view('confiden.create', compact('confiden'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Confiden::$rules);

        $confiden = Confiden::create($request->all());

        return redirect()->route('confidens.index')
            ->with('success', 'Confiden created successfully.');
    }

    public function solicirecarga(Request $request)
    {
        if ($request->get('ext') == 1) {
            $ext = 'La Paz';
        }
        if ($request->get('ext') == 2) {
            $ext = 'Santa Cruz';
        }
        if ($request->get('ext') == 3) {
            $ext = 'Cochabamba';
        }
        if ($request->get('ext') == 4) {
            $ext = 'Oruro';
        }
        if ($request->get('ext') == 5) {
            $ext = 'Chuquisaca';
        }
        if ($request->get('ext') == 6) {
            $ext = 'Potosi';
        }
        if ($request->get('ext') == 7) {
            $ext = 'Tarija';
        }
        if ($request->get('ext') == 8) {
            $ext = 'Pando';
        }
        if ($request->get('ext') == 9) {
            $ext = 'Beni';
        }

        $detalle = 'Considerando que, los canales de comunicación del Gobierno Autónomo Municipal de Cochabamba a través de las Redes Sociales, son mecanismos de transparencia, interacción e información oficial; mi persona '.$request->get('funcionario'). ', con C.I. '.$request->ci. ' emitido en la ciudad de ' .$ext. ', funcionario/a del G.A.M.C, con cargo de ' .$request->cgo. '. Me comprometo a administrar de manera idónea, responsable, eficiente, segura, con honestidad, confidencialidad con la información institucional y de las y los ciudadanos, vocación de servicio y bajo los lineamientos de gestión las redes sociales institucionales' ;
        $codigo=100;
        
        $pdf = PDF::loadView('confiden.pdfconfi', ['detalles'=>$detalle, 'codigo'=>$codigo]);
        
        
        return $pdf->stream();
    }
}
