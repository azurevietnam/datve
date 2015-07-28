<?php
if(!defined('SITE_NAME'))
{
	require_once '../../config.php';
}
$Outbound = "";
if(isset($_GET['outbound'])) {
    $Outbound = $_GET['outbound'];
}
$Inbound = "";
if(isset($_GET['inbound'])) {
    $Inbound = $_GET['inbound'];
}
$Adult = $_POST['Adult'];
$Child = $_POST['Child'];
$Infant = $_POST['Infant'];
if(isset($_SESSION['dulieu_tk']))
{
    $data=$_SESSION['dulieu_tk'];
}
if(count($data)>0) { ?>
    <div class="tieude_tt"><h3>CHI TIẾT GIÁ VÉ</h3></div>
    <?php
	foreach($data->value as $val) {
        $price_total_di = 0;
        $price_total_ve = 0;
        if (isset($_GET['outbound']) && $val->FlightNumber == $Outbound) { ?>
            <div class="giave_td_tt"><h2>GIÁ VÉ LƯỢT ĐI</h2></div>
            <div style="padding-top: 0px" class="sap_xep_tt noidung_tk_tt gia_td_tt">
                <ul>
                    <li><a>Giá cơ bản</a></li>
                    <?php
                    if($val->AirlineCode == "VietJetAir" || $val->AirlineCode == "JetStar") {
                        if($Adult) { ?>
                            <li>
                                <span><?php echo $Adult; ?> người lớn </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Child) { ?>
                            <li>
                                <span>1 trẻ em </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php } ?>
                    <?php }
                    if($val->AirlineCode == "VietnamAirlines") {
                        if($Adult) { ?>
                            <li>
                                <span><?php echo $Adult; ?> người lớn </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Child) { ?>
                            <li>
                                <span><?php echo $Child; ?> trẻ em </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Infant) { ?>
                            <li>
                                <span><?php echo $Infant; ?> sơ sinh </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }?>
                    <?php } ?>
                    <li><a>Thuế & lệ phí</a></li>
                    <?php
                    if($val->AirlineCode == "VietJetAir" || $val->AirlineCode == "JetStar") {
                        $price_total1 = 0;
                        $price_total2 = 0;
                        $price_total3 = 0;
                        if($Adult) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 190000*1;
                            $price_total1 = ($Price + $price_tax)*$Adult;
                            ?>
                            <li>
                                <span><?php echo $Adult; ?> người lớn </span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Child) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 140000*1;
                            $price_total2 = ($Price + $price_tax)*$Child;
                            ?>
                            <li>
                                <span>1 trẻ em </span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        $price_total_di = $price_total1 + $price_total2 + $price_total3;
                        ?>
                        <li><p style="text-align: right; font-size: 20px; font-weight: bold"><?=number_format($price_total_di, 0, ',','.')?> vnd</p></li>
                    <?php }
                    if($val->AirlineCode == "VietnamAirlines") {
                        $price_total1 = 0;
                        $price_total2 = 0;
                        $price_total3 = 0;
                        if($Adult) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 190000*1;
                            $price_total1 = ($Price + $price_tax)*$Adult;
                            ?>
                            <li>
                                <span><?php echo $Adult; ?> người lớn </span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Child) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 140000*1;
                            $price_total2 = ($Price + $price_tax)*$Child;
                            ?>
                            <li>
                                <span><?php echo $Child; ?> trẻ em </span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Infant) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 140000*1;
                            $price_total3 = ($Price + $price_tax)*$Child;
                            ?>
                            <li>
                                <span><?php echo $Infant; ?> sơ sinh</span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        $price_total_di = $price_total1 + $price_total2 + $price_total3;
                        ?>
                        <li><p style="text-align: right; font-size: 20px; font-weight: bold"><?=number_format($price_total_di, 0, ',','.')?> vnd</p></li>
                    <?php } ?>
                </ul>
            </div>
        <?php }
        if (isset($_GET['inbound']) && $val->FlightNumber == $Inbound) { ?>
            <div class="giave_td_tt"><h2>GIÁ VÉ LƯỢT VỀ</h2></div>
            <div style="padding-top: 0px;" class="sap_xep_tt noidung_tk_tt gia_td_tt">
                <ul>
                    <li><a>Giá cơ bản</a></li>
                    <?php
                    if($val->AirlineCode == "VietJetAir" || $val->AirlineCode == "JetStar") {
                        if($Adult) { ?>
                            <li>
                                <span><?php echo $Adult; ?> người lớn </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Child) { ?>
                            <li>
                                <span>1 trẻ em </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php } ?>
                    <?php }
                    if($val->AirlineCode == "VietnamAirlines") {
                        if($Adult) { ?>
                            <li>
                                <span><?php echo $Adult; ?> người lớn </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Child) { ?>
                            <li>
                                <span><?php echo $Child; ?> trẻ em </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Infant) { ?>
                            <li>
                                <span><?php echo $Infant; ?> sơ sinh </span>
                                <span style="float: right"><?=number_format($val->Price, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }?>
                    <?php } ?>
                    <li><a>Thuế & lệ phí</a></li>
                    <?php
                    if($val->AirlineCode == "VietJetAir" || $val->AirlineCode == "JetStar") {
                        $price_total1 = 0;
                        $price_total2 = 0;
                        $price_total3 = 0;
                        if($Adult) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 190000*1;
                            $price_total1 = ($Price + $price_tax)*$Adult;
                            ?>
                            <li>
                                <span><?php echo $Adult; ?> người lớn </span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Child) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 140000*1;
                            $price_total2 = ($Price + $price_tax)*$Child;
                            ?>
                            <li>
                                <span>1 trẻ em </span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        $price_total_di = $price_total1 + $price_total2 + $price_total3;
                        ?>
                        <li><p style="text-align: right; font-size: 20px; font-weight: bold"><?=number_format($price_total_di, 0, ',','.')?> vnđ</p></li>
                    <?php }
                    if($val->AirlineCode == "VietnamAirlines") {
                        $price_total1 = 0;
                        $price_total2 = 0;
                        $price_total3 = 0;
                        if($Adult) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 190000*1;
                            $price_total1 = ($Price + $price_tax)*$Adult;
                            ?>
                            <li>
                                <span><?php echo $Adult; ?> người lớn </span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Child) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 140000*1;
                            $price_total2 = ($Price + $price_tax)*$Child;
                            ?>
                            <li>
                                <span><?php echo $Child; ?> trẻ em </span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        if($Infant) {
                            $Price = $val->Price;
                            $price_tax = ($Price*10/100)*1 + 140000*1;
                            $price_total3 = ($Price + $price_tax)*$Child;
                            ?>
                            <li>
                                <span><?php echo $Infant; ?> sơ sinh</span>
                                <span style="float: right"><?=number_format($price_tax, 0, ',','.')?> vnd</span>
                                <div class="clearfix" ></div>
                            </li>
                        <?php }
                        $price_total_ve = $price_total1 + $price_total2 + $price_total3;
                        ?>
                        <li><p style="text-align: right; font-size: 20px; font-weight: bold"><?=number_format($price_total_ve, 0, ',','.')?> vnđ</p></li>
                    <?php } ?>
                </ul>
            </div>
        <?php }
        } ?>
        <p style="text-align: right; font-size: 14px; font-weight: bold;color: #0066a6; "> Tổng tiền</p>
        <p style="text-align: right; font-size: 25px; font-weight: bold;color: red; "><?=number_format(($price_total_di + $price_total_ve), 0, ',','.')?> vnđ</p>
        <div class="send">
            <label for="dat-ve2"><input id="dat-ve2" type="submit" value="Tiếp tục"></label>
            <div class="clearfix"></div>
        </div>
    <?php }
?>