<?php /* Smarty version 2.6.26, created on 2017-07-16 18:13:33
         compiled from frontend/web/pages/home/formbooking.tpl */ ?>


<div class="box-search-ticket">
    <div class="wrapper">
<div class="info-note">
        <!-- <div class="ul_info">
          <ul>
            <li>Tra cứu vé dễ dàng, chính xác về giá vé</li>
            <li>Thông tin đầy đủ và thời gian chính xác</li>
            <li>Đặt và lưu vé tiện lợi, thanh toán online</li>
          </ul>
        </div>
        <div class="hotline_book_ticket">
          <div class="title">Hotline đặt vé :</div>
          <div class="ul_hotline">
            <ul>
              BEGIN: item_phone
              <li><a href="tel:"></a></li>
              END: item_phone
            </ul>
          </div>
        </div> -->
      </div>
      
      
<div class="form-search-ticket">
  <form action="http://vemaybay10s.com/ve-may-bay/search.html" method="post" name="formSearchTicket" id="formSearchTicket" onsubmit="return vnTFormSearch.doCheckSearch(this);">
    <div class="form-search-link">
      <ul><li class="current"><a href="http://vemaybay10s.com/ve-noi-dia.html" class="plane">Tra cứu vé máy bay</a></li></ul>
      <div class="clear"></div>
    </div>
    <div class="form-search-content">
      <div class="ticket-way">
        <ul>
          <li>
            <label><span class="style_radio"><input data-input="radio" type="radio" name="tripType" id="oneway" value="1"><span class="style_icon"></span></span><span>Một chiều</span></label>
          </li>
          <li>
            <label><span class="style_radio"><input data-input="radio" type="radio" name="tripType" id="roundtrip" value="2" checked="checked"><span class="style_icon"></span></span><span>Khứ hồi</span></label>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="form-input">
        <div class="w-form-input">
          <div class="f-address">
            <div class="f-title">Địa điểm ?</div>
            <div class="f-row">
              <input type="text" name="from" id="from" datetype="departure" class="form-control startplace departure" value="Ho Chi Minh, VN (SGN)" readonly="true" onkeypress="return false;">

              <div id="list-departure" class="box-dropdown listCity">
                <div class="title-chose">Chọn điểm khởi hành
                  <button type="button" class="close" aria-dropdown="list-departure" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                </div>
                <div class="content-chose">
                  <div class="row">
                    <div class="col-sm-3 col-xs-12 domestic-col">
                      <ul>
                        <li class="title">Miền Bắc </li>
                        <li><a airportcode="HAN" href="http://vemaybay10s.com/#" title="Ha Noi ,VN (HAN)"><b>Hà Nội </b><span>(HAN)</span> </a></li><li><a airportcode="HPH" href="http://vemaybay10s.com/#" title="Hải Phòng , VN (HPH)"><b>Hải Phòng </b><span>(HPH)</span> </a></li><li><a airportcode="DIN" href="http://vemaybay10s.com/#" title="Điện Biên , VN (DIN)"><b>Điện Biên </b><span>(DIN)</span> </a></li>
                      </ul>
                      <ul>
                        <li class="title">Miền Trung </li>
                        <li><a airportcode="HUI" href="http://vemaybay10s.com/#" title="Huế , VN (HUI)"><b>Huế </b><span>(HUI)</span> </a></li><li><a airportcode="PXU" href="http://vemaybay10s.com/#" title="Pleiku, VN (PXU)"><b>Pleiku </b><span>(PXU)</span> </a></li><li><a airportcode="THD" href="http://vemaybay10s.com/#" title="Thanh Hóa ,VN (THD)"><b>Thanh Hóa </b><span>(THD)</span> </a></li><li><a airportcode="TBB" href="http://vemaybay10s.com/#" title="Tuy Hòa , VN (TBB)"><b>Tuy Hòa </b><span>(TBB)</span> </a></li><li><a airportcode="VII" href="http://vemaybay10s.com/#" title="Vinh , VN (VII)"><b>Vinh </b><span>(VII)</span> </a></li><li><a airportcode="DAD" href="http://vemaybay10s.com/#" title="Đà Nẵng , VN (DAD)"><b>Đà Nẵng </b><span>(DAD)</span> </a></li><li><a airportcode="VDH" href="http://vemaybay10s.com/#" title="Đồng Hới , VN (VDH)"><b>Đồng Hới </b><span>(VDH)</span> </a></li>
                      </ul>
                    </div>
                    <div class="col-sm-3 col-xs-12 domestic-col">
                      <ul>
                        <li class="title">Miền Nam </li>
                        <li><a airportcode="BMV" href="http://vemaybay10s.com/#" title="Ban Mê Thuột , VN (BMV)"><b>Ban Mê Thuột </b><span>(BMV)</span> </a></li><li><a airportcode="CAH" href="http://vemaybay10s.com/#" title="Cà Mau , VN (CAH)"><b>Cà Mau </b><span>(CAH)</span> </a></li><li><a airportcode="VCA" href="http://vemaybay10s.com/#" title="Cần Thơ , VN (VCA)"><b>Cần Thơ </b><span>(VCA)</span> </a></li><li><a airportcode="VCS" href="http://vemaybay10s.com/#" title="Côn Đảo , VN (VCS)"><b>Côn Đảo </b><span>(VCS)</span> </a></li><li><a airportcode="SGN" href="http://vemaybay10s.com/#" title="Ho Chi Minh, VN (SGN)"><b>Hồ Chí Minh </b><span>(SGN)</span> </a></li><li><a airportcode="NHA" href="http://vemaybay10s.com/#" title="Nha Trang , VN (NHA)"><b>Nha Trang </b><span>(NHA)</span> </a></li><li><a airportcode="PQC" href="http://vemaybay10s.com/#" title="Phú Quốc , VN (PQC)"><b>Phú Quốc </b><span>(PQC)</span> </a></li><li><a airportcode="UIH" href="http://vemaybay10s.com/#" title="Qui Nhơn , VN (UIH)"><b>Qui Nhơn </b><span>(UIH)</span> </a></li><li><a airportcode="VKG" href="http://vemaybay10s.com/#" title="Rạch Giá , VN (VKG)"><b>Rạch Giá </b><span>(VKG)</span> </a></li><li><a airportcode="VCL" href="http://vemaybay10s.com/#" title="Tam Kỳ, VN (VCL)"><b>Tam Kỳ </b><span>(VCL)</span> </a></li><li><a airportcode="DLI" href="http://vemaybay10s.com/#" title="Đà Lạt , VN (DLI)"><b>Đà Lạt </b><span>(DLI)</span> </a></li>
                      </ul>
                    </div>
                    <div class="col-sm-6 col-xs-12 internation-city">
                      <div class="title">Quốc tế</div>
                      <div class="s-city">
                        <div class="s-label">Hãy nhập tên thành phố hoặc mã sân bay</div>
                        <div class="error-departure alert alert-danger hidden">Xin hãy chọn thành phố hoặc sân bay để tiếp tục.</div>
                        <input type="text" name="inter-city-departure" id="inter-city-departure" class="form-control txtFlightCity ac_input" datatype="departure" value="" placeholder="Nhập mã sân bay hoặc tên thành phố" autocomplete="off">

                      </div>

                      <div class="s-button">
                        <span id="submit-departure" class="btn btn-primary"> Chọn </span></div>
                    </div>
                  </div>


                </div>
              </div>

            </div>
            <div class="f-row">
              <input type="text" name="to" id="to" datetype="arrival" class="form-control endplace arrival" value="Ha Noi ,VN (HAN)" readonly="true" onkeypress="return false;">

              <div id="list-arrival" class="box-dropdown listCity">
                <div class="title-chose">Chọn điểm đến
                  <button type="button" class="close" aria-dropdown="list-arrival" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                </div>

                <div class="content-chose">
                  <div class="row">
                    <div class="col-sm-3 col-xs-12 domestic-col">
                      <ul>
                        <li class="title">Miền Bắc </li>
                        <li><a airportcode="HAN" href="http://vemaybay10s.com/#" title="Ha Noi ,VN (HAN)"><b>Hà Nội </b><span>(HAN)</span> </a></li><li><a airportcode="HPH" href="http://vemaybay10s.com/#" title="Hải Phòng , VN (HPH)"><b>Hải Phòng </b><span>(HPH)</span> </a></li><li><a airportcode="DIN" href="http://vemaybay10s.com/#" title="Điện Biên , VN (DIN)"><b>Điện Biên </b><span>(DIN)</span> </a></li>
                      </ul>
                      <ul>
                        <li class="title">Miền Trung </li>
                        <li><a airportcode="HUI" href="http://vemaybay10s.com/#" title="Huế , VN (HUI)"><b>Huế </b><span>(HUI)</span> </a></li><li><a airportcode="PXU" href="http://vemaybay10s.com/#" title="Pleiku, VN (PXU)"><b>Pleiku </b><span>(PXU)</span> </a></li><li><a airportcode="THD" href="http://vemaybay10s.com/#" title="Thanh Hóa ,VN (THD)"><b>Thanh Hóa </b><span>(THD)</span> </a></li><li><a airportcode="TBB" href="http://vemaybay10s.com/#" title="Tuy Hòa , VN (TBB)"><b>Tuy Hòa </b><span>(TBB)</span> </a></li><li><a airportcode="VII" href="http://vemaybay10s.com/#" title="Vinh , VN (VII)"><b>Vinh </b><span>(VII)</span> </a></li><li><a airportcode="DAD" href="http://vemaybay10s.com/#" title="Đà Nẵng , VN (DAD)"><b>Đà Nẵng </b><span>(DAD)</span> </a></li><li><a airportcode="VDH" href="http://vemaybay10s.com/#" title="Đồng Hới , VN (VDH)"><b>Đồng Hới </b><span>(VDH)</span> </a></li>
                      </ul>
                    </div>
                    <div class="col-sm-3 col-xs-12 domestic-col">
                      <ul>
                        <li class="title">Miền Nam </li>
                        <li><a airportcode="BMV" href="http://vemaybay10s.com/#" title="Ban Mê Thuột , VN (BMV)"><b>Ban Mê Thuột </b><span>(BMV)</span> </a></li><li><a airportcode="CAH" href="http://vemaybay10s.com/#" title="Cà Mau , VN (CAH)"><b>Cà Mau </b><span>(CAH)</span> </a></li><li><a airportcode="VCA" href="http://vemaybay10s.com/#" title="Cần Thơ , VN (VCA)"><b>Cần Thơ </b><span>(VCA)</span> </a></li><li><a airportcode="VCS" href="http://vemaybay10s.com/#" title="Côn Đảo , VN (VCS)"><b>Côn Đảo </b><span>(VCS)</span> </a></li><li><a airportcode="SGN" href="http://vemaybay10s.com/#" title="Ho Chi Minh, VN (SGN)"><b>Hồ Chí Minh </b><span>(SGN)</span> </a></li><li><a airportcode="NHA" href="http://vemaybay10s.com/#" title="Nha Trang , VN (NHA)"><b>Nha Trang </b><span>(NHA)</span> </a></li><li><a airportcode="PQC" href="http://vemaybay10s.com/#" title="Phú Quốc , VN (PQC)"><b>Phú Quốc </b><span>(PQC)</span> </a></li><li><a airportcode="UIH" href="http://vemaybay10s.com/#" title="Qui Nhơn , VN (UIH)"><b>Qui Nhơn </b><span>(UIH)</span> </a></li><li><a airportcode="VKG" href="http://vemaybay10s.com/#" title="Rạch Giá , VN (VKG)"><b>Rạch Giá </b><span>(VKG)</span> </a></li><li><a airportcode="VCL" href="http://vemaybay10s.com/#" title="Tam Kỳ, VN (VCL)"><b>Tam Kỳ </b><span>(VCL)</span> </a></li><li><a airportcode="DLI" href="http://vemaybay10s.com/#" title="Đà Lạt , VN (DLI)"><b>Đà Lạt </b><span>(DLI)</span> </a></li>
                      </ul>
                    </div>
                    <div class="col-sm-6 col-xs-12 internation-city">
                      <div class="title">Quốc tế</div>
                      <div class="s-city">
                        <div class="s-label">Hãy nhập tên thành phố hoặc mã sân bay</div>
                        <div class="error-arrival alert alert-danger hidden">Xin hãy chọn thành phố hoặc sân bay để tiếp tục.</div>
                        <input type="text" name="inter-city-arrival" id="inter-city-arrival" class="form-control txtFlightCity ac_input" datatype="arrival" value="" autocomplete="off">
                      </div>

                      <div class="s-button">
                        <span id="submit-arrival" class="btn btn-primary"> Chọn </span></div>
                    </div>
                  </div>


                </div>

              </div>

            </div>
            <div class="clear"></div>
          </div>
          <div class="f-time">
            <div class="f-title">Thời gian ?</div>
            <div class="f-row bgdatePicker departure_date">
              <input type="text" name="departure_date" id="departure_date" class="form-control calendar hasDatepicker" value="14/07/2017" maxlength="10" readonly="true" onfocus="false" onkeypress="return false;">
            </div>
            <div class="f-row bgdatePicker return-date">
              <input type="text" name="return_date" id="return_date" class="form-control calendar hasDatepicker" value="15/07/2017" maxlength="10" readonly="true" onkeypress="return false;">
            </div>
            <div class="clear"></div>
          </div>
          <div class="f-person">
            <div class="f-title">SỐ NGƯỜI?</div>
            <div class="input-table">
              <div class="table-cell">
                <select name="adult" id="adult" style=" text-align:center;" class="form-control"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select>
                <div class="div_text">
                  <span>Người lớn</span>
                  <span>(Trên 12 tuổi)</span>
                </div>
              </div>
              <div class="table-cell">
                <select name="child" id="child" style=" text-align:center;" class="form-control"><option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select>
                <div class="div_text">
                  <span>Trẻ em</span>
                  <span>(2 - 12 tuổi)</span>
                </div>
              </div>
              <div class="table-cell">
                <select name="infant" id="infant" style=" text-align:center;" class="form-control"><option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option></select>
                <div class="div_text">
                  <span>Em bé</span>
                  <span>(Dưới 2 tuổi)</span>
                </div>
              </div>
            </div>
          </div>
          <div class="f_button">
            <div class="f-title"></div>
            <div class="f-row-security_code">
              
               
            </div>
            <button type="submit" class="btn"><span>Tìm và đặt vé</span></button>

          </div>


          <div class="clear"></div>
        </div>
      </div>
    </div>
  </form>
</div>


    </div>
  </div>
</div>


<script type="text/javascript" src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/js/SearchForm.js"></script>

<?php echo '

'; ?>