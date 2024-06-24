<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <script src="https://kit.fontawesome.com/3c52d6d952.js" crossorigin="anonymous"></script>
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
      <?php include "./includes/header.php";?>
      <!--  Header End -->
      <div class="container-fluid">


        <style>
          .table-wrapper {
            overflow-x: auto;
          }

          .custom-form {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 10px;
          }

          .input-container {
            position: relative;
            border: 1px solid #2051E5;
            /* Blue border around each input box */
            margin-right: 15px;
            border-radius: 5px;
          }

          .level-name {
            position: absolute;
            top: -10px;
            /* Adjust distance from top */
            left: 10px;
            /* Adjust distance from left */
            background-color: #f8f9fa;
            padding: 0 5px;
            color: #2051E5;
          }

          .form-control {
            border: none;
            /* Remove default input box border */
            border-radius: 0;
            /* Remove default input box border radius */
            outline: none;
            /* Remove focus outline */
            color: #000;
            /* padding: 10px; */
          }

          .btn-add-event {
            background-color: #5040A1;
            color: #fff;
            border-radius: 20px;
            width: 180px;
            margin-left: 10%;
          }

          /* -------------------------------- */
          /* Live Events & Show */
          /* -------------------------------- */

          .even-heading {
            background-color: white;
            position: relative;
            z-index: 1;
          }

          .event {
            font-family: "JetBrains Mono", monospace;
            /* Apply JetBrains Mono font to the entire section */
            font-optical-sizing: auto;
            padding-left: 22%;
            position: relative;
            z-index: 1;
            background: linear-gradient(135deg, #061543 0%, #122D7D 42%, #0B1F5A 73%, #12245A 100%);
            background-color: #061540;
            width: 100%;
            /* height: 100vh; */
          }

          .divider {
            width: 201px;
            height: 1px;
            position: relative;
            border-top: 1px solid white;
            /* Change border color to white or any other color that contrasts well with the background */
            box-sizing: border-box;
            opacity: 0.6;
            z-index: 1;
            margin-top: 1%;
            margin-bottom: 1%;
          }

          .even-box {
            background-color: white;
            height: auto;
            /* margin-right: 2%; */
            padding: 2%;
            border: 1px solid #D9D9D9;
            font-family: "JetBrains Mono", monospace;
            /* Apply JetBrains Mono font to the paragraphs inside even boxes */
          }

          .even-arrow-section {
            color: white;
            text-align: right;
            padding-right: 27%;
          }

          .even-arrow-circle {
            border-radius: 50%;
            border: none;
            background-color: white;
            width: 40px;
            height: 40px;
          }

          .even-arrow {
            color: #000;
          }

          .even-box p {
            color: #424E60;
            text-align: left;
            font-size: 14px;
          }

          .custom-form2 {
            border: 1px solid #D9D9D9;
          }

          /* CSS for checkbox styling */
          .checkbox-custom {
            width: 17px;
            /* Adjust as needed */
            height: 17px;
            /* Adjust as needed */
            position: relative;
            /* Add this line */

          }

          .checkbox-custom:checked:before {
            content: '\2713';
            /* Checkmark symbol */
            font-size: 17px;
            /* Adjust as needed */
            color: #fff;
            /* Color of the checkmark */
            position: absolute;
            /* Add this line */
            top: 50%;
            /* Add this line */
            left: 50%;
            /* Add this line */
            transform: translate(-50%, -50%);
            /* Add this line */
          }

          .checkbox-custom:checked {
            background-color: #F51202;
            /* Change background color to red when checked */
            border-color: #F51202;
            /* Change border color to red when checked */
          }

          .checkbox-custom-label {
            cursor: pointer;
            display: inline-block;
            position: relative;
            padding-left: 30px;
            /* Adjust as needed */
          }

          @media (max-width: 1028px) {
            .input-container {
              margin: 3%;
            }

            .btn-add-event {
              margin-left: 0%;
            }

          }
        </style>

        <div class="card custom-form">
          <div class="card-body">
            <div class="row">
              <div class="col-md-2 input-container">
                <span class="level-name">Date</span> <!-- Level name label -->
                <input type="date" class="form-control" id="datePicker" placeholder="7 Feb, 2024">
              </div>
              <div class="col-md-2 input-container">
                <span class="level-name">Location</span> <!-- Level name label -->
                <input type="text" class="form-control" id="location" placeholder="Delhi">
              </div>
              <div class="col-md-2 input-container">
                <span class="level-name">Name</span> <!-- Level name label -->
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="col-md-3 input-container">
                <span class="level-name">Description</span> <!-- Level name label -->
                <input type="text" class="form-control" id="description" placeholder="Description">
              </div>
              <div class="col-md-2">
                <button id="addEvent" class="btn btn-add-event btn-block">
                  Add Event
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <!-- Added mb-3 for margin-bottom -->
            <div class="even-box">
              <p>
                <i class="far fa-calendar" style="color: #1777E5;"></i> <span>8 Sep,2020</span>
                <i class="fas fa-map-marker-alt" style="color: #1777E5;"></i> <span>Place</span>
                <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                  <i class="fas fa-trash-alt" style="color: #91A4B7; float: right;"></i>
                </a>
              </p>
              <h4 style="text-align: left;">BMA Events</h4>
              <p>Quisque vitae ante dolor. Duis vehicula purus eget libero interdum ornare. Vestibulum ut risus nec odio
                rhoncus malesuada. Duis lobortis consectetur magna, in faucibus mauris congue tempor.</p>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <!-- Added mb-3 for margin-bottom -->
            <div class="even-box">
              <p>
                <i class="far fa-calendar" style="color: #1777E5;"></i> <span>8 Sep,2020</span>
                <i class="fas fa-map-marker-alt" style="color: #1777E5;"></i> <span>Place</span>
                <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                  <i class="fas fa-trash-alt" style="color: #91A4B7; float: right;"></i>
                </a>
              </p>
              <h4 style="text-align: left;">Seed Fund Event - 2024</h4>
              <p>Quisque vitae ante dolor. Duis vehicula purus eget libero interdum ornare. Vestibulum ut risus nec odio
                rhoncus malesuada. Duis lobortis consectetur magna, in faucibus mauris congue tempor.</p>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h1 class="m-0"></h1>
          <a href=""><strong style="color: #000; font-size:15px">View All <i
                class="fas fa-angle-right"></i></strong></a>
        </div>

        <div class="row">
          <div class="col-md-7">
            <div class="card custom-form custom-form2" style="margin-bottom: 20px;">
              <div class="card-body">
                <p style="padding-left:15px; color:#000;">
                  <input type="checkbox" id="select-all" class="checkbox-custom" onclick="toggleAllCheckboxes()">
                  <label for="select-all" style="font-size: 18px;"><span style="padding-left:25px;">Select
                      All</span></label>
                  <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                    <i class="fas fa-trash-alt" style="color: #91A4B7; float: right;"></i>
                  </a>
                </p>
                <hr style="border: none; background-color: grey; height: 2px; margin-top:1%; margin-bottom:0%;">

                <div class="table-wrapper">
                  <!-- activity Table -->
                  <table class="table table-class table-section" id="activity-table"
                    style="display: table; color:#000;">
                    <tbody class="activity-section">
                      <tr class="table-head activity-head" style="background-color:#F1F3F4;">
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Designation</th>
                        <th>Number</th>
                        <th></th>
                        <th></th>
                      </tr>
                      <tr class="activity-rows">
                        <td><input type="checkbox" class="checkbox-custom individual-checkbox"></td>
                        <td style="text-align: left;">Stacy Madre</td>
                        <td style="text-align: left;">rt@gmail.com</td>
                        <td style="text-align: left;">Startup </td>
                        <td style="text-align: left;">+919987654343</td>
                        <td class="button-dropdown" style="text-align: left;">
                          <a href="#" class="edit-icon" onclick="editEvent(event)">
                            <i class="far fa-edit" style="color: #6B7280; float: right; margin-right: 5px;"></i>
                          </a>
                        </td>
                        <td>
                          <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                            <i class="fas fa-trash-alt" style="color: #91A4B7; float: right;"></i>
                          </a>
                        </td>
                      </tr>
                      <tr class="activity-rows">
                        <td><input type="checkbox" class="checkbox-custom individual-checkbox"></td>
                        <td style="text-align: left;">Alex Cortis</td>
                        <td style="text-align: left;">pm@gmail.com</td>
                        <td style="text-align: left;">Investor </td>
                        <td style="text-align: left;">+919987654343</td>
                        <td class="button-dropdown" style="text-align: left;">
                          <a href="#" class="edit-icon" onclick="editEvent(event)">
                            <i class="far fa-edit" style="color: #6B7280; float: right; margin-right: 5px;"></i>
                          </a>
                        </td>
                        <td>
                          <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                            <i class="fas fa-trash-alt" style="color: #91A4B7; float: right;"></i>
                          </a>
                        </td>
                      </tr>
                      <tr class="activity-rows">
                        <td><input type="checkbox" class="checkbox-custom individual-checkbox"></td>
                        <td style="text-align: left;">Eyem McLovin</td>
                        <td style="text-align: left;">sk@gmail.com</td>
                        <td style="text-align: left;">Startup </td>
                        <td style="text-align: left;">+919987654343</td>
                        <td class="button-dropdown" style="text-align: left;">
                          <a href="#" class="edit-icon" onclick="editEvent(event)">
                            <i class="far fa-edit" style="color: #6B7280; float: right; margin-right: 5px;"></i>
                          </a>
                        </td>
                        <td>
                          <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                            <i class="fas fa-trash-alt" style="color: #91A4B7; float: right;"></i>
                          </a>
                        </td>
                      </tr>
                      <tr class="activity-rows">
                        <td><input type="checkbox" class="checkbox-custom individual-checkbox"></td>
                        <td style="text-align: left;">Stacy Madre</td>
                        <td style="text-align: left;">rt@gmail.com</td>
                        <td style="text-align: left;">Investor </td>
                        <td style="text-align: left;">+919987654343</td>
                        <td class="button-dropdown" style="text-align: left;">
                          <a href="#" class="edit-icon" onclick="editEvent(event)">
                            <i class="far fa-edit" style="color: #6B7280; float: right; margin-right: 5px;"></i>
                          </a>
                        </td>
                        <td>
                          <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                            <i class="fas fa-trash-alt" style="color: #91A4B7; float: right;"></i>
                          </a>
                        </td>
                      </tr>
                      <tr class="activity-rows">
                        <td><input type="checkbox" class="checkbox-custom individual-checkbox"></td>
                        <td style="text-align: left;">Alex Cortis</td>
                        <td style="text-align: left;">pm@gmail.com</td>
                        <td style="text-align: left;">Startup </td>
                        <td style="text-align: left;">+919987654343</td>
                        <td class="button-dropdown" style="text-align: left;">
                          <a href="#" class="edit-icon" onclick="editEvent(event)">
                            <i class="far fa-edit" style="color: #6B7280; float: right; margin-right: 5px;"></i>
                          </a>
                        </td>
                        <td>
                          <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                            <i class="fas fa-trash-alt" style="color: #91A4B7; float: right;"></i>
                          </a>
                        </td>
                      </tr>

                      <!-- Add more rows for activity -->
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="m-0"></h1>
                    <a href=""><strong style="color: #000; font-size:15px">View All <i
                          class="fas fa-angle-right"></i></strong></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <div class="card custom-form custom-form2"
              style="margin-bottom: 20px; border-radius: 10px; border: 1px solid #ced4da;">
              <div class="card-body">
                <h5
                  style="color: white; background-color: red; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 5px 15px; margin-bottom: 5%;">
                  New Message
                  <a href="#" class="delete-icon" onclick="deleteEvent(event)">
                    <i class="fas fa-trash" style="color: #fff; float: right;"></i>
                  </a>
                </h5>

                <style>
                  .form-group {
                    color: #000;
                    border: 1px solid #ced4da;
                    margin-top: 2%;
                  }
                </style>

                <div class="form-group">
                  <!-- Removed label, added placeholder -->
                  <input type="text" class="form-control" id="recipient" placeholder="Recipients">
                </div>
                <div class="form-group">
                  <!-- Removed label, added placeholder -->
                  <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                  <!-- Removed label, added placeholder -->
                  <textarea class="form-control" id="body" rows="3" placeholder="Body Text"></textarea>
                </div>
                <hr style="border-color: #707070; margin-top: 20px; margin-bottom: 20px;">
                <div>
                  <i class="fas fa-paperclip" style="font-size: 18px; margin-right:2px;"></i>
                  <i class="fas fa-link" style="font-size: 18px; margin-right:2px;"></i>
                  <i class="far fa-smile" style="font-size: 18px; margin-right:2px;"></i>
                  <i class="far fa-folder" style="font-size: 18px; margin-right:2px;"></i>
                  <i class="far fa-image" style="font-size: 18px; margin-right:2px;"></i>
                  <button type="button" class="btn"
                    style="float: right; background-color:#1A73E8; color:#fff;">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  </div>

  <script>
    function toggleAllCheckboxes() {
      var checkboxes = document.querySelectorAll('.individual-checkbox');
      var selectAllCheckbox = document.getElementById('select-all');
      for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = selectAllCheckbox.checked;
      }
    }

    function toggleIndividualCheckboxes(checkbox) {
      var checkboxes = document.querySelectorAll('.individual-checkbox');
      for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = checkbox.checked;
      }
    }

    function deleteEvent(event) {
      event.preventDefault(); // Prevent default action
      // Add your delete event logic here
      console.log("Delete event clicked.");
    }
  </script>

  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>