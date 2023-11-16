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
        <title>Dashboard</title>
        <link rel="icon" type="image/png" href="../Images/logoIco.ico">
        <link rel="stylesheet" href="../css/nav&menu.css">
        <link rel="stylesheet" href="../css/dashboard.css">
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
                    <h4>Dashboard</h4>
                    <div class="count">
                        <div class="countIn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h5 id="countDigit"> </h5>
                        </div>

                    </div>
                    <div class="tableCls">
                        <table class="table">
                            <thead class="thead-dark sticky">
                                <tr>
                                    <th>SID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Near City</th>
                                    <th>Course</th>
                                    <th>Guardian</th>
                                    <th>Subjects</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

        <script>

            $(document).ready(() => {


                $.ajax({
                    url: 'http://localhost/RMSSystem_32B/Server/studentData.json' + window.location.search,
                    type: 'GET',
                    cache: false,
                    contentType: 'application/json',
                    success: (data) => {
                        $.each(data.students, (index, student) => studentAddRow(student));
                        $('#countDigit').append(`<b>${data.students.length}</b>`);
                    },
                    error: (request) => {
                        $('table tbody').append(`
                        <tr>
                        <td colspan="9"> ${request.responseText}</td>
                        </tr>
                        `);
                    }
                });
                

                function studentAddRow(student) {
      
                    const subjects = [];
                    for (let index = 0; index < student.Subjects.length; index++) {
                        const subject = student.Subjects[index];
                        subjects.push(`<li>${subject}<br></li>`);
                    }


                    const row = ` <tr>
                        <td> ${student.SID} </td>
                        <td> ${student.FirstName} </td>
                        <td> ${student.LastName} </td>
                        <td> ${student.Email} </td>
                        <td> ${student.NearCity} </td>
                        <td> ${student.Guardian}</td>
                        <td>
                            <ul class="ml-3">${student.Course}</ul>
                        </td>
                        <td>
                            <ul class="ml-3">${subjects.join('')}<br></ul>
                        </td>
                        </tr>`;

                    $('table tbody').append(row);
                }




            });


        </script>

    </body>
</html>