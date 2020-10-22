<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pets;
use App\Http\Requests\StorePetRequest;
use Carbon\Carbon;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
         $request->user()->authorizeRoles(['vendedor', 'admin']);
         $pets=Pets::orderBy('id','DESC')->paginate(3);
        return view('pets.index',compact('pets'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['vendedor', 'admin']);
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetRequest $request)
    {
        
        $pet = new Pets();

        $pet->name = $request->input('name');
        $pet->race = $request->input('race');
        $pet->age = $request->input('age');
        $pet->subject = $request->input('subject');
        $pet->owner = $request->input('owner');
        $pet->cellphone = $request->input('cellphone');
        $pet->date = $request->input('date');
        $pet->save();

        return redirect('pets')->with('message' , 'Guardado Satisfactoriamente');
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
    public function edit(Request $request,$id)
    {
        $request->user()->authorizeRoles(['vendedor', 'admin']);
        $pet = Pets::find($id);
        return view('pets.edit',compact('pet'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePetRequest $request, $id)
    {
        $request->user()->authorizeRoles(['vendedor', 'admin']);
         $pet = Pets::find($id);

         $pet->name = $request->input('name');
         $pet->race = $request->input('race');
         $pet->age = $request->input('age');
         $pet->subject = $request->input('subject');
         $pet->owner = $request->input('owner');
         $pet->cellphone = $request->input('cellphone');
         $pet->date = $request->input('date');
     
         $pet->save();
       

        return redirect('pets')
                                        ->with('message' , 'Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $request->user()->authorizeRoles(['vendedor', 'admin']);
       Pets::find($id)->delete();
        return redirect('pets')
                        ->with('success','Item deleted successfully');
    }
}
