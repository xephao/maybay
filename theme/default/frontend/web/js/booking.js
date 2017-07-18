var vnTBooking = function () {
  var sid = 0;
  var isDomestic = 1 ;
  var tripType =1 ;
  return {

    /*Ham khoi tao*/
    init: function () {

      $('.selbaggage').change(function () {
        var allCbo = $('.selbaggage');
        var totalPrice = 0;
        allCbo.each(function () {
          totalPrice += parseFloat($(this).val().split(',')[1]);
        });

        $('.text-price-baggage').text(totalPrice).formatCurrency({ symbol: '', roundToDecimalPlace: 0 });

        var totalPriceOrigin = parseFloat($('#totalPriceOrigin').val());
        $('#total_price').val((totalPrice + totalPriceOrigin))

        $('.text-total-price').text((totalPrice + totalPriceOrigin)).formatCurrency({ symbol: '', roundToDecimalPlace: 0 });

      });


      this.onSubmit();

    },

    onSubmit : function()
    {
      $('#formBooking').validate({

        rules: {
          email: {
            required: true ,
            email: true
          },
          security_code: {
            required: true,
            remote: ROOT+"load_ajax.php?do=check_sec_code_2"
          }

        },
        messages: {
          email: {
            required: js_lang['err_email_empty'],
            email: js_lang['err_email_invalid'],
          },
          security_code: {
            required: js_lang['err_security_code_empty'],
            remote: js_lang['err_security_code_invalid']
          }

        }

      });

    },

    /*Ham khoi tao thanh toan*/
    initPaymnet: function () {

      $(".method_pay_item .method_pay_content").hide();
      $('.method_pay_item .method_pay_rTitle input[type=radio]:checked').parents(".method_pay_item").addClass("selected");
      $('.method_pay_item .method_pay_rTitle input[type=radio]:checked').parents(".method_pay_item").find(".method_pay_content").show();
      $(".method_pay_item .method_pay_rTitle input[type=radio]").change(function(){
        if(this.checked == true){
          $(this).parents(".method_pay_item").addClass("selected");
          $(this).parents(".method_pay_item").siblings().find(".method_pay_content").hide();
          $(this).parents(".method_pay_item").find(".method_pay_content").show();
          $(this).parents(".method_pay_item").siblings().removeClass("selected");
        }
      });

    },
    processCheckoutMethod: function () {

      if(!jQuery('.method_pay_item').hasClass('selected')){
        jAlert('Quý khách chưa chọn hình thức thanh toán', js_lang['error'] );
        return false;
      }

      var choose = $('input[name=rPayment]:checked').val();
      if(choose == 'cod'){

        if ($("#c_name").val() == '') {
          jAlert("Vui lòng nhập Họ tên người nhận", js_lang['error']);
          $("#c_name").focus();
          return false;
        }
        if ($("#c_address").val() == '') {
          jAlert("Vui lòng nhập địa chỉ", js_lang['error']);
          $("#c_address").focus();
          return false;
        }
        if ($("#c_city").val() == '') {
          jAlert("Vui lòng nhập thành phố", js_lang['error']);
          $("#c_city").focus();
          return false;
        }
        if ($("#c_phone").val() == '') {
          jAlert("Vui lòng nhập điện thoại", js_lang['error']);
          $("#c_phone").focus();
          return false;
        }
      }

      return true;

    }


  };
}();


