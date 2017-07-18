<?php /* Smarty version 2.6.26, created on 2017-07-17 13:32:40
         compiled from frontend/web/pages/booking/aboutguest/formbooking.tpl */ ?>
<form name="formBooking" method="post" action="<?php echo $this->_tpl_vars['server_url']; ?>
/booking/step3" id="formBooking" role="form" class="validate" novalidate="novalidate">
  <div class="mod_info_custumer">
    <div class="mod_main">
      <div class="box-template">
        <div class="box-template-title">
          <div class="box-template-title-cont icon-info">Thông tin hành khách</div>
        </div>
        <div class="box-template-content">
          <div class="div_note">
            <div>Bạn vui lòng nhập chính xác thông tin bên dưới</div>
          </div>
          <div>
            <table class="tableCustomer">
              <thead>
                <tr>
                  <td></td>
                  <td>Quý danh</td>
                  <td>Họ và tên
                    <span class="span_color2">*</span>
                  </td>
                  <td>Ngày sinh
                    <span class="span_color2">*</span>
                    <span class="span_color3">(ví dụ: 21/03/2000)</span>
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Hành khách 1:</td>
                  <td>
                    <select name="passenger_gender_0" id="passenger_gender_0" size="1" class="select form-control">
                      <option value="Ông">Ông</option>
                      <option value="Bà">Bà</option>
                      <option value="Anh">Anh</option>
                      <option value="Chị">Chị</option>
                    </select>
                  </td>
                  <td>
                    <div class="rowInputGroup">
                      <input type="text" class="form-control" placeholder="Nhập họ tên" name="passenger_name_0" id="passenger_name_0" value="" title="Vui lòng nhập Họ và tên" required="" aria-required="true"></div>
                    </td>
                    <td>
                      <div class="input-group">
                        <select name="passenger_day_0" id="passenger_day_0" class="form-control">
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
                        </select>&nbsp;
                        <select name="passenger_month_0" id="passenger_month_0" class="form-control">
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
                        </select>&nbsp;
                        <select name="passenger_year_0" id="passenger_year_0" class="form-control">
                          <option value="1917">1917</option>
                          <option value="1918">1918</option>
                          <option value="1919">1919</option>
                          <option value="1920">1920</option>
                          <option value="1921">1921</option>
                          <option value="1922">1922</option>
                          <option value="1923">1923</option>
                          <option value="1924">1924</option>
                          <option value="1925">1925</option>
                          <option value="1926">1926</option>
                          <option value="1927">1927</option>
                          <option value="1928">1928</option>
                          <option value="1929">1929</option>
                          <option value="1930">1930</option>
                          <option value="1931">1931</option>
                          <option value="1932">1932</option>
                          <option value="1933">1933</option>
                          <option value="1934">1934</option>
                          <option value="1935">1935</option>
                          <option value="1936">1936</option>
                          <option value="1937">1937</option>
                          <option value="1938">1938</option>
                          <option value="1939">1939</option>
                          <option value="1940">1940</option>
                          <option value="1941">1941</option>
                          <option value="1942">1942</option>
                          <option value="1943">1943</option>
                          <option value="1944">1944</option>
                          <option value="1945">1945</option>
                          <option value="1946">1946</option>
                          <option value="1947">1947</option>
                          <option value="1948">1948</option>
                          <option value="1949">1949</option>
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
                          <option value="1990" selected="">1990</option>
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
                        </select>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="box-template">
          <div class="box-template-title">
            <div class="box-template-title-cont fa-suitcase">Thông tin hành lý</div>
          </div>
          <div class="box-template-content">
            <div class="group-flight-info">
              <div class="luggage-title">Hành lý chiều đi</div>
              <div class="row-flight-info">
                <div class="LRow-flight-info">Hành lý xách tay</div>
                <div class="RRow-flight-info">Mỗi hành khách được mang theo tối đa 7kg hành lý xách tay.</div>
              </div>
              <div class="row-flight-info">
                <div class="LRow-flight-info">Hành lý ký gửi</div>
                <div class="RRow-flight-info">
                  <div class="group-luggage">
                    <strong>Hành khách 1</strong>
                    <select class="selbaggage form-control" id="baggage_0" name="baggage_0">
                      <option value="0,0">Không  mang theo hành lý</option>
                      <option value="15,150000">Thêm 15Kg hành lý (150,000 VNĐ)</option>
                      <option value="20,165000">Thêm 20Kg hành lý (165,000 VNĐ)</option>
                      <option value="25,220000">Thêm 25Kg hành lý (220,000 VNĐ)</option>
                      <option value="30,330000">Thêm 30Kg hành lý (330,000 VNĐ)</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="luggage-title">Hành lý chiều về</div>
              <div class="row-flight-info">
                <div class="LRow-flight-info">Hành lý xách tay</div>
                <div class="RRow-flight-info">Mỗi hành khách được mang theo tối đa 7kg hành lý xách tay.</div>
              </div>
              <div class="row-flight-info">
                <div class="LRow-flight-info">Hành lý ký gửi</div>
                <div class="RRow-flight-info">
                  <div class="group-luggage">
                    <strong>Hành khách 1</strong>
                    <select class="selbaggage form-control" id="baggage_0" name="baggage_0">
                      <option value="0,0">Không  mang theo hành lý</option>
                      <option value="15,150000">Thêm 15Kg hành lý (150,000 VNĐ)</option>
                      <option value="20,165000">Thêm 20Kg hành lý (165,000 VNĐ)</option>
                      <option value="25,220000">Thêm 25Kg hành lý (220,000 VNĐ)</option>
                      <option value="30,330000">Thêm 30Kg hành lý (330,000 VNĐ)</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box-template">
          <div class="box-template-title">
            <div class="box-template-title-cont fa-edit">Thông tin người liên hệ</div>
          </div>
          <div class="box-template-content">
            <div class="div_note">
              <div>Xin vui lòng điền đầy đủ các thông tin, chúng tôi sẽ liên hệ với quý khách khi cần</div>
              <div>
                <span class="span_color2">Lưu ý: *</span>là thông tin bắt buộc
              </div>
            </div>
            <div class="formContact">
              <div class="rowInput">
                <div class="rowInputLeft">
                  <div class="rowInputTable">
                    <div class="rowInputTableLeft">
                      <label class="LTitle">Quý danh
                        <span>*</span>
                      </label>
                      <select name="gender" id="gender" size="1" class="select form-control">
                        <option value="Ông">Ông</option>
                        <option value="Bà">Bà</option>
                        <option value="Anh">Anh</option>
                        <option value="Chị">Chị</option>
                      </select>
                    </div>
                    <div class="rowInputTableRight form-group rowInputGroup">
                      <label class="LTitle" for="name">Họ và tên
                        <span>*</span>
                      </label>
                      <input type="text" name="full_name" id="full_name" class="form-control" placeholder="" value="" title="Vui lòng nhập Họ và tên " required="" aria-required="true"></div>
                    </div>
                    <div class="rowInputGroup">
                      <label class="LTitle" for="phone">Số điện thoại
                        <span>*</span>
                      </label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="" value="" title="Vui lòng nhập Số điện thoại" required="" aria-required="true"></div>
                      <div class="rowInputGroup">
                        <label class="LTitle" for="email">Email
                          <span>*</span>
                          <span class="note">(Để gửi thông tin vé, hành trình, thanh toán)</span>
                        </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="" value="" required="" aria-required="true"></div>
                      </div>
                      <div class="rowInputRight">
                        <div class="rowInputGroup">
                          <label class="LTitle" for="address">Địa chỉ
                            <span>*</span>
                          </label>
                          <input type="text" name="address" id="address" class="form-control" placeholder="" value="" title="Vui lòng nhập Địa chỉ" required="" aria-required="true"></div>
                          <div class="rowInputGroup">
                            <label class="LTitle" for="country">Quốc gia</label>
                            <select name="country" id="country" class="select form-control">
                              <option value="AF">Afghanistan</option>
                              <option value="AL">Albania</option>
                              <option value="DZ">Algeria</option>
                              <option value="AS">American Samoa</option>
                              <option value="AO">Angola</option>
                              <option value="AI">Anguilla</option>
                              <option value="AG">Antigua and Barbuda</option>
                              <option value="AR">Argentina</option>
                              <option value="AM">Armenia</option>
                              <option value="AW">Aruba</option>
                              <option value="AU">Australia</option>
                              <option value="AT">Austria</option>
                              <option value="AZ">Azerbaijan</option>
                              <option value="BS">Bahamas</option>
                              <option value="BH">Bahrain</option>
                              <option value="BD">Bangladesh</option>
                              <option value="BB">Barbados</option>
                              <option value="BY">Belarus</option>
                              <option value="BE">Belgium</option>
                              <option value="BZ">Belize</option>
                              <option value="BJ">Benin</option>
                              <option value="BM">Bermuda</option>
                              <option value="BT">Bhutan</option>
                              <option value="BO">Bolivia</option>
                              <option value="BA">Bosnia and Herzegovina</option>
                              <option value="BW">Botswana</option>
                              <option value="BR">Brazil</option>
                              <option value="BN">Brunei Darussalam</option>
                              <option value="BG">Bulgaria</option>
                              <option value="BF">Burkina Faso</option>
                              <option value="BI">Burundi</option>
                              <option value="KH">Cambodia</option>
                              <option value="CM">Cameroon</option>
                              <option value="CA">Canada</option>
                              <option value="CV">Cape Verde</option>
                              <option value="KY">Cayman Islands</option>
                              <option value="CF">Central African Republic</option>
                              <option value="TD">Chad</option>
                              <option value="CL">Chile</option>
                              <option value="CN">China</option>
                              <option value="CC">Cocos (Keeling) Islands</option>
                              <option value="CO">Colombia</option>
                              <option value="KM">Comoros</option>
                              <option value="CG">Congo</option>
                              <option value="CD">Congo, the Democratic Republic of the</option>
                              <option value="CK">Cook Islands</option>
                              <option value="CR">Costa Rica</option>
                              <option value="CI">Cote D'Ivoire</option>
                              <option value="HR">Croatia</option>
                              <option value="CU">Cuba</option>
                              <option value="CY">Cyprus</option>
                              <option value="CZ">Czech Republic</option>
                              <option value="DK">Denmark</option>
                              <option value="DJ">Djibouti</option>
                              <option value="DM">Dominica</option>
                              <option value="DO">Dominican Republic</option>
                              <option value="EC">Ecuador</option>
                              <option value="EG">Egypt</option>
                              <option value="SV">El Salvador</option>
                              <option value="GQ">Equatorial Guinea</option>
                              <option value="ER">Eritrea</option>
                              <option value="EE">Estonia</option>
                              <option value="ET">Ethiopia</option>
                              <option value="FK">Falkland Islands (Malvinas)</option>
                              <option value="FO">Faroe Islands</option>
                              <option value="FJ">Fiji</option>
                              <option value="FI">Finland</option>
                              <option value="FR">France</option>
                              <option value="GF">French Guiana</option>
                              <option value="PF">French Polynesia</option>
                              <option value="GA">Gabon</option>
                              <option value="GM">Gambia</option>
                              <option value="GE">Georgia</option>
                              <option value="DE">Germany</option>
                              <option value="GH">Ghana</option>
                              <option value="GI">Gibraltar</option>
                              <option value="GR">Greece</option>
                              <option value="GL">Greenland</option>
                              <option value="GD">Grenada</option>
                              <option value="GP">Guadeloupe</option>
                              <option value="GU">Guam</option>
                              <option value="GT">Guatemala</option>
                              <option value="GN">Guinea</option>
                              <option value="GW">Guinea-Bissau</option>
                              <option value="GY">Guyana</option>
                              <option value="HT">Haiti</option>
                              <option value="HN">Honduras</option>
                              <option value="HK">Hong Kong</option>
                              <option value="HU">Hungary</option>
                              <option value="IS">Iceland</option>
                              <option value="IN">India</option>
                              <option value="ID">Indonesia</option>
                              <option value="IR">Iran, Islamic Republic of</option>
                              <option value="IQ">Iraq</option>
                              <option value="IE">Ireland</option>
                              <option value="IL">Israel</option>
                              <option value="IT">Italy</option>
                              <option value="JM">Jamaica</option>
                              <option value="JP">Japan</option>
                              <option value="JO">Jordan</option>
                              <option value="KZ">Kazakhstan</option>
                              <option value="KE">Kenya</option>
                              <option value="KI">Kiribati</option>
                              <option value="KP">Korea, Democratic People's Republic of</option>
                              <option value="KR">Korea, Republic of</option>
                              <option value="KW">Kuwait</option>
                              <option value="KG">Kyrgyzstan</option>
                              <option value="LA">Lao People's Democratic Republic</option>
                              <option value="LV">Latvia</option>
                              <option value="LB">Lebanon</option>
                              <option value="LS">Lesotho</option>
                              <option value="LR">Liberia</option>
                              <option value="LY">Libyan Arab Jamahiriya</option>
                              <option value="LT">Lithuania</option>
                              <option value="LU">Luxembourg</option>
                              <option value="MO">Macao</option>
                              <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                              <option value="MG">Madagascar</option>
                              <option value="MW">Malawi</option>
                              <option value="MY">Malaysia</option>
                              <option value="MV">Maldives</option>
                              <option value="ML">Mali</option>
                              <option value="MT">Malta</option>
                              <option value="MQ">Martinique</option>
                              <option value="MR">Mauritania</option>
                              <option value="MU">Mauritius</option>
                              <option value="YT">Mayotte</option>
                              <option value="MX">Mexico</option>
                              <option value="FM">Micronesia, Federated States of</option>
                              <option value="MD">Moldova, Republic of</option>
                              <option value="MC">Monaco</option>
                              <option value="MN">Mongolia</option>
                              <option value="MS">Montserrat</option>
                              <option value="MA">Morocco</option>
                              <option value="MZ">Mozambique</option>
                              <option value="MM">Myanmar</option>
                              <option value="NA">Namibia</option>
                              <option value="NR">Nauru</option>
                              <option value="NP">Nepal</option>
                              <option value="NL">Netherlands</option>
                              <option value="AN">Netherlands Antilles</option>
                              <option value="NC">New Caledonia</option>
                              <option value="NZ">New Zealand</option>
                              <option value="NI">Nicaragua</option>
                              <option value="NE">Niger</option>
                              <option value="NG">Nigeria</option>
                              <option value="NU">Niue</option>
                              <option value="NF">Norfolk Island</option>
                              <option value="NO">Norway</option>
                              <option value="OM">Oman</option>
                              <option value="PK">Pakistan</option>
                              <option value="PS">Palestinian Territory, Occupied</option>
                              <option value="PA">Panama</option>
                              <option value="PG">Papua New Guinea</option>
                              <option value="PY">Paraguay</option>
                              <option value="PE">Peru</option>
                              <option value="PH">Philippines</option>
                              <option value="PL">Poland</option>
                              <option value="PT">Portugal</option>
                              <option value="PR">Puerto Rico</option>
                              <option value="QA">Qatar</option>
                              <option value="RE">Reunion</option>
                              <option value="RO">Romania</option>
                              <option value="RU">Russian Federation</option>
                              <option value="RW">Rwanda</option>
                              <option value="KN">Saint Kitts and Nevis</option>
                              <option value="LC">Saint Lucia</option>
                              <option value="PM">Saint Pierre and Miquelon</option>
                              <option value="VC">Saint Vincent and the Grenadines</option>
                              <option value="WS">Samoa</option>
                              <option value="ST">Sao Tome and Principe</option>
                              <option value="SA">Saudi Arabia</option>
                              <option value="SN">Senegal</option>
                              <option value="SC">Seychelles</option>
                              <option value="SL">Sierra Leone</option>
                              <option value="SG">Singapore</option>
                              <option value="SK">Slovakia</option>
                              <option value="SI">Slovenia</option>
                              <option value="SB">Solomon Islands</option>
                              <option value="SO">Somalia</option>
                              <option value="ZA">South Africa</option>
                              <option value="ES">Spain</option>
                              <option value="LK">Sri Lanka</option>
                              <option value="SD">Sudan</option>
                              <option value="SR">Suriname</option>
                              <option value="SZ">Swaziland</option>
                              <option value="SE">Sweden</option>
                              <option value="CH">Switzerland</option>
                              <option value="SY">Syrian Arab Republic</option>
                              <option value="TW">Taiwan, Province of China</option>
                              <option value="TJ">Tajikistan</option>
                              <option value="TZ">Tanzania, United Republic of</option>
                              <option value="TH">Thailand</option>
                              <option value="TG">Togo</option>
                              <option value="TO">Tonga</option>
                              <option value="TT">Trinidad and Tobago</option>
                              <option value="TN">Tunisia</option>
                              <option value="TR">Turkey</option>
                              <option value="TM">Turkmenistan</option>
                              <option value="TC">Turks and Caicos Islands</option>
                              <option value="TV">Tuvalu</option>
                              <option value="UG">Uganda</option>
                              <option value="UA">Ukraine</option>
                              <option value="AE">United Arab Emirates</option>
                              <option value="GB">United Kingdom</option>
                              <option value="US">United States</option>
                              <option value="UY">Uruguay</option>
                              <option value="UZ">Uzbekistan</option>
                              <option value="VU">Vanuatu</option>
                              <option value="VE">Venezuela</option>
                              <option value="VN" selected="">Viet Nam</option>
                              <option value="VG">Virgin Islands, British</option>
                              <option value="VI">Virgin Islands, U.s.</option>
                              <option value="WF">Wallis and Futuna</option>
                              <option value="YE">Yemen</option>
                              <option value="ZM">Zambia</option>
                              <option value="ZW">Zimbabwe</option>
                            </select>
                          </div>
                          <div class="rowInputGroup">
                            <label class="LTitle" for="city">Thành phố/Tỉnh thành
                              <span>*</span>
                            </label>
                            <select name="city" id="city" class="select form-control" onchange="LoadAjax(&#39;list_state&#39;,&#39;&amp;city=&#39;+this.value,&#39;ext_state&#39;) ;">
                              <option value="" selected="">Chọn Thành phố / Tỉnh thành</option>
                              <option value="59">An Giang</option>
                              <option value="60">Bà Rịa - Vũng Tàu</option>
                              <option value="19">Bắc Cạn</option>
                              <option value="26">Bắc Giang</option>
                              <option value="68">Bạc Liêu</option>
                              <option value="25">Bắc Ninh</option>
                              <option value="63">Bến Tre</option>
                              <option value="51">Bình Dương</option>
                              <option value="52">Bình Phước</option>
                              <option value="55">Bình Thuận</option>
                              <option value="44">Bình Định</option>
                              <option value="69">Cà Mau</option>
                              <option value="5">Cần Thơ</option>
                              <option value="6">Cao Bằng</option>
                              <option value="45">Gia Lai</option>
                              <option value="10">Hà Giang</option>
                              <option value="31">Hà Nam</option>
                              <option value="1">Hà nội</option>
                              <option value="27">Hà Tây</option>
                              <option value="37">Hà Tĩnh</option>
                              <option value="29">Hải Dương</option>
                              <option value="3">Hải phòng</option>
                              <option value="67">Hậu Giang</option>
                              <option value="2" selected="">Hồ Chí Minh</option>
                              <option value="28">Hòa Bình</option>
                              <option value="30">Hưng Yên</option>
                              <option value="49">Khánh Hòa</option>
                              <option value="62">Kiên Giang</option>
                              <option value="43">Kon Tum</option>
                              <option value="7">Lai Châu</option>
                              <option value="50">Lâm Đồng</option>
                              <option value="17">Lạng Sơn</option>
                              <option value="8">Lào Cai</option>
                              <option value="57">Long An</option>
                              <option value="32">Nam Định</option>
                              <option value="36">Nghệ An</option>
                              <option value="35">Ninh Bình</option>
                              <option value="53">Ninh Thuận</option>
                              <option value="22">Phú Thọ</option>
                              <option value="46">Phú Yên</option>
                              <option value="38">Quảng Bình</option>
                              <option value="41">Quảng Nam</option>
                              <option value="42">Quảng Ngãi</option>
                              <option value="24">Quảng Ninh</option>
                              <option value="39">Quảng Trị</option>
                              <option value="66">Sóc Trăng</option>
                              <option value="21">Sơn La</option>
                              <option value="54">Tây Ninh</option>
                              <option value="33">Thái Bình</option>
                              <option value="18">Thái Nguyên</option>
                              <option value="34">Thanh Hóa</option>
                              <option value="40">Thừa Thiên - Huế</option>
                              <option value="61">Tiền Giang</option>
                              <option value="65">Trà Vinh</option>
                              <option value="9">Tuyên Quang</option>
                              <option value="64">Vĩnh Long</option>
                              <option value="23">Vĩnh Phúc</option>
                              <option value="20">Yên Bái</option>
                              <option value="4">Đà Nẵng</option>
                              <option value="47">Đắk Lắk</option>
                              <option value="48">Đắk Nông</option>
                              <option value="16">Điện Biên</option>
                              <option value="56">Đồng Nai</option>
                              <option value="58">Đồng Tháp</option>
                            </select>
                          </div>
                          <div class="rowInputGroup">
                            <label class="LTitle" for="state">Quận / Huyện
                              <span>*</span>
                            </label>
                            <span id="ext_state">
                              <select name="state" id="state" class="select form-control">
                                <option value="" selected="">Chọn Quận / Huyện</option>
                                <option value="1">Quận 1</option>
                                <option value="2">Quận 2</option>
                                <option value="3">Quận 3</option>
                                <option value="4">Quận 4</option>
                                <option value="5">Quận 5</option>
                                <option value="6">Quận 6</option>
                                <option value="7">Quận 7</option>
                                <option value="8">Quận 8</option>
                                <option value="9">Quận 9</option>
                                <option value="10">Quận 10</option>
                                <option value="11">Quận 11</option>
                                <option value="12">Quận 12</option>
                                <option value="19">Quận Bình Tân</option>
                                <option value="16">Quận Bình Thạnh</option>
                                <option value="13">Quận Gò Vấp</option>
                                <option value="17">Quận Phú Nhuận</option>
                                <option value="14">Quận Tân Bình</option>
                                <option value="15">Quận Tân Phú</option>
                                <option value="18">Quận Thủ Đức</option>
                                <option value="20">Huyện Bình Chánh</option>
                                <option value="24">Huyện Cần Giờ</option>
                                <option value="21">Huyện Củ Chi</option>
                                <option value="22">Huyện Hóc Môn</option>
                                <option value="23">Huyện Nhà Bè</option>
                              </select>
                            </span>
                          </div>
                        </div>
                        <div class="clear"></div>
                      </div>
                      <div class="rowInput">
                        <div class="list_checkbox">
                          <ul>
                            <li>
                              <label for="is_invoice" data-toggle="collapse" data-target="#invoice_details">
                                <span class="">
                                  <input data-input="checkbox" type="checkbox" name="is_invoice" id="is_invoice" value="1">
                                  <span class="style_icon"></span>
                                </span>
                                <span class="txt_name">Tôi muốn xuất hóa đơn</span>
                              </label>
                              <div class="invoice_details collapse" id="invoice_details">
                                <fieldset>
                                  <legend>Chi tiết hóa đơn</legend>
                                  <div class="note-invoice">
                                    <p>Quý khách có nhu cầu lấy hóa đơn giá trị gia tăng phải yêu cầu với phía chúng tôi trong vòng 7 ngày kể từ thời điểm thanh toán đơn hàng.</p>
                                    <p>Quý khách vui lòng nhập tiếng Việt có dấu để việc xuất hóa đơn tránh bị sai sót.</p>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="full_name">Tên công ty
                                          <span class="font_err">*</span>
                                        </label>
                                        <input type="text" name="invoice_company" class="form-control" id="invoice_company" placeholder="" value=""></div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="form-group">
                                          <label for="full_name">Địa chỉ
                                            <span class="font_err">*</span>
                                          </label>
                                          <input type="text" name="invoice_company_address" class="form-control" id="invoice_company_address" placeholder="" value=""></div>
                                        </div>
                                        <div class="col-sm-4">
                                          <div class="form-group">
                                            <label for="full_name">Mã số thuế
                                              <span class="font_err">*</span>
                                            </label>
                                            <input type="text" name="invoice_company_fax" class="form-control" id="invoice_company_fax" placeholder="" value=""></div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-xs-12">
                                            <div class="form-group">
                                              <label for="full_name">Địa chỉ nhận hóa đơn</label>
                                              <input type="text" name="invoice_address" class="form-control" id="invoice_address" placeholder="" value=""></div>
                                            </div>
                                          </div>
                                        </fieldset>
                                      </div>
                                    </li>
                                    <li>
                                      <label>
                                        <span class="">
                                          <input data-input="checkbox" type="checkbox" name="newsletter" id="newsletter" value="1" checked="checked">
                                          <span class="style_icon"></span>
                                        </span>
                                        <span class="txt_name">Tôi muốn nhận được thông tin về chương trình khuyến mãi, tin tức....</span>
                                      </label>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="rowInput">
                                <label class="LTitle" for="content">Ghi chú</label>
                                <textarea name="comment" id="comment" class="form-control"></textarea>
                              </div>
                              <div class="rowInput"></div>
                            </div>
                          </div>
                        </div>
                        <div class="group-button">
                          <div class="fl">
                            <button type="button" onclick="location.href=&#39;/&#39;" class="btn button_continues_l button_continues">
                              <span>Tìm kiếm vé khác</span>
                            </button>
                          </div>
                          <div class="fr">
                            <input type="hidden" name="do_submit" id="do_submit" value="1">
                            <button id="btnConfirm" name="btnConfirm" type="submit" class="btn button_continues" value="">
                              <span>Tiếp tục</span>
                            </button>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/web/pages/booking/modsidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                      <div class="clear"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>