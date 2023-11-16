<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="icon" type="image/png" href="./Images/logoIco.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>

    <div class="container">

        <h1 id="h">Welcome !</h1>

        <img src="./Images/1.png" alt="" id="celibrate">

        <div id="img">
            <img src="./Images/stu.png" alt="" id="stu">
            <img src="./Images/items.png" alt="" id="item">

            <img src="./Images/hello.png" alt="" id="hello">
            <img src="./Images/wel.png" alt="" id="wel">
        </div>

        <div id="btn">

            <div class="in">
                
                <a href="./login.php" id="sign"><button>SignIn</button></a> <br>
                <a href="./Client/register.php" id="reg"> <button>Register</button></a>
            </div>

        </div>



    </div>

    <script>
        $(document).ready(function() {

            setTimeout(() => {
                $('#h').css('display', 'none');
                $('#celibrate').css('display', 'none');

                $('#img').css('display', 'flex');
                $('#btn').css('display', 'flex');

            }, 2000);


            $('#sign').hover(
            function() {
                // Mouseenter event handler
                $('#hello').css('display', 'flex');
            },
            function() {
                // Mouseleave event handler
                $('#hello').css('display', 'none');
            }
            );

            $('#reg').hover(
            function() {
                // Mouseenter event handler
                $('#wel').css('display', 'flex');
            },
            function() {
                // Mouseleave event handler
                $('#wel').css('display', 'none');
            }
            );



        });
    </script>

</body>

</html>