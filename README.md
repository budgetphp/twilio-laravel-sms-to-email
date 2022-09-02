# twilio-laravel-sms-to-email


### To install this code you can apply this GitHub repository to your Laravel root directory and the following steps

1 Place this line in your .env file
> ####
> MAIL_FROM_ADDRESS = you@your.com
 ####

2 Create a Laravel database migration using the migration code in this repository as an example
> ####
> [code](https://github.com/budgetphp/twilio-laravel-sms-to-email/blob/main/database/migrations/2022_08_30_024950_sms_logs.php)
 ####
3 Bind the service container with the following code insertion in your config/app.php.
> ####
>  App\Providers\SmsServiceProvider::class,
>  ####
4 And ddd this line to your routes/api.php routes file
> ####
> Route::post('your-url-path', [SmsController::class, 'twilio_sms_webook']);
 ####
5 Enter the webhook URL in your Twilio messaging webhook settings for your Twilio phone number.
6 Send yourself a test message via SMS and check to see that you received an email additionally check the database for a log of that SMS transaction.
