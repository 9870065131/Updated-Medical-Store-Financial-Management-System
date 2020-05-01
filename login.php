<?php
session_start();
include ('includes/db.php');
if (isset($_POST['login']))
{   
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform  = "Unknown OS Platform";

    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser() {

    global $user_agent;

    $browser        = "Unknown Browser";

    $browser_array = array(
                            '/msie/i'      => 'Internet Explorer',
                            '/firefox/i'   => 'Firefox',
                            '/safari/i'    => 'Safari',
                            '/chrome/i'    => 'Chrome',
                            '/edge/i'      => 'Edge',
                            '/opera/i'     => 'Opera',
                            '/netscape/i'  => 'Netscape',
                            '/maxthon/i'   => 'Maxthon',
                            '/konqueror/i' => 'Konqueror',
                            '/mobile/i'    => 'Handheld Browser'
                     );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}

$user_os        = getOS();
$user_browser   = getBrowser();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $ret = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username'  and user_password='$password'");
    $num = mysqli_fetch_array($ret);

    if ($num > 0)
  {
        $_SESSION['login'] = $num['username'];
        $_SESSION['id'] = $num['id'];
        $uip = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Kolkata');
        $currentdate = date('d-m-Y h:i:s a', time());

        mysqli_query($mysqli, "insert into userlog(userId,username,browser,user_os,userIp,loginTime) values('" . $_SESSION['id'] . "','" . $_SESSION['login'] . "','$user_browser','$user_os','$uip','$currentdate')");

        $extra = "index.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']) , '/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }
    else
    {
        $_SESSION['msg'] = "Invalid username or password";
        $extra = "login.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']) , '/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }

}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Panel</title>

        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/indoor/bootstrap.min.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/sb-admin-2.min.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <script type="text/javascript" charset="utf8" src="js/indoor/jquery-3.3.1.js"></script>
        <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" charset="utf8" src="js/indoor/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="js/indoor/dataTables.bootstrap4.min.js"></script>

        <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" charset="utf8" src="js/indoor/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="js/indoor/dataTables.bootstrap4.min.js"></script>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js"></script>
        <link href="https://cdn.syncfusion.com/ej2/material.css" rel="stylesheet">
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <div class="container">

                <!-- Outer Row -->
                <div class="row justify-content-center">

                    <div class="col-xl-6 col-lg-6 col-md-6">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>

                                            </div>

                                            <form class="user" method="POST">

                                                <div class="form-group">
                                                    <input type="text" name="username" class="form-control form-control-user" placeholder="Enter Username...">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                                </div>

                                                <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login"></input>
                                                <hr>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

    </html>