<?php /* Smarty version 2.6.26, created on 2017-07-17 13:24:35
         compiled from frontend/web/pages/general/formbookingpage.tpl */ ?>


<div class="box-search-ticket">
  <div class="wrapper">
    <?php if ($this->_tpl_vars['cur_mod'] == ""): ?>
    <div class="info-note">
     
    </div>
    <?php endif; ?> 
    
    <div class="form-search-ticket">
      <form action="<?php echo $this->_tpl_vars['server_url']; ?>
/booking/step1" method="post" name="formSearchTicket" id="formSearchTicket" onSubmit="return vnTFormSearch.doCheckSearch(this);">
        <div class="form-search-link">
          <ul><li  class='current' ><a href="/ve-noi-dia.html"  class="plane" >Tra cứu vé máy bay</a></li></ul>
          <div class="clear"></div>
        </div>
        <div class="form-search-content">
          <div class="ticket-way">
            <ul>
              <li>
                <label><input data-input="radio" type="radio" name="tripType" id="oneway" value="1"  /><span>Một chiều</span></label>
              </li>
              <li>
                <label><input data-input="radio" type="radio" name="tripType" id="roundtrip" value="2"  checked='checked'  /><span>Khứ hồi</span></label>
              </li>
            </ul>
            <div class="clear"></div>
          </div>
          <div class="form-input">
            <div class="w-form-input">
              <div class="f-address">
                <div class="f-title">Địa điểm ?</div>
                <div class="f-row">
                  <input type="text" name="from" id="from" datetype="departure" class="form-control startplace departure" value="Ho Chi Minh, VN (SGN)" readonly="true" onkeypress="return false;" />

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
                              <li><a airportcode="HAN" href="#" title="Ha Noi ,VN (HAN)" ><b>Hà Nội </b><span>(HAN)</span> </a></li><li><a airportcode="HPH" href="#" title="Hải Phòng , VN (HPH)" ><b>Hải Phòng </b><span>(HPH)</span> </a></li><li><a airportcode="DIN" href="#" title="Điện Biên , VN (DIN)" ><b>Điện Biên </b><span>(DIN)</span> </a></li>
                            </ul>
                            <ul>
                              <li class="title">Miền Trung </li>
                              <li><a airportcode="HUI" href="#" title="Huế , VN (HUI)" ><b>Huế </b><span>(HUI)</span> </a></li><li><a airportcode="PXU" href="#" title="Pleiku, VN (PXU)" ><b>Pleiku </b><span>(PXU)</span> </a></li><li><a airportcode="THD" href="#" title="Thanh Hóa ,VN (THD)" ><b>Thanh Hóa </b><span>(THD)</span> </a></li><li><a airportcode="TBB" href="#" title="Tuy Hòa , VN (TBB)" ><b>Tuy Hòa </b><span>(TBB)</span> </a></li><li><a airportcode="VII" href="#" title="Vinh , VN (VII)" ><b>Vinh </b><span>(VII)</span> </a></li><li><a airportcode="DAD" href="#" title="Đà Nẵng , VN (DAD)" ><b>Đà Nẵng </b><span>(DAD)</span> </a></li><li><a airportcode="VDH" href="#" title="Đồng Hới , VN (VDH)" ><b>Đồng Hới </b><span>(VDH)</span> </a></li>
                            </ul>
                          </div>
                          <div class="col-sm-3 col-xs-12 domestic-col">
                            <ul>
                              <li class="title">Miền Nam </li>
                              <li><a airportcode="BMV" href="#" title="Ban Mê Thuột , VN (BMV)" ><b>Ban Mê Thuột </b><span>(BMV)</span> </a></li><li><a airportcode="CAH" href="#" title="Cà Mau , VN (CAH)" ><b>Cà Mau </b><span>(CAH)</span> </a></li><li><a airportcode="VCA" href="#" title="Cần Thơ , VN (VCA)" ><b>Cần Thơ </b><span>(VCA)</span> </a></li><li><a airportcode="VCS" href="#" title="Côn Đảo , VN (VCS)" ><b>Côn Đảo </b><span>(VCS)</span> </a></li><li><a airportcode="SGN" href="#" title="Ho Chi Minh, VN (SGN)" ><b>Hồ Chí Minh </b><span>(SGN)</span> </a></li><li><a airportcode="NHA" href="#" title="Nha Trang , VN (NHA)" ><b>Nha Trang </b><span>(NHA)</span> </a></li><li><a airportcode="PQC" href="#" title="Phú Quốc , VN (PQC)" ><b>Phú Quốc </b><span>(PQC)</span> </a></li><li><a airportcode="UIH" href="#" title="Qui Nhơn , VN (UIH)" ><b>Qui Nhơn </b><span>(UIH)</span> </a></li><li><a airportcode="VKG" href="#" title="Rạch Giá , VN (VKG)" ><b>Rạch Giá </b><span>(VKG)</span> </a></li><li><a airportcode="VCL" href="#" title="Tam Kỳ, VN (VCL)" ><b>Tam Kỳ </b><span>(VCL)</span> </a></li><li><a airportcode="DLI" href="#" title="Đà Lạt , VN (DLI)" ><b>Đà Lạt </b><span>(DLI)</span> </a></li>
                            </ul>
                          </div>
                          <div class="col-sm-6 col-xs-12 internation-city">
                            <div class="title">Quốc tế</div>
                            <div class="s-city">
                              <div class="s-label">Hãy nhập tên thành phố hoặc mã sân bay</div>
                              <div class="error-departure alert alert-danger hidden">Xin hãy chọn thành phố hoặc sân bay để tiếp tục.</div>
                              <input type="text" name="inter-city-departure" id="inter-city-departure" class="form-control txtFlightCity" datatype="departure" value="" placeholder="Nhập mã sân bay hoặc tên thành phố" autocomplete="off"/>

                            </div>

                            <div class="s-button">
                              <span id="submit-departure" class="btn btn-primary"> Chọn </span></div>
                            </div>
                          </div>


                        </div>
                      </div>

                    </div>
                    <div class="f-row">
                      <input type="text" name="to" id="to" datetype="arrival" class="form-control endplace arrival" value="Ha Noi ,VN (HAN)" readonly="true" onkeypress="return false;"/>

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
                                  <li><a airportcode="HAN" href="#" title="Ha Noi ,VN (HAN)" ><b>Hà Nội </b><span>(HAN)</span> </a></li><li><a airportcode="HPH" href="#" title="Hải Phòng , VN (HPH)" ><b>Hải Phòng </b><span>(HPH)</span> </a></li><li><a airportcode="DIN" href="#" title="Điện Biên , VN (DIN)" ><b>Điện Biên </b><span>(DIN)</span> </a></li>
                                </ul>
                                <ul>
                                  <li class="title">Miền Trung </li>
                                  <li><a airportcode="HUI" href="#" title="Huế , VN (HUI)" ><b>Huế </b><span>(HUI)</span> </a></li><li><a airportcode="PXU" href="#" title="Pleiku, VN (PXU)" ><b>Pleiku </b><span>(PXU)</span> </a></li><li><a airportcode="THD" href="#" title="Thanh Hóa ,VN (THD)" ><b>Thanh Hóa </b><span>(THD)</span> </a></li><li><a airportcode="TBB" href="#" title="Tuy Hòa , VN (TBB)" ><b>Tuy Hòa </b><span>(TBB)</span> </a></li><li><a airportcode="VII" href="#" title="Vinh , VN (VII)" ><b>Vinh </b><span>(VII)</span> </a></li><li><a airportcode="DAD" href="#" title="Đà Nẵng , VN (DAD)" ><b>Đà Nẵng </b><span>(DAD)</span> </a></li><li><a airportcode="VDH" href="#" title="Đồng Hới , VN (VDH)" ><b>Đồng Hới </b><span>(VDH)</span> </a></li>
                                </ul>
                              </div>
                              <div class="col-sm-3 col-xs-12 domestic-col">
                                <ul>
                                  <li class="title">Miền Nam </li>
                                  <li><a airportcode="BMV" href="#" title="Ban Mê Thuột , VN (BMV)" ><b>Ban Mê Thuột </b><span>(BMV)</span> </a></li><li><a airportcode="CAH" href="#" title="Cà Mau , VN (CAH)" ><b>Cà Mau </b><span>(CAH)</span> </a></li><li><a airportcode="VCA" href="#" title="Cần Thơ , VN (VCA)" ><b>Cần Thơ </b><span>(VCA)</span> </a></li><li><a airportcode="VCS" href="#" title="Côn Đảo , VN (VCS)" ><b>Côn Đảo </b><span>(VCS)</span> </a></li><li><a airportcode="SGN" href="#" title="Ho Chi Minh, VN (SGN)" ><b>Hồ Chí Minh </b><span>(SGN)</span> </a></li><li><a airportcode="NHA" href="#" title="Nha Trang , VN (NHA)" ><b>Nha Trang </b><span>(NHA)</span> </a></li><li><a airportcode="PQC" href="#" title="Phú Quốc , VN (PQC)" ><b>Phú Quốc </b><span>(PQC)</span> </a></li><li><a airportcode="UIH" href="#" title="Qui Nhơn , VN (UIH)" ><b>Qui Nhơn </b><span>(UIH)</span> </a></li><li><a airportcode="VKG" href="#" title="Rạch Giá , VN (VKG)" ><b>Rạch Giá </b><span>(VKG)</span> </a></li><li><a airportcode="VCL" href="#" title="Tam Kỳ, VN (VCL)" ><b>Tam Kỳ </b><span>(VCL)</span> </a></li><li><a airportcode="DLI" href="#" title="Đà Lạt , VN (DLI)" ><b>Đà Lạt </b><span>(DLI)</span> </a></li>
                                </ul>
                              </div>
                              <div class="col-sm-6 col-xs-12 internation-city">
                                <div class="title">Quốc tế</div>
                                <div class="s-city">
                                  <div class="s-label">Hãy nhập tên thành phố hoặc mã sân bay</div>
                                  <div class="error-arrival alert alert-danger hidden">Xin hãy chọn thành phố hoặc sân bay để tiếp tục.</div>
                                  <input type="text" name="inter-city-arrival" id="inter-city-arrival" class="form-control txtFlightCity" datatype="arrival" value="" autocomplete="off"/>
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
                          <input type="text" name="departure_date" id="departure_date" class="form-control calendar" value="01/08/2017" maxlength="10"   readonly="true" onfocus="false" onkeypress="return false;"/>
                        </div>
                        <div class="f-row bgdatePicker return-date" >
                          <input type="text" name="return_date" id="return_date" class="form-control calendar" value="04/09/2017" maxlength="10" readonly="true" onkeypress="return false;"/>
                        </div>
                        <div class="clear"></div>
                      </div>
                      <div class="f-person">
                        <div class="f-title">SỐ NGƯỜI?</div>
                        <div class="input-table">
                          <div class="table-cell">
                            <select name="adult" id="adult"  style=" text-align:center;" class="form-control"><option value="1" selected >1</option><option value="2"  >2</option><option value="3"  >3</option><option value="4"  >4</option><option value="5"  >5</option><option value="6"  >6</option><option value="7"  >7</option><option value="8"  >8</option><option value="9"  >9</option></select>
                            <div class="div_text">
                              <span>Người lớn</span>
                              <span>(Trên 12 tuổi)</span>
                            </div>
                          </div>
                          <div class="table-cell">
                            <select name="child" id="child"  style=" text-align:center;" class="form-control"><option value="0" selected >0</option><option value="1"  >1</option><option value="2"  >2</option><option value="3"  >3</option><option value="4"  >4</option><option value="5"  >5</option><option value="6"  >6</option><option value="7"  >7</option></select>
                            <div class="div_text">
                              <span>Trẻ em</span>
                              <span>(2 - 12 tuổi)</span>
                            </div>
                          </div>
                          <div class="table-cell">
                            <select name="infant" id="infant"  style=" text-align:center;" class="form-control"><option value="0" selected >0</option><option value="1"  >1</option><option value="2"  >2</option></select>
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
            <!-- <div class="f_link">
              <a class="fa-exclamation-circle" href="/huong-dan-dat-ve.html" target="_blank">Hướng dẫn đặt vé</a>
            </div>
            <div class="f_link">
              <a class="fa-youtube" href="/video-huong-dan-dat-ve.html" target="_blank">Xem video</a>
            </div> -->
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
/js/SearchForm.js"></script><?php echo '
<script>js_lang[\'err_from_empry\'] = "Vui lòng chọn điểm đi";
  js_lang[\'err_to_empry\'] = "Vui lòng chọn điểm đến";
  js_lang[\'err_from_to_same\'] = "Điểm đi và điểm đến phải khác nhau";
  js_lang[\'err_departure_date_empry\'] = "Vui lòng chọn ngày đi";
  js_lang[\'err_return_date_empry\'] = "Vui lòng chọn ngày về";
  jQuery(window).ready(function () {
    vnTFormSearch.init();
  });</script>
  '; ?>