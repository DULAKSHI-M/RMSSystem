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
        <title>Update Student</title>
        <link rel="icon" type="image/png" href="../Images/logoIco.ico">
        <link rel="stylesheet" href="../css/nav&menu.css">
        <link rel="stylesheet" href="../css/updateStudent.css">
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
                
                <div class="in">
                    <h4><a href="./allStudents.php">All Students</a>  > Update Student</h4>
                    <div class="form">
                        <form id="stdForm">
                            <label for="fname">First Name</label>
                            <div class="form-outline mb-4">
                                <input type="text" id="fname"
                                    class="form-control"
                                    required />
                            </div>
                            <label for="lname">Last Name</label>
                            <div class="form-outline mb-4">
                                <input type="text" id="lname"
                                    class="form-control"
                                    required />
                            </div>

                            <label for="email">Email</label>
                            <div class="form-outline mb-4">
                                <input type="email" id="email"
                                    class="form-control"
                                    required />
                            </div>

                            <label for="city">Near City</label>
                            <div class="form-outline mb-4">
                                <input type="text" id="city"
                                    class="form-control"
                                    required />
                            </div>
                            <label for="course">Course</label>
                            <div class="form-outline mb-4">
                                <input type="text" id="course"
                                    class="form-control"
                                    required />
                            </div>
                            <label for="guardian">Guardian</label>
                            <div class="form-outline mb-4">
                                <input type="text" id="guardian"
                                    class="form-control"
                                    required />
                            </div>

                            <label for="subjects">Subjects</label>
                            <div class="subs">
                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="checkboxGroup" id="dsa"
                                        value="DSA">
                                    <label class="form-check-label"
                                        for="checkbox1">
                                        DSA
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="checkboxGroup" id="ppa"
                                        value="PPA">
                                    <label class="form-check-label"
                                        for="checkbox2">
                                        PPA
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="checkboxGroup" id="ordbms"
                                        value="ORDBMS">
                                    <label class="form-check-label"
                                        for="checkbox3">
                                        ORDBMS
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="checkboxGroup" id="cs" value="CS">
                                    <label class="form-check-label"
                                        for="checkbox4">
                                        CS
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="checkboxGroup" id="tcp"
                                        value="TCP/IP">
                                    <label class="form-check-label"
                                        for="checkbox5">
                                        TCP/IP
                                    </label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary"
                                    id="updateButton">Update</button>
                            </div>

                        </form>
                    </div>
                  
                </div>
                <script>
                    $(document).ready(() => {
                
                      const sid = new URLSearchParams(window.location.search).get('sid');
                
                      $.ajax({
                        url: 'http://localhost/RMSSystem_32B/Server/studentData.json',
                        type: 'GET',
                        contentType: 'application/json',
                        success: (data) => {

                            var targetUser = data.students.find(function(student) {
                                return student.SID === sid;
                            });
                            //console.log(targetUser.SID)

                         
                          $('#fname').val(targetUser.FirstName);
                          $('#lname').val(targetUser.LastName);
                          $('#email').val(targetUser.Email);
                          $('#city').val(targetUser.NearCity);
                          $('#guardian').val(targetUser.Guardian);
                          $('#course').val(targetUser.Course);
                          $('#Subjects').val(data.Subjects);

                          for(var i=0;i<5;i++){
                            if(targetUser.Subjects[i]=='DSA'){
                                $('#dsa').prop('checked', true);
                            }
                            if(targetUser.Subjects[i]=='PPA'){
                                $('#ppa').prop('checked', true);
                            }
                            if(targetUser.Subjects[i]=='ORDBMS'){
                                $('#ordbms').prop('checked', true);
                            }
                            if(targetUser.Subjects[i]=='CS'){
                                $('#cs').prop('checked', true);
                            }
                            if(targetUser.Subjects[i]=='TCPIP'){
                                $('#tcp').prop('checked', true);
                            }
                          }
                          
                        },
                        error: (request) => alert(request.responseText)
                      });
                



                      $("#updateButton").click((event) => {
                        event.preventDefault();

                        const sid = new URLSearchParams(window.location.search).get('sid');
                
                        $.ajax({
                        url: 'http://localhost/RMSSystem_32B/Server/studentData.json',
                        type: 'GET',
                        contentType: 'application/json',
                        success: (data) => {

                            var targetUser = data.students.find(function(student) {
                                return student.SID === sid;
                            });

                                   
                                    var subjects = [];
                                

                                        if ($('#dsa').is(":checked")) {
                                            subjects.push('DSA'); 
                                        } 
                                        if ($('#ppa').is(":checked")) {
                                            subjects.push('PPA'); 
                                        } 
                                        if ($('#ordbms').is(":checked")) {
                                            subjects.push('ORDBMS'); 
                                        } 
                                        if ($('#cs').is(":checked")) {
                                            subjects.push('CS'); 
                                        } 
                                        if ($('#tcp').is(":checked")) {
                                            subjects.push('TCPIP'); 
                                        } 

                                    const newdata = {
                                    FirstName: $('#fname').val(),
                                    LastName: $('#lname').val(),
                                    Email: $('#email').val(),
                                    NearCity: $('#city').val(),
                                    Guardian: $('#guardian').val(),
                                    Course: $('#course').val(),
                                    Subjects: subjects
                                    };
                            

                                    if (targetUser) {
                                        targetUser.FirstName = $('#fname').val();
                                        targetUser.LastName = $('#lname').val();
                                        targetUser.Email = $('#email').val();
                                        targetUser.NearCity = $('#city').val();
                                        targetUser.Guardian = $('#guardian').val();
                                        targetUser.Course = $('#course').val();
                                        targetUser.Subjects = subjects;

                                        //console.log(data)

                                         $.ajax({
                                            url: '../Server/deleteStudent.php',
                                            type: 'POST',
                                            contentType: "application/json; charset=utf-8",
                                            dataType: 'json',
                                             data: JSON.stringify(data), 
                                             success: function(message) {
                                             alert('Successfully Updated');
                                             window.location.href = 'allStudents.php';
                                             },
                                             error: function(request, status, error) {
                                             alert(error);
                                             }
                                         });
                                    }

                      },
                        error: (request) => alert(request.responseText)
                      });

                      });

                    });
                  </script>

            </div>
        </div>

    </body>
</html>