<div class="top-page top-page-detail_tt">
    <div class="container">
        <div class=" col-md-12 col-sm-12 col-xs-12 duongdan_tt">
            {tieude}
        </div>
        <div class="book-ticket col-md-12 col-sm-12 col-xs-12"
             style="width: 100%;  background:  #F5F5F5; border-radius: 5px">

            <div class="fields" style="border-bottom: 1px dashed  #9A9A9A;border-top: none; padding-top: 10px; padding-bottom: 10px; margin-bottom: 10px; padding-left: 0px; padding-right:
            0px">
                <input type="radio" name="RoundTrip" value="true" id="ve-khu-hoi" checked/>
                <label for="ve-khu-hoi"><span></span>{vekhuhoi_td}</label>
                <input type="radio" name="RoundTrip" value="false" id="ve-mot-chieu"/>
                <label for="ve-mot-chieu"><span></span>{vemotchieu_td}</label>
            </div>
            <form style="width: 100% !important;max-width: 1188px; margin-left:10px" class="form"
                  action="{SITE-NAME}/tim-kiem-chuyen-bay/" method="post">
                <div class="row row-padding-10">
                    <div class="col-md-2 col-sm-12 chon-dia-diem">
                        <p>{diemdi_td}</p>
                        <input type="text" class="chuyen-bay chieu-di" id="chieu-di" value="Hà Nội" name="TFromPlace"/>
                        <input id="hide-chieu-di" type="hidden" name="FromPlace" value="HAN"/>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <p>{diemden_td}</p>
                        <input type="text" class="chuyen-bay chieu-ve" id="chieu-ve" value="Hồ Chí Minh"
                               name="TToPlace"/>
                        <input id="hide-chieu-ve" type="hidden" name="ToPlace" value="SGN"/>
                    </div>
                    <div class="col-md-2-2 col-sm-12 date ngay">
                        <div class="row row-padding-10">
                            <div class="col-md-6 col-sm-12">
                                <p>{ngaydi_td}</p>
                                <input type="text" class="chuyen-bay" id="ngay-di" value="{three_day}"
                                       name="DepartDate"/>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p>{ngayve_td}</p>
                                <input type="text" class="chuyen-bay" id="ngay-ve" value="{six_day}" name="ReturnDate"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12 ">
                        <p>{nguoilon_td}</p>

                        <div>
                            <a class="sub" href="#">-</a>
                            <input type="text" class="nguoi-lon" id="nguoi-lon" value="1" name="adult"/>
                            <a class="sum" href="#">+</a>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12">
                        <p>{treem_td}</p>

                        <div>
                            <a class="sub" href="#">-</a>
                            <input type="text" class="tre-em" id="tre-em" value="0" name="child"/>
                            <a class="sum" href="#">+</a>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2-1 col-sm-12">
                        <p>{sosinh_td}</p>

                        <div>
                            <a class="sub" href="#">-</a>
                            <input type="text" class="so-sinh" id="so-sinh" value="0" name="infant"/>
                            <a class="sum" href="#">+</a>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 tim-kiem_tt  ">
                        <p><input style="" type="submit" value="{timchuyenbay_td}"/></p>
                    </div>

                </div>
                <div class="row row-padding-10">

                </div>
            </form>
        </div>
    </div>
</div>
</header>

