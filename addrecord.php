<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/db.php');

?>
    <?php

                                    if(isset($_POST['save_record'])) {

                                            date_default_timezone_set('Asia/Kolkata');
                                            $currentdate = date('Y-m-d');

                                            ###############Prefix Data###############
                                            $C2000 = $_POST['q1'];
                                            $C500 = $_POST['q2'];
                                            $C200 = $_POST['q3'];
                                            $C100 = $_POST['q4'];
                                            $C50 = $_POST['q5'];
                                            $C20 = $_POST['q6'];
                                            $C10 = $_POST['q7'];
                                            $C5 = $_POST['q8'];
                                            $C2 = $_POST['q9'];
                                            $C1 = $_POST['q10'];

                                           $result = mysqli_query($mysqli, "INSERT INTO cash(cdate,C2000,   C500,C200,C100,C50,C20,C10,C5,C2,C1) VALUES('$currentdate','$C2000','$C500','$C200','$C100','$C50','$C20','$C10','$C5','$C2','$C1')");

                                            #################Post Data###############

                                            $total_amount = $_POST['total_amount'];
                                            $gpay = $_POST['gpay'];
                                            $deposit = $_POST['deposit'];
                                            $total_counter= $_POST['total_counter'];
                                            $total_deposit = $_POST['total_deposit'];
                                            $difference = $_POST['difference'];

                                           $result = mysqli_query($mysqli, "INSERT INTO record(cdate,total_amount,gpay,deposit,total_counter,total_deposit,difference) VALUES('$currentdate','$total_amount','$gpay','$deposit','$total_counter','$total_deposit','$difference')");

                                            if($result == true){
                                                 echo '<div class="alert alert-success"><strong>Record</strong> has been Saved.</div>';
                                            }else{
                                                echo '<div class="alert alert-danger">Record not Saved</div>';
                                            }
                                    }
                        ?>

        <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Record
    </h6>

                </div>

                <div class="card-body">
                    <?php $message = ''; ?>
                        <?php echo $message; ?>

                            <div class="table-responsive">
                                <form method="POST" id="first_form" name="form1">
                                    <table class="table table-bordered table-*-responsive table-sm" id="dataTable" cellspacing="0">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th scope="col" style="color:white;">
                                                    <center>
                                                        <h6>Currency</h6></center>
                                                </th>
                                                <th scope="col" style="color:white;">
                                                    <center>
                                                        <h6>Quantity</h6></center>
                                                </th>
                                                <th scope="col" style="color:white;">
                                                    <center>
                                                        <h6>Total</h6></center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>2000</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q1" name="q1" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p1" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>500</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q2" name="q2" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p2" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>200</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q3" name="q3" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p3" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>100</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q4" name="q4" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p4" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>50</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q5" name="q5" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p5" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>20</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q6" name="q6" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p6" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>10</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q7" name="q7" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p7" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>5</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q8" name="q8" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p8" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>2</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q9" name="q9" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p9" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr class="item-row ">
                                                <td style='width: 70px'>
                                                    <center><b>1</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <input type="number" id="q10" name="q10" class="form-control">
                                                </td>
                                                <td class="total_price" style='width: 70px'>
                                                    <center>
                                                        <input id="p10" class="form-control" readonly value="0.00" />
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="total-line" align="right">
                                                    <b>Total Amount</b>
                                                </td>
                                                <td class="total-value" style='width: 70px'>
                                                    <input type="number" id="total_amount" class="form-control" name="total_amount" readonly value="0" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="color:white; background-color: #007bff;">
                                                    <center><span><b><h6>Calculation</h6></b></span></center>
                                                </td>
                                            </tr>
                                            <tr class="item-row">
                                                <td colspan="2" class="total-line">
                                                    <center><b>Google Pay</b></center>
                                                </td>
                                                <td style='width: 70px'>

                                                    <input type="number" id="gpay" name="gpay" class="form-control">
                                                </td>

                                            </tr>
                                            <tr class="item-row">
                                                <td colspan="2" class="total-line">
                                                    <center><b>Deposit</b></center>
                                                </td>
                                                <td style='width: 70px'>

                                                    <input type="number" id="deposit" name="deposit" class="form-control">
                                                </td>

                                            </tr>
                                            <tr class="item-row">
                                                <td colspan="2" class="total-line">
                                                    <center><b>Total Counter</b></center>
                                                </td>
                                                <td style='width: 70px'>

                                                    <input type="number" id="total_counter" name="total_counter" class="form-control">
                                                </td>

                                            </tr>
                                            <tr class="item-row">
                                                <td colspan="2" class="total-line">
                                                    <center><b>Total Deposit</b></center>
                                                </td>
                                                <td style='width: 70px'>

                                                    <input type="number" id="total_deposit" name="total_deposit" class="form-control">
                                                </td>
                                            </tr>

                                            <tr class="item-row">
                                                <td colspan="2" class="total-line">
                                                    <center><b>Total Difference</b></center>
                                                </td>
                                                <td style='width: 70px'>
                                                    <div>
                                                        <center>
                                                            <input type="number" id="difference" class="form-control" name="difference" readonly value="0.00" />
                                                        </center>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="item-row">
                                                <td colspan="3" style='width: 70px'>
                                                    <center>
                                                        <input type="submit" name="save_record" id="save_record" class="btn btn-success btn-md" value="Save Record" />
                                                    </center>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>

                            </div>
                </div>
            </div>

        </div>
        <?php
include('includes/footer.php');
?>