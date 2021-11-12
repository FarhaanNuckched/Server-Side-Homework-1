<!DOCTYPE html>
<html>
    <head>
        <title> Register </title>
        <link rel="stylesheet" href="style.css">


    </head>
    <body>

    <?php ?>

        <div class="register-page"></class>
                    <h1> Register </h1>
                    <h4> It only takes a minute. </h4>
                    <form method="post" action="db_connection.php">

                        <! textbox for first name>
                        <label> First Name </label>
                        <input type="text" placeholder="">

                        <! textbox for last name>
                        <label> Last Name </label>
                        <input type="text" placeholder="">

                        <! textbox for email>
                        <label> Email </label>
                        <input type="email" placeholder="">
                        
                        <! textbox for password>
                        <label> Password </label>
                        <input type="password" placeholder="">

                        <! textbox for  confirming password>
                        <label> Confirm Password </label>
                        <input type="password" placeholder="">

                        <! button to submit registration information>
                        <input type="button" value="Submit">

                    </form>
        </div>

        <p class="loginhere"> Already have an account? <a href="http://localhost/loginpage.php"> Login Here. </a> </p>
        
    </body>
</html>