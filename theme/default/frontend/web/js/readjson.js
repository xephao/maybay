$(document).ready(function(){
	var data = {
		"departureData":[
		{
			"chuyenbay":"VN 1345 ",
			"thoigian":"06:30 - 07:30",
			"gia":"1580000",
			"chitietgia":[
			{
				"PassengerType":"ADT",
				"Code":"NET",
				"Price":"1580000"
			},
			{
				"PassengerType":"ADT",
				"Code":"TAX",
				"Price":308000
			},
			{
				"PassengerType":"CHD",
				"Code":"NET",
				"Price":1185000
			},
			{
				"PassengerType":"CHD",
				"Code":"TAX",
				"Price":228500
			},
			{
				"PassengerType":"INF",
				"Code":"NET",
				"Price":158000
			},
			{
				"PassengerType":"INF",
				"Code":"TAX",
				"Price":15800
			}
			]
		},
		{
			"chuyenbay":"VN 7363 ",
			"thoigian":"07:45 - 08:45",
			"gia":"1650000",
			"chitietgia":[
			{
				"PassengerType":"ADT",
				"Code":"NET",
				"Price":"1650000"
			},
			{
				"PassengerType":"ADT",
				"Code":"TAX",
				"Price":315000
			},
			{
				"PassengerType":"CHD",
				"Code":"NET",
				"Price":1237500
			},
			{
				"PassengerType":"CHD",
				"Code":"TAX",
				"Price":233750
			},
			{
				"PassengerType":"INF",
				"Code":"NET",
				"Price":165000
			},
			{
				"PassengerType":"INF",
				"Code":"TAX",
				"Price":16500
			}
			]
		},
		{
			"chuyenbay":"VN 1351 ",
			"thoigian":"08:00 - 09:00",
			"gia":"2100000",
			"chitietgia":[
			{
				"PassengerType":"ADT",
				"Code":"NET",
				"Price":"2100000"
			},
			{
				"PassengerType":"ADT",
				"Code":"TAX",
				"Price":360000
			},
			{
				"PassengerType":"CHD",
				"Code":"NET",
				"Price":1575000
			},
			{
				"PassengerType":"CHD",
				"Code":"TAX",
				"Price":267500
			},
			{
				"PassengerType":"INF",
				"Code":"NET",
				"Price":210000
			},
			{
				"PassengerType":"INF",
				"Code":"TAX",
				"Price":21000
			}
			]
		},
		{
			"chuyenbay":"VN 1369 ",
			"thoigian":"22:50 - 23:50",
			"gia":"1250000",
			"chitietgia":[
			{
				"PassengerType":"ADT",
				"Code":"NET",
				"Price":"1250000"
			},
			{
				"PassengerType":"ADT",
				"Code":"TAX",
				"Price":275000
			},
			{
				"PassengerType":"CHD",
				"Code":"NET",
				"Price":937500
			},
			{
				"PassengerType":"CHD",
				"Code":"TAX",
				"Price":203750
			},
			{
				"PassengerType":"INF",
				"Code":"NET",
				"Price":125000
			},
			{
				"PassengerType":"INF",
				"Code":"TAX",
				"Price":12500
			}
			]
		}
		],
		"returnData":[],
		"success":1,
		"url":"getdata(2017-07-15,2017-07-15,OW,CXR,SGN,3,0,0)"
	};

	$.each(data.departureData, function(i, item) {
		
		$('#OutBoundList').append('<tr class="row-item row0 selected viewed" id="item31735"><td class="f-price">'+data.departureData[i].gia+' VNĐ</td><td class="f-time"> <span>'+data.departureData[i].thoigian+'</span><span class="f-duration">2 giờ &nbsp;5 phút</span></td><td class="f-logo"><img alt="Vietjet Air" src="./Chọn chuyến bay_files/smVJ.gif"> <span>'+data.departureData[i].chuyenbay+'</span></td><td class="f-booking"><label class="checkRadio"><span class="txt">Chọn</span><input data-input="radio" type="radio" id="rSelect31735" name="inID" value="31735" onclick="vnTSearch.onSelect(1,31735)" checked="checked"></label></td></tr>');

	})


})

// data.departureData[i].gia