<section class="content-area container">
    <div style="padding-left: 0px;   margin-top: 25px;" class="left_sidebar col-md-9-1 col-sm-9 col-xs-12">

        <div class="main-content">
            <div class="result">
                <div class="info-result">
                    <div class="hanh-trinh-title">
                        <span>{hanhtrinh_td}</span>
                    </div>
                    <div class="hanh-trinh-info">
                        <div class="chieu-bay">
                            <p class="chieu-di">Hà Nội</p>

                            <p class="chieu-ve">Seul</p>
                        </div>
                        <p class="loai-ve">{loaive_td}: <span>Khứ hồi</span></p>

                        <p class="ngay-xuat-phat">Ngày xuất phát: <span>01/08/2015</span></p>

                        <p class="so-hanh-khach">{sohk_td}: <span>2 {nguoilon_td}, 1 {treem_td}, 2 {sosinh_td}</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="date-change">
                    <p>{hientai}</p>
                </div>
                <div class="list-result">
                    <form class="form-ve" action="booking.php" method="post">
                        <table class="list-ve" width="100%" cellspacing="0" cellpadding="0">
                            <thead>
                            <tr>
                                <th>Chuyến bay</th>
                                <th>Khởi hành</th>
                                <th></th>
                                <th>Đến</th>
                                <th>Giá vé</th>

                                <th>Chi tiết</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="i-result selected">
                                <td class="logo-air"><img
                                            src="http://localhost/pi_maybay/view/default/theme/images/VietJetAir.png"
                                            alt="">

                                    <p>VJ151</p></td>
                                <td class="den-di">
                                    <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                    <p>
                                        <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                    </p>
                                </td>
                                <td class="thoi-gian">
                                    <p><span>NunStop</span><br><span>02:05</span></p>


                                </td>

                                <td class="den-di">
                                    <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                    <p>
                                        <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                    </p>
                                </td>
                                <td class="gia">
                                    <p >

                                        1,030,000 <sup>vnđ</sup><br>


                                    </p>

                                    <p style="margin-top: -10px">
                                        <a href="">Xem chi tiết</a>
                                    </p>
                                </td>

                                <td class="chi-tiet ">
                                    <p class="chi-tiet_tt">
                                        <a href="#">Chọn chuyến bay</a>
                                    </p>
                                </td>
                            </tr>
                            <tr style="display: none;" class="flight-info-detail stripe">
                                <td class="" colspan="8">
                                    <table style="  margin-left: 10px;margin-right: 10px; width: 97%;"  cellspacing="0" cellpadding="0">
                                        <tbody class="view-detail-flight">
                                        <tr class="i-result " >
                                            <td >

                                                <p class="bd_datve_tt">Chọn chuyến chiều về</p>
                                            </td>
                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b class="thoigian_tt">Hà nội</b> (HN)</span></p>


                                            </td>
                                            <td class="thoi-gian">
                                                <p><span>-</span></p>


                                            </td>

                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b class="thoigian_tt">Hà nội</b> (HN)</span></p>


                                            </td>



                                        </tr>
                                        <tr class="i-result " style="border-bottom: 1px dotted #e6e6e6; ">
                                            <td class="logo-air"><img
                                                        src="http://localhost/pi_maybay/view/default/theme/images/VietJetAir.png"
                                                        alt="">

                                                <p>VJ151</p></td>
                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                                <p>
                                                    <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                                </p>
                                            </td>
                                            <td class="thoi-gian">
                                                <p><span>NunStop</span><br><span>02:05</span></p>


                                            </td>

                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                                <p>
                                                    <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                                </p>
                                            </td>


                                            <td class="chi-tiet ">

                                                <a href="#">Xem chi tiết</a>

                                            </td>
                                            <td class="check-ve" style="color: #015f9b">Chọn chuyến bay&nbsp;
                                                <input type="radio" id="air-1" flightref="VN 1715"
                                                       name="Blockfalse" value="VN 1715"

                                                       recec="0"><label for="air-1"><span></span>
                                                </label></td>
                                        </tr>
                                        <tr class="i-result " style="border-bottom: 1px dotted #e6e6e6; ">
                                            <td class="logo-air"><img
                                                        src="http://localhost/pi_maybay/view/default/theme/images/VietJetAir.png"
                                                        alt="">

                                                <p>VJ151</p></td>
                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                                <p>
                                                    <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                                </p>
                                            </td>
                                            <td class="thoi-gian">
                                                <p><span>NunStop</span><br><span>02:05</span></p>


                                            </td>

                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                                <p>
                                                    <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                                </p>
                                            </td>


                                            <td class="chi-tiet ">

                                                <a href="#">Xem chi tiết</a>

                                            </td>
                                            <td class="check-ve" style="color: #015f9b">Chọn chuyến bay&nbsp;
                                                <input type="radio" id="air-1" flightref="VN 1715"
                                                       name="Blockfalse" value="VN 1715"

                                                       recec="0"><label for="air-1"><span></span>
                                                </label></td>
                                        </tr>
                                        <tr class="i-result " style="border-bottom: 1px dotted #e6e6e6; ">
                                            <td class="logo-air"><img
                                                        src="http://localhost/pi_maybay/view/default/theme/images/VietJetAir.png"
                                                        alt="">

                                                <p>VJ151</p></td>
                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                                <p>
                                                    <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                                </p>
                                            </td>
                                            <td class="thoi-gian">
                                                <p><span>NunStop</span><br><span>02:05</span></p>


                                            </td>

                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                                <p>
                                                    <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                                </p>
                                            </td>


                                            <td class="chi-tiet ">

                                                <a href="#">Xem chi tiết</a>

                                            </td>
                                            <td class="check-ve" style="color: #015f9b">Chọn chuyến bay&nbsp;
                                                <input type="radio" id="air-1" flightref="VN 1715"
                                                       name="Blockfalse" value="VN 1715"

                                                       recec="0"><label for="air-1"><span></span>
                                                </label></td>
                                        </tr>
                                        <tr class="i-result " style="border-bottom: 1px dotted #e6e6e6; ">
                                            <td class="logo-air"><img
                                                        src="http://localhost/pi_maybay/view/default/theme/images/VietJetAir.png"
                                                        alt="">

                                                <p>VJ151</p></td>
                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                                <p>
                                                    <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                                </p>
                                            </td>
                                            <td class="thoi-gian">
                                                <p><span>NunStop</span><br><span>02:05</span></p>


                                            </td>

                                            <td class="den-di">
                                                <p><span class="ten_den_tt"><b>Hà nội</b> (HN)</span></p>

                                                <p>
                                                    <span>15/6 <b class="thoigian_tt">05:35</b></span>
                                                </p>
                                            </td>


                                            <td class="chi-tiet ">

                                                <a href="#">Xem chi tiết</a>

                                            </td>
                                            <td class="check-ve" style="color: #015f9b">Chọn chuyến bay&nbsp;
                                                <input type="radio" id="air-1" flightref="VN 1715"
                                                       name="Blockfalse" value="VN 1715"

                                                       recec="0"><label for="air-1"><span></span>
                                                </label></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>



                            </tbody>
                        </table>
                        <div class="send">
                            <p><input type="button" value="Tiếp tục"/></p>

                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div style="padding-right: 0px" class="right_sidebar col-md-3-right col-sm-3 col-xs-12">
        <div class="tieude_tt">
            <h3>LỌC TÌM KIẾM</h3>
        </div>


        <div class="sap_xep_tt noidung_tk_tt ">
            <div class="ma-new-product-title">
                <h2>Sắp xếp</h2>
            </div>
            <p >
                <input type="radio" checked value="1" name="sapxep"> Giá (thấp tới cao)
            </p>
            <p >
                <input type="radio" value="2" name="sapxep"> Thời gian khởi hành
            </p>
            <p >
                <input type="radio" value="3" name="sapxep"> Hãng hàng không
            </p>

            <div class="ma-new-product-title">
                <h2>Hãng hàng không</h2>
            </div>
            <p >
                <input type="radio" value="1" checked name="hang"> Hiển thị tất cả
            </p>
            <p >
                <input type="radio" name="hang"> Vietnam Airlines
                <img style="float: right" src="{SITE-NAME}/view/default/theme/images/VietnamAirlines.png">
            </p>
            <p >
                <input type="radio" name="hang"> Korea Airlines
                <img style="float: right" src="{SITE-NAME}/view/default/theme/images/han.png">
            </p>
            <p >
                <input type="radio" name="hang"> Thai Airlines
                <img style="float: right" src="{SITE-NAME}/view/default/theme/images/thai.png">
            </p>

            <div class="ma-new-product-title">
                <h2>Thời gian khởi hành</h2>
            </div>

            <p>
            <div class="price-box">

                <form class="form-horizontal form-pricing" role="form">

                    <div class="price-slider">

                        <span>Chi?u ?i: 0h - 24h </span>
                        <p class="price lead" id="amount-label"></p>
                        <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px">
                            <div id="slider"></div>
                        </div>
                        <p><span>0h</span><span>3h</span><span>6h</span><span>9h</span><span>12h</span><span>15h</span><span>18h</span><span>21h</span><span style="margin-right: 0px">24h</span></p>
                    </div>
                    <div class="price-slider">

                        <span>Chi?u v?: 6h - 24h</span>
                        <p class="price lead" id="duration-label"></p>
                        <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px">
                            <div id="slider2"></div>
                        </div>
                        <p><span>0h</span><span>3h</span><span>6h</span><span>9h</span><span>12h</span><span>15h</span><span>18h</span><span>21h</span><span style="margin-right: 0px">24h</span></p>
                    </div>





                </form>

                <p class="text-center" style="padding-top:10px;font-size:12px;color:#2c3e50;font-style:italic;">Created by <a href="https://twitter.com/AmirolAhmad" target="_blank">AmirolAhmad</a></p>

            </div>

            <script>
                $(document).ready(function() {
                    $("#slider").slider({

                        range: "min",
                        animate: true,
                        value:1,
                        min: 0,
                        max: 24,
                        step: 3,
                        slide: function(event, ui) {
                            update(1,ui.value); //changed
                        }
                    });

                    $("#slider2").slider({
                        range: "min",
                        animate: true,
                        value:1,
                        min: 0,
                        max: 24,
                        step: 3,
                        slide: function(event, ui) {
                            update(2,ui.value); //changed
                        }
                    });

                    //Added, set initial value.

                    $("#amount").val(0);

                    $("#duration").val(0);
                    $("#amount-label").text(0);
                    $("#duration-label").text(0);

                    update();
                });

                //changed. now with parameter
                function update(slider,val) {
                    //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
                    var $amount = slider == 1?val:$("#amount").val();
                    var $duration = slider == 2?val:$("#duration").val();

                    /* commented
                     $amount = $( "#slider" ).slider( "value" );
                     $duration = $( "#slider2" ).slider( "value" );
                     */

                    $total = "$" + ($amount * $duration);

                    $( "#amount" ).val($amount);
                    $( "#amount-label" ).text($amount);
                    $( "#duration" ).val($duration);
                    $( "#duration-label" ).text($duration);
                    $( "#total" ).val($total);
                    $( "#total-label" ).text($total);

//                    $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
//                    $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
                }

            </script>
            <script src="{SITE-NAME}/view/default/theme/js/jquery-ui.min.js"></script>
            </p>
        </div>



        <div class="tieude_tt">
            <h3>CHI TIẾT GIÁ VÉ</h3>
        </div>
        <div class="giave_td_tt">
            <h2>GIÁ VÉ LƯỢT ĐI</h2>
        </div>
        <div style="padding-top: 0px" class="sap_xep_tt noidung_tk_tt gia_td_tt">
          <ul>
              <li>
                  <a>Giá cơ bản</a>
              </li>
              <li>
                  <span>2 người lớn </span>
                  <span style="float: right">2.040.000 vnd</span>
              </li>
              <li>
                  <span>1 trẻ em </span>
                  <span style="float: right">1.020.000 vnd</span>
              </li>
              <li>
                  <a>Thuế & lệ phí</a>
              </li>
              <li>
                  <span>2 người lớn </span>
                  <span style="float: right">2.040.000 vnd</span>
              </li>
              <li>
                  <span>1 trẻ em </span>
                  <span style="float: right">1.020.000 vnd</span>
              </li>
             <p style="text-align: right; font-size: 20px; font-weight: bold"> 1.020.000 vnd</p>


          </ul>
        </div>
        <div class="giave_td_tt">
            <h2>GIÁ VÉ LƯỢT VỀ</h2>
        </div>
        <div style="padding-top: 0px;" class="sap_xep_tt noidung_tk_tt gia_td_tt">
            <ul>
                <li>
                    <a>Giá cơ bản</a>
                </li>
                <li>
                    <span>2 người lớn </span>
                    <span style="float: right">2.040.000 vnd</span>
                </li>
                <li>
                    <span>1 trẻ em </span>
                    <span style="float: right">1.020.000 vnd</span>
                </li>
                <li>
                    <a>Thuế & lệ phí</a>
                </li>
                <li>
                    <span>2 người lớn </span>
                    <span style="float: right">2.040.000 vnd</span>
                </li>
                <li>
                    <span>1 trẻ em </span>
                    <span style="float: right">1.020.000 vnd</span>
                </li>
                <p style="text-align: right; font-size: 20px; font-weight: bold;  border-bottom: 1px solid #e6e6e6;padding-bottom: 10px"> 1.020.000 vnd</p>
                <p style="text-align: right; font-size: 14px; font-weight: bold;color: #0066a6; "> Tổng tiền</p>
                <p style="text-align: right; font-size: 25px; font-weight: bold;color: red; "> 1.020.000 vnd</p>
                <div class="send"><label for="dat-ve"><input id="dat-ve" type="submit" value="Tiếp tục"></label><div class="clearfix"></div></div>


            </ul>
        </div>
		<div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
    </div>


