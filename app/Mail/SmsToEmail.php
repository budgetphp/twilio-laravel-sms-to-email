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

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class SmsToEmail extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $this->request = $request;
    }

    /**
     * @param Request $request
     * @return void
     * @copyright 2022 GNU GPL 
     * @author jason@budgetphp.com
     * @version 1.0
     * @since 09-31-2022
     * @category email
     */
    public function build(Request $request)
    {
        $this->request = $request;

        $request->subject = 'You Recieved a SMS from ' .  $request->input(['From']);

        return $this->markdown('contact.sms.smstoemail')
            ->subject($request->subject)->with('body', $request->input(['Body']));
    }
}
