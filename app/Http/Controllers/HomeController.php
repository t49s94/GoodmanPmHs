<?php

/*
For getting loaction:
https://websolutionstuff.com/post/how-to-get-current-user-location-in-laravel
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visitor;

//use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||
      $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache');

      if($pageRefreshed)
      {
        session(['key' => 'value']);
      }

      if(!session()->has('key'))
      {
        session(['key' => 'value']);
        $ip = request()->ip(); //Dynamic IP address get
        dd($ip);

        if($ip == "127.0.0.1")
        {
          $ip = '47.195.245.79';
        }

        // Get information from ip
        $data = \Location::get($ip);

        $visitor = Visitor::where('ip', $ip)->first();

        // If visitor wasn't found, store ip information
        if(is_null($visitor))
        {
          $lastVisitor = Visitor::all()->sortByDesc('id')->first();
          $lastId = is_null($lastVisitor) ? 1 : $lastVisitor->id + 1;

          $visitor = Visitor::create([
            'id' => $lastId,
            'ip' => $data->ip,
            'country_name' => $data->countryName,
            'country_code' => $data->countryCode,
            'region_name'=> $data->regionName,
            'region_code' => $data->regionCode,
            'city' => $data->cityName,
            'zipcode' => $data->zipCode,
            'latitude'=> $data->latitude,
            'longitude' => $data->longitude,
          ]);
        }


      }


      /*
      //$ip = request()->ip(); //Dynamic IP address get
      $data = \Location::get($ip);
      */
      return view('home', compact('data'));

    }
}
