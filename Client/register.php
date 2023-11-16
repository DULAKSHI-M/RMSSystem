<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RMS - Register</title>
        <link rel="icon" type="image/png" href="../Images/logoIco.ico">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

            
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body>
        <div class="container">
            <form>

                <div class="text-center logo">
                    <img src="../Images/logo.png" class="mx-auto" alt="Logo">
                </div>
                  
                <!-- Email input -->
                
                    <div class="form-outline mb-4">
                      <input type="email" id="mail" class="form-control" placeholder="Email"required />
                    </div>
               
                  

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="pass" class="form-control" placeholder="Password" required/>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="cpass" class="form-control" placeholder="Confirm Password" required/>
                </div>

                <!-- Submit button -->
                
                <div class="text-center">
                    <button type="submit" id="reg" class="btn btn-primary">Register</button>
                  </div>
                
                 
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Have an account?  <a href="../login.php">LogIn</a></p>
                    
                </div>
            </form>
        </div>

    <script>
        $(document).ready(function() {

            $('#reg').click((eveny) => {
                event.preventDefault();

                var email = $('#mail').val();
                var pass = $('#pass').val();
                var cpass = $('#cpass').val();
                var AID = ('0000' + $.now()).slice(-4);

                if(email !== '' && pass !== '' && cpass !== ''){
                    if(pass === cpass){
                        var obj = {
                            "AID":AID,
                            "email":email,
                            "password":pass
                        }
                         
                        $.ajax({
                                    url: "../Server/adminReg.php",
                                    type: "POST",
                                    data: JSON.stringify(obj),
                                    contentType: "application/json; charset=utf-8",
                                    dataType: "json",
                                    success: function(response) {
                                        window.location.href = '../login.php';
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle errors
                                        console.log(error);
                                    }
                         });
                    }
                    else{
                        alert('Password not matching');
                    }
                }
                else{
                    alert('Feilds are empty');
                }
                
            });

        });
    </script>

    </body>
</html>