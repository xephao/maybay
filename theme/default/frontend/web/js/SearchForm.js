

function loadCitySearch(country,obj)
{
  var mydata =  "country="+country+"&lang=vn"  ;
  $.ajax({
    async: true,
    dataType: 'json',
    url: ROOT+"load_ajax.php?do=location",
    type: 'POST',
    data: mydata ,
    success: function (data) {
      $("#"+obj).html(data.html);
    }
  }) ;
}
var vnTFormSearch = function () {
  return {
    init: function () {
      vnTFormSearch.onSelectAirport();
      vnTFormSearch.onRoundTrip();
      vnTFormSearch.onDatimePicker();
    },

    onRoundTrip: function () {

      // Ẩn return date nếu one way đang được chọn
      if ($("#oneway").attr("checked")) $(".return-date").hide();

      // Khi chọn one way, hay round trip, tự động ẩn hiện return date
      $("#oneway").click(function () {
        $(".return-date").hide();
      });
      $("#roundtrip").click(function () {
        $(".return-date").show();
      });

    },

    onSelectAirport: function () {

      $(".startplace,.endplace").focus(function () {
        $(this).addClass("in-focus");
        $(this).parent().find(".box-dropdown").addClass("show");

        var targetOffset = $("#formSearchTicket").offset().top - 70;
        jQuery('html,body').animate({scrollTop: targetOffset},1000);

      });
      //click nut close
      $("#formSearchTicket .box-dropdown .close").click(function () {
        $('#' + $(this).attr("aria-dropdown")).removeClass("show");
      });

      //click ra ngoai
      jQuery(document).bind('click', function (e) {
        var clicked = jQuery(e.target);
        if (!clicked.parents().hasClass("f-address")) {
          $("#formSearchTicket .box-dropdown").removeClass("show");
        }
      });


      // lay gia tri khi chon
      $('#list-departure a').click(function () {
        alert("a'dasd");
        $('.startplace').attr('value', $(this).attr('title'));
        $('#list-departure').removeClass("show");
        $(".endplace").focus();
        return false;
      });

      // lay gia tri khi chon
      $('#list-arrival a').click(function () {

        $('.endplace').attr('value', $(this).attr('title'));
        $('#list-arrival').removeClass("show");

        $("#departure_date").focus();
        return false;
      });


      $(".txtFlightCity").autocomplete(ROOT + "load_ajax.php?do=autocomplete",
      {
        max: 50,
        highlight: false,
        matchSubset: false,
        scrollHeight: 260,
        width: 270,
        formatItem: function (item, index, total, value) {
          return value.split("{")[0];
        },

        formatResult: function (item, value) {
          return value.split("{")[1];
        }
      });

      $(".txtFlightCity").result(function () {
        var dataType = $(this).attr('dataType');
        $('.' + dataType).attr('value', $("#inter-city-" + dataType).val());
        $("#inter-city-" + dataType).val('');
        $('#list-' + dataType).removeClass("show");

        if (dataType == 'departure')
          $('.arrival').focus();
        else
          $('.depDate').focus();

        $('.error-' + dataType).text(' ');
      });

      /*$("#submit-departure").click(function () {
        var val = $("#inter-city-departure").val();
        if (val == '') {
          $('.error-departure').removeClass("hidden");
          return;
        }

      });

      $("#submit-arrival").click(function () {
        var val = $("#inter-city-arrival").val();
        if (val == '') {
          $('.error-arrival').removeClass("hidden");
          return;
        }

      });*/
      $("#submit-departure").click(function () {
        var dataType = $(this).attr('dataType');
        var val = $("#departure_city").val().trim();
        if (val == '') {
          $('.error-departure').text('Xin hãy chọn thành phố hoặc sân bay để tiếp tục.');
          $("#inter-city-departure").val(val);
          return;
        }
        $('.error-departure').text(' ');
        $('.startplace').attr('value', val);
        $('#list-' + dataType).removeClass("show");
        if ($('.endplace').hasClass('choosen'))
          $(".startdate").focus();
        else
          $('.endplace').focus();
      });
      $("#submit-arrival").click(function () {
        var dataType = $(this).attr('dataType');
        var val = $("#arrival_city").val().trim();
        if (val == '') {
          $('.error-arrival').text('Xin hãy chọn thành phố hoặc sân bay để tiếp tục.');
          $("#inter-city-arrival").val(val);
          return;
        }
        $('.error-arrival').text(' ');
        $('.endplace').addClass('choosen');
        $('.endplace').attr('value', val);
        $('#list-' + dataType).removeClass("show");

      });

    },

    onDatimePicker: function () {

      var $startDate = null;
      var $returnDate = null;

      $.datepicker.setDefaults($.datepicker.regional["vn"]);
      $.datepickerlunar.setDefaults($.datepickerlunar.regional["vi-VN"]);


      $startDate = $('#departure_date');
      $returnDate = $('#return_date');

      $startDate.datepickerlunar({
        numberOfMonths:  (isDevice == true) ? 1 : 2,
        minDate: "0",
        dateFormat: "dd/mm/yy",
        maxDate: "+1Y",
        showAnim: "show",
        onSelect: function (selectedDate) {
          var display = $returnDate.parents('.return-date').css("display");
          if (display == "none") {
            //Do nothing
          }
          else {
            var d = $(this).datepickerlunar("getDate");
            $returnDate.datepickerlunar("option", "minDate", d);
            setTimeout(function () {
              $returnDate.datepickerlunar('show');
            }, 16);
          }
        }
      });

      $returnDate.datepickerlunar({
        numberOfMonths:  (isDevice == true) ? 1 : 2,
        minDate: $startDate.datepickerlunar("getDate"),
        maxDate: "+1Y",
        showAnim: "show",
        dateFormat: "dd/mm/yy"
      });


      $('.ticket-way input[type=radio]').off('change').on('change', function () {
        //$returnDate.parents('.return-date').toggle('');

        var display = $returnDate.parents('.return-date').css("display");
        if (display == "none") {
          //Do nothing
        }
        else {
          var md =   $startDate.datepickerlunar("getDate");
        }
      });


    },

    doCheckSearch: function (f) {

      if (f.from.value == '' ) {
        jAlert(js_lang['err_from_empry'],js_lang['error'],function(){  f.from.focus(); } );
        return false;
      }

      if (f.to.value == '') {
        jAlert(js_lang['err_to_empry'],js_lang['error'],function(){  f.to.focus(); } );
        return false;
      }

      if(f.from.value == f.to.value ) {
        jAlert(js_lang['err_from_to_same'],js_lang['error'],function(){  f.to.focus(); } );
      }

      if (f.departure_date.value == '' ) {
        jAlert(js_lang['err_departure_date_empry'],js_lang['error'],function(){  f.departure_date.focus(); } );
        return false;
      }

      if ($("#roundtrip").attr('checked')) {
        if (f.return_date.value == ''  ) {
          jAlert(js_lang['err_return_date_empry'],js_lang['error'],function(){  f.return_date.focus(); } );
          return false;
        }
      }

      if($("#search_scode").val() == '')
      {
        //jAlert('Vui lòng nhập Mã bảo vệ',js_lang['error'],function(){  f.search_scode.focus(); } );
        $('#Modal_No_Scode').modal({
          keyboard: true
        })
        return false;
      }

      return true;
    }

  };
}();


