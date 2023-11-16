<?php session_start();

if(!isset($_SESSION["email"]))
{
	header("location:../login.php");
   
	
}  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Announcements</title>
        <link rel="icon" type="image/png" href="../Images/logoIco.ico">
        <link rel="stylesheet" href="../css/nav&menu.css">
        <link rel="stylesheet" href="../css/addAnnounce.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-expand-lg justify-content-between">

            <!-- Logo -->
            <div class="d-flex align-items-center me-auto">
                <a class="navbar-brand" href="./dashboard.php">
                    <img src="../Images/logo.png" alt="Logo"
                        style="width: 50px;">
                </a>
            </div>

            <!-- Profile Image -->
            <div class="d-flex align-items-center ms-auto">
            <a href="../Server/signOut.php" style="text-decoration:none"><button><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</button></a>

            </div>

        </nav>

        <div class="container-fluid content">
            <div class="menu">
                <a href="./dashboard.php">
                    <div class="menu1">
                        <i class="fa fa-table"></i> <h6>Dashboard</h6>
                    </div>
                </a>
                <a href="./insertStudent.php">
                    <div class="menu2">
                        <i class="fa fa-user-plus"></i> <h6>Insert Student</h6>
                    </div>
                </a>
                <a href="./allStudents.php">
                    <div class="menu3">
                        <i class="fa fa-users" aria-hidden="true"></i> <h6>All
                            Students</h6>
                    </div>
                </a>
                <a href="./announcement.php">
                    <div class="menu4">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i> <h6>Announcement</h6>
                    </div>
                </a>
            </div>
            <div class="data">

                <div class="success" id="success">
                    <h6>Announcement Inserted Successfully</h6>
                </div>
                
                <div class="in">
                    <h4><a href="./announcement.php">Announcements</a>  > Add Announcements</h4>
                    <div class="form">
                        <form id="stdForm">
                            <label for="heading">Subject</label>
                            <div class="form-outline mb-4">
                                <input type="text" id="heading"
                                    class="form-control"
                                    required />
                            </div>
                            <label for="lname">Message</label>
                            <div class="form-outline mb-4">
                               <textarea name="msg" id="des"></textarea>
                            </div>

                            

                            <div class="text-center">
                                <button class="btn btn-primary"
                                    id="insert">Insert</button>
                            </div>

                        </form>
                    </div>
                  
                </div>
                

            </div>
        </div>
        <script>
                    $(document).ready(function() {


                      $('#insert').click(function(event) {
                        event.preventDefault(); // Prevent default form submission
                  
                                // Collect form data
                                var heading = $('#heading').val();
                                var des = $('#des').val();
                                var SID = ('0000' + $.now()).slice(-4);
                            

                        
                                // Create JSON object
                                var jsonObj = {
                                    "SID":SID,
                                    "heading": heading,
                                    "des": des
                                };

                                
                                $.ajax({
                                    url: "../Server/insertAnnouncement.php",
                                    type: "POST",
                                    data: JSON.stringify(jsonObj),
                                    contentType: "application/json; charset=utf-8",
                                    dataType: "json",
                                    success: function(response) {
                                        console.log('Data successfully sent to the server');
                                        success();
                                        clearFormFields();
                                        $('#h6').css('display','none');
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle errors
                                        console.log(error);
                                    }
                                });

                      });



                    });
                
                  </script>

                <script>

                    //Clear Feilds---------------------------

                    function clearFormFields() {
                        $('#heading').val('');
                        $('#des').val('');
                    }

                    //Success Message Box-----------------------
                    function success(){
                        $('#success').css('opacity',1);
                        setTimeout(function(){
                            $('#success').css('opacity',0);
                        },3000);
                    }

                  </script>

    </body>
</html>