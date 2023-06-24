<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {



        // 8432b17c0bmsh1bac0abe16a5c09p1cb27cjsncc947a2dafb0

// $curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://drug-info-and-price-history.p.rapidapi.com/1/druginfo?drug=advil",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => [
// 		"X-RapidAPI-Host: drug-info-and-price-history.p.rapidapi.com",
// 		"X-RapidAPI-Key: 48bfc7ff23msh23b3e22f5444998p12c6c7jsn551843593390"
// 	],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	 dd($response);
// }
        return view('dashboard');
    }
}
