<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <script src="https://kit.fontawesome.com/3c52d6d952.js" crossorigin="anonymous"></script>

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include "./includes/sidebar.php";?>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">

      <!--  Header Start -->
      <?php #include "./includes/header.php";?>
      <!--  Header End -->

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="row">
            <h1 style="padding-bottom:1%;">Dashboard</h1>
            <div class="col-md-2">
              <div class="card" style="background-color:#F51202; padding:2%;">
                <div class="card-body">
                  <h2 class="card-title" style="color:white;">Total Application</h2>
                  <h1 style="color:white;">120</h1>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card" style="background-color:#007DFC; padding:2%;">
                <div class="card-body">
                  <h2 class="card-title" style="color:white;">New Application</h2>
                  <h1 style="color:white;">10</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3" style="padding-top:2%;">
          <h1 class="m-3">Applications</h1>
          <button id="addNewButton" class="btn" style="border-radius: 50px; padding: 10px 20px; background-color: #1E1E1E; color: white;">March 2023</button>
          
        </div>

        <style>
          .tab {
            font-size: 17px;
            margin-bottom: 2%;
            cursor: pointer;
            font-family: 'Urbanist', sans-serif;
          }
          .rainbow-line {
            height: 4px;
            background: linear-gradient(107.3deg, #6E38E0 13.39%, #FF5F36 77.64%);
            position: relative;
            top: -3px; /* Adjust this value to fit the line with your tabs */
            margin-top: 1%;
            margin-bottom: 1%;
            margin-left: -1%;
            margin-right: -1%;
            border-radius: 50px;
          }

          .table-head{
            font-family: 'Urbanist', sans-serif;
          }

        </style>


        <div class="row">
          <div class="col-md-12 table-head">
            <span class="tab m-3 active" onclick="selectTab(this)" style="color:#000;">Startup</span>
            <span class="tab m-3" onclick="selectTab(this)" style="color:#898989">Investor</span>
            <span class="tab m-3" onclick="selectTab(this)" style="color:#898989">Ecosystem Partner</span>
          </div>
        </div>

        <div class="rainbow-line" id="rainbow-line"></div>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
          // Set the first tab as active by default
          var firstTab = document.querySelector('.tab.active');
          positionRainbowLine(firstTab);
        });

        function selectTab(tab) {
          // Remove 'active' class from all tabs
          var tabs = document.querySelectorAll('.tab');
          tabs.forEach(function(tab) {
            tab.classList.remove('active');
            tab.style.fontWeight = 'normal'; // Reset font weight
            tab.style.color = '#898989'; // Set font color to black for active tab
          });

          // Add 'active' class to the clicked tab
          tab.classList.add('active');
          tab.style.color = '#000'; // Set font color to black for active tab

          // Position the rainbow line below the clicked tab
          positionRainbowLine(tab);
        }

        function positionRainbowLine(tab) {
          var rainbowLine = document.getElementById('rainbow-line');
          rainbowLine.style.width = tab.offsetWidth + 'px';
          rainbowLine.style.left = tab.offsetLeft + 'px';
        }
        </script>



        <table class="table table-class" id="table-id">

          <thead class="table-head" style="background-color:#E9E9E9;">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Date</th>
              
            </tr>

          </thead>

          <?php include "./includes/table-rows.php"; ?>

        </table>
   
        <div class="d-flex align-items-center justify-content-end mb-3">
            <p class="m-2">Display</p>
            <!-- Show Numbers Of Rows -->
            <input class="form-control" type="number" name="state" id="maxRows" style="width: 65px;">

            <ul class="pagination" style="margin-left:1%;">
                <li data-page="prev">
                    <span>&lt;<span class="sr-only">(current)</span></span>
                </li>
                <li data-page="next" id="prev">
                    <span>&gt;<span class="sr-only">(current)</span></span>
                </li>
            </ul>
        </div>


      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/js/table.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script
</body>

</html>