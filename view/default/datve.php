<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
require_once DIR . '/common/paging.php';
function show_datve($data = array())
{
    $asign = array();
    $asign['tieude'] = "";
    if ($_SESSION['kiemtra'] == 1) {
        $asign['sohk_td']="Số hành khách";
        $asign['ngayxuatphat_td']="Ngày xuất phát";
        $asign['loaive_td']="Loại vé";
        $asign['hanhtrinh_td']="Hành trình chuyến đi";
        $asign['venoidia_td']="Vé nội địa";
        $asign['vequocte_td']="Vé quốc tế";
        $asign['datvemaybay_td']="ĐẶT VÉ MÁY BAY";
        $asign['vekhuhoi_td']="Vé khứ hồi";
        $asign['vemotchieu_td']="Vé một chiều";
        $asign['diemdi_td']="Điểm đi";
        $asign['diemden_td']="Điểm đến";
        $asign['ngaydi_td']="Ngày đi";
        $asign['ngayve_td']="Ngày về";
        $asign['nguoilon_td']="người lớn";
        $asign['treem_td']="trẻ em";
        $asign['sosinh_td']="sơ sinh";
        $asign['timchuyenbay_td']="Tìm chuyến bay";
        $asign['tieude'] = '<a href="' . SITE_NAME . '"><i class="fa fa-home"></i> Trang chủ</a> <i class="fa fa-angle-right"></i> <span>Tìm kiếm</span>';
        $asign['name_tt6'] = $data['name_tt6'][0]->Name;
    } else {

        $asign['sohk_td']="Number of passengers";
        $asign['ngayxuatphat_td']="On the starting";
        $asign['loaive_td']="Ticket type";
        $asign['hanhtrinh_td']="Trip Itinerary";
        $asign['vequocte_td']="International ticket";
        $asign['venoidia_td']="Domestic ticket";
        $asign['datvemaybay_td']="TICKET BOOKING";
        $asign['vekhuhoi_td']="Return Ticket";
        $asign['vemotchieu_td']="One-way ticket";
        $asign['diemdi_td']="Points go";
        $asign['diemden_td']="Destination";
        $asign['ngaydi_td']="Date out";
        $asign['ngayve_td']="Date of";
        $asign['nguoilon_td']="adults";
        $asign['treem_td']="children";
        $asign['sosinh_td']="newborn";
        $asign['timchuyenbay_td']="Find flight";
        $asign['tieude'] = '<a href="' . SITE_NAME . '"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i> <span>Search</span>';
        $asign['name_tt6'] = $data['name_tt6'][0]->Name_en;
    }
    $asign['nganhang'] = "";
    if (count($data['nganhang']) > 0) {
        $asign['nganhang'] = print_item('nganhang', $data['nganhang']);
    }

    $asign['vanphong'] = "";
    if (count($data['vanphong']) > 0) {
        $asign['vanphong'] = print_item('vanphong', $data['vanphong']);
    }

    $asign['PAGING'] = "";
//    $three_day = time() + 6*24*60*60;
    $three_day = time();
    $asign['three_day'] = date("d/m/Y",$three_day);
    //$six_day = time() + 9*24*60*60;
    $six_day = time();
    $asign['six_day'] = date("d/m/Y",$six_day);

    $asign['hientai'] = date("d-m-Y");

    $sessionid = isset($_SESSION['giatri_ss'])?$_SESSION['giatri_ss']:"";
    if(isset($_SESSION['s'.$sessionid])) {
        $dataarray = $_SESSION['s'.$sessionid];
    }
    else {
        $dataarray="";
    }

    $data = isset($_SESSION['dulieu_tk'])?$_SESSION['dulieu_tk']:null;
//    //var_dump($data);
//    $asign['ma_chieu_di'] = $_GET['outbound'];
//    $asign['ma_chieu_ve'] = $_GET['inbound'];
//
//    $sessionid = $_GET['sessionid'];
//    if(isset($_SESSION['s'.$sessionid])) {
//        $dataarray = $_SESSION['s'.$sessionid];
//    }
//    else {
//        $dataarray="";
//    }
//
//    $data['RoundTrip']=$RoundTrip= $dataarray['RoundTrip'];
//    $data['FromPlace']=$FromPlace = $dataarray['FromPlace'];
//    $data['TFromPlace']=$TFromPlace = $dataarray['TFromPlace'];
//    $data['ToPlace']=$ToPlace = $dataarray['ToPlace'];
//    $data['TToPlace']=$TToPlace = $dataarray['TToPlace'];
//    $data['DepartDate']=$DepartDate = $dataarray['DepartDate'];
//    $data['ReturnDate']=$ReturnDate = $dataarray['ReturnDate'];
//    $data['Adult']=$Adult = $dataarray['Adult'];
//    $data['Child']=$Child = $dataarray['Child'];
//    $data['Infant']=$Infant = $dataarray['Infant'];
//    $data_post = '{
//	"RoundTrip": '.$RoundTrip.',
//	"FromPlace": "'.$FromPlace.'",
//	"TFromPlace": "'.$TFromPlace.'",
//	"ToPlace": "'.$ToPlace.'",
//	"TToPlace": "'.$TToPlace.'",
//	"DepartDate": "'.$DepartDate.'",
//	"ReturnDate": "'.$ReturnDate.'",
//	"CurrencyType": "VND",
//	"Adult": '.$Adult.',
//	"Child": '.$Child.',
//	"Infant": '.$Infant.',
//	"Sources": "Abacus"
//	}';
//    $asign['data_post'] = $data_post;

    $asign['noidung_datve'] = '';
    $asign['noidung_datve']= '<table>
        <tr>
            <td class="title_datve">Chuyến bay:</td>
            <td class="giatri_datve">'.($dataarray["RoundTrip"]=="true"?"Khứ hồi":"Một chiều").'</td>';
        $asign['noidung_datve'] .='</tr>
        <tr>
            <td class="title_datve">Số lượng hành khách:</td>
            <td class="giatri_datve">'.($dataarray["Adult"] + $dataarray["Child"] + $dataarray["Infant"]).'</td>
        </tr>
        <tr>
            <td class="title_datve">Ngày xuất phát:</td>
            <td class="giatri_datve">'.date("d/m/Y", strtotime($dataarray["DepartDate"])).'</td>
        </tr>';
        if($dataarray["RoundTrip"] == "true") {
        $asign['noidung_datve'] .= '<tr>
            <td class="title_datve">Ngày về:</td>
            <td class="giatri_datve">'.date("d/m/Y", strtotime($dataarray["ReturnDate"])).'</td>
        </tr>';
        }
    $asign["noidung_datve"] .= '</table>';
    $asign['chieu_di']='';
    $asign['chieu_ve']='';
    foreach($data->value as $val) {
        if(isset($_GET['inbound']) && str_replace(" ", "", $val->FlightNumber) == $_GET['inbound']) {
            $departTime = strtotime($val->DepartTime);
            $landingTime = strtotime($val->LandingTime);
            $asign['chieu_di'] .='
                <div class="tieude_datve_ft">
                    <div class="chieu-bay"><span class="chieudi_it" >Chiều đi: </span><span class="chieu-di_datve_tt">'.$val->FromPlace.'</span><span class="chieu-ve_datve_tt">'.$val->ToPlace.'</span></div>
				</div>
				<div class="noidung_tt_datve">
					<div class="img_hang_datve_tt">
						<div >
							<img src="'.SITE_NAME.'/view/default/theme/images/'.$val->AirlineCode.'.png">
						</div>
					</div>
					<div class="thong_tin_chuyen_bay_tt">
						<p class="chuyenbay_datve_tt">CHUYẾN BAY</p>
						<p class="chuyenbay_datve_tt2">'.$val->Airline.'</p>
						<p class="chuyenbay_datve_tt3">'.$val->FlightNumber.'</p>
						<p>Loại vé: <span class="chuyenbay_datve_tt2">'.$val->TicketType.'</span></p>
					</div>
                        <div class="thong_tin_chuyen_bay_tt">
                        <p class="chuyenbay_datve_tt">Khởi hành</p>
                        <p >Từ <span class="chuyenbay_datve_tt3">'.$val->FromPlace.'</span>, Việt Nam</p>
                        <p>Sân bay: <span class="chuyenbay_datve_tt2">'.($val->FromPlace?$val->FromPlace:$val->FromAirport).' ('.$dataarray["FromPlace"].')</span></p>
                        <p>Thời gian: <span class="chuyenbay_datve_tt3">'.date("H:i", $departTime).'</span>, '.date("d/m/Y", $departTime).'</p>
                    </div>
                    <div class="thong_tin_chuyen_bay_tt">
                        <p class="chuyenbay_datve_tt">Điểm đến</p>
                        <p >Từ <span class="chuyenbay_datve_tt3">'.$val->ToPlace.'</span>, Việt Nam</p>
                        <p>Sân bay: <span class="chuyenbay_datve_tt2">'.($val->ToPlace?$val->ToPlace:$val->ToAirport).' ('.$dataarray["ToPlace"].')</span></p>
                        <p>Thời gian: <span class="chuyenbay_datve_tt3">'.date("H:i", $landingTime).'</span>, '.date("d/m/Y", $landingTime).'</p>
                    </div>
				</div>';
        }
        if(isset($_GET['outbound']) && str_replace(" ", "", $val->FlightNumber) == $_GET['outbound']) {
            $departTime = strtotime($val->DepartTime);
            $landingTime = strtotime($val->LandingTime);
            $asign['chieu_ve'] .='
            <div class="tieude_datve_ft">
                <div class="chieu-bay">
                    <span class="chieudi_it" >Chiều về: </span>
                    <span class="chieu-di_datve_tt">'.$val->FromPlace.'</span>
                    <span class="chieu-ve_datve_tt">'.$val->ToPlace.'</span>
                </div>
            </div>
            <div class="noidung_tt_datve">
                <div class="img_hang_datve_tt">
                    <div >
                        <img src="'.SITE_NAME.'/view/default/theme/images/'.$val->AirlineCode.'.png">
                    </div>
                </div>
                <div class="thong_tin_chuyen_bay_tt">
                    <p class="chuyenbay_datve_tt">CHUYẾN BAY</p>
                    <p class="chuyenbay_datve_tt2">'.$val->Airline.'</p>
                    <p class="chuyenbay_datve_tt3">'.$val->FlightNumber.'</p>
                    <p>Loại vé: <span class="chuyenbay_datve_tt2">'.$val->TicketType.'</span></p>
                </div>
                <div class="thong_tin_chuyen_bay_tt">
                    <p class="chuyenbay_datve_tt">Khởi hành</p>
                    <p >Từ <span class="chuyenbay_datve_tt3">'.$val->FromPlace.'</span>, Việt Nam</p>
                    <p>Sân bay: <span class="chuyenbay_datve_tt2">'.($val->FromPlace?$val->FromPlace:$val->FromAirport).' ('.$dataarray["ToPlace"].')</span></p>
                    <p>Thời gian: <span class="chuyenbay_datve_tt3">'.date("H:i", $departTime).'</span>, '.date("d/m/Y", $departTime).'</p>
                </div>
                <div class="thong_tin_chuyen_bay_tt">
                    <p class="chuyenbay_datve_tt">Điểm đến</p>
                    <p >Từ <span class="chuyenbay_datve_tt3">'.$val->ToPlace.'</span>, Việt Nam</p>
                    <p>Sân bay: <span class="chuyenbay_datve_tt2">'.($val->ToPlace?$val->ToPlace:$val->ToAirport).' ('.$dataarray["FromPlace"].')</span></p>
                    <p>Thời gian: <span class="chuyenbay_datve_tt3">'.date("H:i", $landingTime).'</span>, '.date("d/m/Y", $landingTime).'</p>
                </div>
            </div>';
        }
    }
    $asign["nguoi_lon"] = '';
    for($i=1;$i<=$dataarray['Adult'];$i++) {
        $asign["nguoi_lon"] .= '
        <div class="nguoilon_1">
            <span class="chuyenbay_datve_tt2">
                Người lớn '.$i.':
            </span>
        </div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-2">
                <select class="quydanh_1_tt" name="quydanh_nl_'.$i.'" >
                    <option value="MR">Ông</option>
                    <option value="MRS">Bà</option>
                    <option value="MISS">Anh/Chị</option>
                </select>
            </div>
            <div class="col-md-4" style="padding-left: 0px">
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Họ" name="ho_nl_'.$i.'" />
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Tên lót" name="tenlot_nl_'.$i.'" />
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Tên" name="ten_nl_'.$i.'" />
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="ngaysinh_nl_'.$i.'" >
                    <option value="">Ngày</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="thang_nl_'.$i.'" >
                    <option value="">Tháng</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="nam_nl_'.$i.'" >
                    <option value="">Năm</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                </select>
            </div>
        </div>';
    }
    $asign["tre_em"] = '';
    if($dataarray['Child'] && $dataarray['Child'] !='') {
        for($i=1;$i<=$dataarray['Child'];$i++) {
            $asign["tre_em"] .= '
        <div class="nguoilon_1">
            <span class="chuyenbay_datve_tt2">
                Trẻ em '.$i.':
            </span>
        </div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-2">
                <select class="quydanh_1_tt" name="quydanh_te_'.$i.'" >
                    <option value="MSTR">Trẻ em trai</option>
                    <option value="MISS">Trẻ em gái</option>
                </select>
            </div>
            <div class="col-md-4" style="padding-left: 0px">
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Họ" name="ho_te_'.$i.'" />
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Tên lót" name="tenlot_te_'.$i.'" />
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Tên" name="ten_te_'.$i.'" />
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="ngaysinh_te_'.$i.'" >
                    <option value="">Ngày</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="thang_te_'.$i.'" >
                    <option value="">Tháng</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="nam_te_'.$i.'" >
                    <option value="">Năm</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                </select>
            </div>
        </div>';
        }
    }
    $asign["so_sinh"] = '';
    if($dataarray['Infant'] && $dataarray['Infant'] !='') {
        for($i=1;$i<=$dataarray['Infant'];$i++) {
            $asign["so_sinh"] .= '
        <div class="nguoilon_1">
            <span class="chuyenbay_datve_tt2">
                Sơ sinh '.$i.':
            </span>
        </div>
        <div class="nguoilon_thongtin_tt">
            <div class="col-md-2">
                <select class="quydanh_1_tt" name="quydanh_ss_'.$i.'" >
                    <option value="MSTR">Em bé trai</option>
                    <option value="MISS">Em bé gái</option>
                </select>
            </div>
            <div class="col-md-4" style="padding-left: 0px">
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Họ" name="ho_ss_'.$i.'" />
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Tên lót" name="tenlot_ss_'.$i.'" />
                <input type="text" class="input_hoten_tt ho_ten_full" placeholder="Tên" name="ten_ss_'.$i.'" />
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="ngaysinh_ss_'.$i.'" >
                    <option value="">Ngày</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="thang_ss_'.$i.'" >
                    <option value="">Tháng</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-2" style="padding-left: 0px">
                <select class="quydanh_1_tt" name="nam_ss_'.$i.'" >
                    <option value="">Năm</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2014">2015</option>
                </select>
            </div>
        </div>';
        }
    }
    //$asign["chi_tiet_ve"] = '';
    //$asign[""]
    print_template($asign, 'datve');
}