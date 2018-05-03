<!DOCTYPE html>
<html lang="en">
<head>
  <title>ABBC WALLET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="container main-container">
    <div class="row">


    </div>
    <div class="row-modal" id="login-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-heading" align="center">

            <img class="login-logo" src="{{ asset('img/abbc.svg') }}">
            <h3>WALLET</h3>
            <img class="login-line" src="{{ asset('img/line.svg') }}">
          </div>

          <div class="modal-body" align="center">
            <form action="/landing" role="form">
              <div class="form-group">
                <div class="input-group login-textfield">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span>
                  </span>
                  <input type="text" class="form-control text-line" placeholder="Username" />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group login-textfield">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                  </span>
                  <input type="password" class="form-control text-line" placeholder="Password" />

                </div>

              </div>

              <div class="form-group text-center login-button">
                <button type="submit" class="btn btn-sm btn-login">LOGIN</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>



  <div id="footer">
    <div class="container">
      <a href="https://abbcfoundation.com/"><p class="footer-block">www.abbcfoundation.com</a> &copy; All Rights Reserved.</p>

      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">Privacy</a>
        </li>
        <li class="list-inline-item">
          <a href="#">Terms</a>
        </li>
        <li class="list-inline-item">
          <a href="#">FAQ</a>
        </li>
      </ul>
    </div>
  </div>

</body>
</html>
