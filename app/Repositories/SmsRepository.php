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

namespace App\Repositories;

use App\Interfaces\SmsRepositoryInterface;
use App\Traits\SmsTrait;
use App\Models\Sms;



 class SmsRepository implements SmsRepositoryInterface 


{
    use SmsTrait;
    
}
