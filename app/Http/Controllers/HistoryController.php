<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Carbon\Carbon;

class HistoryController extends Controller
{
    
    
    public function history()
    {
        $currentDate = new Carbon();
        $year = $currentDate->year;
        $month = $currentDate->month;
        $day = $currentDate->day;
        return view('history', [
            "year"=>$year,
            "month"=>$month,
            "day"=>$day,
            "doctor" =>  Doctor::latest()->get()
        ]);
    }

    public function content(Doctor $doctor)
    {
        return view('content', [
            "doctor" => $doctor
        ]);
    }
}
