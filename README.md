# twilio-laravel-sms-to-email


### To install this code you can apply this GitHub repository to your Laravel root directory and the following steps

1 Place this line in your .env file
> ####
> MAIL_FROM_ADDRESS = 'you@your.com
 ####

2 Create a Laravel database migration using the migration code in this repository as an example
> ####
> code
> linw
 ####
3 Bind the service container with the following code insertions in your blank file and blank file.
> ####
> code
> linw
 ####
 blank.php
 > ####
> code
> linw
 ####
4 Add this line to your api.php routes file
> ####
> code
> linw
 ####
5 Enter the webhook URL in your Twilio messaging webhook settings for your Twilio phone number.
6 Send yourself a test message via SMS and check to see that you received an email additionally check the database for a log of that SMS transaction.
