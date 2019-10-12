<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/buyers/register.css">
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 logo_title">
          <!-- <img src="assets/images/common/cartlist.png" style="width: 6%"> -->
          <h4>Deals of market</h4>
        </div>
      </div>
      <div class="reg_border">
        <div class="row">
          <div class="col-lg-12 col-sm-12 reg_title">
            <h5>Create Account</h5>
          </div>
        </div>
        <div class="row reg_name_row">
          <div class="col-lg-12 col-sm-12 reg_name">
            <label class="name_label">Your Name</label>
            <input type="text" class="form-control name_text_box" name="name">
          </div>
        </div>
        <div class="row reg_name_row">
          <div class="col-lg-12 col-sm-12 reg_mobile">
            <label class="reg_mob_num mob_label">Mobile number</label>
            <div class="dropdown reg_mobile_num">
              <select class="custom-select mob_code">
                <option selected>select</option>
                <option value="1">IN+91</option>
                <option value="2">USA+69</option>
                <option value="3">CAN+07</option>
              </select>
              <input type="text" class="form-control name_text_box" placeholder="Your mobile number" name="">
              
            </div>
          </div>
        </div>
        <div class="row reg_name_row">
          <div class="col-lg-12 col-sm-12 reg_name">
            <label class="email_label">Your Email(optional)</label>
            <input type="text" class="form-control name_text_box" name="name">
          </div>
        </div>
        <div class="row reg_name_row">
          <div class="col-lg-12 col-sm-12 reg_name">
            <label class="pwd_label">Password</label>
            <input type="text" class="form-control name_text_box" name="name" placeholder="Password atleast 6 characters">
            <p class="pwd_text">Password must be atleast 6 characters</p>
          </div>
          <div class="pwd_req">
            <ul class="pwd_verify">
              <li>We will send you a text to verify your phone.</li>
              <li>Message and Data rates may apply.</li>
            </ul>
          </div>
        </div>
        <div><button class="btn btn-success btn-block btn_continue">Continue</button></div>
        <div class="already_accnt"><p>Already have an account? <a href="#">Sign in</a></p></div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>