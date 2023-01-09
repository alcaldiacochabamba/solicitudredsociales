<?php

namespace App\Http\Controllers;

use App\Models\Transferencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

/**
 * Class TransferenciaController
 * @package App\Http\Controllers
 */
class TransferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transferencias = Transferencia::paginate();

        return view('transferencia.index', compact('transferencias'))
            ->with('i', (request()->input('page', 1) - 1) * $transferencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transferencia = new Transferencia();
        return view('transferencia.create', compact('transferencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Transferencia::$rules);

        $transferencia = Transferencia::create($request->all());

        return redirect()->route('transferencias.index')
            ->with('success', 'Transferencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transferencia = Transferencia::find($id);

        return view('transferencia.show', compact('transferencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transferencia = Transferencia::find($id);

        return view('transferencia.edit', compact('transferencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Transferencia $transferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transferencia $transferencia)
    {
        request()->validate(Transferencia::$rules);

        $transferencia->update($request->all());

        return redirect()->route('transferencias.index')
            ->with('success', 'Transferencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $transferencia = Transferencia::find($id)->delete();

        return redirect()->route('transferencias.index')
            ->with('success', 'Transferencia deleted successfully');
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
        $filre = '';
        $filco = ''; 
        $filus = '';
        $filcl = '';
        $filre1 = '';
        $filco1 = ''; 
        $filus1 = '';
        $filcl1 = '';
        $filre2 = '';
        $filco2 = ''; 
        $filus2 = '';
        $filcl2 = '';
        $filre3 = '';
        $filco3 = ''; 
        $filus3 = '';
        $filcl3 = '';
        $filre4 = '';
        $filco4 = ''; 
        $filus4 = '';
        $filcl4 = '';
        $filre5 = '';
        $filco5 = ''; 
        $filus5 = '';
        $filcl5 = '';

        $mensaje = 'Habiéndose cumplido la causal '.$request->get('causal'). ' dentro del Artículo n° 10, del Reglamento Interno para la Administración, Seguimiento y Coordinación, Creación, Guarda de propiedad, Transferencia y Regulación de Redes Sociales del Gobierno Autónomo Municipal de Cochabamba, el/la funcionario/a '.$request->get('funcio'). ', con C.I. '.$request->ci. ' emitido en la ciudad de ' .$ext. ' con cargo ' .$request->cgo. ' procede a la transferencia de accesos y la propiedad de redes sociales del G.A.M.C a el/la funcionario/a '.$request->get('trans'). ' con cargo ' .$request->cgo1. ' bajo el siguiente detalle:'; 
        
        $detalle = 'Nombre de la Cuenta Comercial en Meta Business Suite '.$request->cta;
        $pagina = $request->get('pagina');
        $red = $request->get('texttipo');
        $comu = $request->get('idensayo');
        $usuario = $request->get('textensayo');
        $clave = $request->get('pcantidad');
        $cant = 0;
        $resultado=[];
        while($cant < count($red)) {
            $resultado['red'][$cant] = $red[$cant];
            $resultado['comunidad'][$cant] = $comu[$cant];
            $resultado['usuario'][$cant] = $usuario[$cant];
            $resultado['clave'][$cant] = $clave[$cant];
            if ($cant == 0) {
                $filre = $red[$cant];
                $filco = $comu[$cant]; 
                $filus = $usuario[$cant];
                $filcl = $clave[$cant];
            }
            if ($cant == 1) {
                $filre1 = $red[$cant];
                $filco1 = $comu[$cant]; 
                $filus1 = $usuario[$cant];
                $filcl1 = $clave[$cant];
            }
            if ($cant == 2) {
                $filre2 = $red[$cant];
                $filco2 = $comu[$cant]; 
                $filus2 = $usuario[$cant];
                $filcl2 = $clave[$cant];
            }
            if ($cant == 3) {
                $filre3 = $red[$cant];
                $filco3 = $comu[$cant]; 
                $filus3 = $usuario[$cant];
                $filcl3 = $clave[$cant];
            }
            if ($cant == 4) {
                $filre4 = $red[$cant];
                $filco4 = $comu[$cant]; 
                $filus4 = $usuario[$cant];
                $filcl4 = $clave[$cant];
            }
            if ($cant == 5) {
                $filre5 = $red[$cant];
                $filco5 = $comu[$cant]; 
                $filus5 = $usuario[$cant];
                $filcl5 = $clave[$cant];
            }

            $cant = $cant + 1;
        }
        $data['data'] = json_encode($resultado, true);
        //$data = ['succes'=>true,'resultado'=>$resultado];

        $codigo=100;
        
        $pdf = PDF::loadView('transferencia.pdftransf', ['mensaje'=>$mensaje, 'detalle'=>$detalle, 'pagina'=>$pagina, 'filre'=>$filre, 'filco'=>$filco, 'filus'=>$filus, 'filcl'=>$filcl, 'filre1'=>$filre1, 'filco1'=>$filco1, 'filus1'=>$filus1, 'filcl1'=>$filcl1, 'filre2'=>$filre2, 'filco2'=>$filco2, 'filus2'=>$filus2, 'filcl2'=>$filcl2, 'filre3'=>$filre3, 'filco3'=>$filco3, 'filus3'=>$filus3, 'filcl3'=>$filcl3, 'filre4'=>$filre4, 'filco4'=>$filco4, 'filus4'=>$filus4, 'filcl4'=>$filcl4, 'filre5'=>$filre5, 'filco5'=>$filco5, 'filus5'=>$filus5, 'filcl5'=>$filcl5 ]);

        return $pdf->stream(); 
        
        /*
        return view('transferencia.pdftransf', compact('mensaje','resultado','data', 'filre', 'filco', 'filus', 'filcl', 'filre1', 'filco1', 'filus1', 'filcl1', 'filre2', 'filco2', 'filus2', 'filcl2', 'filre3', 'filco3', 'filus3', 'filcl3', 'filre4', 'filco4', 'filus4', 'filcl4',  'filre5', 'filco5', 'filus5', 'filcl5', 'cant', 'detalle', 'pagina')); */   
    }


}
