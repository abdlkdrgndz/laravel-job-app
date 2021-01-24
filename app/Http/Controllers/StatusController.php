<?php

namespace App\Http\Controllers;

use App\Jobs\UpdateStatusProcess;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class StatusController extends Controller
{
    public function updateProcess(Request $request)
    {
        if(Cache::has("datas")){
            return Cache::get("datas");
        }
    }

}
