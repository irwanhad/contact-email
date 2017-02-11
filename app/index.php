<!DOCTYPE html>
<?php
session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript">
      function gostergizle() {
        $("div#container").show(100);
      }

      function sendmessage() {
			  var veriler = $('#contact_form').serialize();
  			$.ajax({
  			type: "POST",
  			url: "inc/send.php",
  			data: veriler,
  			success:function(cevap){
  			$("#send").html(""+cevap);
  			$("div#container").hide(100);
  			}
			})};

    </script>
  </head>
  <body>
    <section>
      <div id="container" class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-wrap">
              <div class="status alert alert-success" style="display: none"></div>
              <form class="contact-form" id="contact_form" name="contact_form" method="post" action="javascript:void(0);">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name *</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email *</label>
                      <input type="email" name="email" id="email" class="form-control" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone *</label>
                      <input type="number" name="phone" id="phone" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Company</label>
                      <input type="text" name="company" id="company" class="form-control">
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Subject *</label>
                        <input type="text" name="subject" id="subject" class="form-control">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Message *</label>
                      <textarea class="form-control" name="message" id="message" rows="7" required="required"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label>Captcha *</label>
                      <input type="text" name="guvenlikKodu" id="guvenlikKodu" class="form-control" required="required" />
                    </div>
                  </div>
                  <div class="col-sm-10">
                    <div class="form-group">
                      <label for="guvenlikKodu"></label>
                      <img src="inc/captcha.php" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <button type="submit" onclick="sendmessage()" class="btn btn-primary btn-lg btn-send">Send Message!</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 80px" id="send"></div>
    </section>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
