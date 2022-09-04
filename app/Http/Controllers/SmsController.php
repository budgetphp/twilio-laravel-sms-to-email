<?php

/**
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author Jason Philips
 * @version 1.0
 * @since 09-31-2022
 * @category twilio
 * @category sms
 * 
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\SmsRepositoryInterface;
use App\Repositories\SmsRepository;
use Throwable;
use Illuminate\Support\Facades\Log;



class SmsController extends Controller
{

    private SmsRepositoryInterface $SmsRepository;

    public function __construct(SmsRepositoryInterface $SmsRepository)
    {
        $this->SmsRepository = $SmsRepository;
    }


    /**
     * @param Request $request
     * @return $this| string
     * @copyright 2022 GNU GPL 
     * @author jason@budgetphp.com
     * @version 1.0
     * @since 09-31-2022
     * @category twilio
     * @category sms
     *  @category webhook
     */
    public function twilio_sms_webook(Request $request)
    {
        try {

            $this->request = $request;
 
            $sms = new SmsRepository;
            $sms->_sendSmsToDb($request);
            return $sms->_sendSmsToLaravelEmail($request);
         
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }
}
