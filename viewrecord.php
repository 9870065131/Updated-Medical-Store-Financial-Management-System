<?php
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/db.php');
error_reporting(0);

$from=date('Y-m-d',strtotime($_POST['from']));
$to=date('Y-m-d',strtotime($_POST['to']));
?>
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View Record
    </h6>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <form method="POST">
                        <table class="table table-bordered" id="dataTable" cellspacing="0">
                            <tbody>
                                <tr class="item-row">
                                    <td colspan="2">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4">
                                                <input id="datepicker_from" class="form-control" type="text" name="from" placeholder="From">
                                                <script>
                                                    var datepicker = new ej.calendars.DatePicker({
                                                        width: "255px"
                                                    });
                                                    datepicker.appendTo('#datepicker_from');
                                                </script>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4">
                                                <input id="datepicker_to" class="form-control" type="text" name="to" placeholder="To">
                                                <script>
                                                    var datepicker = new ej.calendars.DatePicker({
                                                        width: "255px"
                                                    });
                                                    datepicker.appendTo('#datepicker_to');
                                                </script>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </td>
                                    <td style='width: 50px'>
                                        <div>
                                            <center>
                                                <span class="glyphicon glyphicon-print"></span>
                                                <input type="submit" name="searchdata" class="btn btn-primary btn-md" value="Search" />
                                            </center>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </form>
                </div>

                <div class="row">

                    <div class="col-md-12 ">
                        <form method="POST">
                            <div class="col-xs-6 col-xs-offset-3">
                                <table id="example" class="table table-bordered table-*-responsive  " cellspacing="0">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>Date</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>Total Amount</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>Google Pay</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>Deposit</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>Total Counter</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>Total Deposit</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>Difference</h6></center>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                                if (isset($_POST['searchdata'])){

                                                    $oquery=$mysqli->query("SELECT * FROM record WHERE cdate between '$from' and '$to'");

                                                    while($orow = $oquery->fetch_array()){

                                                        ?>
                                            <tr>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['cdate']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['total_amount']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['gpay']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['deposit']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['total_counter']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['total_deposit']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['difference']?>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php 
                                                }
                                            }
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <center>
                                                    <h6><b>Total</b></h6></center>
                                            </th>
                                            <?php

                                                         $aquery=$mysqli->query("SELECT sum(total_amount),sum(gpay),sum(deposit) ,sum(total_counter),sum(total_deposit),sum(difference) FROM record  WHERE cdate BETWEEN '$from' AND '$to'");

                                                        while($rows = $aquery->fetch_array()) {

                                                    ?>

                                                <th>
                                                    <center>
                                                        <h6><b><?php echo $rows['sum(total_amount)']?></b></h6></center>
                                                </th>
                                                <th>
                                                    <center>
                                                        <h6><b><?php echo $rows['sum(gpay)']?></b></h6></center>
                                                </th>
                                                <th>
                                                    <center>
                                                        <h6><b><?php echo $rows['sum(deposit)']?></b></h6></center>
                                                </th>

                                                <th>
                                                    <h6><b><center>

                                                    <?php echo $rows['sum(total_counter)']?>
                                                    </center>
                                                   </b></h6></th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(total_deposit)']?></center></b></h6></th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(difference)']?></center></b></h6></th>
                                        </tr>
                                        <?php 
                                                }

                                        ?>
                                    </tfoot>
                                </table>

                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
        <?php
include('includes/footer.php');
?>