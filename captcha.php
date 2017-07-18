<html>
  <head>
    <title>reCAPTCHA demo: Explicit render after an onload callback</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
        var onSubmit = function(token) {
          console.log('success!');
          $.ajax({
              type: 'POST',
              url: 'a.php',
              success: function(data) {
                 alert(data);
              },
              error: function() {
                 alert('hu roi');
              }
          });

        };

        var onloadCallback = function() {
          grecaptcha.render('submit', {
            'sitekey' : '6Lc34xgUAAAAACehp3EsHcgWtY7vJ0C0yIkhTKUV',
            'callback' : onSubmit
          });
        };
    </script>
  </head>
  <body>
    <form action="a.php" method="POST" id="form">
    <input type="text" name="name" required="">
    <input type="text" name="phone" required="">
      <input id='submit' type="submit" value="Submit">
    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
  </body>
</html>



<html>
<head>
<script>
  function onSubmit(token) {
    alert('thanks ' + document.getElementById('field').value);
  }

  function validate(event) {
    event.preventDefault();
    if (!document.getElementById('field').value) {
      alert("You must add text to the required field");
    } else {
      grecaptcha.execute();
    }
  }

  function onload() {
    var element = document.getElementById('submit');
    element.onclick = validate;
  }
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
   <form>
     Name: (required) <input id="field" name="field">
     <div id='recaptcha' class="g-recaptcha"
          data-sitekey="6Lc34xgUAAAAACehp3EsHcgWtY7vJ0C0yIkhTKUV"
          data-callback="onSubmit"
          data-size="invisible"></div>
     <button id='submit'>submit</button>
   </form>
<script>onload();</script>
</body>
</html>