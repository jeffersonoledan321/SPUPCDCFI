<?php include"header.php";

      $servername="localhost";
      $username="root";
      $password="";
      $dbname="system";
      $con = mysqli_connect($servername,$username,$password,$dbname);


      $sql ="SELECT count(id) AS total FROM staff";
      $result = mysqli_query($con,$sql);
      $values = mysqli_fetch_assoc($result);
      $rows=$values['total'];
     
      $volunteer ="SELECT count(id) AS volunteer FROM add_volunteer";
      $result = mysqli_query($con,$volunteer);
      $values = mysqli_fetch_assoc($result);
      $vol=$values['volunteer'];

      $children ="SELECT count(id) AS children FROM qrcodes";
      $result = mysqli_query($con,$children);
      $values = mysqli_fetch_assoc($result);
      $child=$values['children'];

      $event="SELECT count(id) AS event FROM add_event";
      $result = mysqli_query($con,$event);
      $values = mysqli_fetch_assoc($result);
      $event=$values['event'];



?>
<section class="content">

<div  align="center" style="font-family: fantasy;">
 <div class="">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>
              </div><br>


                <!--  <div class="card-header">
              <h3 class="card-title">Volunteer</h3>
            </div><br> -->
              <!-- /.card-header -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$rows?></h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="view_staff.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$vol?></h3>

                <p>Volunteers</p>
              </div>
              <div class="icon">
               <i class="fas fa-hands-helping"></i>
              </div>
              <a href="volunteer_view.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$child?></h3>

                <p>Childrens</p>
              </div>
              <div class="icon">
                <i class="fas fa-child"></i>
              </div>
              <a href="view_children.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$event?></h3>

                <p>Events</p>
              </div>
              <div class="icon">
                <i class="fas fa-calendar-week"></i>
              </div>
              <a href="view_events.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!--       <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img style="height: 600px" class="d-block w-100" src="dist/img/cdc.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img style="height: 600px" class="d-block w-100" src="dist/img/photo4.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img style="height: 600px" class="d-block w-100" src="dist/img/photo1.png" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div> -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div></div>
<?php include"footer.php"; ?>