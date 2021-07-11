<?php

namespace App\Http\Controllers;

use \GeniusTS\PrayerTimes\Prayer;
use \GeniusTS\PrayerTimes\Coordinates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $prayer = new Prayer();
    $prayer->setCoordinates(3.25, 34.666667);

    // Return an \GeniusTS\PrayerTimes\Times instance
    $time = $prayer->times('2021-7-10');
    $time->setTimeZone(+1);
    $fajfr = 'fajr';
    $times = [
        'fajer' => $time->$fajfr->format('h:i a'),
        'sunrise' => $time->sunrise->format('h:i a'),
        'duhr' => $time->duhr->format('h:i a'),
        'asr' => $time->asr->format('h:i a'),
        'maghrib' => $time->maghrib->format('h:i a'),
        'isha' => $time->isha->format('h:i a'),
    ];
    return response()->json($times, 200); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
