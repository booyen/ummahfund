<?PHP
require_once"../../include/init.php";

$cmd = new clsPayPalDonationHandler();
$cmd->setMethod('success')->Execute();
?>