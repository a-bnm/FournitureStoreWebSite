<?php

namespace App\Http\Controllers;

use App\Models\Fourniture;
use Illuminate\Http\Request;
use App\Http\Requests\validationrequest;

class FournitureController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $Fournitures = Fourniture::paginate(3);//paginate returns the number of rows that it receivs as a parameter
        return view('index',
                ['Fournitures' => $Fournitures]
        );
    }

    public function stockDisplay()
    {   $Fournitures = Fourniture::all();
        return view('Fourniture/store',
                ['Fournitures' => $Fournitures]
        );
    }    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Fourniture.addFourniture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validationrequest $request)
    {   
        $request->validate([
            'name' => 'required|unique:fournitures',
            'description' => 'required',
            'small_description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image1' => 'required|mimes:jpg,png,jpeg|max:5048',
            'image2' => 'required|mimes:jpg,png,jpeg|max:5048',
            'image3' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName1 = 'Meuble1'.$request->image1->extension();
        $newImageName2 = 'Meuble2'.$request->image2->extension();
        $newImageName3 = 'Meuble3'.$request->image3->extension();

        $Fourniture = Fourniture::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'small_description' => $request->input('small_description'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image1' => $newImageName1,
            'image2' => $newImageName2,
            'image3' => $newImageName3
        ]);
       
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Fourniture = Fourniture::find($id);
        return view('Fourniture.show')->with('Fourniture',$Fourniture);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
      $Fourniture = Fourniture::find($id) -> first();
      return view('Fourniture.stock') -> with('Fourniture', $Fourniture);

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
        $Fourniture = Fourniture::where('id',$id) 
          -> update([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'small_description' => $request->input('small_description'),
            'description' => $request->input('description'),
            'image1' => $request->input('image1'),
            'image2' => $request->input('image2'),
            'image3' => $request->input('image3')

        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {   $Fourniture = Fourniture::find($name);
        $Fourniture -> delete();
        return redirect('/');
    }
}
