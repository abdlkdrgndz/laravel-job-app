<?php

namespace App\Jobs;

use App\Models\Device;
use http\Env\Response;
use Illuminate\Bus\Queueable;
use Illuminate\Cache\RateLimiter;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\Middleware\RateLimited;
use Illuminate\Queue\Queue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UpdateStatusProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if(!Cache::has('datas')) {
            $values = Cache::remember('datas', 60*24, function () {
                return Device::where('expire_date', '>', Carbon::now()->format('Y-m-d'))
                    ->where('status', '<>', Device::STATUS_CANCEL)
                    ->skip(0)
                    ->take(10000)
                    ->get();
            });
        }

        $allStatus = [];
        foreach (Cache::get("datas") as $keys => $vals) {
                if(Str::substr($vals['receipt'], -2) % 6 != 0) {
                    Device::where('id', $vals['id'])->update(['status' => rand(0,1)]);
                    array_push($allStatus, "id" . Str::substr($vals['receipt'], -2) . ": İşlem başarısız.");
                } else {
                    Device::where('id', $vals['id'])->update(['status' => 0]);
                }
        }

        return response()->json(['result' => $allStatus]);
    }
}
