<?php
// Importing the database connection file
 // require '../functions/common.php';
 @include '../functions/config.php';

// Starting the session and checking if the user is logged in as an admin
session_start();
if(!isset($_SESSION['admin_name'])){
    header('Location:../admin_signin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> SVCI | Administrator </title>
    <link rel="stylesheet" href="../css/style.dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="../images/svci.icon.png" type="image/x-icon">
    <script src="../js/scriptchart.js"></script>

    </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <a href="admin_dashboard.php"><img src="../images/svci.png.png" alt="SVCI LOGO">
      </a>
      <span class="logo_name">Administrator</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_dashboard.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Admin Dashboard</span>
          </a>
        </li>
        <li>
          <a href="admin_students_rfid_info.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Student Information</span>
          </a>
        </li>
        <li>
          <a href="admin_accounts.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Accounts</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../functions/logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Admin Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <i class='bx bx-user'></i>
       <?php echo $_SESSION['admin_name'] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">1000</div>
            <div class="box-topic">CCS Students</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bxs-group cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">50</div>
            <div class="box-topic">CCS Teachers</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bxs-graduation cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">10,000</div>
            <div class="box-topic">Computers</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bx-server cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Attendance Rate</div>
            <div class="number">99.1%</div>
            <div class="box-topic">State Average</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bx-git-compare cart four'></i>
        </div>
      </div>

      <div class="chart-boxes">
        <div class="recent box">
          <div class="title">Educational Stage</div>
          <div class="chart-details">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
          </div>
        </div>

        <div class="lab box">
          <div class="title">Computer Laboratory</div>
          <ul class="top-details">
            <li>
              <a>
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider"></span>
                </label>
                  <span class="comlab"> Computer Lab 1 </span>
              </a>
              <span class="avail">Available</span>
          </li>
          <li>
            <a>
              <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
              </label>
                <span class="comlab"> Computer Lab 2 </span>
            </a>
            <span class="avail">Available</span>
          </li>
          <li>
            <a>
              <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
              </label>
                <span class="comlab"> Computer Lab 3 </span>
            </a>
            <span class="avail">Available</span>
        </li>
        <li>
          <a>
            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>
              <span class="comlab"> Computer Lab 4 </span>
          </a>
          <span class="avail">Available</span>
      </li>
      <li>
        <a>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
            <span class="comlab"> Computer Lab 5 </span>
        </a>
        <span class="avail">Available</span>
    </li>
    <li>
      <a>
        <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
        </label>
          <span class="comlab"> Computer Lab 6 </span>
      </a>
      <span class="avail">Available</span>
    </li>
          </ul>
          <script src="../js/scriptcheckbox.js"></script>

        </div>
      </div>
    </div>
  </section>
  <script src="../js/script.dashboard.js"></script>
  <script src="../js/sidebar.js"></script>
  <script src="../js/EducationalStage.js"> </script>
</body>
</html>
