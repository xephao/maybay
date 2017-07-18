<p id="demo123"></p>

<div class="group_Result">
	<div class="box-group_Result">

		<div class="search_info">
			<div class="search_info_left">
				<div class="row">
					<div class="col-sm-4">
						<div class="flight-info outbounds">Chặng đi:</div>
					</div>
					<div class="col-sm-8">
						<ul class="from-to">
							<li>Hồ Chí Minh <span class="airport">Tân Sơn Nhất</span></li>
							<li class="txt-to">-</li>
							<li>Hà Nội <span class="airport">Nội Bài</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="search_info_right">
				<div class="i-icon"><i class="fa fa-calendar"></i><span>Bay ngày</span></div>
				<div class="date">Thứ hai<br>17/07/2017</div>
			</div>
		</div>

		<div class="search_date">
			<div class="slider_date">
				
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('outbound',-3);">
						<span class="bold">Thứ sáu</span>
						<span>14/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('outbound',-2);">
						<span class="bold">Thứ bảy</span>
						<span>15/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('outbound',-1);">
						<span class="bold">Chủ nhật</span>
						<span>16/07</span>
					</a>
				</div>
				<div class="item current">
					<a href="javascript:void(0)" >
						<span class="bold">Thứ hai</span>
						<span>17/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('outbound',1);">
						<span class="bold">Thứ ba</span>
						<span>18/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('outbound',2);">
						<span class="bold">Thứ tư</span>
						<span>19/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('outbound',3);">
						<span class="bold">Thứ năm</span>
						<span>20/07</span>
					</a>
				</div>

			</div>
		</div>


		<div class="table_result">
			<div id='OutBound_loading' class="result-loading"><img src={$theme_dir}/images/loader.gif  alt=Loading... align=absmiddle /><br>Đang load dữ liệu . Vui lòng đợi ...</div>
			<table class="tbl-result" id="OutBound">
				<thead>
					<tr class="row-item">
						<td>Giá mỗi vé</td>
						<td>Khởi hành - Đến</td>
						<td>Hãng - Chuyến bay</td>
						<td>Chi tiết</td>
					</tr>
				</thead>
				<tbody id="OutBoundList">
					
				</tbody>
			</table>

			<div class='ajax_pagination' id="pageOutBound"></div>

		</div>
	</div>

	<div class="box-group_Result">
		<div class="search_info">
			<div class="search_info_left">
				<div class="row">
					<div class="col-sm-4">
						<div class="flight-info inbounds">Chặng về :</div>
					</div>
					<div class="col-sm-8">
						<ul class="from-to">
							<li>Hà Nội <span class="airport">Nội Bài</span></li>
							<li class="txt-to">-</li>
							<li>Hồ Chí Minh <span class="airport">Tân Sơn Nhất</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="search_info_right">
				<div class="i-icon"><i class="fa fa-calendar"></i><span>Bay ngày</span></div>
				<div class="date">Thứ ba<br>18/07/2017</div>
			</div>
		</div>
		<div class="search_date">
			<div class="slider_date">
				
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('inbound',-3);">
						<span class="bold">Thứ bảy</span>
						<span>15/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('inbound',-2);">
						<span class="bold">Chủ nhật</span>
						<span>16/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('inbound',-1);">
						<span class="bold">Thứ hai</span>
						<span>17/07</span>
					</a>
				</div>
				<div class="item current">
					<a href="javascript:void(0)" >
						<span class="bold">Thứ ba</span>
						<span>18/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('inbound',1);">
						<span class="bold">Thứ tư</span>
						<span>19/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('inbound',2);">
						<span class="bold">Thứ năm</span>
						<span>20/07</span>
					</a>
				</div>
				<div class="item">
					<a href="javascript:void(0)" onclick="vnTSearch.SetChangeDate('inbound',3);">
						<span class="bold">Thứ sáu</span>
						<span>21/07</span>
					</a>
				</div>

			</div>
		</div>
		<div class="table_result">
			<div id='InBound_loading' class="result-loading"><img src={$theme_dir}/images/loader.gif  alt=Loading... align=absmiddle /><br>Đang load dữ liệu . Vui lòng đợi ...</div>
			<table class="tbl-result" id="InBound">
				<thead>
					<tr class="row-item">
						<td>Giá mỗi vé</td>
						<td>Khởi hành - Đến</td>
						<td>Hãng - Chuyến bay</td>
						<td>Chi tiết</td>
					</tr>
				</thead>
				<tbody id="InBoundList">
				</tbody>
			</table>
			<div class='ajax_pagination' id="pageInBound"></div>
		</div>
	</div>

	<div class="group-button" id="divBtnBooking" >
		<div class="fl">
			<button type="button" onclick="location.href='/'" class="btn button_continues_l button_continues"><span>Tìm kiếm vé khác</span></button>
		</div>
		<div class="fr">
			<button type="button" onclick="vnTSearch.doBooking(739,2)" class="btn button_continues"><span>Tiếp tục</span></button>
		</div>
		<div class="clear"></div>
	</div>
</div>


<script type="text/javascript" src="{$theme_dir}/js/search.js"></script>

{literal}


<script>
	vnTSearch.sid = "739" ;
	vnTSearch.isDomestic = 1;
	vnTSearch.isSearch = 1 ;
	vnTSearch.tripType= 2;
	js_lang['err_do_booking'] = "Vui lòng chọn 1 vé để đặt";
	js_lang['err_do_booking_roundtrip'] = "Vui lòng chọn vé cho chuyến đi và chuyến về";
	js_lang['err_departure_empty'] = "Vui lòng chọn vé cho chuyến đi ";
	js_lang['err_return_empty'] = "Vui lòng chọn vé cho chuyến về ";

	jQuery(window).ready(function () {
		vnTSearch.initDomestic();
		vnTSearch.initFilter();
	});


  var checktimeout = 5000; //5 giay check 1 lan
  var remainingTime = 2999000; // 3*60*1000 3phut
  $(function(){
  	CheckTimeOut();
  	setInterval(CheckTimeOut, checktimeout);
  })
  function CheckTimeOut() {
  	remainingTime -= checktimeout;
  	if ( remainingTime <= 0) {
  		$('#messTimeout').modal('show') ;
  	}
  }

</script>
{/literal}