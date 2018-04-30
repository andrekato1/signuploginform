<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Hi :-)</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Gothic+A1|Quicksand|Roboto" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <nav>
            <div class="logo">Signup/Login Page</div>
            <ul>
                <li>
                    <a href="#" id="home_header">Home</a>
                </li>
                <li>
                    <a href="#" id="about">About</a>
                </li>
                <li>
                    <a href="#" id="open_login" class="active">Login</a>
                </li>
            </ul>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <p>Login Form</p>
                            <form method="POST" action="includes/login.inc.php">
                                <div class="form-group">
                                    <label for="user_id" class="control-label">Login/ID:</label>
                                    <br>
                                    <input type="text" name="user_id">
                                </div>
                                <div class="form-group">
                                    <label for="pwd" class="control-label">Password</label>
                                    <br>
                                    <input type="password" name="pwd">
                                </div>
                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="main" class="text-center form">
            <div class="rounded-box">
                <form class="form-horizontal" method="POST" action="includes/signup.inc.php">
                    <div class="form-group">
                        <label for="first_name" class="control-label"> First Name:</label>
                        <br>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="control-label">Last Name:</label>
                        <br>
                        <input type="text" id="last_name" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="user_id" class="control-label">ID:</label>
                        <br>
                        <input type="text" name="user_id" name="user_id">
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="control-label">Password:</label>
                        <br>
                        <input type="password" id="pwd" name="pwd">
                    </div>
                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="about">
        <p>This is a simple sign up/login form built with HTML, CSS, JavaScript/jQuery and PHP/MySQL.</p>

        <p>Features (basically does what it should do):
            <ol>
                <li>Takes you to a "Members' Area" after login</li>
                <li>You get the option to logout after you login</li>
                <li>You can also logout, of course</li>
            </ol>
        </p>
    </div>

    <footer class="footer-distributed">

        <div class="footer-right">

            <a target="_blank" href="https://www.facebook.com/shum.kato">
                <i class="fa fa-facebook"></i>
            </a>
            <a target="_blank" href="https://twitter.com/shumzete">
                <i class="fa fa-twitter"></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/andre-kato1/">
                <i class="fa fa-linkedin"></i>
            </a>
            <a target="_blank" href="https://github.com/andrekato1">
                <i class="fa fa-github"></i>
            </a>

        </div>

        <div class="footer-left">

            <p class="footer-links">
                <a href="#" id="home_footer">Home</a>
            </p>

            <p>André Kato &copy; 2018</p>
        </div>

    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>