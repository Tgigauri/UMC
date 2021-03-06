<?php
session_start();
require_once "class.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UMS | Dashboard</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.html" class="nav-link">მთავარი</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="\UMS\ums_pages\contact.html" class="nav-link">კონტაქტი</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="ძიება" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  გიორგი ბერიძე
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">გთხოვთ დამიკავშირდეთ...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 საათი</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  ლევან ლომიძე
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">ვადასტურებ შეტყობინების მიღებას</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 6 საათი</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  ნია ბარათაშვილი
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">საინტერესო შემოთავაზება მაქვს...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 7 საათი</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">ყველა შეტყობინება</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 შეტყობინება</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 ახალი შეტყობინება
            <span class="float-right text-muted text-sm">3 წუთი</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 მეგობრობის თხოვნა
            <span class="float-right text-muted text-sm">12 საათი</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 ახალი რეპორტი
            <span class="float-right text-muted text-sm">2 დღე</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">ყველა შეტყობინება</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">სამართავი პანელი</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION["name"];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                სამუშაო გარემო
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="\UMS\ums_pages\planned.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>დაგეგმილი</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\ongoing.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>მიმდინარე</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\finished.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>დასრულებული</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="projects.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                პროექტები
                <span class="right badge badge-danger">ახალი</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-day"></i>
              <p>
                ვადები
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="\UMS\ums_pages\deadline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ვადა იწურება</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\complete_garanty.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>შესრულების გარანტია</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\payment.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ავანსის გარანტია</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\reserve.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>რეზერვის გარანტია</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\insurance.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>დაზღვევა</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\work_compl.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>სამუშაოების დასრულება</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check"></i>
              <p>
                ანგარიშები
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="\UMS\ums_pages\budget_compl.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ბიუჯეტი/შესრულება</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\budget_plan.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ბიუჯეტის გეგმა</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\misdoc_audit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Misdoc Audit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\bi_audit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BI Audit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\gov_ge.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gov.ge</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\oris_pays.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Oris Pays</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\con_numcheck.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contract Num Check</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\payments.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>გადახდები</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\changes_report.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ცვლილებების ანგარიში</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\sup_users.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supervisor Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\contr_eval.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>კონტრაქტორის შეფასება</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                სტატისტიკა
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="\UMS\ums_pages\statuses.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>სტატუსები</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\payment_rep_o_m.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>გადახდების ანგარიში</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\cost.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ღირებულება</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\numberofprojects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>პროექტების რაოდენობა</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\compliting.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>შესრულება</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-toolbox"></i>
              <p>
                პარამეტრები
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="\UMS\ums_pages\week_suprev.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Week Suprevisors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="\UMS\ums_pages\map.html" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                რუკა
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="\UMS\ums_pages\responsoble.html" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                პასუხისმგებელი პირები
              </p>
            </a>
          </li>
          <li class="nav-header">მენიუ</li>
          <li class="nav-item">
            <a href="\UMS\ums_pages\calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                კალენდარი
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                ელ.ფოსტა
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="\UMS\ums_pages\inbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ინბოქსი</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\send.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>მიწერე</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\read.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>წაიკითხე</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                დამატებით
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="\UMS\ums_pages\login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>შესვლა</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\signup.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>რეგისტრაცია</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\UMS\ums_pages\recover.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>პაროლის აღდგენა</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">ლეგენდა</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">მნიშვნელოვანი</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>გაფრთხილება</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>ინფორმაციული</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>პროექტები</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">მთავარი</a></li>
              <li class="breadcrumb-item active">პროექტები</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header special">
              <h3 class="card-title">ყველა პროექტი</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="ძიება">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>ტიპოლოგიის კოდები</th>
                    <th>დონორი</th>
                    <th>პროგრამა</th>
                    <th>დასახელება</th>
                    <th>რეგიონი</th>
                    <th>მუნიციპალიტეტი</th>
                    <th>ტიპოლოგია</th>
                    <th>ზედამხედველის-ID</th>
                    <th>ზედამხედველი</th>
                  </tr>
                </thead>
                
                
                    <tbody>
                  <tr>
                  <?php 
                  //აქ ფუნქციას ვიყენებთ რომ წამოიღოს ყველა საჭირო მონაცემი რომელიც მაგიდაში გვჭირდება
                        $name = $_SESSION["name"];
                        //echo $name;
                        $id = getID($name);
                        echo $id;
                      $get = getUsersProjects($id);
                      
                       foreach($get as $post){
                        ?>
                
                    <td><?php  echo $post['PRJ_Code']?> </td>
                    <td><?php  echo $post['Location_Codes']?> </td>
                    <td><?php  echo $post['DONOR']?> </td>
                    <td><?php  echo $post['PROGRAM']?> </td>
                    <td><?php  echo '<a href="projects.php?id='.$post['PRJ_Code'].'">დეტალები</a>'.'[ ' .$post['PRJ_Name_GE'].' ]'?> </td>      
                    <td><?php  echo $post['Region_Code']?> </td>
                    <td><?php  echo $post['Location_Codes']?> </td>
                    <td><?php  echo $post['Typology_Codes']?> </td>
                    <td><?php  echo $post['Supervisor_ID']?> </td>
                    <td><?php  echo $post['User_ID']?> </td>
                    



                    </tr>
                       <?php  }  ?>
                       
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-pay-tab" data-toggle="pill" href="#custom-tabs-two-pay" role="tab" aria-controls="custom-tabs-two-pay" aria-selected="ture">გადახდები</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-years-tab" data-toggle="pill" href="#custom-tabs-two-years" role="tab" aria-controls="custom-tabs-two-years" aria-selected="false">წლების მიხედვით</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-change-tab" data-toggle="pill" href="#custom-tabs-two-change" role="tab" aria-controls="custom-tabs-two-change" aria-selected="false">ღირებულების და ვადის ცვლილება</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-trip-tab" data-toggle="pill" href="#custom-tabs-two-trip" role="tab" aria-controls="custom-tabs-two-trip" aria-selected="false">მივლინება</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-tender-tab" data-toggle="pill" href="#custom-tabs-two-tender" role="tab" aria-controls="custom-tabs-two-tender" aria-selected="false">ტენდერი</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-garanty-tab" data-toggle="pill" href="#custom-tabs-two-garanty" role="tab" aria-controls="custom-tabs-two-garanty" aria-selected="false">გარანტიები</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-responsible-tab" data-toggle="pill" href="#custom-tabs-two-responsible" role="tab" aria-controls="custom-tabs-two-responsible" aria-selected="false">პასუხისმგებელი</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-description-tab" data-toggle="pill" href="#custom-tabs-two-description" role="tab" aria-controls="custom-tabs-two-description" aria-selected="false">პროექტის აღწერა</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-details-tab" data-toggle="pill" href="#custom-tabs-two-details" role="tab" aria-controls="custom-tabs-two-details" aria-selected="false">დეტალები</a>
                  </li>
                </ul>
              </div>
              
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-two-tabContent">
                    <!-- გადახდები -->
                <div class="tab-pane fade active show" id="custom-tabs-two-pay" role="tabpanel" aria-labelledby="custom-tabs-two-pay-tab">
                  <div class="card-header">
                    <h3 class="card-title">გადახდები</h3>
                  </div>
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">    
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>ტიპი</th>
                          <th>N</th>
                          <th>თარიღი</th>
                          <th>წარმოდგენილი</th>
                          <th>ავანსი</th>
                          <th>რეზერვი</th>
                          <th>გადასახდელი</th>
                          <th>დონორი</th>
                          <th>სახელმწიფო</th>
                          <th>მუნიციპალიტეტი</th>
                          <th>გადახდილი</th>
                        </tr>
                      </thead>
                      <?php
                      //ამოწმებს დააჭირე თუ არა იუზერმა დეტალებს, თუ დააჭირა project_id-ის მიხედვით გამოაჩენს დამატებით დეტალებს                        
                      if(isset($_GET["id"])){
                      $id=$_GET['id'];
                      $get = projectDetails($id);
                      foreach($get as $post){                 
                      ?>
                      <tbody>
                        <tr>
                        <td><?php  echo $post['PRJ_CODE']?> </td>
                        <td><?php  echo $post['SAW_TYPE']?> </td>
                        <td><?php  echo $post['SAW_NUM']?> </td>
                        <td><?php  echo $post['SAW_PROVIDED']?> </td>
                        <td><?php  echo $post['SAW_DEDUCTED']?> </td>
                        <td><?php  echo $post['SAW_CODE']?> </td>
                        <td><?php  echo $post['SAW_RETENTION']?> </td>
                        <td><?php  echo $post['SAW_TOBEPAID']?> </td>
                        <td><?php  echo $post['PRJ_CODE']?> </td>
                        <td><?php  echo $post['PRJ_CODE']?> </td>
                        <td><?php  echo $post['PRJ_CODE']?> </td>
                        <td><?php  echo $post['PRJ_CODE']?> </td>
 
                        </tr>
                      </tbody>
                      <?php  }}  ?>
                    </table>      
                  </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-years" role="tabpanel" aria-labelledby="custom-tabs-two-years-tab">
                  <div class="card-header">
                    <h3 class="card-title">გადახდები წლების მიხედვით</h3>
                  </div> 
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">   
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>წელი</th>
                          <th>დონორი</th>
                          <th>სახელმწიფო</th>
                          <th>მინიპალიტეტი</th>
                          <th>მგფ</th>
                          <th>სულ</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>0301-0076</td>
                          <td>2020</td>
                          <td>1 881 087,78  </td>
                          <td>338 595,80  </td>
                          <td>0,00</td>
                          <td>0,00</td>
                          <td>2 219 683,58  </td>
                        </tr>
                      </tbody>
                    </table>      
                  </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-change" role="tabpanel" aria-labelledby="custom-tabs-two-change-tab">
                  <div class="card-header">
                    <h3 class="card-title">ღირებულების და ვადის ცვლილება</h3>
                  </div> 
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ცლილებები</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>NO DATA YET</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> 
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-trip" role="tabpanel" aria-labelledby="custom-tabs-two-trip-tab">
                  <div class="card-header">
                    <h3 class="card-title">მივლინება</h3>
                  </div> 
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>ზედამხედველი</th>
                          <th>ტელეფონი</th>
                          <th>მივლ. დაწყება</th>
                          <th>მივლ. დასრულება</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>NO DATA YET</td>
                          <td>NO DATA YET</td>
                          <td>NO DATA YET</td>
                          <td>NO DATA YET</td>
                          <td>NO DATA YET</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> 
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-tender" role="tabpanel" aria-labelledby="custom-tabs-two-tender-tab">
                  <div class="card-header">
                    <h3 class="card-title">ტენდერი</h3>
                  </div> 
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>გამოცხადების თარიღი</th>
                          <th>მიღების დაწყება</th>
                          <th>მიღების დასრულება</th>
                          <th>ტენდერის გახსნა</th>
                          <th>გახსნის ადგილი</th>
                          <th>შეფასების თარიღი</th>
                          <th>SPA LINK</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>28.09.2018</td>
                          <td>07.10.2018</td>
                          <td>10.10.2018</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><a href="https://tenders.procurement.gov.ge/public/?go=280332&lang=ge">ბმული</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div> 
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-garanty" role="tabpanel" aria-labelledby="custom-tabs-two-garanty-tab">
                  <div class="card-header">
                    <h3 class="card-title">გარანტიები</h3>
                  </div> 
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>გარანტიები</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>NO DATA YET</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> 
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-responsible" role="tabpanel" aria-labelledby="custom-tabs-two-responsible-tab">
                  <div class="card-header">
                    <h3 class="card-title">პასუხისმგებელი</h3>
                  </div> 
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>PRJ Code</th>
                          <th>სამსახური</th>
                          <th>გვარი, სახელი</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>0707-0028</td>
                          <td>პროგრამის კოორდინატორი</td>
                          <td>დევიძე აკაკი</td>
                        </tr>
                        <tr>
                          <td>0707-0028</td>
                          <td>პროგრამის კოორდინატორი</td>
                          <td>დევიძე აკაკი</td>
                        </tr>
                        <tr>
                          <td>0707-0028</td>
                          <td>პროგრამის კოორდინატორი</td>
                          <td>დევიძე აკაკი</td>
                        </tr>
                        <tr>
                          <td>0707-0028</td>
                          <td>პროგრამის კოორდინატორი</td>
                          <td>დევიძე აკაკი</td>
                        </tr>                        
                      </tbody>
                    </table>
                  </div> 
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-description" role="tabpanel" aria-labelledby="custom-tabs-two-description-tab">
                  <div class="card-header">
                    <h3 class="card-title">პროექტის აღწერა</h3>
                  </div> 
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>სამუშაოების აღწერა</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Work Description</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> 
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-details" role="tabpanel" aria-labelledby="custom-tabs-two-details-tab">
                  <div class="card-header">
                    <h3 class="card-title">დეტალები</h3>
                  </div> 
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>დეტალები</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>NO DATA YET</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://mi-un.ge/ums/">Mi-Un.Ge</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>


<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="../dist/js/pages/dashboard3.js"></script>