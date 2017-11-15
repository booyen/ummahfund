<?php require '../inc/config_dashboard_org_prof.php'; ?>
<?php require '../inc/views/template_head_start.php'; ?>
<?php require '../inc/views/template_head_end_frontend.php'; ?>
<?php require '../inc/views/base_head.php'; ?>
<!-- Page Content -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ummah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>


<?php


    if (isset($_GET['Uasd4453279M896bhNJndasdsM8222najGyhkbnA0092jNMqweuiHqweqweashhdj']))
    {
        $orgnick = $_GET['Uasd4453279M896bhNJndasdsM8222najGyhkbnA0092jNMqweuiHqweqweashhdj'];
        $sql = "SELECT * FROM org_profile WHERE org_proid='$orgnick'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
             //   echo '<h1>'.$row["org_fullname"]."'s Profile</h1>";
             //   echo '<table>';
             //   echo '<tr><td>ID:</td><td>'.$row["userID"].'</td></tr>';
             //   echo '<tr><td>Avatar:</td><td><img src="'.$row["UserEmail"].'" width="100px" /></td></tr>';
             //   echo '<tr><td>Firstname:</td><td>'.$row["firstname"].'</td></tr>';
              //  echo '<tr><td>Lastname:</td><td>'.$row["lastname"].'</td></tr>';
              //  echo '<tr><td>Country:</td><td>'.$row["country"].'</td></tr>';
  
$avatarorg= $row['org_avatar'];
$_SESSION['orgID']=$row['org_proid'];
?>

<div class="content content-boxed">
    <!-- User Header -->
    <div class="block">
        <!-- Basic Info -->
        <div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo6@2x.jpg');">
            <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                <div class="push-30-t push animated fadeInDown">
                  <img class="img-avatar' "src="../userfiles/avatars/<?php echo $avatarorg; ?>">
                </div>
                <div class="push-30 animated fadeInUp">
                    <h2 class="h4 font-w600 text-white push-5"><?php  echo $row["org_fullname"] ?></h2>
                    <h3 class="h5 text-gray"><?php  echo $row["org_type"] ?></h3>
                </div>
            </div>
        </div>
        <!-- END Basic Info -->

        <!-- Stats -->
        <div class="block-content text-center">
            <div class="row items-push text-uppercase">
              
                <div class="col-xs-6 col-sm-4">
                    <div class="font-w700 text-gray-darker animated fadeIn">Campaign achieved</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">16</a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="font-w700 text-gray-darker animated fadeIn">Followers</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">2600</a>
                </div>
              <div class="col-xs-6 col-sm-4">
                    <div class="font-w700 text-gray-darker animated fadeIn">Verification status</div>
                                                           
                    <a class="h2 font-w300 text-success animated flipInX" href="javascript:void(0)" data-toggle="popover" title="" data-placement="left" data-content="UmmahFund Verification is process where Organization existence is verified through several process. Look more on FAQ">Verified</a>
                </div>
            </div>
        </div>
        <!-- END Stats -->
    </div>
    <!-- END User Header -->

    <!-- Main Content -->
    <div class="row">
        <div class="col-sm-6 col-sm-push-7 col-lg-4 col-lg-push-8">
            <!-- Follow -->
            <a class="block block-rounded block-link-hover3 text-center" data-toggle="modal" data-target="#modal-normal">
                                <div class="block-content block-content-full bg-success">
                                    <div class="h1 font-w700 text-white">Donate Now</div>
                                    <div class="h5 text-white-op  push-5-t">to this organization</div>
                                </div>
                                <div class="block-content block-content-full block-content-mini">
                                 
                                    <span >Click to choose your donation method</span>
                                </div>
                            </a>
         
            <div class="block">
               <a class="block block-link-hover2 text-center" >
                   
                                    <div class="block-content block-content-full bg-primary">
                                        <div class="font-w600 text-white-op push-15">This organization accept</div>
                                        <i class="fa fa-bank fa-2x text-white"></i> 
                                        <i class="fa fa-cc-paypal fa-2x text-white"></i>
                                        
                                        <i class="fa fa-credit-card fa-2x text-white"></i>
                                    </div>
                                </a>
            </div>
            <!-- END Follow -->

            <!-- About -->
            <div class="block">
                <div class="block-content">
                    <p><?php  echo $row["org_fullname"] ?></p>
                    <p><?php  echo $row["org_description"] ?></p>
                </div>
            </div>
            <!-- END About -->

           
        </div>
        <div class="col-sm-7 col-sm-pull-5 col-lg-8 col-lg-pull-4">
            <!-- Timeline -->
            <div class="block block-opt-refresh-icon6">
                <div class="block-header">
                    <ul class="block-options">
                      
                    </ul>
                    <h3 class="block-title"><i class="si si-list"></i> Organization details</h3>
                </div>
                <div class="block-content">
                  

                  <div class="table-responsive push-50">
                                <table class="table table-bordered table-hover">
                                   
                                    <tbody>
                                        <tr>
                                            
                                            <td>
                                                <p class="font-w600 push-10">Organization Name</p>
                                                <div class="text-muted"><?php  echo $row["org_fullname"] ?></div>
                                            </td>
                                           
                                            <td class="text-left">
                                            <p class="font-w600 push-10">Location</p>
                                                <div class="text-muted"><?php  echo $row["org_city"] ?> <?php  echo $row["org_state"] ?></div>
                                            </td>
                                         
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <p class="font-w600 push-10">Address</p>
                                                <div class="text-muted"><?php  echo $row["org_address"] ?></div>
                                            </td>
                                           
                                            <td class="text-left">
                                            <p class="font-w600 push-10">Contact Person</p>
                                                <div class="text-muted"><?php  echo $row["org_contacperson"] ?></div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                           
                                            <td class="text-left">
                                                <p class="font-w600 push-10">Phone Number </p>
                                                <div class="text-muted">+<?php  echo $row["org_tel"] ?></div>
                                            </td>
                                          
                                            <td class="text-left">
                                            <p class="font-w600 push-10">Type</p>
                                                <div class="text-muted"><?php  echo $row["org_type"] ?></div>
                                            </td>
                                           
                                        </tr>
                                         <tr>
                                           
                                            <td class="text-left">
                                                <p class="font-w600 push-10">Established year </p>
                                                <div class="text-muted"><?php  echo $row["org_year"] ?></div>
                                            </td>
                                          
                                            <td class="text-left">
                                            <p class="font-w600 push-10">Registration Number</p>
                                                <div class="text-muted"><?php  //sila select dari database verify, jika null ckap xverify lgi.
                                              //  $query = mysql_query("SELECT * FROM tablex");
//
                                              //  if ($result = mysql_fetch_array($query)){
//
                                                   // if ($result['column'] == NULL) { print "<input type='checkbox' />"; }
                                                   // else { print "<input type='checkbox' checked />"; }
                                             //   }
                                                ?>
                                                
                                                </div>
                                            </td>
                                           
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>


             

     
                </div>
            </div>
            <!-- END Timeline -->
                 <!-- Timeline -->
            <div class="block block-opt-refresh-icon6">
                <div class="block-header">
                    <ul class="block-options">
                      
                    </ul>
                    <h3 class="block-title"><i class="si si-home"></i> Fundrasing & campaign</h3>
                </div>
                <div class="block-content">
                  
                    <div class="row">
                    <div class="">
                            <!-- Article -->
                            <div class="block col-lg-4">
                                <div class="block-content block-content-full">
                               
                                </div>
                                <img class="img-responsive" src="../assets/img/photos/photo27.jpg" alt="">
                                <div class="block-content block-content-full">
                                    <h2 class="h4 push-10">Lost in the mountains</h2>
                                    <p class="text-gray-dark">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum..</p>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">Read More</a>
                                </div>
                                
                                
                            </div>
                            <!-- END Article -->
                            
                        </div>
                         <div class="">
                            <!-- Article -->
                            <div class="block col-lg-4">
                                <div class="block-content block-content-full">
                                    
                                </div>
                                <img class="img-responsive" src="../assets/img/photos/photo27.jpg" alt="">
                                <div class="block-content block-content-full">
                                    <h2 class="h4 push-10">Lost in the mountains</h2>
                                    <p class="text-gray-dark">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum..</p>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">Read More</a>
                                </div>
                                
                                
                            </div>
                            <!-- END Article -->
                             <div class="">
                            <!-- Article -->
                            <div class="block col-lg-4">
                                <div class="block-content block-content-full">
                                    
                                </div>
                                <img class="img-responsive" src="../assets/img/photos/photo27.jpg" alt="">
                                <div class="block-content block-content-full">
                                    <h2 class="h4 push-10">Lost in the mountains</h2>
                                    <p class="text-gray-dark">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum..</p>
                                    <a class="btn btn-sm btn-default" href="javascript:void(0)">Read More</a>
                                </div>
                                
                                
                            </div>
                            <!-- END Article -->
                        </div>
                    </div>
                  


             

     
                </div>
            </div>
            <!-- END Timeline -->
        </div>
    </div>
    
    <div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Donation Method & gateway</h3>
                        </div>
                        <div class="block-content">
                            <div class="text-center">
                            Please choose you method of donation <br>
                          
                            </div>
                            <!-- senangpay-->
                           <a class="block block-rounded block-link-hover3" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img" style="height:60px;width:120px;"src="../assets/img/photos/senanypay.png" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">SenangPay</div>
                                        <div class="text-muted">Donate Using Online Bank Transfer,Credit and debit card
                                           
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- paypal-->
                            <a class="block block-rounded block-link-hover3" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img"  style="height:60px;width:120px;"src="../assets/img/photos/PayPal.png" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Paypal</div>
                                        <div class="text-muted">Donate using your Paypal Account</div>
                                    </div>
                                </div>
                            </a>
                            <!-- bank transfer modal-->
                            <a class="block block-rounded block-link-hover3" data-toggle="modal" data-target="#modal-manualbank" data-dismiss="modal">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img" style="height:60px;width:120px;" src="../assets/img/photos/bank-logo.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Manual Bank transfer</div>
                                        <div class="text-muted">Account number Information</div>
                                    </div>
                                </div>
                            </a>
                            
                            
                             <div class="text-center">
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- END Main Content -->
    <?php
              }
          //  echo '</table>';
        }
        else {
           echo '
            <div class="text-center" style="padding-top:100px;">
                            No such Organization is existed. Search again <a href="#">here</a> <br>
                          
                            </div>'
           
           ;
        }
    }
    else {

        
            
       
    }
    
   // include_once("includes/menu.php");
?>
            <div class="modal" id="modal-manualbank"  tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Manual Bank Transfer</h3>
                        </div>
                        <div class="block-content">
                            <div class="text-center">
                            Organization Bank Details <br>
                          
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            
                                            <th>Bank Name</th>
                                            <th style="width: 30%;">Bank Acc No.</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td class="font-w600">Sara Holland</td>
                                            <td>client1@example.com</td>
                                        
                                        </tr>
                                        <tr>
                                            
                                            <td class="font-w600">Ann Parker</td>
                                            <td>client2@example.com</td>
                                           
                                        </tr>
                                        <tr>
                                           
                                            <td class="font-w600">Amber Walker</td>
                                            <td>client3@example.com</td>
                                        
                                        </tr>
                                        <tr>
                                           
                                            <td class="font-w600">Evelyn Willis</td>
                                            <td>client4@example.com</td>
                                         
                                        </tr>
                                        <tr>
                                           
                                            <td class="font-w600">Ann Parker</td>
                                            <td>client5@example.com</td>
                                        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- END Page Content -->

<?php require '../inc/views/frontend_footer.php'; ?>
<?php require '../inc/views/template_footer_start.php'; ?>
<?php require '../inc/views/template_footer_end.php'; ?>