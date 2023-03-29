<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Especialidade;
use App\Models\Cita;
use Illuminate\Http\Request;
use Carbon\Carbon;


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
        return view('home');
    }

    /*inicia el controlo
   ador de reportes*/

    /*metodo para contar las especialidades que fueron agendadas*/
    public function pdfEspe()
    {
        $especialidades = Especialidade::paginate();
        $value = cita::where(['espeid' => 1]);
        $valu = cita::where(['espeid' => 2]);
        $val = cita::where(['espeid' => 3]);
        $va = cita::where(['espeid' => 4]);
        $v = cita::where(['espeid' => 5]);
        $vl = cita::where(['espeid' => 6]);
        return view('pdf',compact('especialidades','value','valu','val','va','v','vl'));
    }
    /*metodo para contar cuantas citas son atendidas or los medicos*/
    public function pdfMed()
    {
        $personas= persona::paginate();
        $value = cita::where(['espeid' => 1]);
        $valu = cita::where(['espeid' => 2]);
        $val = cita::where(['espeid' => 3]);
        $va = cita::where(['espeid' => 4]);
        $v = cita::where(['espeid' => 5]);
        $vl = cita::where(['espeid' => 6]);
        return view('pdfM',compact('personas','value','valu','val','va','v','vl'));

    }
/*metodo para contar cuantas citas existen en el presente mes*/
    public function pdfFecha()
    {
        $citas = Cita::whereMonth('created_at', now())->get();


        return view('pdfF',compact('citas'));
    }
/*metodo para exportar a pdf la información*/
    public function pdfExporta()
    {
        return view('pdfExport');
    }


}
