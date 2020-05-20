<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Populations;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function show() {

       $infos = DB::table('populations')->orderBy('id', 'DESC')->get();

       return view('site.home', compact('infos'));

   }

   public function showInfo() {

       return Populations::all();
   }


   public function table() {

        $infos = DB::table('populations')->orderBy('id', 'DESC')->get();
        $table = '';
        foreach ($infos as  $value) {
                   $table  .= "<tr>
                   <th scope='value'>" .$value->id."</th>".
                   "<td>".$value->name."</td>".
                   "<td>".$value->latitude."</td>".
                   "<td>".$value->longitude."</td>".
                   "<td>".$value->populations."</td>".
               "</tr>";
        };

        echo $table;

   }



   public function store(Request $request){
       if($request->ajax()){
            $request->validate([
                'name' => 'required|string|max:255',
                'latitude' => 'required|integer',
                'longitude' => 'required|integer',
                'populations' => 'required|integer',
            ]);

           $resp = Populations::create([
                'name' => $request->name,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'populations' => $request->populations,
            ]);

            if($resp){
                return response()->json(['success' =>'успех']);
            }
            else {
                return response()->json(['error' => 'неудача']);
            }
       }
   }
}
