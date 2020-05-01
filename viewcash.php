<?php
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/db.php');
error_reporting(0);

$select_date=date('Y-m-d',strtotime($_POST['select_date']));
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
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <input id="datepicker_from" class="form-control" type="text" name="select_date" placeholder="SELECT DATE">
                                                <script>
                                                    var datepicker = new ej.calendars.DatePicker({
                                                        width: "255px"
                                                    });
                                                    datepicker.appendTo('#datepicker_from');
                                                </script>
                                            </div>
                                            <div class="col-md-4"></div>

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
                                <table id="example" class="table table-bordered table-*-responsive" cellspacing="0">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>Date</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>2000</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>500</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>200</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>100</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>50</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>20</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>10</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>5</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>2</h6></center>
                                            </th>
                                            <th scope="col" style="color:white;">
                                                <center>
                                                    <h6>1</h6></center>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                                if (isset($_POST['searchdata'])){

                                                	$select_date=date('Y-m-d',strtotime($_POST['select_date']));

                                                    $oquery=$mysqli->query("SELECT * FROM cash WHERE cdate = '$select_date'");

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
                                                        <?php echo $orow['C2000']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C500']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C200']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C100']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C50']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C20']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C10']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C5']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C2']?>
                                                    </center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php echo $orow['C1']?>
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

                                                         $aquery=$mysqli->query("SELECT sum(C2000) ,
                                                                                        sum(C500),
                                                                                        sum(C200),
                                                                                        sum(C100),
                                                                                        sum(C50),
                                                                                        sum(C20),
                                                                                        sum(C10),
                                                                                        sum(C5),
                                                                                        sum(C2),
                                                                                        sum(C1)                                    
                                                                                    FROM cash  WHERE cdate = '$select_date'");

                                                        while($rows = $aquery->fetch_array()) {

                                                    ?>

                                                <th>
                                                    <center>
                                                        <h6><b><?php echo $rows['sum(C2000)']?></b></h6></center>
                                                </th>

                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C500)']?></center></b></h6>
                                                </th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C200)']?></center></b></h6>
                                                </th>

                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C100)']?></center></b></h6>
                                                </th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C50)']?></center></b></h6>
                                                </th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C20)']?></center></b></h6>
                                                </th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C10)']?></center></b></h6>
                                                </th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C5)']?></center></b></h6>
                                                </th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C2)']?></center></b></h6>
                                                </th>
                                                <th>
                                                    <h6><b><center><?php echo $rows['sum(C1)']?></center></b></h6>
                                                </th>
                                        </tr>
                                        <?php 
                                                }

                                        ?>
                                    </tfoot>
                                </table>

                        </form>
                        </div>
                    </div>
                </div>

            </div>
            <?php
include('includes/footer.php');
?>