<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Sentimen;
use App\Stopwords;
use App\RawSentimen;
use Auth;
use App\Imports\RawSentimenImport;
use App\Imports\StopwordsImport;
use GuzzleHttp\Exception\GuzzleException;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use Hash;
use Carbon\Carbon;

class UmumController extends Controller
{
    public function welcome()
    {

        return view('welcome');
       
    }

    public function predict(Request $request)
    {

        $client = new \GuzzleHttp\Client();
        $request = $client->post('https://sidax.herokuapp.com/predict', [
            'json'=>[
                'text' => $request->text
            ]
        ]);

        $response = $request->getBody()->getContents();
        $res = json_decode($response, true);
        $res['token'] = csrf_token();
        return $res;
    }
}
