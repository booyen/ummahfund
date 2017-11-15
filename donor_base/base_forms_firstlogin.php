<?php session_start();?>

<?php require '../inc/config_dashboard_donors.php'; ?>
<?php require '../inc/views/template_head_start.php'; ?>
<?php require '../inc/views/template_head_end.php'; ?>
<?php require '../inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                <small></small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>donor dashboard</li>
                <li><a class="link-effect" href="">Account settings</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->
 <?php   
echo $_SESSION['userName'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ummah";



if(isset($_POST['SubmitButton'])){ //check if form was submitted

$donor_name = $_POST['donor_name']; 
$userID = $_SESSION['userid'];
$address = $_POST['address']; 
$city = $_POST['city']; 
$postcode = $_POST['postcode']; 
$state = $_POST['state']; 
$phone = $_POST['phonenum'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO donor_info (userID, donor_name) VALUES ('$userID', '$donor_name');";



$sql .= "INSERT INTO address_log (userID, address, city, postcode,state ) VALUES ('$userID','$address', '$city','$postcode','$state');";
    
    
    
    
$sql .= "INSERT INTO phone_log (userID, phone_number) VALUES ('$userID', '$phone')";

if (mysqli_multi_query($conn, $sql)) {
    ?>

       <div class="alert alert-success text-center" role="alert">

        Your account has been updated successfully!
    </div>
<?php
  
    
  // echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


    

}  
?>




<!-- Page Content -->
<div class="content">
    <div class="col-lg-12">
        <!-- Simple Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
        <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
        <div class="js-wizard-simple block">
            <!-- Step Tabs -->
            <ul class="nav nav-tabs nav-tabs-alt nav-justified">
                <li class="active">
                    <a href="#simple-step1" data-toggle="tab" aria-expanded="true">Personal information</a>
                </li>
                <li class="">
                    <a href="#simple-step2" data-toggle="tab" aria-expanded="false">Address</a>
                </li>
                <li class="">
                    <a href="#simple-step3" data-toggle="tab" aria-expanded="false">Misc</a>
                </li>
            </ul>
            <!-- END Step Tabs -->

            <!-- Form -->
            <form class="form-horizontal" action="" method="post">
                <!-- Steps Content -->
                <div class="block-content tab-content">
                    <!-- Step 1 -->
                    <div class="tab-pane fade push-30-t push-50 active in" id="simple-step1">
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="form-material">
                                    <input class="form-control" required type="text" id="donor_name" name="donor_name" placeholder="Please enter your full name">
                                    <label for="simple-firstname">Full Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="form-material">
                                    <input class="form-control"  required type="text" id="simple-lastname" name="simple-lastname" placeholder="Please enter your username" disabled>
                                    <label for="simple-lastname">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="form-material">
                                    <input class="form-control"  required type="email" id="simple-email" name="simple-email" placeholder="Please enter your email" value="<?php print_r($_SESSION['email']); ?>">
                                    <label for="simple-email">Email</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Step 1 -->

                    <!-- Step 2 -->
                    <div class="tab-pane fade push-30-t push-50" id="simple-step2">
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="form-material">
                                    <input class="form-control" required type="text" id="simple-firstname" name="address" placeholder="Please enter your current address">
                                    <label for="simple-firstname">Address</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-sm-4 col-sm-offset-2">
                                <div class="form-material">
                                    <input class="form-control" required type="text" id="simple-firstname" name="city" placeholder="Please enter your city">
                                    <label for="simple-firstname">City</label>
                                </div>
                            </div>




                            <div class="col-sm-4">
                                <div class="form-material">
                                    <input class="form-control"  required type="text" id="simple-firstname" name="postcode" placeholder="Please enter your postcode">
                                    <label for="simple-firstname">Postcode</label>
                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="form-material ">
                                  <?php
                               // include ("connect.php");

                               // $db = new mysqli("localhost", "root", "", "ummah");
                                ?>

                                        <select required class="form-control" id="contact2-subject" name="state" size="1">
                                <option value = "">Please select</option>
                                            <option value = "kelantan">Kelantan</option>
                              //  <?php
                               // $stmt = $db->prepare("SELECT idgeo_location,country FROM mygeo_location");
                               // $stmt->execute();
                               // $stmt->bind_result($id,$name);
                              
                               // while ($stmt->fetch()){
                               //     echo "<option value='$id'>$name</option>";
                              //  }
                              //  $stmt->close();
                              //  ?>
                                </select>
                                        <label for="contact2-subject">Choose a state</label>
                                        <div class="help-block text-right">Choose a state where you born </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END Step 2 -->

                    <!-- Step 3 -->
                    <div class="tab-pane fade push-30-t push-50 " id="simple-step3">
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="form-material">
                                    <input class="form-control"  required type="number" id="simple-city" name="phonenum" placeholder="Enter your phone number">
                                    <label for="simple-city">Telephone Number</label>
                                    <div class="help-block text-right">EG: 60127899080(include 6)</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="form-material">
                                    
                                  
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                             
                            </div>
                        </div>
                    </div>
                    <!-- END Step 3 -->
                </div>
                <!-- END Steps Content -->

                <!-- Steps Navigation -->
                <div class="block-content block-content-mini block-content-full border-t">
                    <div class="row">
                        <div class="col-xs-6">
                            <p>If you already update, details will appears automatically </p>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button class="wizard-next btn btn-success disabled" type="button" style="display: none;">Next <i class="fa fa-arrow-circle-o-right"></i></button>
                            <button href="javascript:;"  class="wizard-finish btn btn-primary" name="SubmitButton" type="submit" style="display: inline-block;"><i class="fa fa-check-circle-o"></i> Submit</button>
                        </div>
                    </div>
                </div>
                <!-- END Steps Navigation -->
            </form>
            <!-- END Form -->
        </div>
        <!-- END Simple Wizard -->
    </div>
</div>
<!-- END Page Content -->
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);

</script>
<?php require '../inc/views/base_footer.php'; ?>
<?php require '../inc/views/template_footer_start.php'; ?>
<?php require '../inc/views/template_footer_end.php'; ?>
