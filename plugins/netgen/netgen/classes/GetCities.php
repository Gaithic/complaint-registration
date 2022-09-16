<?php namespace Netgen\Netgen\Classes;
use DB;
use Illuminate\Http\Request;

class GetCities  {

    public function getCities(Request $request){
        $state_id = $request->state_id;
        $data = DB::table('netgen_netgen_cities')->where('state_id', $state_id)->get();
        // dd($city);
        return response()->json([
            'data' => $data
        ]);
    }

}
