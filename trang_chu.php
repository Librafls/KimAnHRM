<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="Public/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Public/dist/css/carousel.css" rel="stylesheet">
</head>

<body>

<!--1.Thanh tieu de-->
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
        </div>
    </div>
</div>
<!--2. Ảnh nhân viên-->
<div class="container">
	<div class="row">
    	<div class="col-md-8">
        </div>
        <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
              <img class="card-img-top" src=".../100px180/" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ten nhan vien</h5>
                <p class="card-text">Vi tri cong tac</p>
                <a href="#" class="btn btn-primary">Ho so chi tiet</a>
              </div>
            </div>
        </div>
        
    </div>
</div>

<!--3. Form nhập liệu-->
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12">
                    <form>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationServer01">First name</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationServer02">Last name</label>
                  <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationServerUsername">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    </div>
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationServer03">City</label>
                  <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationServer04">State</label>
                  <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationServer05">Zip</label>
                  <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                  <label class="form-check-label" for="invalidCheck3">
                    Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
	</div>
</div>
<!--2. Ảnh nhân viên-->
<div class="container">
	<div class="row">
    	<div class="col-md-12">
        <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="Public/assets/js/vendor/popper.min.js"></script>
    <script src="Public/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="Public/assets/js/vendor/holder.min.js"></script>
</body>
</html>
