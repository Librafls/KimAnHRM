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
          <a class="navbar-brand" href="#">Kim An HR</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Nhân viên <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Đào tạo</a>
              </li>
                  <li class="nav-item">
                <a class="nav-link" href="#">Thăng tiến</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Thưởng phạt</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  QL Công việc
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Thêm nhân viên</a>
                  <a class="dropdown-item" href="#">Thay đổi thông tin</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Nghỉ việc</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
          </div>
        </nav>
        </div>
    </div>
</div>
<!--4. Đường dẫn-->
<div class="container-fluid"	>
	<div class="row">
    	<div class="col-md-12">
               <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Nhân viên</a></li>
                <li class="breadcrumb-item active" aria-current="page">DS Nhân viên</li>
              </ol>
            </nav>
        </div>
    </div>
</div>
<!--4. Danh sach nhan vien-->
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12">
                    <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Mã NV</th>
                  <th scope="col">Họ</th>
                  <th scope="col">Tên</th>
                  <th scope="col">Vị trí</th>
                  <th scope="col">Đơn vị</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>KA002</td>
                  <td>Lê Tuấn</td>
                  <td>Kiệt</td>
                  <td>NV.IT</td>
                  <td>HO</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                 <td>KA005</td>
                  <td>Nguyễn Quang</td>
                  <td>Hưng</td>
                  <td>GDKV</td>
                  <td>KV2</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                 <td>KA045</td>
                  <td>Trần Thị Hồng</td>
                  <td>Nhung</td>
                  <td>CNT</td>
                  <td>CN. Khánh Hội</td>
                </tr>
                 <tr>
                <th scope="row">4</th>
                 <td>KA045</td>
                  <td>Trần Thị Hồng</td>
                  <td>Nhung</td>
                  <td>CNT</td>
                  <td>CN. Khánh Hội</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
<!--4. phân trang-->
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
