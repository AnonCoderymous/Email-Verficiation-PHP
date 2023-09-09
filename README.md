# Email-Verficiation-PHP
Hi folks, In this project I've created a email verification system. It takes email and password during the time of register from the user and verify user's email by sending a mail to his/her inbox with a verification code. If the code entered by user is correct, then the email will get verified, otherwise it will not verify. A simulation of how email verification works on the site nowadays.

# Technologies
  * HTML
  * CSS
  * JavaScript
  * PHP
  * MySQL
  * Sendmail (Comes with XAMPP Control Panel)

# File(s) & Action(s)
config.php - The database connection file.
index.php - The sign up page of the website.
email.php - The email verification page asks for verification code.
signup.php - Logic to create a user, send email to the user and verif the email.
function.php - Basic PHP function to show timestamp in user-friendly manner.
db_emailverification.sql - Database file to import.

# Features
1. Captures email and password.
2. Performs form validation.
3. Generate random code and send it to user's email inbox.
4. Verify the email address.

# Opinion
This is just a basic project, but since I've learned something new from this I actually wanted to share this and help others who wants to get an idea of how things work on the ground. Thank you for reviewing my code. Have a nice day :)
