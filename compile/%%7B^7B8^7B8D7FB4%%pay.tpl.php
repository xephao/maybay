<?php /* Smarty version 2.6.26, created on 2017-07-17 13:32:43
         compiled from frontend/web/pages/booking/pay/pay.tpl */ ?>

<div class="mod_info_custumer">
  <div class="mod_main">
    <form action="<?php echo $this->_tpl_vars['server_url']; ?>
/booking/step4" method="post" name="f_checkout" id="f_checkout" onsubmit="return vnTBooking.processCheckoutMethod();">
      <div class="box-template">
        <div class="box-template-title">
          <div class="box-template-title-cont fa-usd">Hình thức thanh toán</div>
        </div>
        <div class="box-template-content">

          <div class="method_pay">

            <div class="method_pay_item">
              <div class="method_pay_title">
                <div class="method_pay_lTitle fa-home">
                  <div class="method_pay_lTitle1">THANH TOÁN BẰNG TIỀN MẶT</div>
                  <div>Sau khi đặt hàng thành công, Quý khách vui lòng đến trực tiếp văn phòng Vé máy bay vemaybay10s.com để thanh toán và nhận vé.</div>
                </div>
                <div class="method_pay_rTitle">
                  <span class="txt_title">Chọn</span>
                  <span class=""><input data-input="radio_checkbox" type="radio" id="rPayment_cash" name="rPayment" value="cash"><span class="style_icon"></span></span>
                </div>
              </div>
              <div class="method_pay_content" style="display: none;">
               <div class="pay_compay">
                <div class="pay_compay_title">
                  <div class="pay_compay_lTitle">VÉ MÁY BAY 10S</div>
                  <div class="pay_compay_rTitle">
                    <span class=""><input data-input="radio" type="radio" name="dealer_id" id="dealer_1" value="1" checked="checked"><span class="style_icon"></span></span>
                  </div>
                </div>
                <div class="before fa-home">Số nhà , Đường , Phường, Quận , TP</div>
                <div class="before fa-phone">1900 0000</div>
                <div class="before fa-envelope"><a href="mailto:info@vemaybay10s.com">info@vemaybay10s.com</a></div>
              </div><div class="pay_compay">
              <div class="pay_compay_title">
                <div class="pay_compay_lTitle">Văn phòng vé máy bay 1</div>
                <div class="pay_compay_rTitle">
                  <span class=""><input data-input="radio" type="radio" name="dealer_id" id="dealer_1" value="1"><span class="style_icon"></span></span>
                </div>
              </div>
              <div class="before fa-home">15/2 đường B1 Cộng Hòa, P.13, Q.TB, TP.HCM</div>
              <div class="before fa-phone">111111111</div>
              <div class="before fa-envelope"><a href="mailto:thaison@trust.vn">thaison@trust.vn</a></div>
            </div>
          </div>
        </div>

        <div class="method_pay_item">
          <div class="method_pay_title">
            <div class="method_pay_lTitle fa-map-marker">
              <div class="method_pay_lTitle1">THANH TOÁN TẠI ĐỊA CHỈ QUÝ KHÁCH YÊU CẦU &nbsp;<span class="s_price">( + 20,000 VNĐ )</span></div>
              <div>Sau khi nhận được yêu cầu, nhân viên vemaybay10s.com sẽ đến tận nơi địa chỉ của quý khách để giao vé &amp; thu tiền trong ngày,từ thứ 2 - chủ nhật, cả ngày lễ hoàn toàn miễn phí.</div>
            </div>
            <div class="method_pay_rTitle">
              <span class="txt_title">Chọn</span>
              <span class=""><input data-input="radio_checkbox" type="radio" id="rPayment_cod" name="rPayment" value="cod"><span class="style_icon"></span></span>
            </div>
          </div>
          <div class="method_pay_content" style="display: none;">
           <p>Xin quý khách lưu ý: Hình thức thanh toán tại địa chỉ Quý khách yêu cầu chỉ áp dụng tại khu vực nội thành phố Hồ Chí Minh. Khu vực ngoại thành hoặc xa trên 7km thu phí theo lộ trình.</p>
           <input name="s_price" id="s_price" value="20000" type="hidden"> <div class="formContact">
           <div class="rowInput">
            <label class="LTitle" for="name">Tên người nhận <span>*</span></label>
            <input name="c_name" id="c_name" class="form-control" type="text" placeholder="Họ và tên" value="xv">
          </div>

          <div class="rowInput">
            <label class="LTitle" for="phone">Điện thoại <span>*</span></label>
            <input type="text" name="c_phone" class="form-control" id="c_phone" placeholder="Số điện thoại" value="0946233393">
          </div>
          <div class="rowInput">
            <label class="LTitle" for="address">Địa chỉ <span>*</span></label>
            <input type="text" name="c_address" class="form-control" id="c_address" placeholder="Địa chỉ thanh toán" value="xcv">
          </div>
          <div class="rowInput">
            <label class="LTitle" for="state">Quận / Huyện <span>*</span></label>
            <input type="text" name="c_state" class="form-control" id="c_state" placeholder="Thành phố" value="">
          </div>
          <div class="rowInput">
            <label class="LTitle" for="city">Thành phố / Tình thành <span>*</span></label>
            <input type="text" name="c_city" class="form-control" id="c_city" placeholder="Thành phố" value="Hồ Chí Minh">
          </div>
        </div>
      </div>
    </div>

    <div class="method_pay_item">
      <div class="method_pay_title">
        <div class="method_pay_lTitle fa-institution">
          <div class="method_pay_lTitle1">THANH TOÁN BẰNG HÌNH THỨC CHUYỂN KHOẢN</div>
          <div>Quý khách có thể thanh toán bằng cách chuyển tiền tới tài khoản của chúng tôi, hãy chọn tài khoản ngân hàng mà quý khách có thể chuyển một cách tiện lợi nhất.</div>
        </div>
        <div class="method_pay_rTitle">
          <span class="txt_title">Chọn</span>
          <span class=""><input data-input="radio_checkbox" type="radio" id="rPayment_bank_transfer" name="rPayment" value="bank_transfer"><span class="style_icon"></span></span>
        </div>
      </div>
      <div class="method_pay_content" style="display: none;">
        <div class="pay_bank">
          <div class="pay_bank_title">
            <div class="pay_bank_lTitle ">1. <span style="margin-right:10px;"><img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/images/logoeximbank.jpg" alt="Ngân hàng thương mại xuất nhập khẩu Việt Nam - EXIMBANK" width="80"></span>Ngân hàng thương mại xuất nhập khẩu Việt Nam - EXIMBANK</div>
            <div class="pay_bank_rTitle">
              <span class=""><input data-input="radio" type="radio" name="bank_id" id="bank_1" value="1" checked="checked"><span class="style_icon"></span></span>
            </div>
          </div>
          <div class="before">Số tài khoản: 0102374156</div>
          <div class="before">Chi nhánh:  Công ty TNHH Thương mại Dịch vụ và Du lịch Song Anh</div>
          <div class="before">Chủ tài khoản: Phòng giao dịch Đa Kao, Quận 1, Tp.HCM</div>
        </div>
        <div class="pay_bank">
          <div class="pay_bank_title">
            <div class="pay_bank_lTitle ">2. <span style="margin-right:10px;"><img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/images/sacombank.jpg" alt="Ngân hàng Sacombank" width="80"></span>Ngân hàng Sacombank</div>
            <div class="pay_bank_rTitle">
              <span class=""><input data-input="radio" type="radio" name="bank_id" id="bank_2" value="2"><span class="style_icon"></span></span>
            </div>
          </div>
          <div class="before">Số tài khoản: 0102374156</div>
          <div class="before">Chi nhánh:  Công ty TNHH Thương mại Dịch vụ và Du lịch Song Anh</div>
          <div class="before">Chủ tài khoản: Phòng giao dịch Đa Kao, Quận 1, Tp.HCM</div>
        </div>

        <div class="pay_note">
          <div class="span_color2">Lưu ý khi chuyển khoản:</div>

          <div>Khi chuyển khoản, quý khách vui lòng nhập nội dung chuyển khoản là:</div>

          <div class="span_color2">"MDH , xv, Noi dung thanh toan"</div>

          <div>Ví dụ :</div>

          <div>"MDH QTA-47, xv, TT ve may bay"</div>

          <div>"MDH QTA-47, xv, TT them hanh ly ky gui"</div>

          <div>"MDH QTA-47, xv, TT phi doi ten, dich vu khac"</div>

          <div>Ðể việc thanh toán được chính xác. Xin cảm ơn quý khách!</div>
        </div>
      </div>
    </div>


    <div class="method_pay_item">
      <div class="method_pay_title">
        <div class="method_pay_lTitle fa-cc-mastercard">
          <div class="method_pay_lTitle1">Thanh toán qua OnePay</div>
          <div>Tất cả các giao dịch đều được thực hiện Online thông qua website của onepay.vn . Khoản thanh toán tiền vé được chuyển ngay tức thì từ tài khoản người Mua đến tài khoản người Bán, và được hệ thống tài chính lớn mạnh của onepay.vn đảm bảo.</div>
        </div>
        <div class="method_pay_rTitle">
          <span class="txt_title">Chọn</span>
          <span class=""><input data-input="radio_checkbox" type="radio" id="rPayment_onepay" name="rPayment" value="onepay"><span class="style_icon"></span></span>
        </div>
      </div>
      <div class="method_pay_content" style="display: none;">
       Tất cả các giao dịch đều được thực hiện Online thông qua website của onepay.vn . Khoản thanh toán tiền vé được chuyển ngay tức thì từ tài khoản người Mua đến tài khoản người Bán, và được hệ thống tài chính lớn mạnh của onepay.vn đảm bảo.
     </div>
   </div>

 </div>
</div>
</div>

<div class="group-button">
  <div class="div-back fl">
    <a href="javascript:history.back(1)" class="btn button_continues_l button_continues"><span class="ar_l">Trở về</span></a>
  </div>
  <div class="fr">
    <input name="do_submit" id="do_submit" type="hidden" value="1">
    <button type="submit" name="btnConfirm" id="btnConfirm" class="btn button_continues"><span>Tiếp tục</span></button>
  </div>
  <div class="clear"></div>
</div>

</form>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/web/pages/booking/modsidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="clear"></div>
</div>





</div>
</div>
</div>

</div>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/js/booking.js"></script>

<?php echo '


<script>
  vnTBooking.sid = "" ;

  jQuery(window).ready(function () {
    vnTBooking.initPaymnet();
  });

</script>
'; ?>