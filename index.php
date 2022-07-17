<!DOCTYPE html>
<html>
<head>
    <meta name="S&S Tax Pro Service" content="width=device-width, initial-scale=1.0">
    <title>S&S Tax Pro Service Contact Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <form action="process.php" method="post"> 
            <h3>Contact Us</h3>
            <hr>
            <?php
                $Msg = "";
                if(isset($_GET['error']))
                {
                    $Msg="Please Fill in the Blanks ";
                    echo'<div class="alert alert-danger">'.$Msg.'</div>';
                }
                if(isset($_GET['success']))
                {
                    $Msg="Your message has been sent. ";
                    echo'<div class="alert alert-success">'.$Msg.'</div>';
                }

            ?>


            <input type="text" name="UName" placeholder="Full Name" >
            <input type="email" name="Email" placeholder="Enter your email" >
            <input type="text" name="Phone" placeholder="Phone Number">
            <textarea name="Msg" rows="4" placeholder="How can we help you?"></textarea>
            <button class="btn btn-success" name ="btn-send">Send</button>
        </form>

    </div>
</body>
</html>

