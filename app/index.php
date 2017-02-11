<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-wrap">
              <div class="status alert alert-success" style="display: none"></div>
              <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendmail.php">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name *</label>
                        <input type="text" name="name" class="form-control" required="required">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email *</label>
                      <input type="email" name="email" class="form-control" required="required">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone *</label>
                      <input type="number" name="phone" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Company</label>
                      <input type="text" name="company" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Message *</label>
                      <textarea class="form-control" name="message" rows="7" required="required"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary btn-lg btn-send" required="required">Send Message!</button>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
