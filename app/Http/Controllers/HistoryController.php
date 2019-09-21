<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class HistoryController extends Controller
{

    //new
    public function new_hist_all(){
        $history = History::all();
        return view('history.new-history')->with('history',$history);
    }

    public function new_edit_hist($id){
        $find_hist = History::where('id',$id)->first();

        return view('history.new-history-edit');

    }
    //old
    public function history_create(){
        return view('history.new-create-history');
    }
    public function history_post(Request $request)
    {

        $request->validate([

            'addmore.*.description' => 'required',

        ]);
        $year = $request->input('year');
        //dd($year);
        $history = new History();
        $history->year = $year ;
        $desc_array = [];
        foreach ($request->history as $key => $value) {

              $desc_value = $value;

            //  $json_data = json_encode($desc_value);
              array_push($desc_array , $desc_value);


            //History::create($value);
        }
    //    dd(json_encode($desc_array));
       $history->description = json_encode($desc_array);
    //    dd($desc_array);
    //   dd($history->dscription);

        $history->save();





        return back()->with('success', 'History Created Successfully.');
    }

}
