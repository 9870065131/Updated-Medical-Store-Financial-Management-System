<?php 
session_start();

if (!isset($_SESSION["login"])) {
  header("location:login.php");
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

  <title> Admin Panel</title>


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
 
<script>
            $(document).ready(function() {

                addition();
                $("#q1,#q2,#q3,#q4,#q5,#q6,#q7,#q8,#q9,#q10,#q11,#p1,#p2,#p3,#p4,#p5,#p6,#p7,#p8,#p9,#p10,#p11,#total_amount").on("keydown keyup", addition);
            });

            function addition() {
                $("#p1").val(Number($("#q1").val() * 2000));
                $("#p2").val(Number($("#q2").val() * 500));
                $("#p3").val(Number($("#q3").val() * 200));
                $("#p4").val(Number($("#q4").val() * 100));
                $("#p5").val(Number($("#q5").val() * 50));
                $("#p6").val(Number($("#q6").val() * 20));
                $("#p7").val(Number($("#q7").val() * 10));
                $("#p8").val(Number($("#q8").val() * 5));
                $("#p9").val(Number($("#q9").val() * 2));
                $("#p10").val(Number($("#q10").val() * 1));
                

                $("#total_amount").val(Number($("#p1").val()) + Number($("#p2").val()) + Number($("#p3").val()) + Number($("#p4").val()) + Number($("#p5").val()) + Number($("#p6").val()) + Number($("#p7").val()) + Number($("#p8").val()) + Number($("#p9").val()) + Number($("#p10").val()));
            }

            $(document).ready(function() {

                sum();
                $("#gpay, #deposit").on("keydown keyup", sum);
            });

            function sum() {
                $("#total_deposit").val(Number($("#gpay").val()) + Number($("#deposit").val()));
            }

              $(document).ready(function() {

                diff();
                $("#total_counter, #total_deposit").on("keydown keyup", diff);
            });

            function diff() {
                $("#difference").val(Number($("#total_counter").val()) - Number($("#total_deposit").val()));
            }

                </script>
</head>

<body id="page-top">
    <div id="wrapper">