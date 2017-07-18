<link href="{$theme_dir}/css/product.less" rel="stylesheet/less" type="text/css">

{literal}


<style type="text/css" id="less:modules-product-css-product">.vnt-banner {
  min-height: 320px;
  margin-bottom: 0px;
}
.grid_customer .row_customer .item .i-desc {
  border: 1px solid #f0f0f0;
}
.box-search-ticket {
  bottom: 35px;
}
.vnt-about-prod {
  background: #f6f6f6;
  padding: 50px 0;
}
.the_content {
  font-size: 16px;
  line-height: 25px;
  text-align: justify;
  color: #666666;
}
.the_content .font-large {
  font-size: 25px;
  line-height: 35px;
  margin-bottom: 20px;
  text-transform: uppercase;
  color: #333333;
}
.the_content .color_green {
  color: #03afef;
}
.the_content .color_blue {
  color: #03afef;
}
.vnt-step-booking {
  padding: 20px 0;
}
.vnt-step-booking .step_title {
  font-size: 25px;
  line-height: 35px;
  margin: 20px;
  font-weight: 300;
  text-align: center;
  display: none;
}
.vnt-step-booking ul:after {
  display: block;
  clear: both;
  content: '';
}
.vnt-step-booking ul li {
  width: 25%;
  float: left;
  padding: 0 10px;
  text-align: center;
  position: relative;
}
.vnt-step-booking ul li ~ li:after {
  position: absolute;
  content: '';
  top: 25px;
  right: 50%;
  width: 100%;
  height: 10px;
  background: #dfdfdf;
}
.vnt-step-booking ul li .s-icon {
  display: block;
  width: 60px;
  height: 60px;
  margin: 0 auto 5px auto;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid #cdcdcd;
  text-align: center;
  font-size: 30px;
  line-height: 40px;
  padding: 10px 0;
  color: #333333;
  position: relative;
  z-index: 1;
  background: #ffffff;
}
.vnt-step-booking ul li.active .s-icon,
.vnt-step-booking ul li.active .s-icon i {
  color: #ffffff;
}
.vnt-step-booking ul li .s-icon i {
  font-size: 30px;
  line-height: 40px;
}
.vnt-step-booking ul li .s-text {
  color: #555555;
  font-size: 16px;
  line-height: 24px;
}
.vnt-step-booking ul li.step1.active .s-icon {
  background: #007CC5;
  border-color: #007CC5;
}
.vnt-step-booking ul li.step1.active .s-text {
  color: #333333;
}
.vnt-step-booking ul li.step2.active .s-icon {
  background: #007CC5;
  border-color: #007CC5;
}
.vnt-step-booking ul li.step2.active .s-text {
  color: #333333;
}
.vnt-step-booking ul li.step2.active:after {
  background: #007CC5;
}
.vnt-step-booking ul li.step3.active .s-icon {
  background: #007CC5;
  border-color: #007CC5;
}
.vnt-step-booking ul li.step3.active .s-text {
  color: #333333;
}
.vnt-step-booking ul li.step3.active:after {
  background: #007CC5;
}
.vnt-step-booking ul li.step4.active .s-icon {
  background: #007CC5;
  border-color: #007CC5;
}
.vnt-step-booking ul li.step4.active .s-text {
  color: #333333;
}
.vnt-step-booking ul li.step4.active:after {
  background: #007CC5;
}
.vnt-tax-fitter {
  padding: 20px 0;
  border-top: 1px solid #e5e5e5;
}
.vnt-tax-fitter .vnt-tax {
  float: left;
  margin-right: 35px;
  font-size: 30px;
  line-height: 40px;
  color: #e81f1f;
  font-weight: 300;
  padding-top: 20px;
}
.vnt-tax-fitter .vnt-tax .style_icon {
  width: 35px;
  height: 35px;
  vertical-align: middle;
}
.vnt-tax-fitter .vnt-tax .style_checkbox input[type=checkbox] {
  width: 35px;
  height: 35px;
}
.vnt-tax-fitter .vnt-tax .style_checkbox .style_icon:after {
  font-size: 30px;
  line-height: 33px;
}
.vnt-tax-fitter .vnt-tax label {
  font-weight: normal;
}
.vnt-tax-fitter .vnt-info-step {
  float: left;
  width: 270px;
  padding: 10px;
  border: 1px solid #c9c9c9;
  position: relative;
  background: #ffffff;
}
.vnt-tax-fitter .vnt-info-step:before {
  position: absolute;
  content: '';
  top: 100%;
  right: 45px;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 8px solid #c9c9c9;
}
.vnt-tax-fitter .vnt-info-step:after {
  position: absolute;
  content: '';
  top: 100%;
  right: 47px;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 6px solid #ffffff;
}
.vnt-tax-fitter .vnt-fitter-booking {
  float: right;
  text-align: right;
  max-width: 440px;
}
.vnt-tax-fitter .vnt-fitter-booking {
  position: relative;
}
.vnt-tax-fitter .vnt-fitter-booking .div_title {
  display: inline-block;
  font-size: 16px;
  line-height: 25px;
  color: #ffffff;
  padding: 12px 20px;
  background: #00AEEF;
  text-transform: uppercase;
  cursor: pointer;
  margin-bottom: 5px;
  font-weight: bold;
}
.vnt-tax-fitter .vnt-fitter-booking .div_title:hover {
  background: #00AEEF;
}
.vnt-tax-fitter .vnt-fitter-booking .div_title span:after {
  padding-left: 20px;
  font-family: "fontawesome";
  content: '\f002';
}
.vnt-tax-fitter .vnt-fitter-booking .note-search {
  font-size: 14px;
  line-height: 20px;
  color: #666666;
  font-style: italic;
}
.box-fitter-booking {
  position: absolute;
  top: 100%;
  right: 0;
  width: 370px;
  background: #ffffff;
  border: 2px solid #00AEEF;
  text-align: left;
  z-index: 200;
  visibility: hidden;
  opacity: 0;
  margin-top: 40px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.box-fitter-booking.active {
  margin-top: 0;
  visibility: visible;
  opacity: 1;
}
.box-fitter-booking:before {
  position: absolute;
  bottom: 100%;
  right: 40px;
  content: '';
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 14px solid #00AEEF;
}
.box-fitter-booking:after {
  position: absolute;
  bottom: 100%;
  right: 42px;
  content: '';
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-bottom: 12px solid #FFF4E3;
}
.box-fitter-booking .group-fitter .group_title {
  font-size: 22px;
  line-height: 30px;
  text-transform: uppercase;
  background: #f0f0f0;
  padding: 15px 20px;
}
.box-fitter-booking .group-fitter .group_content {
  padding: 20px;
}
.box-fitter-booking .style_radio .style_icon {
  border-color: #e32f44;
}
.box-fitter-booking .style_radio input[type="radio"]:checked ~ .style_icon::after {
  background: #e32f44;
}
.orderBy {
  font-size: 16px;
  line-height: 24px;
}
.orderBy label {
  font-weight: normal;
}
.label_flight {
  font-size: 16px;
  line-height: 24px;
}
.label_flight label {
  font-weight: normal;
}
.label_flight .lable_img {
  max-width: 65px;
  max-height: 25px;
  text-align: center;
}
.label_flight .lable_img img {
  max-width: 65px;
  max-height: 25px;
}
.ul_currency {
  font-size: 16px;
  line-height: 24px;
}
.ul_currency ul:after {
  clear: both;
  content: '';
  display: block;
}
.ul_currency ul li {
  float: left;
  margin-right: 20px;
}
.ul_currency ul li:last-child {
  margin-right: 0;
}
.ul_currency ul li label {
  font-weight: normal;
}
.check_tax {
  font-size: 16px;
  line-height: 24px;
}
.check_tax label {
  font-weight: normal;
}
.close_search {
  text-align: right;
  padding: 20px;
}
.close_search button.btn {
  font-size: 16px;
  line-height: 24px;
  padding: 8px 15px;
  background: #eeeeee;
  border: none;
  text-transform: uppercase;
  border-bottom: 2px solid #d6d6d6;
  height: auto;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -o-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  outline: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -o-box-shadow: none;
  -ms-box-shadow: none;
  box-shadow: none;
  color: #333333;
  font-weight: bold;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.close_search button.btn:hover {
  background: #f6882c;
  color: #ffffff;
  border-bottom-color: #cd7124;
}
.close_search button.btn span {
  font-size: 16px;
  line-height: 24px;
  color: inherit;
}
.close_search button.btn span:after {
  padding-left: 20px;
  font-family: "fontawesome";
  content: '\f00d';
}
.close_search button.btn:active {
  outline: none;
}
.check_tax .style_checkbox .style_icon:after {
  color: #e32f44;
}
.style_time {
  margin-bottom: 10px;
}
#slider_time .ui-widget-header {
  background: #03afef;
}
.group_Result .box-group_Result {
  margin-bottom: 30px;
}
.group_Result .box-group_Result .search_info {
  display: table;
  color: #ffffff;
  background-color: #00AEEF;
  width: 100%;
}
.group_Result .box-group_Result .search_info .search_info_left {
  display: table-cell;
  padding: 20px;
}
.group_Result .box-group_Result .search_info .search_info_right {
  display: table-cell;
  width: 180px;
  vertical-align: middle;
  text-align: center;
  border-left: 1px solid rgba(255, 255, 255, 0.1);
  padding: 20px 15px;
}
.group_Result .box-group_Result .search_info .search_info_right .i-icon i {
  font-size: 25px;
  line-height: 25px;
}
.group_Result .box-group_Result .search_info .search_info_right .i-icon span {
  color: #ffffff;
  padding-left: 10px;
}
.group_Result .box-group_Result .search_info .search_info_right .date {
  font-size: 16px;
  line-height: 25px;
  font-weight: bold;
}
.group_Result .box-group_Result .search_info_internation {
  display: table;
  color: #ffffff;
  background-color: #1068b0;
  width: 100%;
}
.group_Result .box-group_Result .search_info_internation .search_info_left {
  display: table-cell;
}
.group_Result .box-group_Result .search_info_internation .flight-info {
  padding: 25px 20px 25px 90px;
  position: relative;
  font-size: 20px;
  line-height: 30px;
  color: #ffffff;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.group_Result .box-group_Result .search_info_internation .flight-info:after {
  position: absolute;
  content: '';
  width: 64px;
  height: 64px;
  top: 50%;
  left: 15px;
  -webkit-transform: translate(0, -50%);
  -moz-transform: translate(0, -50%);
  -o-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
  background: #ffffff;
  background-image: url(http://vemaybay10s.com/modules/product/images/icon-outbounds.svg);
  background-repeat: no-repeat;
  background-position: 50% 50%;
  -webkit-background-size: 45px 20px;
  background-size: 45px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
.group_Result .box-group_Result .search_info_internation .flight-info .country {
  font-size: 30px;
  line-height: 40px;
  color: #ffffff;
  padding: 0 5px;
  display: inline-block;
}
.group_Result .box-group_Result .search_info_internation .search_info_left ul {
  padding: 10px 10px 10px 30px;
}
.group_Result .box-group_Result .search_info_internation .search_info_left ul li {
  display: inline-block;
  margin-right: 30px;
}
.group_Result .box-group_Result .search_info_internation .search_info_left ul li .color {
  padding: 0 10px;
  color: #ffffff;
}
.group_Result .box-group_Result .search_info_internation .search_info_right {
  display: table-cell;
  width: 240px;
  vertical-align: middle;
  border-left: 1px solid rgba(255, 255, 255, 0.1);
  padding: 20px 12px;
}
.group_Result .box-group_Result .search_info_internation .search_info_right ul li {
  font-size: 16px;
  line-height: 24px;
  font-weight: bold;
  margin: 10px 0;
}
.group_Result .box-group_Result .search_info_internation .search_info_right ul li i {
  font-size: 25px;
  line-height: 25px;
}
.group_Result .box-group_Result .search_info_internation .search_info_right ul li .color {
  padding: 0 10px;
  color: #ffffff;
}
.result_internation {
  border-left: 1px solid #e9e9e9;
  border-right: 1px solid #e9e9e9;
  margin-bottom: 30px;
}
.result_internation_header {
  padding: 0 20px;
  font-size: 18px;
  line-height: 26px;
  font-weight: bold;
  text-align: center;
}
.result_internation_header .wrap_header {
  display: table;
  width: 100%;
}
.result_internation_header .header_trip {
  display: table-cell;
  width: 70px;
  padding: 15px 10px;
}
.result_internation_header .header_departure {
  display: table-cell;
  padding: 15px 10px;
}
.result_internation_header .header_time {
  display: table-cell;
  width: 260px;
  padding: 15px 20px;
}
.result_internation_header .header_journey {
  display: table-cell;
  width: 200px;
  padding: 10px;
  text-align: left;
}
.result_internation_header .header_detail {
  display: table-cell;
  width: 150px;
  padding: 15px 10px;
}
.result_internation_item {
  border-bottom: 5px solid #e5e5e5;
  padding: 30px 20px;
  font-size: 16px;
  line-height: 24px;
}
.result_internation .result_internation_item:nth-child(2) {
  padding-top: 0;
}
.result_internation_item .item_outbounds {
  display: table;
  width: 100%;
  background: #fff7e9;
  margin-bottom: 10px;
}
.result_internation_item .item_inbounds {
  display: block;
  width: 100%;
  background: #f6f6f6;
  margin-bottom: 10px;
}
.result_internation_item .item_row_detail,
.result_internation_item .item_row {
  display: table;
  width: 100%;
}
.result_internation_item .i_trip {
  display: table-cell;
  width: 70px;
  padding: 10px;
  border-bottom: 1px solid #dcdcdc;
  vertical-align: top;
}
.result_internation_item .item_row .i_trip {
  width: 70px;
  height: 70px;
  position: relative;
}
.result_internation_item .item_outbounds .item_row .i_trip:after {
  position: absolute;
  top: 10px;
  left: 10px;
  content: "";
  width: 50px;
  height: 50px;
  border: 1px solid #03afef;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  background: url(http://vemaybay10s.com/modules/product/images/icon-outbounds.svg) no-repeat 50% 50%;
  background-size: 30px;
}
.result_internation_item .item_row .i_trip {
  width: 70px;
  height: 70px;
  position: relative;
}
.result_internation_item .item_inbounds .item_row .i_trip:after {
  position: absolute;
  top: 10px;
  left: 10px;
  content: "";
  width: 50px;
  height: 50px;
  border: 1px solid #e01010;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  background: url(http://vemaybay10s.com/modules/product/images/icon-inbounds.svg) no-repeat 50% 50%;
  background-size: 30px;
}
.result_internation_item .i_departure {
  display: table-cell;
  padding: 10px;
  border-bottom: 1px solid #dcdcdc;
  vertical-align: top;
}
.result_internation_item .i_time {
  display: table-cell;
  width: 260px;
  padding: 10px 20px;
  border-bottom: 1px solid #dcdcdc;
  vertical-align: top;
}
.result_internation_item .item_row .i_time .i_time_bold {
  display: inline-block;
  font-weight: bold;
}
.result_internation_item .item_row .i_time .i_time_color {
  color: #666666;
  display: block;
  text-align: center;
}
.result_internation_item .i_journey {
  display: table-cell;
  width: 200px;
  padding: 10px;
  border-bottom: 1px solid #dcdcdc;
  vertical-align: top;
}
.result_internation_item .i_detail {
  display: table-cell;
  width: 150px;
  padding: 10px;
  border-bottom: 1px solid #dcdcdc;
  vertical-align: top;
  text-align: center;
}
.result_internation_item .i_detail .detail_button {
  background: #ade9ff;
  color: #333333;
  font-size: 16px;
  line-height: 24px;
  border: none;
  outline: none;
  padding: 8px 45px 8px 20px;
  position: relative;
  width: 120px;
}
.result_internation_item .i_detail .detail_button:after {
  position: absolute;
  top: 8px;
  right: 18px;
  font-size: 18px;
  line-height: 24px;
  font-family: "fontawesome";
  content: '\f055';
}
.result_internation_item .item_row.active .i_detail .detail_button:after {
  content: '\f056';
}
.result_internation_item .item_label .item_show {
  display: table;
  width: 100%;
}
.result_internation_item .item_label .item_show .i-label {
  display: table-cell;
  padding: 10px;
}
.result_internation_item .item_label .item_show .i-label ul li {
  display: inline-block;
  position: relative;
  padding: 0 10px;
}
.result_internation_item .item_label .item_show .i-label ul li img {
  max-height: 25px;
}
.result_internation_item .item_label .item_show .i-label ul li ~ li:after {
  position: absolute;
  top: 0;
  left: 0;
  content: '|';
}
.result_internation_item .item_label .item_show .i-label ul li .txt_text {
  padding-left: 8px;
}
.result_internation_item .item_label .item_show .i-price {
  display: table-cell;
  width: 250px;
  padding: 10px;
  font-size: 22px;
  line-height: 30px;
  font-weight: bold;
  color: #e50f0f;
}
.result_internation_item .item_label .item_show .i-choose {
  display: table-cell;
  width: 150px;
  padding: 10px;
  text-align: center;
}
.result_internation_item.selected .item_label .item_show .i-choose {
  background: #f6f6f6;
}
.result_internation_item .item_label .item_show .i-choose .checkRadio {
  background-color: #03afef;
  padding: 10px;
  color: #ffffff;
  width: 120px;
}
.result_internation_item .item_label .item_show .i-choose .checkRadio .txt {
  padding-right: 10px;
}
.result_internation_item .item_label .item_show .i-choose .checkRadio {
  background: #00AEEF;
}
.result_internation_item .item_label .item_show .i-choose .checkRadio .style_radio .style_icon {
  border-color: #ffffff;
}
.result_internation_item .item_label .item_show .i-choose .checkRadio .style_radio input[type=radio]:checked ~ .style_icon:after {
  background: #ffffff;
}
.result_internation_item .item_label .item_hidden {
  background: #f6f6f6;
  padding: 20px;
  border-bottom: 1px solid #e5e5e5;
}
.result_internation_item .item_label .item_hidden .item_button {
  text-align: right;
  margin-top: 10px;
  margin-bottom: 10px;
}
ul.from-to:after {
  display: block;
  content: '';
  clear: both;
}
ul.from-to li {
  float: left;
  padding: 0 10px;
  font-size: 30px;
  line-height: 40px;
}
ul.from-to li .airport {
  display: block;
  font-size: 14px;
  line-height: 20px;
  color: rgba(255, 255, 255, 0.6);
}
.group_Result .box-group_Result .search_info .flight-info {
  padding-left: 85px;
  font-size: 30px;
  line-height: 40px;
  position: relative;
  min-height: 65px;
}
.group_Result .box-group_Result .search_info .flight-info:after {
  position: absolute;
  content: '';
  width: 64px;
  height: 64px;
  top: 50%;
  left: 0;
  -webkit-transform: translate(0, -50%);
  -moz-transform: translate(0, -50%);
  -o-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
  background: #ffffff;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  -webkit-background-size: 45px 20px;
  background-size: 45px 20px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
.group_Result .box-group_Result .search_info .flight-info.outbounds:after {
  background-image: url(http://vemaybay10s.com/modules/product/images/icon-outbounds.svg);
}
.group_Result .box-group_Result .search_info .flight-info.inbounds:after {
  background-image: url(http://vemaybay10s.com/modules/product/images/icon-inbounds.svg);
}
.slider_date {
  border-left: 1px solid #e5e5e5;
}
.slider_date .item {
  background: #f6f6f6;
  border-right: 1px solid #e5e5e5;
  border-bottom: 1px solid #e5e5e5;
  text-align: center;
}
.slider_date .item a {
  display: block;
  padding: 15px 0;
  width: 100%;
  height: 100%;
  font-size: 16px;
  line-height: 22px;
  border-top: 3px solid transparent;
  color: #444444;
}
.slider_date .item.current a {
  border-top: 3px solid #ff9c00;
  background: #ffffff;
  color: #147fc3;
}
.slider_date .item a span {
  display: block;
}
.slider_date .item a span.bold {
  text-transform: uppercase;
  font-weight: bold;
}
.search_date .date_title {
  border: 1px solid #e5e5e5;
  padding: 15px 40px 15px 20px;
  font-size: 16px;
  line-height: 24px;
  overflow: hidden;
  -webkit-text-overflow: ellipsis;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  position: relative;
  cursor: pointer;
  text-align: left;
  text-transform: uppercase;
  background: #ffffff;
  display: none;
}
.search_date .date_title:after {
  position: absolute;
  font-family: "fontawesome";
  content: '\f107';
  top: 50%;
  right: 10px;
  color: #20547b;
  font-size: 35px;
  line-height: 45px;
  -webkit-transform: translate(0, -50%);
  -moz-transform: translate(0, -50%);
  -o-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
}
.search_date ul {
  width: 100%;
  display: table;
}
.search_date ul li {
  display: table-cell;
  background: #f6f6f6;
  border-right: 1px solid #e5e5e5;
  border-bottom: 1px solid #e5e5e5;
  text-align: center;
  vertical-align: top;
}
.search_date ul li:first-child {
  border-left: 1px solid #e5e5e5;
}
.search_date ul li a {
  display: block;
  padding: 15px 0;
  width: 100%;
  height: 100%;
  font-size: 16px;
  line-height: 22px;
  border-top: 3px solid transparent;
  color: #444444;
}
.search_date ul li.current a {
  border-top: 3px solid #c71d22;
  background: #ffffff;
  color: #1068b0;
}
.search_date ul li a span {
  display: block;
}
.search_date ul li a span.bold {
  text-transform: uppercase;
  font-weight: bold;
}
table.tbl-result {
  width: 100%;
}
table.tbl-result thead tr.row-item {
  border-left: 1px solid #e5e5e5;
  border-right: 1px solid #e5e5e5;
}
table.tbl-result thead tr.row-item td {
  border-bottom: 1px solid #e5e5e5;
  font-size: 18px;
  line-height: 24px;
  padding: 10px;
  font-weight: bold;
  text-align: center;
}
table.tbl-result tbody tr.row-item {
  border-left: 1px solid #e5e5e5;
  border-right: 1px solid #e5e5e5;
}
table.tbl-result tbody tr.row-item td {
  font-size: 16px;
  line-height: 22px;
  padding: 10px;
  border-bottom: 1px solid #e5e5e5;
  text-align: center;
  vertical-align: middle;
}
table.tbl-result tbody tr.row-item.row0 td {
  background: #fff7e9;
}
table.tbl-result tbody tr.row-item.row1 td {
  background: #ffffff;
}
table.tbl-result tbody tr.row-item td.f-price {
  text-align: left;
  font-size: 20px;
  line-height: 25px;
  color: #e50f0f;
  padding-left: 20px;
  padding-right: 20px;
}
table.tbl-result tbody tr.row-item td.f-time .f-duration {
  font-size: 14px;
  line-height: 18px;
  color: #777777;
  display: block;
  font-weight: bold;
}
table.tbl-result tbody tr.row-item td.f-logo span {
  display: inline-block;
  padding: 0 5px;
}
table.tbl-result tbody tr.row-item td.f-booking .checkRadio {
  background-color: #147fc3;
  padding: 10px;
  color: #ffffff;
  height: 40px;
  width: 120px;
}
table.tbl-result tbody tr.row-item td.f-booking .checkRadio .txt {
  padding-right: 10px;
}
table.tbl-result tbody tr.row-item.selected td.f-booking .checkRadio {
  background: #00AEEF;
}
table.tbl-result tbody tr.row-item.selected td.f-booking .checkRadio .style_radio .style_icon {
  border-color: #ffffff;
}
table.tbl-result tbody tr.row-item.selected td.f-booking .checkRadio .style_radio input[type=radio]:checked ~ .style_icon:after {
  background: #ffffff;
}
table.tbl-result tbody tr.row-item.selected td.f-booking {
  background: #f6f6f6;
  border-left: 1px solid #e5e5e5;
  border-bottom: 1px solid #f6f6f6;
}
table.tbl-result tbody tr.flight-info-detail td {
  background: #f6f6f6;
  border: 1px solid #d6d6d6;
  border-top: none;
}
.boxDetalFlight {
  padding: 20px;
}
.boxInfoPrice .box-info-price-title {
  font-size: 25px;
  line-height: 35px;
  text-transform: uppercase;
  color: #ffffff;
  background: #00AEEF;
  text-align: center;
  padding: 12px;
  overflow: hidden;
  white-space: nowrap;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  height: 60px;
}
.boxInfoPrice .box-info-content {
  background: #ffffff;
  padding: 12px;
  border-bottom: 1px solid #d3d3d3;
}
.boxInfoPrice .box-info-content .info-flight,
.boxInfoPrice .box-info-content .info-price,
.boxInfoPrice .box-info-content .info-luggage {
  margin-bottom: 20px;
}
.boxInfoPrice .fTitle {
  font-size: 16px;
  line-height: 24px;
  padding-bottom: 10px;
  margin-bottom: 15px;
  text-transform: uppercase;
  border-bottom: 1px solid #e5e5e5;
  color: #c61414;
}
.boxInfoPrice .box-info-content .info-flight .fContent .node {
  width: 34%;
  float: left;
  padding-left: 20px;
  font-size: 14px;
  line-height: 25px;
}
.boxInfoPrice .box-info-content .info-flight .fContent .node strong {
  display: inline-block;
}
.boxInfoPrice .box-info-content .info-flight .fContent .node:first-child {
  width: 32%;
  padding-left: 0;
}
table.table_info_price {
  width: 100%;
}
table.table_info_price thead tr td {
  text-align: center;
  font-weight: bold;
  padding: 8px 5px;
  border: none !important;
  background: #ffffff !important;
}
table.table_info_price thead tr td:nth-child(1) {
  text-align: left;
}
table.table_info_price tbody tr td {
  padding: 8px 5px;
  border: none !important;
  border-bottom: 1px solid #e5e5e5 !important;
  background: #ffffff !important;
  color: #c61414;
  text-align: right;
}
table.table_info_price tfoot tr td {
  padding: 8px 5px;
  background: none !important;
  border: none !important;
}
table.table_info_price tfoot tr td.total {
  font-size: 16px;
  line-height: 24px;
  text-align: right;
  padding: 8px 5px;
}
table.table_info_price tfoot tr td.total span {
  font-size: 20px;
  line-height: 30px;
  font-weight: bold;
  color: #c61414;
  display: inline-block;
}
table.table_info_price tbody tr td:nth-child(1) {
  color: #333333;
  text-align: left;
}
table.table_info_price tbody tr td:nth-child(2) {
  color: #333333;
  text-align: center;
}
table.table_info_price1 {
  width: 100%;
  font-size: 16px;
  line-height: 25px;
  margin-bottom: 15px;
}
table.table_info_price1 thead tr td {
  text-align: center;
  font-weight: bold;
  padding: 15px;
  background: #ffffff !important;
  border: 1px solid #e3e3e3;
}
table.table_info_price1 thead tr td:nth-child(1) {
  text-align: left;
}
table.table_info_price1 tbody tr td {
  padding: 15px;
  background: #ffffff !important;
  border: 1px solid #e3e3e3;
  color: #c61414;
  text-align: right;
}
table.table_info_price1 tfoot tr td {
  padding: 8px 5px;
  background: none !important;
  border: none !important;
}
table.table_info_price1 tfoot tr td.total {
  font-size: 16px;
  line-height: 24px;
  text-align: right;
  padding: 8px 5px;
}
table.table_info_price1 tfoot tr td.total span {
  font-size: 20px;
  line-height: 30px;
  font-weight: bold;
  color: #c61414;
  display: inline-block;
}
table.table_info_price1 tbody tr td:nth-child(1) {
  color: #333333;
  text-align: left;
}
table.table_info_price1 tbody tr td:nth-child(2) {
  color: #333333;
  text-align: center;
}
.group-flight-info {
  display: table-cell;
  width: 100%;
}
.group-flight-info .row-flight-info {
  display: table-row;
  padding: 10px 0;
  border-top: 1px solid #e5e5e5;
}
.group-flight-info .row-flight-info:first-child {
  border-top: none;
}
.group-flight-info .row-flight-info .LRow-flight-info {
  display: table-cell;
  width: 180px;
  padding: 10px 20px 10px 0;
  position: relative;
  font-weight: bold;
  font-size: 14px;
  line-height: 24px;
}
.group-flight-info .row-flight-info .LRow-flight-info:after {
  position: absolute;
  content: ':';
  top: 10px;
  right: 10px;
}
.group-flight-info .row-flight-info .RRow-flight-info {
  display: table-cell;
  padding: 10px 0 10px 10px;
  font-size: 14px;
  line-height: 24px;
}
.group-flight-info .row-flight-info .form-control {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -o-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  margin-bottom: 12px;
  border: 1px solid #d8d8d8;
  outline: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin-top: 5px;
}
.group-flight-info .row-flight-info select.form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  position: relative;
  padding-right: 30px;
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="12" height="6" viewBox="0 0 12 6"><polygon points="0,0 12,0 6,6" style="fill: rgb(45, 45, 45)"></polygon></svg>');
  background-size: 12px 6px;
  background-position: right 10px center;
  background-repeat: no-repeat;
}
.style_box_DV {
  display: table;
  width: 100%;
}
.style_box_DV .bTitle {
  display: table-cell;
  width: 75px;
  background: #f79a4d;
  border: 1px solid #f79a4d;
  color: #ffffff;
  font-size: 40px;
  line-height: 70px;
  font-weight: bold;
  text-align: center;
  vertical-align: middle;
}
.style_box_DV .bContent {
  border: 1px solid #f79a4d;
  display: table-cell;
  padding: 10px;
}
.style_box_DV .bContent .totalPrice {
  text-align: right;
  font-size: 16px;
  line-height: 25px;
  font-weight: bold;
}
.style_box_DV .bContent .totalPrice span {
  font-weight: normal;
  color: #c61414;
  padding-left: 15px;
  display: inline-block;
}
.style_box_DV .bContent .totalPrice.bold span {
  font-weight: bold;
  font-size: 25px;
  line-height: 30px;
}
.boxCondition .box-condition-title {
  font-size: 25px;
  line-height: 35px;
  text-transform: uppercase;
  color: #ffffff;
  background: #7f7f7f;
  text-align: center;
  padding: 12px;
  overflow: hidden;
  white-space: nowrap;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  height: 60px;
}
.boxCondition .box-condition-content {
  background: #ffffff;
  padding: 12px;
  border-bottom: 1px solid #d3d3d3;
}
.boxCondition .fTitle {
  font-size: 16px;
  line-height: 24px;
  padding-bottom: 10px;
  margin-bottom: 15px;
  text-transform: uppercase;
  border-bottom: 1px solid #e5e5e5;
  color: #c61414;
}
.group-button {
  margin-bottom: 30px;
}
button.button_continues.btn,
button.button_continues,
a.button_continues.btn,
a.button_continues {
  background: #ff9c00;
  color: #ffffff;
  font-size: 20px;
  line-height: 30px;
  padding: 10px 30px;
  height: auto;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  font-weight: bold;
  text-transform: uppercase;
}
button.button_continues:hover,
a.button_continues:hover {
  background: #ff9c00;
}
button.button_continues span,
a.button_continues span {
  color: inherit;
  font-size: 20px;
  line-height: 30px;
}
button.button_continues:focus,
button.button_continues:active,
a.button_continues:focus,
a.button_continues:active {
  outline: 0 !important;
}
button.button_continues.button_continues_l span:before,
a.button_continues.button_continues_l span:before {
  font-family: "fontawesome";
  content: "\f104";
  padding-right: 10px;
}
button.button_continues.button_continues_l span:after,
a.button_continues.button_continues_l span:after {
  font-family: "fontawesome";
  content: "";
  padding-right: 0;
}
button.button_continues span:after,
a.button_continues span:after {
  font-family: "fontawesome";
  content: "\f105";
  padding-left: 10px;
}
.mod_info_custumer {
  width: 100%;
  background: #ffffff;
}
.mod_info_custumer .mod_main {
  float: left;
  width: 770px;
  width: -moz-calc(100% - 400px);
  width: -webkit-calc(100% - 400px);
  width: -o-calc(100% - 400px);
  width: calc(100% - 400px);
}
.mod_info_custumer .mod_sidebar {
  width: 370px;
  float: right;
}
.div_note {
  margin-bottom: 15px;
  border-bottom: 1px solid #e5e5e5;
  padding-bottom: 10px;
  font-size: 16px;
  line-height: 25px;
}
.formContact {
  margin-bottom: 20px;
  font-size: 16px;
  line-height: 24px;
}
.formContact .rowInput {
  margin-bottom: 10px;
}
.formContact .rowInput .rowInputLeft {
  width: 48.5%;
  float: left;
}
.formContact .rowInput .rowInputRight {
  width: 48.5%;
  float: right;
}
.formContact .rowInput .rowInputTable {
  display: table;
  width: 100%;
}
.formContact .rowInput .rowInputTable,
.formContact .rowInput .rowInputGroup {
  margin-bottom: 10px;
}
/*bo sung*/
.rowInputGroup {
  position: relative;
}
.formContact .rowInput .rowInputGroup.capchar {
  margin-bottom: 0;
}
.formContact .rowInput .rowInputGroup.capchar::after {
  content: '';
  display: block;
  clear: both;
}
.rowInputGroup.capchar label {
  bottom: -40px;
  top: auto;
  z-index: 2;
}
/*bo sung*/
.formContact .rowInput .rowInputTable .rowInputTableLeft {
  display: table-cell;
  width: 125px;
  padding-right: 15px;
}
.formContact .rowInput .rowInputTable .rowInputTableRight {
  display: table-cell;
}
.formContact .rowInput label.LTitle {
  margin-bottom: 5px;
  font-weight: normal;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
}
.formContact .rowInput label.LTitle span {
  color: #e81f1f;
}
.formContact .rowInput label.LTitle .note {
  font-size: 14px;
  line-height: 25px;
  color: #a8a8a8;
}
.formContact .rowInput .form-control {
  height: 40px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.formContact .rowInput textarea.form-control {
  height: 100px;
  resize: none;
}
.formContact .rowInput select.form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  position: relative;
  padding-right: 30px;
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="12" height="6" viewBox="0 0 12 6"><polygon points="0,0 12,0 6,6" style="fill: rgb(45, 45, 45)"></polygon></svg>');
  background-size: 12px 6px;
  background-position: right 10px center;
  background-repeat: no-repeat;
}
.formContact .rowInput .input-group .input-group-image {
  display: table-cell;
  padding-left: 15px;
  vertical-align: middle;
}
.tableCustomer {
  width: 100%;
  font-size: 16px;
  line-height: 24px;
}
.tableCustomer tr td {
  padding-bottom: 15px;
  vertical-align: top;
}
.tableCustomer tr td:nth-child(1) {
  width: 120px;
  padding-right: 10px;
}
.tableCustomer tr td:nth-child(2) {
  width: 125px;
  padding-right: 10px;
}
.tableCustomer tr td:nth-child(4) {
  width: 235px;
  padding-left: 10px;
}
.tableCustomer tr td .form-control {
  height: 40px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.tableCustomer tr td select.form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  position: relative;
  padding-left: 5px;
  padding-right: 20px;
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="12" height="6" viewBox="0 0 12 6"><polygon points="0,0 12,0 6,6" style="fill: rgb(45, 45, 45)"></polygon></svg>');
  background-size: 12px 6px;
  background-position: right 5px center;
  background-repeat: no-repeat;
}
.tableCustomer tr td .input-group {
  width: 100%;
}
.tableCustomer tr td .input-group .form-control {
  margin-left: 2%;
  width: 30%;
}
.list_checkbox ul li {
  display: block;
  margin-bottom: 10px;
}
.list_checkbox ul li label {
  font-weight: normal;
}
.box-summary {
  margin: -20px -15px 0 -15px;
}
.box-summary .summary-title {
  font-size: 20px;
  line-height: 30px;
  padding: 15px;
  background: #f0f0f0;
  text-transform: uppercase;
}
.box-summary .summary-content {
  padding: 15px 15px 30px 15px;
}
.style_box_book {
  display: table;
  width: 100%;
  margin-bottom: 15px;
}
.style_box_book .bTitle {
  display: table-cell;
  background: #ff9c00;
  border: 1px solid #ff9c00;
  color: #ffffff;
  font-size: 40px;
  line-height: 40px;
  font-weight: bold;
  text-align: center;
  vertical-align: middle;
  padding: 0 10px;
  width: 1%;
  white-space: nowrap;
}
.style_box_book .bContent {
  border: 1px solid #ff9c00;
  display: table-cell;
  padding: 5px 10px;
  font-size: 20px;
  line-height: 30px;
  width: 100%;
}
.style_box_book .bContent .info_price {
  font-size: 16px;
  line-height: 24px;
}
.style_box_book .bContent .info_price .price {
  font-size: 35px;
  line-height: 45px;
  color: #c61414;
  display: inline-block;
  font-weight: bold;
}
.box-summary .summary-content .total_price {
  font-size: 14px;
  line-height: 22px;
}
.box-summary .summary-content .total_price span {
  display: inline-block;
  font-size: 35px;
  line-height: 45px;
  font-weight: bold;
  color: #c61414;
}
.info-outbounds {
  margin-bottom: 20px;
  padding-bottom: 15px;
  border-bottom: 1px solid #e7e7e7;
}
.info-outbounds .info-outbounds-left {
  float: left;
  max-width: 40%;
  font-size: 14px;
  line-height: 18px;
  padding-bottom: 5px;
}
.info-outbounds .info-outbounds-right {
  float: right;
  max-width: 55%;
  position: relative;
  padding-left: 40px;
  font-size: 14px;
  line-height: 18px;
  padding-bottom: 5px;
}
/* .info-outbounds .info-outbounds-right:after{
	position: absolute;
	top:0;
	left: 0;
	content: "";
	width: 32px;
	height: 32px;
	border:1px solid #03afef;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	border-radius:50%;
	background: url(../images/icon-outbounds.svg)no-repeat 50% 50%;
	background-size: 24px 10px;
} */
.info-outbounds .info-outbounds-right {
  background: url(http://vemaybay10s.com/modules/product/images/maybay_xanh.png) left 0px top 5px no-repeat;
}
.info-inbounds {
  margin-bottom: 20px;
  padding-bottom: 15px;
  border-bottom: 1px solid #e7e7e7;
}
.info-inbounds .info-inbounds-right {
  float: right;
  max-width: 40%;
  font-size: 14px;
  line-height: 18px;
  padding-bottom: 5px;
}
.info-inbounds .info-inbounds-left {
  float: left;
  max-width: 55%;
  position: relative;
  padding-right: 40px;
  font-size: 14px;
  line-height: 18px;
  padding-bottom: 5px;
}
/* .info-inbounds .info-inbounds-left:after{
	position: absolute;
	top:0;
	right: 0;
	content: "";
	width: 32px;
	height: 32px;
	border:1px solid #e01010;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	border-radius:50%;
	background: url(../images/icon-inbounds.svg)no-repeat 50% 50%;
	background-size: 24px 10px;
} */
.info-inbounds .info-inbounds-left {
  background: url(http://vemaybay10s.com/modules/product/images/maybay_do.png) right 0px top 5px no-repeat;
}
.table_price {
  border-bottom: 1px solid #e7e7e7;
  margin-bottom: 20px;
  padding-bottom: 10px;
}
.table_price .table_price_title {
  margin-bottom: 10px;
  text-transform: uppercase;
  font-weight: bold;
}
.table_price table {
  margin-bottom: 15px;
}
.table_price table tr td {
  font-size: 14px;
  line-height: 25px;
}
.table_price_total {
  margin-bottom: 20px;
}
.table_price_total table {
  margin-bottom: 15px;
}
.table_price_total table tr td {
  font-size: 14px;
  line-height: 25px;
  vertical-align: top;
}
.table_price_total table tr td.bold_price {
  color: #e81f1f;
  font-size: 25px;
  line-height: 35px;
}
.method_pay {
  margin-bottom: 30px;
}
.method_pay .method_pay_item {
  margin-bottom: 30px;
}
.method_pay .method_pay_item .method_pay_title {
  display: table;
  width: 100%;
}
.method_pay .method_pay_item .method_pay_title .method_pay_lTitle {
  display: table-cell;
  width: 100%;
  padding: 30px 30px 30px 110px;
  border: 2px solid #e0e0e0;
  border-right: 2px solid transparent;
  position: relative;
}
.method_pay .method_pay_item.selected .method_pay_title .method_pay_lTitle {
  border-color: #ff9c00;
  border-right-color: transparent;
  border-bottom: none;
}
.method_pay .method_pay_item .method_pay_title .method_pay_rTitle {
  display: table-cell;
  width: 1%;
  padding: 30px;
  border: 2px solid #e0e0e0;
  border-left: none;
  background: #f6f6f6;
  vertical-align: middle;
}
.method_pay .method_pay_item.selected .method_pay_title .method_pay_rTitle {
  border-color: #ff9c00;
  border-bottom: none;
}
.method_pay .method_pay_item .method_pay_title .method_pay_lTitle .method_pay_lTitle1 {
  font-size: 20px;
  line-height: 30px;
  margin-bottom: 8px;
  color: #147fc3;
}
.method_pay .method_pay_item.selected .method_pay_title .method_pay_lTitle .method_pay_lTitle1 {
  color: #ff9c00;
}
.method_pay .method_pay_item .method_pay_title .method_pay_lTitle:before {
  position: absolute;
  top: 50%;
  left: 30px;
  font-family: "fontawesome";
  -webkit-transform: translate(0, -50%);
  -moz-transform: translate(0, -50%);
  -o-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #147fc3;
  font-size: 50px;
  line-height: 70px;
}
.method_pay .method_pay_item.selected .method_pay_title .method_pay_lTitle:before {
  color: #ff9c00;
}
.method_pay .method_pay_item .method_pay_content {
  background-color: #f6f6f6;
  padding: 25px;
  border: 2px solid #ff9c00;
  border-top: none;
}
.pay_compay {
  margin-bottom: 20px;
}
.pay_compay .pay_compay_title {
  font-size: 16px;
  line-height: 20px;
  display: table;
  background: #e1e1e1;
  width: 100%;
}
.pay_compay .pay_compay_title .pay_compay_lTitle {
  display: table-cell;
  font-size: 16px;
  line-height: 20px;
  width: 100%;
  padding: 10px 15px;
}
.pay_compay .pay_compay_title .pay_compay_rTitle {
  padding: 10px;
  display: table-cell;
  vertical-align: middle;
}
.pay_compay .before {
  font-size: 14px;
  line-height: 20px;
  padding: 7px 15px 7px 50px;
  position: relative;
  background: #ffffff;
  border: 1px solid #c6c6c6;
  border-top: none;
}
.pay_compay .before:before {
  position: absolute;
  font-family: "fontawesome";
  top: 7px;
  left: 15px;
  color: #147fc3;
}
.pay_bank {
  margin-bottom: 20px;
}
.pay_bank .pay_bank_title {
  font-size: 16px;
  line-height: 20px;
  display: table;
  background: #e1e1e1;
  width: 100%;
}
.pay_bank .pay_bank_title .pay_bank_lTitle {
  display: table-cell;
  font-size: 16px;
  line-height: 20px;
  width: 100%;
  padding: 10px 15px;
}
.pay_bank .pay_bank_title .pay_bank_rTitle {
  padding: 10px;
  display: table-cell;
  vertical-align: middle;
}
.pay_bank .before {
  font-size: 14px;
  line-height: 20px;
  padding: 7px 15px 7px 15px;
  position: relative;
  background: #ffffff;
  border: 1px solid #c6c6c6;
  border-top: none;
}
.method_pay .method_pay_item .method_pay_content .pay_note {
  position: relative;
  padding-left: 35px;
  font-size: 16px;
  line-height: 25px;
}
.method_pay .method_pay_item .method_pay_content .pay_note:after {
  position: absolute;
  top: 0;
  left: 0;
  font-family: "fontawesome";
  content: "\f071";
  color: #e81f1f;
  font-size: 20px;
  line-height: 30px;
}
.method_pay .method_pay_item .method_pay_content .div_line {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #d6d6d6;
}
.info_id_order {
  margin-bottom: 30px;
}
.info_id_order .info_left {
  width: 230px;
  float: left;
  padding-top: 15px;
}
.info_id_order .info_left .info_logo {
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid #cccccc;
}
.info_id_order .info_left .info_logo img {
  margin: 0 auto;
  display: block;
}
.info_id_order .info_left .info_id {
  text-align: center;
  font-size: 16px;
  line-height: 25px;
}
.info_id_order .info_left .info_id span {
  color: #e81f1f;
}
.info_id_order .info_right {
  float: right;
  width: -moz-calc(100% - 250px);
  width: -webkit-calc(100% - 250px);
  width: -o-calc(100% - 250px);
  width: calc(100% - 250px);
}
.info_order {
  font-size: 16px;
  line-height: 24px;
}
.info_table {
  margin-bottom: 15px;
  width: 100%;
}
.info_table tr td {
  padding: 8px 0;
  border-bottom: 1px solid #dddddd;
  vertical-align: top;
  font-size: 14px;
  line-height: 24px;
}
.info_table tr td:nth-child(1) {
  width: 120px;
  font-weight: bold;
}
.info_table tr td:nth-child(2) {
  width: 20px;
  text-align: center;
}
.label_pay {
  font-size: 18px;
  line-height: 26px;
  text-transform: uppercase;
}
.style_checkbox .style_icon:after {
  color: #e32f44;
}
.info-genaral {
  margin-bottom: 10px;
}
.info-genaral .before {
  position: relative;
  padding-left: 20px;
}
.info-genaral .before:before {
  position: absolute;
  top: 0;
  left: 0;
  font-family: "fontawesome";
}
.w_info_flight {
  margin-bottom: 10px;
}
.w_info_flight .info_flight_title {
  margin: 0 -15px;
  background: #f6f6f6;
  font-size: 16px;
  line-height: 24px;
  padding: 13px 20px 13px 70px;
  min-height: 50px;
  position: relative;
}
.w_info_flight .info_flight_title .LTitle {
  font-weight: bold;
  float: left;
}
.w_info_flight .info_flight_title .rTitle {
  color: #777777;
  float: right;
}
.w_info_flight .info_flight_title .rTitle span {
  font-weight: bold;
  color: #333333;
}
.w_info_flight .info_flight_title.outbounds {
  background: #f6f6f6 url(http://vemaybay10s.com/modules/product/images/maybay_xanh.png) left 12px top 10px no-repeat;
}
/* .w_info_flight .info_flight_title.outbounds:after{
	position: absolute;
	top: 10px;
	left: 12px;
	content: "";
	width: 32px;
	height: 32px;
	// border: 1px solid #03afef;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
} */
.w_info_flight .info_flight_title.inbounds {
  background: #f6f6f6 url(http://vemaybay10s.com/modules/product/images/maybay_do.png) left 12px top 10px no-repeat;
}
/* s.w_info_flight .info_flight_title.inbounds:after{
	position: absolute;
	top: 10px;
	left: 12px;
	content: "";
	width: 32px;
	height: 32px;
	// border: 1px solid #e01010;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	background: url(../images/maybay_do.png)no-repeat 50% 50%;
} */
.w_info_flight .info_flight_content {
  padding: 10px;
}
.w_info_flight .info_flight_content .info_flight_content_L {
  width: 75px;
  float: left;
}
.w_info_flight .info_flight_content .info_flight_content_R {
  float: right;
  width: -moz-calc(100% - 80px);
  width: -webkit-calc(100% - 80px);
  width: -o-calc(100% - 80px);
  width: calc(100% - 80px);
}
.box_link_share {
  margin-bottom: 20px;
}
.box_link_share ul {
  margin: 0 -3px;
}
.box_link_share ul:after {
  clear: both;
  content: '';
  display: block;
}
.box_link_share ul li {
  float: left;
  margin: 3px;
  max-width: 100%;
  max-width: -webkit-calc(94%);
  max-width: -moz-calc(94%);
  max-width: calc(94%);
}
.box_link_share ul li a {
  display: block;
  width: 100%;
  font-size: 16px;
  line-height: 24px;
  padding: 10px 15px;
  overflow: hidden;
  white-space: nowrap;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  color: #333333;
  background: #f6f6f6;
  border-bottom: 1px solid #dedede;
  border-right: 1px solid #dedede;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.box_link_share ul li a:hover {
  color: #ffffff;
  background: #f79a4d;
}
.box_link_share ul li a i {
  padding-right: 10px;
  color: inherit;
  font-size: 16px;
  line-height: 24px;
}
#rangeValue {
  margin: 10px 5px;
  position: relative;
  height: 30px;
}
#rangeValue span {
  position: absolute;
  top: 0;
  -webkit-transform: translate(-50%, 0);
  -moz-transform: translate(-50%, 0);
  -o-transform: translate(-50%, 0);
  -ms-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
}
@media screen and (max-width: 1169px) {
  .vnt-tax-fitter .vnt-info-step {
    display: none;
  }
}
@media screen and (max-width: 1024px) {
  .vnt-banner {
    min-height: inherit;
  }
  .vnt-about-prod {
    padding: 20px 0;
  }
  .mod_info_custumer .mod_main {
    float: left;
    width: 100%;
  }
  .mod_info_custumer .mod_sidebar {
    display: none;
  }
  .vnt-step-booking .step_title {
    display: block;
  }
  .vnt-step-booking ul li .s-text {
    display: none;
  }
  .group_Result .box-group_Result .search_info {
    display: block;
  }
  .group_Result .box-group_Result .search_info .search_info_left {
    display: block;
  }
  .group_Result .box-group_Result .search_info .search_info_right {
    display: block;
    width: 100%;
    text-align: left;
    border-left: none;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  .group_Result .box-group_Result .search_info .search_info_right .i-icon {
    display: inline-block;
  }
  .group_Result .box-group_Result .search_info .search_info_right .date {
    display: inline-block;
    padding-left: 10px;
  }
  ul.from-to li {
    font-size: 20px;
    line-height: 30px;
  }
  .group_Result .box-group_Result .search_info .flight-info {
    font-size: 20px;
    line-height: 30px;
    padding-left: 70px;
    min-height: 50px;
    margin-bottom: 10px;
  }
  .group_Result .box-group_Result .search_info .flight-info::after {
    width: 50px;
    height: 50px;
  }
  .info_id_order .info_left {
    float: none;
    margin: 0 auto 15px auto;
  }
  .info_id_order .info_right {
    width: 100%;
    float: none;
  }
  .search_date {
    position: relative;
  }
  .search_date .date_title {
    display: block;
  }
  .search_date.show ul {
    display: block;
  }
  .search_date ul {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    display: none;
    z-index: 100;
    background: #ffffff;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -o-box-shadow: none;
    -ms-box-shadow: none;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
  }
  .search_date ul li {
    display: block;
    border-left: 1px solid #e5e5e5;
  }
  .search_date ul li a {
    padding: 10px 20px;
    text-align: left;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }
  .search_date ul li a span {
    display: inline;
  }
  .search_date ul li a span.bold {
    font-weight: normal;
    position: relative;
    text-transform: none;
  }
  .search_date ul li a span.bold:after {
    content: ',';
  }
  .search_date ul li.current a {
    border-top: 3px solid transparent;
    background: transparent;
    color: #444444;
  }
  .search_date ul li a:hover {
    background: #e6e6e6;
  }
  .vnt-tax-fitter .vnt-tax {
    float: none;
    text-align: center;
    margin-bottom: 20px;
    margin-right: 0;
  }
  .vnt-tax-fitter .vnt-fitter-booking .note-search {
    display: none;
  }
  .vnt-tax-fitter .vnt-fitter-booking {
    float: none;
    text-align: left;
    max-width: none;
  }
  .vnt-tax-fitter .w_fixed_title {
    min-height: 50px;
  }
  .vnt-tax-fitter .vnt-fitter-booking .div_title {
    display: block;
    text-align: center;
    overflow: hidden;
    white-space: nowrap;
    -ms-text-overflow: ellipsis;
    text-overflow: ellipsis;
  }
  .vnt-tax-fitter .vnt-fitter-booking .div_title.fixed_title {
    position: fixed;
    bottom: 10px;
    right: 10px;
    display: inline-block;
    z-index: 300;
  }
  .style_fitter_mobile .divmm {
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    bottom: 0;
    visibility: hidden;
    text-align: left;
    z-index: 99999;
  }
  .style_fitter_mobile .divmm .mmContent {
    width: 100%;
    height: 100%;
    max-width: 560px;
    padding-left: 62px;
    margin: 0 0 0 auto;
    position: relative;
    top: 0;
    right: 0;
    z-index: 101;
    -webkit-transform: translate(100%, 0);
    -moz-transform: translate(100%, 0);
    -o-transform: translate(100%, 0);
    -ms-transform: translate(100%, 0);
    transform: translate(100%, 0);
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    pointer-events: none;
  }
  .style_fitter_mobile .divmm .mmContent .mmMain {
    position: relative;
    width: 100%;
    max-height: 100%;
    overflow-y: auto;
    background-color: #ffffff;
    color: #000000;
    pointer-events: auto;
  }
  .style_fitter_mobile .divmm .mmContent .close-mmenu {
    position: absolute;
    top: 46px;
    left: 300px;
    width: 60px;
    height: 60px;
    background: #ffffff;
    cursor: pointer;
    -webkit-transition: all 0.8s ease 0.2s;
    -moz-transition: all 0.8s ease 0.2s;
    -o-transition: all 0.8s ease 0.2s;
    transition: all 0.8s ease 0.2s;
    opacity: 0;
    pointer-events: auto;
  }
  .style_fitter_mobile .divmm .mmContent .close-mmenu:after {
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 30px;
    line-height: 40px;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color: #333333;
    font-family: "fontawesome";
    content: "\f00d";
  }
  .style_fitter_mobile .divmm.show {
    visibility: visible;
  }
  .style_fitter_mobile .divmm.show .mmContent {
    -webkit-transform: translate(0%, 0%);
    -moz-transform: translate(0%, 0%);
    -o-transform: translate(0%, 0%);
    -ms-transform: translate(0%, 0%);
    transform: translate(0%, 0%);
  }
  .style_fitter_mobile .divmm.show .mmContent .close-mmenu {
    left: 0;
    top: 0;
    opacity: 1;
  }
  .style_fitter_mobile .divmm .divmmbg {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 100;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.8s ease;
    -moz-transition: all 0.8s ease;
    -o-transition: all 0.8s ease;
    transition: all 0.8s ease;
  }
  .style_fitter_mobile .divmm.show .divmmbg {
    opacity: 1;
    visibility: visible;
  }
  .box-fitter-booking {
    visibility: visible;
    opacity: 1;
    margin-top: 0;
    position: relative;
    width: 100%;
    border: none;
  }
  .box-fitter-booking:before,
  .box-fitter-booking:after {
    display: none;
  }
  .box-fitter-booking .close_search {
    display: none;
  }
  .result_internation_header {
    display: none;
  }
  .result_internation .result_internation_item:nth-child(2) {
    padding-top: 20px;
  }
  .result_internation_item {
    padding: 20px 10px;
  }
  .result_internation_item .item_row .i_departure {
    display: none;
  }
  .result_internation_item .i_time {
    width: auto;
  }
  .result_internation_item .i_journey {
    width: 140px;
  }
  .result_internation_item .i_detail .detail_button {
    width: auto;
    text-indent: -99999px;
    padding: 8px 20px 8px 20px;
  }
  .result_internation_item .i_detail .detail_button::after {
    text-indent: 0;
    right: 12px;
  }
  .result_internation_item .i_detail {
    width: 60px;
  }
  .result_internation_item .item_label .item_show .i-choose .checkRadio {
    width: auto;
  }
  .result_internation_item .item_label .item_show .i-choose {
    text-align: right;
    width: 120px;
  }
  .result_internation_item .item_row_detail {
    display: block;
  }
  .result_internation_item .item_row_detail .i_departure,
  .result_internation_item .item_row_detail .i_time,
  .result_internation_item .item_row_detail .i_journey,
  .result_internation_item .item_row_detail .i_detail,
  .result_internation_item .item_row_detail .i_trip {
    display: inline-block;
    border-bottom: none;
  }
  .result_internation_item .item_row_detail .i_departure,
  .result_internation_item .item_row_detail .i_time,
  .result_internation_item .item_row_detail .i_journey,
  .result_internation_item .item_row_detail .i_detail {
    width: auto;
  }
  .result_internation_item .item_row_detail .i_departure,
  .result_internation_item .item_row_detail .i_time {
    margin-right: 30px;
  }
  .result_internation_item .item_row_detail .i_time {
    padding: 10px;
  }
  .result_internation_item .item_label .item_show .i-label ul li .txt_text,
  table.table_info_price1 tr td:nth-child(3),
  table.table_info_price1 tr td:nth-child(4) {
    display: none;
  }
}
@media screen and (max-width: 768px) {
  .info-genaral .fl,
  .info-genaral .fr {
    width: 100%;
    float: none;
  }
  .group_Result .box-group_Result .search_info_internation .flight-info:after {
    width: 50px;
    height: 50px;
    background-size: 35px;
  }
  .group_Result .box-group_Result .search_info_internation {
    display: block;
  }
  .group_Result .box-group_Result .search_info_internation .search_info_left {
    display: block;
  }
  .group_Result .box-group_Result .search_info_internation .search_info_left ul {
    padding: 10px 10px 0 30px;
  }
  .group_Result .box-group_Result .search_info_internation .search_info_right {
    display: block;
    width: 100%;
    padding: 0 10px 10px 30px;
  }
  .group_Result .box-group_Result .search_info_internation .search_info_left ul li {
    display: block;
    margin-right: 0;
  }
  .group_Result .box-group_Result .search_info_internation .search_info_right ul li {
    font-size: 14px;
    line-height: 25px;
    font-weight: normal;
    margin: 0;
  }
  .group_Result .box-group_Result .search_info_internation .search_info_right ul li i {
    font-size: 14px;
    line-height: 25px;
  }
  .group_Result .box-group_Result .search_info_internation .flight-info {
    font-size: 15px;
    line-height: 25px;
  }
  .group_Result .box-group_Result .search_info_internation .flight-info .country {
    font-size: 20px;
    line-height: 30px;
  }
  .result_internation_item .item_row_detail,
  .result_internation_item .item_row {
    display: block;
  }
  .result_internation_item .item_row .i_trip,
  .result_internation_item .i_time,
  .result_internation_item .i_journey,
  .result_internation_item .i_detail {
    display: inline-block;
    border-bottom: none;
  }
  .result_internation_item .item_row {
    border-bottom: 1px solid #dcdcdc;
    position: relative;
    padding-right: 60px;
  }
  .result_internation_item .item_row .i_detail {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 0;
    width: 40px;
  }
  .result_internation_item .item_row_detail .i_trip {
    width: auto;
    padding: 0;
  }
  .result_internation_item .item_row .i_trip {
    width: 50px;
    height: 50px;
    padding: 5px;
  }
  .result_internation_item .item_inbounds .item_row .i_trip::after,
  .result_internation_item .item_outbounds .item_row .i_trip::after {
    width: 35px;
    height: 35px;
    -webkit-background-size: 25px;
    background-size: 25px;
  }
  .result_internation_item .item_label .item_hidden {
    padding: 20px 10px;
  }
}
@media screen and (max-width: 767px) {
  .tableCustomer thead tr td {
    display: none;
  }
  .tableCustomer tr td {
    display: block;
    width: 100% !important;
    padding: 0 0 15px 0 !important;
  }
  .tableCustomer tr td .input-group .form-control {
    width: 32%;
    margin-left: 2%;
  }
  .tableCustomer tr td .input-group .form-control:first-child {
    margin-left: 0;
  }
  .w_info_flight .info_flight_title {
    font-size: 14px;
    line-height: 24px;
    padding-left: 50px;
  }
  .result_internation_item .item_label .item_show {
    display: block;
  }
  .result_internation_item .item_label .item_show .i-label {
    display: inline-block;
  }
  .result_internation_item .item_label .item_show .i-price {
    display: inline-block;
    width: auto;
  }
  .result_internation_item .item_label .item_show .i-choose {
    display: block;
    text-align: right;
    width: 100%;
  }
}
@media screen and (max-width: 540px) {
  table.tbl-result thead tr.row-item td {
    font-size: 15px;
  }
  table.tbl-result tbody tr.row-item td.f-price {
    font-size: 16px;
  }
  table.tbl-result tbody tr.row-item td {
    font-size: 14px;
  }
  .boxInfoPrice .box-info-content .info-flight .fContent .node {
    width: 48.5%;
    margin-left: 3%;
    margin-bottom: 20px;
    padding-left: 0;
  }
  .boxInfoPrice .box-info-content .info-flight .fContent .node:nth-child(2n+1) {
    margin-left: 0;
    clear: left;
    width: 48.5%;
  }
  table.tbl-result tbody tr.flight-info-detail td:nth-child(3),
  table.tbl-result tbody tr.flight-info-detail td:nth-child(4) {
    display: none;
  }
  .group-flight-info {
    display: block;
  }
  .group-flight-info .row-flight-info {
    display: block;
    padding: 10px 0;
  }
  .group-flight-info .row-flight-info .LRow-flight-info {
    display: inline-block;
    padding: 0;
    width: auto;
  }
  .group-flight-info .row-flight-info .LRow-flight-info:after {
    position: static;
  }
  .group-flight-info .row-flight-info .RRow-flight-info {
    padding: 0;
    display: block;
  }
  .group-button .fr,
  .group-button .fl {
    width: 100%;
    margin-bottom: 20px;
  }
  .group-button button.button_continues.btn,
  .group-button button.button_continues {
    display: block;
    width: 100%;
  }
  .formContact .rowInput .rowInputLeft {
    width: 100%;
    float: none;
    margin-bottom: 10px;
  }
  .formContact .rowInput .rowInputRight {
    width: 100%;
    float: none;
  }
  .method_pay .method_pay_item .method_pay_title .method_pay_lTitle {
    padding: 20px 20px 20px 60px;
  }
  .method_pay .method_pay_item .method_pay_title .method_pay_lTitle:before {
    font-size: 30px;
    left: 10px;
  }
  .method_pay .method_pay_item .method_pay_title .method_pay_lTitle .method_pay_lTitle1 {
    font-size: 16px;
    line-height: 25px;
  }
  .method_pay .method_pay_item .method_pay_title .method_pay_rTitle {
    padding: 20px 10px;
  }
}
@media screen and (max-width: 480px) {
  .box_link_share ul {
    margin: 0;
  }
  .box_link_share ul li {
    float: none;
    margin: 3px 0;
    width: 100%;
  }
  .box_link_share ul li a {
    text-align: center;
  }
}
@media screen and (max-width: 479px) {
  .vnt-step-booking ul li .s-icon {
    width: 50px;
    height: 50px;
    padding: 5px 0;
    font-size: 22px;
    line-height: 40px;
  }
  .vnt-step-booking ul li .s-icon i {
    font-size: 22px;
    line-height: 40px;
  }
  .vnt-step-booking ul li ~ li:after {
    top: 20px;
  }
  ul.from-to li {
    font-size: 15px;
    line-height: 30px;
  }
  table.tbl-result,
  table.tbl-result > tbody,
  table.tbl-result > tbody > tr.row-item {
    display: block;
  }
  table.tbl-result thead tr.row-item {
    display: none;
  }
  table.tbl-result tbody tr.row-item td {
    display: block;
    padding: 5px 20px;
    text-align: center !important;
    border: none !important;
  }
  table.tbl-result tbody tr.row-item td.f-time span {
    padding-right: 2px;
  }
  table.tbl-result tbody tr.row-item td.f-time .f-duration {
    display: inline;
  }
  table.tbl-result tbody tr.row-item td.f-booking {
    border-bottom: 1px solid #E5E5E5 !important;
  }
  table.tbl-result tbody tr.row-item.row0.selected td.f-booking {
    background: #fff7e9;
  }
  table.tbl-result tbody tr.row-item.row1.selected td.f-booking {
    background: #ffffff;
  }
  .boxDetalFlight {
    padding: 10px;
  }
  .boxInfoPrice .box-info-content .info-flight .fContent .node:nth-child(2n+1),
  .boxInfoPrice .box-info-content .info-flight .fContent .node {
    width: 100%;
    margin-left: 0;
    margin-bottom: 10px;
  }
  .method_pay .method_pay_item .method_pay_title .method_pay_lTitle:before {
    display: none;
  }
  .method_pay .method_pay_item .method_pay_title .method_pay_lTitle {
    padding: 20px 10px;
  }
  .style_box_book .bContent .info_price .price {
    font-size: 20px;
    line-height: 30px;
    color: #c61414;
    display: inline-block;
  }
  .vnt-tax-fitter .vnt-tax {
    font-size: 22px;
    line-height: 35px;
  }
  .box-fitter-booking .group-fitter .group_title {
    font-size: 18px;
    line-height: 26px;
  }
  .group_Result .box-group_Result .search_info .search_info_right .date {
    font-size: 14px;
    line-height: 25px;
  }
  .group_Result .box-group_Result .search_info_internation .flight-info {
    font-size: 15px;
    line-height: 25px;
    padding: 15px 10px 15px 80px;
  }
  .group_Result .box-group_Result .search_info_internation .flight-info .country {
    font-size: 16px;
    line-height: 25px;
  }
  .result_internation_item .item_row {
    padding-right: 0;
  }
  .result_internation_item .item_row .i_time {
    padding: 10px;
    display: block;
  }
  table.tbl-result tbody tr.row-item.row0 {
    background: #fff7e9;
  }
  table.tbl-result tbody tr.row-item td {
    display: inline-block;
    margin-left: -4px;
    width: 50%;
    padding: 5px 10px;
    text-align: left ;
    border: none !important;
  }
  table.tbl-result tbody tr.row-item td.f-logo img {
    max-width: 66px;
  }
  table.tbl-result tbody tr.row-item td:nth-child(2n+1) {
    margin-left: 0;
  }
  table.tbl-result tbody tr.row-item td:nth-child(2n+2) {
    border-left: 1px solid #efefef !important;
  }
  table.tbl-result tbody tr.row-item {
    border-bottom: 1px solid #e5e5e5;
  }
  table.tbl-result tbody tr.row-item td {
    border-bottom: 1px solid #efefef !important;
    height: 55px;
  }
  table.tbl-result tbody tr.row-item td.f-price {
    font-size: 18px;
    padding: 15px 10px 10px 10px;
    font-weight: bold;
  }
  table.tbl-result tbody tr.row-item td.f-time span {
    display: block;
    overflow: hidden;
    white-space: nowrap;
    -ms-text-overflow: ellipsis;
    text-overflow: ellipsis;
  }
  table.tbl-result tbody tr.row-item td.f-booking .checkRadio {
    display: block;
    text-align: center;
  }
  .result_internation_item .item_label .item_show {
    display: block;
  }
  .result_internation_item .item_label .item_show .i-label {
    display: inline-block;
    width: 50%;
    padding: 5px 5px 5px 0;
  }
  .result_internation_item .item_label .item_show .i-price {
    display: inline-block;
    width: 50%;
    margin-left: -4px;
    text-align: right;
    padding: 5px 0 5px 5px;
  }
  .result_internation_item .item_label .item_show .i-choose {
    display: block;
    text-align: right;
    width: 100%;
  }
  .result_internation_item .item_label .item_show .i-choose .checkRadio {
    width: 100%;
    text-align: center;
  }
}
@media screen and (max-width: 415px) {
  .result_internation_item .item_row {
    padding-left: 50px;
    padding-right: 50px;
  }
  .result_internation_item .item_row .i_time .i_time_bold {
    display: block;
    font-size: 14px;
    line-height: 24px;
    text-align: center;
  }
  .result_internation_item .item_row .i_time .i_time_bold span {
    display: block;
    overflow: hidden;
    white-space: nowrap;
    -ms-text-overflow: ellipsis;
    text-overflow: ellipsis;
  }
}
@media screen and (max-width: 400px) {
  .result_internation_item .item_label .item_show .i-price,
  .result_internation_item .item_label .item_show .i-label {
    display: block;
    width: 100%;
    padding: 5px;
  }
}
@media screen and (max-width: 360px) {
  table.table_info_price1 tbody tr td,
  table.table_info_price1 thead tr td {
    padding: 10px;
  }
}
@media screen and (max-width: 359px) {
  table.tbl-result tbody tr.row-item td.f-price {
    font-size: 16px;
    padding: 15px 10px 10px 10px;
    font-weight: bold;
  }
  .style_box_DV .bContent .totalPrice.bold span {
    font-size: 18px;
    line-height: 26px;
    padding-left: 0;
  }
  .vnt-tax-fitter .vnt-tax {
    font-size: 18px;
    line-height: 26px;
  }
}
</style>
{/literal}

	<script type="text/javascript" src="{$theme_dir}/js/product.js"></script>
	<script type="text/javascript" src="{$theme_dir}/js/jquery.formatcurrency.js"></script>
	<script type="text/javascript" src="{$theme_dir}/js/jquery.validate.js"></script>

