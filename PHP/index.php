<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UMS | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="\UMS\plugins\fontawesome-free\css\all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="\UMS\plugins\plugins\tempusdominus-bootstrap-4\css\tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="\UMS\plugins\plugins\icheck-bootstrap\icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="\UMS\plugins\jqvmap\jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="\UMS\dist\css\adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="\UMS\plugins\overlayScrollbars\css\OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="\UMS\plugins\daterangepicker\daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="\UMS\plugins\summernote\summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="\UMS\index.html" class="nav-link">მთავარი</a>
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
              <img src="\UMS\dist\img\user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="\UMS\dist\img\user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="\UMS\dist\img\user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
    <a href="\UMS\index.html" class="brand-link">
      <img src="\UMS\dist\img\AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">სამართავი პანელი</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="\UMS\dist\img\user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["name"];?></a>
        </div>
        <a href="#" class="d-block"><?php echo $_SESSION["position"];?></a>
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
            <a href="\UMS\PHP\projects.php" class="nav-link">
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>მთავარი</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>78</h3>

                <p>დაგეგმილი</p>
              </div>
              <div class="icon">
                <i class="fas fa-copy"></i>
              </div>
              <a href="\UMS\ums_pages\planned.html" class="small-box-footer">გაიგე მეტი <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>მიმდინარე</p>
              </div>
              <div class="icon">
                <i class="fas fa-spinner"></i>
              </div>
              <a href="\UMS\ums_pages\ongoing.html" class="small-box-footer">გაიგე მეტი <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>დასრულებული</p>
              </div>
              <div class="icon">
                <i class="fas fa-check"></i>
              </div>
              <a href="\UMS\ums_pages\finished.html" class="small-box-footer">გაიგე მეტი <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>175</h3>

                <p>ყველა პროექტი</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-th"></i>
              </div>
              <a href="\UMS\ums_pages\projects.html" class="small-box-footer">გაიგე მეტი <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
       <div class="col-md-12">
          <div class="card">
             <div class="card-footer">
                <div class="row">
                   <div class="col-sm-3 col-6">
                      <div class="description-block border-right">
                         <span class="description-percentage text-info"><i class="fas fa-caret-up"></i> 38%</span>
                         <h5 class="description-header">₾35,210</h5>
                         <span class="description-text">გეგმაშია</span>
                      </div>
                      <!-- /.description-block -->
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-3 col-6">
                      <div class="description-block border-right">
                         <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 15%</span>
                         <h5 class="description-header">₾10,390</h5>
                         <span class="description-text">იხარჯება</span>
                      </div>
                      <!-- /.description-block -->
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-3 col-6">
                      <div class="description-block border-right">
                         <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                         <h5 class="description-header">₾24,813</h5>
                         <span class="description-text">დაიხარჯა</span>
                      </div>
                      <!-- /.description-block -->
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-3 col-6">
                      <div class="description-block">
                         <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 2%</span>
                         <h5 class="description-header">₾1,512</h5>
                         <span class="description-text">შეწყდა</span>
                      </div>
                      <!-- /.description-block -->
                   </div>
                </div>
                <!-- /.row -->
               </div>
                   <!-- /.card-footer -->
            </div>
            <!-- /.card -->
         </div>
         <!-- /.col -->
      </div>
     <div class="row">
         <div class="col-md-6">
           <div class="card card-info">
              <div class="card-header bg-success">
                <h3 class="card-title">სავარაუდო ათვისებები</h3>
              </div>
              <div class="card-body">
                <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas style="height: 332px" id="budget_chart" ></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
         </div>
         <div class="col-md-6">
           <div class="card">
               <div class="card-header">
                  <h3 class="card-title">ტოპ პროექტები</h3>
                  <div class="card-tools">
                     <ul class="pagination pagination-sm float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                     </ul>
                  </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body p-0">
                  <table class="table">
                     <thead>
                        <tr>
                           <th style="width: 10px">#</th>
                           <th style="width: 320px;">დასახელება</th>
                           <th>პროგრესი</th>
                           <th style="width: 40px">მოგება</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1.</td>
                           <td>ქარიატის ადმინისტრაციულ ერთეული</td>
                           <td>
                              <div class="progress progress-xs">
                                 <div class="progress-bar bg-success" style="width: 95%"></div>
                              </div>
                           </td>
                           <td><span class="badge bg-success">95%</span></td>
                        </tr>
                        <tr>
                           <td>2.</td>
                           <td>ქარიატის ადმინისტრაციულ ერთეული</td>
                           <td>
                              <div class="progress progress-xs">
                                 <div class="progress-bar bg-primary" style="width: 70%"></div>
                              </div>
                           </td>
                           <td><span class="badge bg-primary">70%</span></td>
                        </tr>
                        <tr>
                           <td>3.</td>
                           <td>ქარიატის ადმინისტრაციულ ერთეული</td>
                           <td>
                              <div class="progress progress-xs progress-striped active">
                                 <div class="progress-bar bg-warning" style="width: 60%"></div>
                              </div>
                           </td>
                           <td><span class="badge bg-warning">60%</span></td>
                        </tr>
                        <tr>
                           <td>4.</td>
                           <td>ქარიატის ადმინისტრაციულ ერთეული</td>
                           <td>
                              <div class="progress progress-xs progress-striped active">
                                 <div class="progress-bar bg-warning" style="width: 50%"></div>
                              </div>
                           </td>
                           <td><span class="badge bg-warning">40%</span></td>
                        </tr>
                        <tr>
                           <td>5.</td>
                           <td>ქარიატის ადმინისტრაციულ ერთეული</td>
                           <td>
                              <div class="progress progress-xs progress-striped active">
                                 <div class="progress-bar bg-danger" style="width: 10%"></div>
                              </div>
                           </td>
                           <td><span class="badge bg-success">10%</span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
         </div>         

         <!-- /.col -->
      </div>
      </div><!-- /.container-fluid -->
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="\UMS\plugins\jquery\jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="C:\xampp\htdocs\UMS\plugins\jquery-ui\jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="\UMS\plugins\bootstrap\js\bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="\UMS\plugins\chart.js\Chart.min.js"></script>
<!-- Sparkline -->
<script src="\UMS\plugins\sparklines\sparkline.js"></script>
<!-- JQVMap -->
<script src="\UMS\plugins\plugins\jqvmap\jquery.vmap.min.js"></script>
<script src="\UMS\plugins\jqvmap\maps\jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="\UMS\plugins\plugins\jquery-knob\jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="\UMS\plugins\moment\moment.min.js"></script>
<script src="\UMS\plugins\daterangepicker\daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="\UMS\plugins\tempusdominus-bootstrap-4\js\tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="\UMS\plugins\summernote\summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="\UMS\plugins\overlayScrollbars\js\jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="\UMS\dist\js\adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="\UMS\dist\js\pages\dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="\UMS\dist\js\demo.js"></script>

<script type="text/javascript">
//line
    var ctxL = document.getElementById("budget_chart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
    labels: ["იანვარი", "თებერვალი", "მარტი", "აპრილი", "მაისი", "ივნისი", "ივლისი"],
    datasets: [{
    label: "ასათვისებელი",
    data: [450, 190, 400, 710, 360, 850, 200],
    backgroundColor: [
    'rgba(105, 0, 132, .2)',
    ],
    borderColor: [
    'rgba(200, 99, 132, .7)',
    ],
    borderWidth: 2
    },
    {
    label: "ათვისებული",
    data: [140, 580, 100, 390, 106, 807, 500],
    backgroundColor: [
    'rgba(0, 137, 132, .2)',
    ],
    borderColor: [
    'rgba(0, 10, 130, .7)',
    ],
    borderWidth: 2
    }
    ]
    },
    options: {
    responsive: true
    }
    });
</script>
</body>
</html>
