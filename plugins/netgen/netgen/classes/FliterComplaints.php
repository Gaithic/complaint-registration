<?php namespace Netgen\Netgen\Classes;

use Illuminate\Http\Request;


class FliterComplaints {
    public function getCreatedAt(Request $request){
        $date = $request->date;
    }
}
