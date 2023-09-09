# Email-Verficiation-PHP
Hi folks, In this project I've created a email verification system. It takes email and password during the time of register from the user and verify user's email by sending a mail to his/her inbox with a verification code. If the code entered by user is correct, then the email will get verified, otherwise it will not verify. A simulation of how email verification works on the site nowadays.

# Technologies
  * HTML
  * CSS
  * JavaScript
  * PHP
  * MySQL
  * Sendmail (Comes with XAMPP Control Panel)

# How to configure xampp to send email (Windows)
In order to send mails from localhost, I've seen many users are finding it difficult to work, so here is a quick guide on how to send email from your localhost step-by-step.
 # Setup Gmail
   1. Login to your gmail account in a browser from which you want to send emails.
   2. Go to **www.google.com**, you should see yourself logged in to your gmail.
   3. Click on your google profile logo on top-right corner of the window.
   4. Click on **Manage your Google Account**
   5. Now, you will see various options, go to _Security_.
   6. Enable _2-Step Verification_ on your account.
   7. Once you've enabled 2-Step Verification, Go to **https://myaccount.google.com/apppasswords**.
   8. It will ask you to login, login with your gmail password.
   9. Now under **Select the app and device for which you want to generate the app password.** click on _Select app_.
   10. Choose **Other (_Custom name_)** and enter any name of your choise, In my case it is _localhost sendmail_.
   11. Click on **GENERATE** button, a dailogue-box will appear which will provide you the **Generated app password**.
   12. Copy the generated password, the password should look like this **_vbre zvrw obfs jeaj_**, now copy this password and note it down somewhere as it will not be available again and click on **DONE**.

 # Setup sendmail.ini and php.ini
   After you've followed the Gmail setup steps, it's time to setup the *sendmail.ini* and *php.ini* files to send mail. Kindly check the video below for the proper and    simple guide : https://www.youtube.com/watch?v=KA2UB3pxEtg&t=55s
     
# File(s) & Action(s)
1. config.php - The database connection file.
2. index.php - The sign up page of the website.
3. email.php - The email verification page asks for verification code.
4. signup.php - Logic to create a user, send email to the user and verif the email.
5. function.php - Basic PHP function to show timestamp in user-friendly manner.
6. db_emailverification.sql - Database file to import.

# Features
1. Captures email and password.
2. Performs form validation.
3. Generate random code and send it to user's email inbox.
4. Verify the email address.

# Opinion
This is just a basic project, but since I've learned something new from this I actually wanted to share this and help others who wants to get an idea of how things work on the ground. Thank you for reviewing my code. Have a nice day :)
