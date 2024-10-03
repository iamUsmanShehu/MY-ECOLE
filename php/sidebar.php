
<style type="text/css">
  .small-box{
    background: white!important;
    color: #808191!important;
  }
  .icon{
    background-color:#deecff;/*alternative color: #EDF4FF*/

    border-radius: 8px;
    font-size: 25px;
    width: 60px;
    height: 60px;
  }
  .small-box .icon{
    display:inline-flex!important;
    align-items: right;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
  }
  .small-box h3{color:#343a40;} 
  .layout-fixed .main-sidebar{background: <?=$theme?>!important;}
  /*.nav-link.active{background:#ed4444!important;}*/
  .brand-link{background:#ed4444!important; }
</style>
  <!-- sci bgblue: #1b55a1 -->
  <!-- sci bgred: #ed4444 -->

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <i class="fas fa-school"></i>
      <!-- <img src="../dist/img/myechole.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;background: white; border-radius: 50px;"> -->
      <span class="brand-text font-weight-light"><?=$name?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->
        <!-- <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <!-- <center>
        <div class="info">
          
            
          
        </div></center> -->
      <!-- </div> -->

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <?php if ($_SESSION['role'] == 1): ?>
   
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
               Sessions
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link" data-toggle="modal" data-target="#modal-session">
                    <i class="far fa-new nav-icon"></i>
                    <p>Add Session</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="manage-sessions" class="nav-link">
                    <i class="far fa-edit nav-icon"></i>
                    <p>Manage Session</p>
                  </a>
                </li>
              </ul>
          </li>
          <?php endif ?>
          <?php if ($_SESSION['role'] == 1): ?> 
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
               Terms
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link" data-toggle="modal" data-target="#modal-terms">
                    <i class="far fa-new nav-icon"></i>
                    <p>Add Term</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="manage-terms" class="nav-link">
                    <i class="far fa-edit nav-icon"></i>
                    <p>Manage Term</p>
                  </a>
                </li>
              </ul>
          </li>
          <?php endif ?>
          <?php if ($_SESSION['role'] == 1): ?> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
               Classes
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link" data-toggle="modal" data-target="#modal-class">
                    <i class="far fa-new nav-icon"></i>
                    <p>Add Class</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="manage-class" class="nav-link">
                    <i class="far fa-edit nav-icon"></i>
                    <p>Manage Class</p>
                  </a>
                </li>
              </ul>
          </li>
          <?php endif ?>
           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
               Students
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
              <ul class="nav nav-treeview">
                <?php if ($_SESSION['role'] == 1): ?>
                <li class="nav-item">
                  <a href="student-form" class="nav-link">
                    <i class="fas fa-user-plus nav-icon"></i>
                    <p>Add Student</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="manage-student" class="nav-link">
                    <i class="far fa-edit nav-icon"></i>
                    <p>Manage Student</p>
                  </a>
                </li>
                <?php endif ?>
                <li class="nav-item">
                  <a href="admission-number" class="nav-link">
                    <i class="fa fa-print nav-icon"></i>
                    <p>Print Admission NO</p>
                  </a>
                </li>
              </ul>
          </li>
          <?php if ($_SESSION['role'] == 1): ?> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Subjects
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="add-subject" class="nav-link" data-toggle="modal" data-target="#modal-subject">
                    <i class="far fa-file nav-icon"></i>
                    <p>Add Subject</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="manage-subject" class="nav-link">
                    <i class="far fa-edit nav-icon"></i>
                    <p>Manage Subject</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="subject-combination" class="nav-link" data-toggle="modal" data-target="#modal-subject-combination">
                    <i class="far fa-edit nav-icon"></i>
                    <p>Subject Combination</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="manage-subject-combination" class="nav-link">
                    <i class="far fa-edit nav-icon"></i>
                    <p>Mnage Subject Combination</p>
                  </a>
                </li>
              </ul>
             </li>
          <?php endif ?> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
               Grade
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
              <ul class="nav nav-treeview">
                <?php if ($_SESSION['role'] == 1): ?>
                <li class="nav-item">
                  <a href="add-result" class="nav-link">
                    <i class="far fa-file nav-icon"></i>
                    <p>Add Grades</p>
                  </a>
                </li>
              <?php endif ?>

              

                <li class="nav-item">
                  <a href="manage-grades" class="nav-link">
                    <i class="far fa-edit nav-icon"></i>
                    <p>Manage Grades</p>

                  </a>
                </li>
              </ul>
          </li>
          
          <li class="nav-item">
            <a href="" class="nav-link" data-toggle="modal" data-target="#modal-approve">
              <i class="nav-icon fa fa-book-reader "></i>
              <p>
                Approve Results
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-play"></i>
              <p>
               Promotion
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
              <ul class="nav nav-treeview">
                <?php if ($_SESSION['role'] == 1): ?>
                <li class="nav-item">
                  <a href="./rpromote" class="nav-link">
                    <i class="far fa-file nav-icon"></i>
                    <p>Batch Promotion</p>
                  </a>
                </li>
              <?php endif ?>

              

                <li class="nav-item">
                <a href="single-promotion" class="nav-link" data-toggle="modal" data-target="#modal-promo">
                    <i class="far fa-new nav-icon"></i>
                    <p>Single Promotion</p>
                  </a>
                </li>
              </ul>
          </li>
          
          


          <li class="nav-item">
            <a href="../logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>