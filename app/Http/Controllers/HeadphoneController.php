<?php

namespace App\Http\Controllers;
use App\Headphone;
use Illuminate\Http\Request;

class HeadphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuffie = Headphone::all();
        // dd($cuffie);
        return view('cuffie.index', compact("cuffie"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuffie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $cuffia = new Headphone;
        $cuffia->marca = $data["marca"];
        $cuffia->modello = $data["modello"];
        $cuffia->peso = $data["peso"];
        $cuffia->caratteristiche = $data["caratteristiche"];
        $cuffia->descrizione = $data["descrizione"];
        $cuffia->prezzo = $data["prezzo"];

        $cuffia->save();
        if($cuffia->save()) {
          return redirect()->route("cuffie.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
