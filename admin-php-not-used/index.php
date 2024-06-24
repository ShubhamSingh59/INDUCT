<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <script src="https://kit.fontawesome.com/3c52d6d952.js" crossorigin="anonymous"></script>

  <style>
    .btn.btn-primary.btn-border {
      color: #000;
      /* Set text color to black */
      background-color: transparent;
      /* Make the background transparent */
      border: 1px solid #000;
      /* Add a border with black color */
    }

    .btn.btn-primary.btn-border:hover {
      color: #fff;
      /* Change text color on hover */
      background-color: #000;
      /* Change background color on hover */
    }

    .with-icon {
      padding-right: 30px;
      /* Adjust padding as needed */
      background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>');
      background-repeat: no-repeat;
      background-size: 20px;
      /* Adjust size as needed */
      background-position: right 8px center;
      /* Adjust position as needed */
    }

    .table-url {
      color: #000;
    }

    .text-right a {
      color: #6B7280;
    }

    .edited {
      color: red;
      /* Change the color as desired */
    }

    .footer-section {
      position: fixed;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100%;
      background-color: #f8f9fa; /* You can adjust the background color as needed */
    }

  </style>

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
        <!-- Row 1 -->
        <div class="row" id="uploadSaveSection" style="display: none;">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body" style="display: flex; align-items: center;">
                <div style="flex: 1;">
                  <img id="uploaded-image" src="./assets/images/products/s4.jpg" class="card-img-top"
                    alt="Uploaded Image" style="width: 100%; height: 290px; padding-bottom: 3%;">
                  <div style="text-align: center;">
                    <form id="upload-form" enctype="multipart/form-data">
                      <label for="file-upload" class="btn btn-primary btn-border"
                        style="border-radius: 50px; padding: 10px 20px;">Upload Media</label>
                      <input id="file-upload" name="file-upload" type="file" style="display: none;">
                    </form>
                  </div>
                </div>
                <div style="flex: 2;">
                  <div class="overflow-hidden">
                    <div class="card-body p-4">
                      <form id="data-form">
                        <div class="mb-3">
                          <label for="startupType" class="form-label">Startup Type</label>
                          <input type="text" class="form-control" id="startupType" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="startupName" class="form-label">Startup Name</label>
                          <input type="text" class="form-control" id="startupName">
                        </div>
                        <div class="mb-3">
                          <label for="websiteURL" class="form-label">Website URL</label>
                          <input type="text" class="form-control" id="websiteURL">
                        </div>
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn me-2">Cancel</button>
                          <button type="submit" class="btn"
                            style="border-radius: 50px; padding: 10px 20px; background-color: #514EF3; color: white;">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="card">
            <div class="card-body">
              <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h1 class="m-0">Startup List</h1>
                  <button id="addNewButton" class="btn" style="background-color: #DB551B; color: #fff;">+ Add
                    New</button>
                </div>
                <hr>
                <div class="input-group mb-3" style="width: 350px;">
                  <input type="text" class="form-control with-icon" placeholder="Search by name or startup type..."
                    aria-label="Search" aria-describedby="search-button">
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead style="background-color: #F9FAFB;">
                      <tr>
                        <th>Startup Type</th>
                        <th>Startup Name</th>
                        <th>URL</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="table-body">
                      <tr>
                        <td>Tech Startup</td>
                        <td>ABC Private Limited</td>
                        <td class="table-url">abc.com</td>
                        <td class="text-right"><a href=""><i class="fas fa-edit"></i></a></td>
                      </tr>
                      <tr>
                        <td>Taxi Startup</td>
                        <td>XYZ Private LImited</td>
                        <td class="table-url">xyz.com</td>
                        <td class="text-right"><a href=""><i class="fas fa-edit"></i></a></td>
                      </tr>
                      <tr>
                        <td>Healthcare Startup</td>
                        <td>PQS Private Limited</td>
                        <td class="table-url">pqs.com</td>
                        <td class="text-right"><a href=""><i class="fas fa-edit"></i></a></td>
                      </tr>
                      <tr>
                        <td>Drone Startup</td>
                        <td>TUV Private LImited</td>
                        <td class="table-url">tuv.com</td>
                        <td class="text-right"><a href=""><i class="fas fa-edit"></i></a></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="m-0"></h1>
                <a href=""><strong style="color: #000; font-size:16px">View All  <i class="fas fa-angle-right"></i></strong></a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Image Cards  -->
      <?php #include "./includes/image-cards.php";?>

      <!-- Footer Section  -->
      <div class="footer-section py-6 px-6 text-center">
        <p class="mb-0 fs-4">Design and Developed by <a href="https://cywarx.com/" target="_blank"
            class="pe-1 text-primary text-decoration-underline">Cywarx.com</a></p>
      </div>

    </div>
  </div>
  </div>

  <!-- Upload Image Script  -->

  <script>
    document.getElementById('file-upload').addEventListener('change', function (event) {
      var uploadedImage = document.getElementById('uploaded-image');
      var file = event.target.files[0];
      var reader = new FileReader();

      reader.onload = function (e) {
        uploadedImage.src = e.target.result;
      };

      reader.readAsDataURL(file);
    });
  </script>


  <!-- Submit Upload Image and Startup Form together  -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const saveButton = document.querySelector('#data-form button[type="submit"]');
      const cancelButton = document.querySelector('#data-form button[type="reset"]');
      const uploadForm = document.getElementById('upload-form');
      const dataForm = document.getElementById('data-form');

      saveButton.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Submit both forms
        uploadForm.submit();
        dataForm.submit();
      });

      cancelButton.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default button behavior

        // Reset both forms
        uploadForm.reset();
        dataForm.reset();
      });
    });
  </script>

  <!-- Search Button  -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Add event listener to search input
      document.querySelector('.input-group input').addEventListener('input', function (event) {
        const searchText = event.target.value.trim().toLowerCase();
        const rows = document.querySelectorAll('#table-body tr');

        rows.forEach(row => {
          const rowData = Array.from(row.children).map(cell => cell.textContent.trim().toLowerCase());
          if (rowData.some(data => data.includes(searchText))) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });
    });
  </script>

  <!-- Edit Button  -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Function to populate the form with empty values
      function populateFormWithEmptyValues() {
        // Clear the form values
        document.getElementById("startupType").value = "";
        document.getElementById("startupName").value = "";
        document.getElementById("websiteURL").value = "";

        // Display the uploaded image (replace with actual image URL if available)
        var uploadedImage = document.getElementById("uploaded-image");
        uploadedImage.src = "./assets/images/products/s4.jpg";
      }

      // Function to populate the form with row data and show the upload and save button section
      function populateFormAndShowSection(row) {
        // Reset color of all edit icons
        resetEditIconColor();

        // Get the data from the selected row
        var startupType = row.cells[0].innerText;
        var startupName = row.cells[1].innerText;
        var websiteURL = row.cells[2].innerText;

        // Set the data to the form
        document.getElementById("startupType").value = startupType;
        document.getElementById("startupName").value = startupName;
        document.getElementById("websiteURL").value = websiteURL;

        // Display the uploaded image (replace with actual image URL if available)
        var uploadedImage = document.getElementById("uploaded-image");
        uploadedImage.src = "./assets/images/products/s4.jpg";

        // Show the upload and save button section
        var section = document.getElementById("uploadSaveSection");
        section.style.display = "block";

        // Change the color of the edit icon
        var editIcon = row.querySelector(".fa-edit");
        editIcon.classList.add("edited");
      }

      // Add event listeners to the edit icons
      var editIcons = document.querySelectorAll(".fa-edit");
      editIcons.forEach(function (icon) {
        icon.addEventListener("click", function (event) {
          // Prevent the default behavior of the link
          event.preventDefault();
          // Find the parent table row
          var row = icon.closest("tr");
          // Populate the form and show the upload and save button section
          populateFormAndShowSection(row);
        });
      });

      // Function to handle the "Add New" button click
      function handleAddNewButtonClick() {
        // Populate the form with empty values
        populateFormWithEmptyValues();
        // Show the upload and save button section
        var section = document.getElementById("uploadSaveSection");
        section.style.display = "block";
      }

      // Add event listener to the add new button
      var addNewButton = document.getElementById("addNewButton");
      addNewButton.addEventListener("click", function (event) {
        // Prevent the default behavior of the button
        event.preventDefault();
        // Handle the "Add New" button click
        handleAddNewButtonClick();
      });

      // Function to reset edit icon color
      function resetEditIconColor() {
        editIcons.forEach(function (icon) {
          icon.classList.remove("edited");
        });
      }

      // Function to toggle display of the upload and save button section
      function toggleUploadSaveSection() {
        var section = document.getElementById("uploadSaveSection");
        section.style.display = (section.style.display === "none") ? "block" : "none";
        if (section.style.display === "none") {
          resetEditIconColor();
        }
      }

      // Add event listener to toggle upload and save button section
      var toggleButton = document.getElementById("toggleButton");
      toggleButton.addEventListener("click", function (event) {
        // Prevent the default behavior of the button
        event.preventDefault();
        // Toggle display of the upload and save button section
        toggleUploadSaveSection();
      });
    });
  </script>

  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="./assets/js/dashboard.js"></script>
</body>

</html>