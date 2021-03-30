<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Dog Owner Contact Us</title>
</head>
<body>
<?php include 'dogownerheader.php'?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h1 class="card-title text-center">Contact Us</h1>
                    <form action="processing.php" method="post" class="form-signin">
                        <div class="form-label-group">
                            <label for="inputEmail">From </label>
                            <input type="text" name="fromEmail" id="fromEmail" class="form-control"  placeholder="Email address"required >
                        </div> 
                        <div class="form-label-group">
                            <label for="inputEmail">To </label>
                            <input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="Email address" required>
                        </div> 
                        <label for="inputPassword">Subject </label>
                        <div class="form-label-group">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <label for="inputPassword">Message </label>
                        <div class="form-label-group">
                            <textarea  id="message" name="message" class="form-control" placeholder="Message" required ></textarea>
                        </div> 
                        <button type="submit" name="sendMailBtn" class="btn btn-lg btn-warning btn-block text-uppercase" >Send Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include 'dogownerfooter.php'?>
</html>