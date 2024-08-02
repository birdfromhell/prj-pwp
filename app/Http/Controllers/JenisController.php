<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the res
     * ource.
     */
    public function index()
    {
        $jenis = DB::table('xtb_jenis_barang')->get();
        return view ('jenis/index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
             $query=DB::table('xtb_jenis_barang')->insert([
                'id_jenis' => $request ->id_jenis,  
                'jenis_barang' => $request ->jenis_barang 
                ]);  
            return  redirect('jenis')-> with ('status', 'jenis berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('jenis')-> with ('status', $ex); 
            } 
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
         $jenis = DB::table('xtb_jenis_barang')->get();
        return view('jenis/index', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jenis $jenis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis)
    {
        //
    }
}