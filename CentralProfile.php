<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log In | Course Way</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="Styles.css">
    <style>
        .container2 {
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            display: block;
            vertical-align: top;
            flex: 2;
        }

        .content {
            flex: 1;
            overflow-y: auto;
            align-content: center;
        }
    </style>
</head>
<body>
<fieldset>
    <table>
        <tr>
            <fieldset style="text-align: center;">
                <h1> Welcome to Course </h1>
            </fieldset>
        </tr>
        <tr>
            <table>
                <tr>
                    <h2 style="text-align: center;"><b>Choose a Profile to Log In</b></h2>
                    <center>
                        <fieldset style="width: 300px;">
                            <div class="section1">
                                <div class="content" id="dynamicContent">
                                    <div class="container">
                                        <a href="instructor/views/login.php">Instructor()</a>
                                    </div>

                                    <div class="container2">
                                        <a href="Admin/Courseway/views/login.php">Admin</a>
                                    </div>

                                    <div class="container3">
                                        <a href="moderator/view/login.php">Moderator</a>
                                    </div>

                                    <div class="container4">
                                        <a href="student/Views/login.php">Student</a>
                                    </div>
                                </div>
                                <br>
                            </fieldset>
                        </center>
                    </tr>
                    <tr><br><br></tr>
                    <tr>
                </table>
            </tr>
            <tr>
                <fieldset>
                    <center>
                        <h4><b>All Rights Reserved By Courseway</b></h4>
                    </center>
                    <br>
                </fieldset>
            </tr>
        </table>
    </fieldset>
</body>
</html>
