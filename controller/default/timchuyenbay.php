<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:40 PM
 */
if(!defined('SITE_NAME'))
{
    require_once '../../config.php';
}

require_once DIR.'/controller/default/public.php';
require_once DIR.'/common/redict.php';
$data['config']=config_getByTop(1,'','');
if(isset($_SESSION['ran']))
{
    $ran2=$_SESSION['ran'];
    session_unset($_SESSION['s'.$ran2]);
}

if(isset($_POST['bntTimKiem'])){

    if(isset( $_POST['RoundTrip']) && $_POST['RoundTrip'] == 'true')
        $RoundTrip = "true";
    else
        $RoundTrip = "false";

    $FromPlace = $_POST['FromPlace'];
    $TFromPlace = $_POST['TFromPlace'];
    $ToPlace = $_POST['ToPlace'];
    $TToPlace = $_POST['TToPlace'];
	$DepartDate = date("Y-m-d", strtotime(str_replace("/","-", $_POST['DepartDate'])));
	$ReturnDate = date("Y-m-d", strtotime(str_replace("/","-", $_POST['ReturnDate'])));
    $Adult = $_POST['adult'];
    $Child = $_POST['child'];
    $Infant = $_POST['infant'];

    $dataarray = array(
        "RoundTrip" => $RoundTrip,
        "FromPlace" => $FromPlace,
        "ToPlace" => $ToPlace,
        "TFromPlace" => $TFromPlace,
        "TToPlace" => $TToPlace,
        "DepartDate" => $DepartDate.'T00:00:00',
        "ReturnDate" => $ReturnDate.'T00:00:00',
        "CurrencyType" => "VND",
        "Adult" => $Adult,
        "Child" => $Child,
        "Infant" => $Infant,
        "Sources" => "VietJetAir,JetStar,Abacus,VietnamAirlines"
    );
    $ran=rand(1000000000,9999999999);
    $_SESSION['ran']=$ran;
    $_SESSION['s'.$ran] = $dataarray;
    if($_POST['noi-dia'] == 'true') {
        $link=SITE_NAME.'/ket-qua-tim-kiem-noi-dia/'.$ran;
    }
    else {
        $link=SITE_NAME.'/ket-qua-tim-kiem-quoc-te/'.$ran;
    }
//    print_r($_SESSION['s'.$ran]);
    //$link='search.php?Source=VietJetAir';
    echo "<script>window.location.href='$link'</script>";
}
else
{
    redict(SITE_NAME);
}


