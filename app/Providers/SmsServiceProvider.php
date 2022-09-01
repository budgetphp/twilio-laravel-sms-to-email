<?php
/**
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author jason@budgetphp.com
 * @version 1.0
 * @since 09-31-2022
 * @category twilio
 * @category sms
 * 
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\SmsRepositoryInterface;
use App\Repositories\SmsRepository;
 

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(SmsRepositoryInterface::class, SmsRepository::class);

    }          


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
