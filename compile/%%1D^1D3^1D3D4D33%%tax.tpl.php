<?php /* Smarty version 2.6.26, created on 2017-07-17 09:50:23
         compiled from frontend/web/pages/booking/search/tax.tpl */ ?>
<div class="vnt-tax-fitter">
	<div class="vnt-tax">
		<label>
			<span class=""><input data-input="checkbox" type="checkbox" id="priceType" name="priceType"><span class="style_icon"></span></span>
			<span>Giá đã bao gồm thuế và phí</span>
		</label>
	</div>
	<div class="vnt-info-step">
		<div>Bước1: <span class="span_color1">Chọn</span> chuyến bay</div>
		<div>Bước2: Bấm vào nút <span class="span_color1">Tiếp tục</span> phía dưới</div>
	</div>
	<div class="vnt-fitter-booking">
		<div class="w_fixed_title">
			<div class="div_title"><span>Lọc tìm kiếm và so sánh vé</span></div>
		</div>
		<div class="note-search">( Tìm kiếm thêm các chuyến bay bằng cách click vào "Lọc tìm kiếm" )</div>
		<div class="style_fitter_mobile">
			<div class="divmm">
				<div class="mmContent">
					<div class="mmMain">
						<div class="box-fitter-booking">

							<div class="group-fitter">
								<div class="group_title">Sắp xếp theo</div>
								<div class="group_content">
									<div class="orderBy">
										<ul>
											<li><label><span class=""><input type="radio" data-input="radio" id="sort1" name="groupSort" value="1" checked=""><span class="style_icon"></span></span><span>Giá (Thấp tới Cao)</span></label></li>
											<li><label><span class=""><input type="radio" data-input="radio" id="sort2" name="groupSort" value="2"><span class="style_icon"></span></span><span>Thời gian khỏi hành (Sớm tới Muộn)</span></label></li>
											<li><label><span class=""><input type="radio" data-input="radio" id="sort3" name="groupSort" value="3"><span class="style_icon"></span></span><span>Hãng hàng không</span></label></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="group-fitter">
								<div class="group_title">Thời gian khởi hành chiều đi</div>
								<div class="group_content">
									<div class="style_time">
										<div class="fl">Thời gian</div>
										<div class="fr"><div id="info_duration">[ <input type="text" id="dep0" name="dep0" class="input-time" value="0"> h tới <input type="text" id="dep1" name="dep1" class="input-time" value="24"> h ]</div></div>
										<div class="clear"></div>
									</div>
									<div id="slider_time_departure" class="slider_time ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="http://vemaybay10s.com/ve-may-bay/result.html/?sid=725#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="http://vemaybay10s.com/ve-may-bay/result.html/?sid=725#" style="left: 100%;"></a></div>
									<div id="rangeValue_departure" class="rangeValue"><span style="left:0%">0h</span><span style="left:25%">6h</span><span style="left:50%">12h</span><span style="left:75%">18h</span><span style="left:100%">24h</span></div>
								</div>
							</div>


							<div class="group-fitter">
								<div class="group_title">Thời gian khởi hành chiều về</div>
								<div class="group_content">
									<div class="style_time">
										<div class="fl">Thời gian</div>
										<div class="fr"><div id="info_duration">[ <input type="text" id="ret0" name="ret0" class="input-time" value="0"> h tới <input type="text" id="ret1" name="ret1" class="input-time" value="24"> h ]</div></div>
										<div class="clear"></div>
									</div>
									<div id="slider_time_return" class="slider_time ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="http://vemaybay10s.com/ve-may-bay/result.html/?sid=725#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="http://vemaybay10s.com/ve-may-bay/result.html/?sid=725#" style="left: 100%;"></a></div>
									<div id="rangeValue_return" class="rangeValue"><span style="left:0%">0h</span><span style="left:25%">6h</span><span style="left:50%">12h</span><span style="left:75%">18h</span><span style="left:100%">24h</span></div>
								</div>
							</div>


							<div class="group-fitter">
								<div class="group_title">Hãng hàng không</div>
								<div class="group_content">
									<div class="label_flight">
										<ul id="fitterAirline"><li>
											<div class="fl"><label><span class=""><input type="checkbox" data-input="checkbox" id="ckbAirline_All" name="ckbAirline_All" value="" checked=""><span class="style_icon"></span></span><span>Hiện tất cả hãng hàng không</span></label></div>
											<div class="fr"><div class="lable_img"></div></div>
											<div class="clear"></div>
										</li><li id="sortAirline_BL">
										<div class="fl"><label><span class=""><input type="checkbox" data-input="checkbox" id="ckbAirline_BL" name="ckbAirline" value="BL"><span class="style_icon"></span></span><span>Jetstar</span></label></div>
										<div class="fr"><div class="lable_img"><img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/images/smBL.gif" alt=""></div></div>
										<div class="clear"></div>
									</li><li id="sortAirline_VJ">
									<div class="fl"><label><span class=""><input type="checkbox" data-input="checkbox" id="ckbAirline_VJ" name="ckbAirline" value="VJ"><span class="style_icon"></span></span><span>Vietjet Air</span></label></div>
									<div class="fr"><div class="lable_img"><img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/images/smVJ.gif" alt=""></div></div>
									<div class="clear"></div>
								</li><li id="sortAirline_VN">
								<div class="fl"><label><span class=""><input type="checkbox" data-input="checkbox" id="ckbAirline_VN" name="ckbAirline" value="VN"><span class="style_icon"></span></span><span>Vietnam Airline</span></label></div>
								<div class="fr"><div class="lable_img"><img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/images/smVN.gif" alt=""></div></div>
								<div class="clear"></div>
							</li></ul>

						</div>
					</div>
				</div>
				<div class="group-fitter">
					<div class="group_title">Đơn vị tiền tệ</div>
					<div class="group_content">
						<div class="ul_currency">
							<ul>
								<li><label><span class=""><input type="radio" data-input="radio" id="currency_VND" name="currency" value="VND" checked=""><span class="style_icon"></span></span><span>VND</span></label></li>
								<li><label><span class=""><input type="radio" data-input="radio" id="currency_USD" name="currency" value="USD"><span class="style_icon"></span></span><span>USD</span></label></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="check_tax"><label><span class=""><input data-input="checkbox" type="checkbox" id="displayPriceType" name="displayPriceType" value="1"><span class="style_icon"></span></span><span>Giá đã bao gồm thuế và phí</span></label></div>
					</div>
				</div>
				<div class="close_search">
					<button type="button" class="btn"><span>Đóng tìm kiếm</span></button>
				</div>
			</div>
		</div>
		<div class="close-mmenu"></div>
	</div>
	<div class="divmmbg"></div>
</div>
</div>
</div>
<div class="clear"></div>
</div>