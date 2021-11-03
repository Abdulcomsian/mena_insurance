<?php

namespace App\Jobs;

use App\Models\BoardOfDirector;
use App\Models\CompanyDetail;
use App\Traits\SanctionMethods;
use App\Utils\AddSearchType;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AddSearchJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use SanctionMethods;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $sanction;

    public function __construct($sanction)
    {
        $this->sanction = $sanction;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Calling Sanction AddSearch method of trait SanctionMethods
        $this->AddSearch($this->sanction);
    }
}
