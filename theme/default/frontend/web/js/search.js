var vnTSearch = function () {
  var sid = 0;
  var isSearch = 1;
  var isDomestic = 1 ;
  var isLoadFinish = 0;
  var searchCount = 0;
  var searchCountQT =0 ;
  var numAdapterQT =1 ;
  var tripType =1 ;
  return {

    /*VE NOI DIA */

    initDomestic: function () {
      this.searchCount = 0 ;

      if (this.isSearch == 1) {
        this.searchCount = 0 ;
        this.onSearchDomestic();
      } else {
        this.onLoadDomestic();
      }

      var targetOffset = $(".group_Result").offset().top - 70;
      jQuery('html,body').animate({scrollTop: targetOffset},1000);

    },

    /*--- Ham xu ly  ---*/
    onSearchDomestic: function () {
      var $this = this;

      $.ajax({
        async: true,
        dataType: 'json',
        url: ROOT + "ajax-search.php",
        type: "POST",
        data: {sid: this.sid},
        success: function (json) {
          if (json.isSearch == 1) {
            $this.onAjaxSearch("VJ", json.data);
            $this.onAjaxSearch("BL", json.data);
            $this.onAjaxSearch("VN", json.data);
          } else {
            $this.onLoadDomestic();
          }

        },
        beforeSend: function () {

        },
        error: function (xhr, ajaxOptions, thrownError) {
          var msg = "<b>Error" + xhr.status + " : " + thrownError + '</b>';
          if (xhr.status == 500) {
            msg += '<p>The server encountered an internal error or misconfiguration and was unable to complete your request</p>';
          }

          jAlert(msg, js_lang['error']);
        }
      });


    },

    /*--- Ham xu ly load lai du lieu da search ---*/
    onLoadDomestic: function () {
      this.loadResult("OutBound", 1);
      $("#OutBound_loading").hide();
      if(this.tripType == 2 )
      {
        this.loadResult("InBound", 1);
        $("#InBound_loading").hide();
      }

    },

    /*--- Load ajax du lieu hang ---*/
    onAjaxSearch : function (airline, data) {
      var $this = this;
      var server_api = data.server_api[airline];
      var mydata = {airline: airline, param: data.param};

      $.ajax({
        cache: false,
        crossDomain: true,
        dataType: "json",
        url: server_api + "/api_search.php",
        type: "POST",
        data: mydata,
        success: function (json) {
          if (json.error_domain == 1) {
            var msg = "<p align=center>Domain <b class=font_err>"+json.domain+"</b> không cho phép truy cập API</p>";
            jAlert(msg, js_lang['error']);
          } else {
            $.ajax({
              dataType: "json",
              url: ROOT + "ajax_callback_search.php",
              type: "POST",
              data: {ajax_airline: airline, sid: data.sid, num_item: json.num_item, items: json.items, lang: lang},
              success: function (data) {
                if (data.OutBound) {
                  $this.loadResult("OutBound", 1);
                }
                if (data.InBound) {
                  $this.loadResult("InBound", 1)
                }

                //load lai bo loc hang bay
                $("#fitterAirline").html(data.fitter_airline);
                $this.onFilterAirline();

                // neu da load du 3 hang thi an loading
                $this.searchCount = ($this.searchCount + 1);
                if ($this.searchCount == 3) {
                  $("#OutBound_loading").hide();
                  if(data.OutBound == 0)
                  {
                    $this.loadResult("OutBound", 1);
                  }
                  if (data.OutBound) {
                    $("#InBound_loading").hide();
                  }
                }

              }
            });
          }
        },
        timeout: 60000,
        error: function (jqXHR, textStatus, errorThrown) {
          if (textStatus === "timeout") {
            $this.searchCount = $this.searchCount + 1;
            if ($this.searchCount == 3) {
              $("#OutBound_loading").hide();
              $("#InBound_loading").hide();
            }
          }
        }
      });


    },




    /*QUOC TE*/
    initInternational: function () {
      this.searchCountQT = 0 ;

      if (this.isSearch == 1) {
        this.onSearchInternational();
      } else {
        this.onLoadInternational();
      }

      var targetOffset = $(".group_Result").offset().top - 70;
      jQuery('html,body').animate({scrollTop: targetOffset},1000);
    },

    onSearchInternational: function () {

      var $this = this;
      $.ajax({
        async: true,
        dataType: 'json',
        url: ROOT + "ajax-search.php",
        type: "POST",
        data: {sid: this.sid},
        success: function (json) {
          if (json.isSearch == 1) {
            $this.onAjaxSearchQT("QT_Vietjet", json.data);
            $this.onAjaxSearchQT("QT_Jetstar", json.data);
            $this.onAjaxSearchQT("QT_VNA", json.data);
            $this.onAjaxSearchQT("QT", json.data);
          } else {
            $this.onLoadInternational();
          }

        },
        beforeSend: function () {

        },
        error: function (xhr, ajaxOptions, thrownError) {
          var msg = "<b>Error" + xhr.status + " : " + thrownError + '</b>';
          if (xhr.status == 500) {
            msg += '<p>The server encountered an internal error or misconfiguration and was unable to complete your request</p>';
          }

          jAlert(msg, js_lang['error']);
        }
      });

    },

    onAjaxSearchQT : function (airline, data) {
      var $this = this;
      var server_api = data.server_api[airline];
      var mydata = {airline: airline, param: data.param};

      $.ajax({
        cache: false,
        crossDomain: true,
        dataType: "json",
        url: server_api + "/api_search.php",
        type: "POST",
        data: mydata,
        success: function (json) {
          if (json.error_domain == 1) {
            var msg = "<p align=center>Domain <b class=font_err>"+json.domain+"</b> không cho phép truy cập API</p>";
            jAlert(msg, js_lang['error']);
          } else {
            $.ajax({
              dataType: "json",
              url: ROOT + "ajax_callback_search.php",
              type: "POST",
              data: {ajax_airline: airline, sid: data.sid, num_item: json.num_item, items: json.items, lang: lang},
              success: function (data) {
                if (data.InQuocte) {
                  $this.loadResult("flightResult", 1);
                }

                //load lai bo loc hang bay
                $("#fitterAirline").html(data.fitter_airline);
                $this.onFilterAirline();

                // neu da load du 3 hang QT thi an loading
                $this.searchCountQT = ($this.searchCountQT + 1);
                if ($this.searchCountQT == 3) {
                  $("#result-loading").hide();
                  if(data.InQuocte == 0)
                  {
                    $this.loadResult("flightResult", 1);
                  }
                }

              }
            });
          }
        },
        timeout: 60000,
        error: function (jqXHR, textStatus, errorThrown) {
          if (textStatus === "timeout") {
            $this.searchCountQT = $this.searchCountQT + 1;
            if ($this.searchCountQT == 3) {
              $("#result-loading").hide();
            }
          }
        }
      });


    },

    onLoadInternational: function () {
      this.loadResult("flightResult", 1);
      $("#result-loading").hide();
    },

    viewDetail: function (id) {
      $("#detailFlight_"+id).toggle();
    },


    onFilterAirline: function () {
      var $this = this ;

      // xu ly style
      $('input[data-input=checkbox]:checkbox').each(function(){
        if(!$(this).parent().hasClass('style_checkbox')){
          $(this).wrap("<span class='style_checkbox'></span>");
          $(this).parent().append("<span class='style_icon'></span>");
        }
      });

      // xu ly Click All
      $("#ckbAirline_All").click(function () {
        if($(this).is(':checked')) {
          $("[name=ckbAirline]:checked").each(function () {
            $(this).prop('checked', false);
          });
        }
      });

      // xu ly Click
      $("input[name=ckbAirline]").click(function () {
        if($(this).is(':checked')) {
          $("#ckbAirline_All").prop('checked', false);
          $(this).parent().addClass("checked");
        }else{
          var ckall = 1;
          $("input[name=ckbAirline]:checked").each(function () {
            ckall =0 ;
          });
          if(ckall) {
            $("#ckbAirline_All").prop('checked', true);
          }
          $(this).parent().removeClass("checked");
        }
        $this.onFilter();
      });

    },


    initFilter: function () {
      var $this = this ;
      /*--- Sorte ---*/
      $("[name=groupSort]").click(function() {
        $("[name=groupSort]").parent().removeClass("checked");
        $(this).parent().addClass("checked");
        $this.onFilter();

      });


      /*--- Filter by time ---*/
      //chieu di
      $( "#slider_time_departure" ).slider({
        range: true,
        min: 0,
        max: 24,
        step: 1,
        values: [ 0, 24],
        slide: function( event, ui ) {
          $( "#dep0" ).val(ui.values[ 0 ]);
          $( "#dep1" ).val(ui.values[ 1 ] );
        },
        stop: function() {
          $this.onFilter();
        }

      });
      $( "#dep0" ).val($( "#slider_time_departure" ).slider( "values", 0 ));
      $( "#dep1" ).val($( "#slider_time_departure" ).slider( "values", 1 ));
      $("#rangeValue_departure").getRangeValue({  step:6,  star:0,  stop:24  });

      // chieu ve
      if($this.tripType == 2 )
      {
        $( "#slider_time_return" ).slider({
          range: true,
          min: 0,
          max: 24,
          step: 1,
          values: [ 0, 24],
          slide: function( event, ui ) {
            $( "#ret0" ).val(ui.values[ 0 ]);
            $( "#ret1" ).val(ui.values[ 1 ] );
          },
          stop: function() {
            $this.onFilter();
          }

        });
        $( "#ret0" ).val($( "#slider_time_return" ).slider( "values", 0 ));
        $( "#ret1" ).val($( "#slider_time_return" ).slider( "values", 1 ));
        $("#rangeValue_return").getRangeValue({  step:6,  star:0,  stop:24  });
      }


      /*--- Filter by Airline ---*/
      this.onFilterAirline();

      /*--- Filter by Currency ---*/
      $("input[name=currency]").click(function() {
        $this.onFilter();
      });

      /*--- Filter by PriceType ---*/
      $("#displayPriceType").click(function() {
        $("#priceType").prop('checked', $(this).prop('checked'));
        $this.onFilter();
      });
      $("#priceType").click(function() {
        $("#displayPriceType").prop('checked', $(this).prop('checked'));
        $this.onFilter();
      });


    },

    onFilter: function () {

      if(this.isDomestic==1){
        this.loadResult("OutBound", 1);
        $("#OutBound_loading").hide();
        if(this.tripType == 2 )
        {
          this.loadResult("InBound", 1);
          $("#InBound_loading").hide();
        }
      }else{
        this.loadResult("flightResult", 1);
        $("#result-loading").hide();
      }


    },

    SetChangeDate : function(waytype, value) {

      if (waytype == "inbound"){
        window.location = ROOT_MOD+"/result.html/?do=change_date&sid=" + this.sid + "&addin=" + value;
      }else{
        window.location = ROOT_MOD+"/result.html/?do=change_date&sid=" + this.sid  + "&addout=" + value;
      }

      return true;
    },
    reLoadSearch : function() {
      window.location = ROOT_MOD+"/result.html/?do=change_date&sid=" + this.sid ;
      return true;
    },

    get_Para_Search: function () {

      var allAirlineSelected = [];
      if($("#ckbAirline_All:checked").length){
        var airline = "";
      }else{
        $("input[name=ckbAirline]:checked").each(function () {
          allAirlineSelected.push($(this).val());
        });
        var airline = allAirlineSelected.join(",");
      }

      var priceType = 0;
      if ($("#priceType").is(':checked')) {
        priceType = 1 ;
      }


      var text = "sid=" + this.sid;
      text += "&sorttype=" +  $("[name=groupSort]:checked").val();
      text += "&airline=" + airline;
      text += "&fromOut=" + parseInt($("#dep0").val())  + "&toOut=" + parseInt($("#dep1").val());
      text += "&fromIn=" + parseInt($("#ret0").val()) + "&toIn=" + parseInt($("#ret1").val());
      text += "&currency=" +  $("[name=currency]:checked").val();
      text += "&priceType="+ priceType ;
      text += "&lang=" + lang;

      return text;
    },

    loadResult: function (type, p) {
      $("#page" + type + " span").removeClass("pagecur");
      $("#page" + type + " #a" + type + "_" + p).addClass("pagecur");

      var mydata = this.get_Para_Search();
      $.ajax({
        async: true,
        dataType: 'json',
        url: ROOT + "load-search.php?type=" + type + "&p=" + p,
        type: "POST",
        data: mydata,
        success: function (data) {
          $("#" + type+"List").html(data.html);
          $("#page" + type).html(data.nav);
        },
        error: function () {
          var msg = "FAIL";
          $("#"+type+"List").html("<div style='text-align:center;padding:80px 20px;text-align:center'>" + msg + "</div>");
        }
      });
    },


    onSelect: function (waytype, id) {

      if($("#item" + id).hasClass('viewed'))
      {
        $("#item" + id).removeClass('selected');
        $("#item" + id).removeClass('viewed');
        $("#rSelect" + id).attr('checked', false);
        if (waytype == 1) {
          $("#InBound #item" + id).next().hide();
        }else{
          $("#OutBound #item" + id).next().hide();
        }
      }else{
          if (waytype == 1) { // chieu ve
            $("#InBound .row-item").removeClass("selected");
            $("#InBound .row-item").removeClass("viewed");
            $("#InBound .flight-info-detail").hide();
            $("input:checkbox[name=outID]").attr('checked', false);
          } else { // chieu di
            $("#OutBound .row-item").removeClass("selected");
            $("#OutBound .row-item").removeClass("viewed");
            $("#OutBound .flight-info-detail").hide();
            $("input:checkbox[name=inID]").attr('checked', false);
          }
          $("#item" + id).addClass("selected");
          $("#rSelect" + id).attr('checked', true);
          this.viewFlightDetail(id);
        }

      },
      onSelectQT: function (id) {


        $("#item" + id).addClass("selected");
        $("#rSelect" + id).attr('checked', true);

        this.viewPriceDetail(id);

      },

      viewFlightDetail: function (id) {

      // show detail
      var curRow = $("#item" + id);
      var rowDetail = curRow.next();
      var divDetail = rowDetail.find(".flight-detail-content"); //flight-detail-content
      if ($(curRow).hasClass("viewed")) {
        curRow.removeClass('viewed');
        rowDetail.hide();
      } else {
        curRow.addClass('viewed');
        rowDetail.show();
        if ($.trim(divDetail.html()) == "") {
          divDetail.html("<center><img src='../images/ajaxloader.gif' /></center>");
          var mydata = "&sid=" + this.sid + "&tripType=" + this.tripType + "&id=" + id;
          $.ajax({
            async: true,
            dataType: 'json',
            type: "POST",
            url: ROOT_MOD + "/ajax/detailFlightSearch.html",
            data: mydata,
            success: function (data) {
              divDetail.html(data.html);
            }
          });
        }
      }

    },

    viewPriceDetail: function (id) {
      var currency = $("[name=currency]:checked").val() ;
      // show detail
      var curRow = $("#item" + id);

      var divDetail = curRow.find(".price-detail-content");
      if ($(curRow).hasClass("viewed")) {
        curRow.removeClass('viewed');
        divDetail.hide();
      } else {
        curRow.addClass('viewed');
        divDetail.show();
        if ($.trim(divDetail.html()) == "") {
          divDetail.html("<center><img src='../images/ajaxloader.gif' /></center>");
          var mydata = "&sid=" + this.sid +"&id=" + id+'&currency='+currency;
          $.ajax({
            async: true,
            dataType: 'json',
            type: "POST",
            url: ROOT_MOD + "/ajax/detailPrice.html",
            data: mydata,
            success: function (data) {
              divDetail.html(data.html);
            }
          });
        }
      }

    },

    doBooking : function(sid,tripType)
    {
      var outID = $('input[name=outID]:checked').val() ;
      var inID =  $('input[name=inID]:checked').val() ;

      if(tripType==2){
        if(outID && inID) {
          location.href = ROOT_MOD+"/booking.html/?sid="+sid+'&outID='+outID+'&inID='+inID;
        }else{
          if(outID=='' || outID==undefined){
            var targetOffset = $("#OutBound").offset().top - 270;
            jQuery('html,body').animate({scrollTop: targetOffset},1000);
            //jAlert(js_lang['err_departure_empty'],js_lang['error'] ) ;
            return false ;
          }


          if(inID=='' || inID==undefined){
            var targetOffset = $("#InBound").offset().top - 280;
            jQuery('html,body').animate({scrollTop: targetOffset},1000);
            //jAlert(js_lang['err_return_empty'],js_lang['error'] ) ;
            return false ;
          }

        }
      }else{
        if(outID) {
          location.href = ROOT_MOD+"/booking.html/?sid="+sid+'&outID='+outID;
        }else{
          jAlert(js_lang['err_do_booking'],js_lang['error'] ) ;
        }
      }
      return false ;
    },

    doBookingQT : function(sid)
    {
      var rSelect = $('input[name=rSelect]:checked').val() ;
      if(rSelect=='' || rSelect==undefined){
        jAlert(js_lang['err_do_booking'],js_lang['error'] ) ;
      }else{
        var arr_id =rSelect.split("-");
        var outID = parseInt(arr_id[0]);
        var inID =  parseInt(arr_id[1]) ;
        var ext_link = 'outID='+outID ;
        if(inID>0) {
          ext_link += '&inID='+inID	;
        }
        location.href = ROOT_MOD+"/booking.html/?sid="+sid+'&'+ext_link;
      }

      return false ;
    },

  };
}();


