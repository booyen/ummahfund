<?php require '../inc/config_dashboard_org.php'; ?>
<?php require '../inc/views/template_head_start.php'; ?>
<?php require '../inc/views/template_head_end.php'; ?>
<?php require '../inc/views/base_head.php'; ?>

<?php
   // session_start();
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "ummah";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);
?>
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>dashboard</li>
                <li><a class="link-effect" href="">gateway Settings</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->
<?php

 //echo $_SESSION['userName'];
        ini_set("display_errors",1);
        if(isset($_POST['SubmitButton'])){
        
        $orgnick= $_SESSION['userName'];
        $userID = $_SESSION['userid'];
        $org_ID = $_SESSION['orgID']; 
        $senangpay_gate = $_POST['senang_gate']; 
        $paypal_gate = $_POST['paypal_gate'];
            
        $bankname1 = $_POST['bankname1'];
        $bankacc1 = $_POST['bankacc1'];
            
            
        $bankname2 = $_POST['bankname2'];
        $bankacc2 = $_POST['bankacc2'];
            
            
        $receipent1 = $_POST['receipent1'];
        $receipent2 = $_POST['receipent2'];
         
      
    
    
        $sql3=" INSERT INTO payment_gateway (org_proid,senang_gate,paypal_gate,bank_1,account_1,receipent_1,bank_2,account_2,receipent_2) 
        
        VALUES ('$org_ID','$senangpay_gate','$paypal_gate','$bankname1','$bankacc1','$receipent1','$bankname2','$bankacc2','$receipent2')";
       
        $result = mysqli_query($database,"SELECT * FROM org_profile WHERE org_proID = '$org_ID'");
        
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
           // header("location:../update-bio-after-registration.php?user_username=$org_username&current_user=$org_username");
        }
        else{
            mysqli_query($database,$sql)or die(mysqli_error($database));
           // header("location:../update-bio-after-registration.php?user_username=$org_username&current_user=$org_username");
        } 
    }    
?>
<!-- Page Content -->
<div class="content">

   <div class="row">
        <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Donation Gateway Settings</h3>
                                </div>
                                <div class="block-content block-content-narrow">
                                    <form action="" method="post" >
                                        <div class="form-group">
                                            <label for="example-nf-email">Senangpay Donation Gateway</label>
                                            <input class="form-control" type="text" id="example-nf-email" name="senang_gate" placeholder="Enter your SenangPay Universal Form link Here">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-nf-password">Paypal Donation Gateway (PayPal.me)</label>
                                            <input class="form-control" type="text" id="example-nf-password" name="paypal_gate" placeholder="Enter your PayPal.me Link here">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-nf-password">Bank Account #1</label>
                                            <input  style="margin-top:8px" class="form-control" type="text" id="example-nf-password" name="bankname1" placeholder="Enter  Bank Name">
                                            
                                            <input  style="margin-top:8px"  class="form-control" type="text" id="example-nf-password" name="bankacc1" placeholder="Enter your organization bank account number">
                                            
                                             <input style="margin-top:8px"  class="form-control" type="text" id="example-nf-password" name="receipent1" placeholder="Enter your Receipent/organization name as Bank Stated">
                                        </div>
                                         <div class="form-group">
                                            <label for="example-nf-password">Bank Account #2</label>
                                            <input style="margin-top:8px"  class="form-control" type="text" id="example-nf-password" name="bankname2" placeholder="Enter  Bank Name">
                                             
                                            <input style="margin-top:8px"  class="form-control" type="text" id="example-nf-password" name="bankacc2" placeholder="Enter your organization bank account number">
                                             
                                            <input style="margin-top:8px"  class="form-control" type="text" id="example-nf-password" name="receipent2" placeholder="Enter your Receipent/organization name as Bank Stated">

                                        </div>
                                      
                                        <div class="form-group text-right">
                                            <button class="btn btn-sm btn-primary" type="submit" name="SubmitButton">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
</div>
<!-- END Page Content -->

<?php require '../inc/views/base_footer.php'; ?>
<?php require '../inc/views/template_footer_start.php'; ?>
<?php require '../inc/views/template_footer_end.php'; ?>