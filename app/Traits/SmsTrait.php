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

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SmsToEmail;
use Twilio\TwiML\MessagingResponse;
use App\Models\Sms;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;




trait SmsTrait
{


    /**
     * @param Request $request
     * @return $this| string
     * @copyright 2022 GNU GPL 
     * @author jason@budgetphp.com
     * @link https://support.twilio.com/hc/en-us/articles/223181788-Forwarding-SMS-Messages-to-your-Email-Inbox
     * @link https://www.twilio.com/docs/messaging/twiml
     * @version 1.0
     * @since 09-31-2022
     * @category twilio
     * @category sms
     */
    public function _sendSmsToLaravelEmail($request)
    {
        try {
            $this->request = $request;

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SmsToEmail($request));
            $response = new MessagingResponse();
            $response->message(
                "Youre SMS has been forwarded to our eMail"
            );

            return response($response);
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }


       /**
     * @param Request $request
     * @return true
     * @copyright 2022 GNU GPL 
     * @author jason@budgetphp.com
     * @version 1.0
     * @since 09-31-2022
     * @category twilio
     * @category sms
     * @category dm
     */
    public function _sendSmsToDb($request)
    {
        try {


            $this->request = $request;

            $sms_db = new Sms;

            $sms_db->number_from = $request->input('From');
            $sms_db->message = $request->input('Body');
            $sms_db->save();

            return true;
        } catch (Throwable $e) {
            Log::error($e->getMessage());
            return false;
        }
    }
}
