<?php

namespace App\Http\Controllers;

use App\Services\Varzesh3\Varzesh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index(Varzesh $varzesh)
    {
//        dd($varzesh->getUri());
        try {
            $result = Http::get($varzesh->getUri(),['token' => $varzesh->getToken(), 'action'=>'varzesh3' ]);
            $data =json_decode($result->body() , true);

            return $data;
        }catch(\HttpRequestException $e){
            echo 'your connection to this server  lost for : '. $e->getMessage();
        }


    }
}
