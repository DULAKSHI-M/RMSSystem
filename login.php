<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS - LogIn</title>
    <link rel="icon" type="image/png" href="./Images/logoIco.ico">

    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="POST">

            <div class="text-center logo">
                <img src="./Images/logo.png" class="mx-auto" alt="Logo">
            </div>

            <!-- Email input -->

            <div class="form-outline mb-4">
                <input type="email" id="email" name="mail" class="form-control" placeholder="Email" required />
            </div>



            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required />
            </div>

            <!-- Submit button -->

            <div class="text-center">
                <button id="submit" class="btn btn-primary" type="submit">LogIn</button>
            </div>


            <!-- Register buttons -->
            <div class="text-center">
                <p>Don’t have an account? <a href="./Client/register.php">Register</a></p>

            </div>
        </form>
    </div>

    <script>
        $(document).ready(() => {
            $('#submit').click((event) => {
                event.preventDefault();
                var mail = $('#email').val();
                var pass = $('#pass').val();

                if(mail !== '' && pass !== ''){
                    $.ajax({
                        url: 'http://localhost/RMSSystem_32B/Server/admin.json',
                        type: 'GET',
                        cache: false,
                        dataType: 'json',
                        success: function(data) {
                            var matchFound = false;
                           
                            data.admins.forEach(function(item) {
                               
                                if (item.email === mail && item.password === pass) {
                                    matchFound = true;
                                    //console.log("Match");
                                    
                                    var object = {
                                        "validity": "true",
                                        "email": mail
                                    };
                                    
                                    $.ajax({
                                        url: "./Server/sessionCreate.php",
                                        type: "POST",
                                        data: JSON.stringify(object),
                                        contentType: "application/json; charset=utf-8",
                                        dataType: "json",
                                        success: function(response) {
                                            console.log('success')
                                            window.location.href = './Client/dashboard.php';
                                        },
                                        error: function(xhr, status, error) {
                                            console.log("Error: " + error);
                                        }
                                    });
                                }
                            });

                            if (!matchFound) {
                                alert('Credentials Not Matching');
                            }
                        },
                        error: function() {
                            alert('Error');
                        }
                    });
                }
                else{
                    alert('Feilds are empty');

                }
               

            });
        });
    </script>

</body>

</html>