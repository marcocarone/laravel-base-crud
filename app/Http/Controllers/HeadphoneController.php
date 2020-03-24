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


        $request->validate([
            'marca' => 'required|string|max:50',
            'modello' => 'required|string|max:50',
            'peso' => 'required|numeric|min:1|max:10000',
            'caratteristiche' => 'required|string|max:255',
            'descrizione' => 'required|string',
            'prezzo' => 'required|numeric|min:1|max:9999.99',

            ]);


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
          // $cuffia = Headphone::all()->last();
          //   return redirect()->route('cuffie.show', compact('cuffia'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     // public function show($id)
     // {
     //   $cuffia = Headphone::find($id);
     //   if(empty($cuffia)) {
     //      abort('404');
     //  }
     //
     //  return view('cuffie.show', compact('cuffia'));
     // }


    public function show(Headphone $cuffie)
    {
      if(empty($cuffie)) {
         abort('404');
     }

     return view('cuffie.show', compact('cuffie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Headphone $cuffie)
    {
      // dd($cuffie);
      if(empty($cuffie)) {
         abort('404');
     }

     return view('cuffie.edit', compact('cuffie'));
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
      $cuffia = Headphone::find($id);
    if(empty($cuffia)) {
        abort('404');
    }

    $data = $request->all();

    $request->validate([
        'marca' => 'required|string|max:50',
        'modello' => 'required|string|max:50',
        'peso' => 'required|numeric|min:1|max:10000',
        'caratteristiche' => 'required|string|max:255',
        'descrizione' => 'required|string',
        'prezzo' => 'required|numeric|min:1|max:9999.99',

        ]);

    $updated = $cuffia->update($data);
    if ($updated) {
        $cuffia = Headphone::find($id);
        return redirect()->route('cuffie.show', compact('cuffia'));
    }
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
