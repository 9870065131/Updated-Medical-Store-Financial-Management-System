<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/db.php');

?>

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Last 6 Logins to this profile 

    </h6>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>Browser</th>
                                <th>User OS</th>
                                <th>User Ip</th>
                                <th>Login Time</th>
                            </tr>

                        </thead>

                        <tbody>
                            <?php
               $query=mysqli_query($mysqli,"SELECT * FROM userlog ORDER BY id DESC LIMIT 6");
               $cnt=1;
                  while($row=mysqli_fetch_array($query))
                    {
          ?>
                                <tr>
                                    <td>
                                        <?php echo $cnt;?>
                                    </td>
                                    <td>
                                        <?php echo $row['userId'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['username'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['browser'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['user_os'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['userIp'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['loginTime'];?>
                                    </td>
                                </tr>
                                <?php $cnt=$cnt+1;
              } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <?php
include('includes/footer.php');
?>