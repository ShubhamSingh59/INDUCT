<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <link rel="stylesheet" href="./assets/css/blogs.css" />
  <script src="https://kit.fontawesome.com/3c52d6d952.js" crossorigin="anonymous"></script>

  <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

  <style>
    .custom-input,
    .custom-btn {
      padding: 5px 10px;
      font-size: 12px;
      border-radius: 20px;
      background-color: #1A73E8;
      color: #fff;
    }

    .custom-btn {
      width: 60px;
      height: 26px;
      /* Adjust as needed */
      margin-left: 10px;
      /* Adjust as needed */
      background-color: #514EF3;
    }

    .custom-btn:hover {
      background-color: #514EE1;
      color: #fff;
    }


    .btn1 {
      border-radius: 20px;
      background-color: #514EF3;
      color: #fff;
    }

    .btn1:hover {
      border-radius: 20px;
      background-color: #6462EF;
      color: #fff;
    }

    .btn2 {
      border-radius: 20px;
    }

    .input-field {
      background-color: #F6FAFD;
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
      <?php include "./includes/header.php";?>
      <!--  Header End -->

      <div class="container-fluid">
        <div class="row">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="m-0">Blogs</h2>
            <button id="add-blog" class="btn" style="background-color: #DB551B; color: #fff;" data-toggle="modal"
              data-target="#addBlogModal">+ Add Blog</button>
          </div>

          <!-- Right Side Model  -->
          <div class="modal left fade" id="addBlogModal" tabindex="" role="dialog" aria-labelledby="addBlogModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <a href="" onclick="closeModal()" style="color:black"> <span
                    class="material-symbols-outlined">keyboard_backspace</span></a>
                <div class="modal-body">

                  <form action="#" method="POST" class="styled-form">
                    <div class="form-group">
                      <label style="font-weight: bold; color:#092C4C;" for="newsHeadline">News Headline</label>
                      <input type="text" class="form-control input-field" id="newsHeadline"
                        placeholder="Enter headline">
                    </div>
                    <div class="form-group">
                      <label style="font-weight: bold; color:#092C4C;" for="shortDescription">Short Description</label>
                      <textarea class="form-control input-field" id="shortDescription" rows="3"
                        placeholder="Enter short description"></textarea>
                    </div>
                    <div class="form-group">
                      <label style="font-weight: bold; color:#092C4C;" for="blogContent">Blog Content</label>
                      <textarea class="form-control input-field" id="blogContent" rows="5"
                        placeholder="Enter blog content"></textarea>
                    </div>
                    <div class="form-group">
                      <label style="font-weight: bold; color:#092C4C;" for="blogLink">Blog Link</label>
                      <input type="text" class="form-control input-field" id="blogLink" placeholder="Enter blog link">
                    </div>

                    <div class="form-group" style="padding-top:3%;">
                      <label style="font-weight: normal;" for="imageUpload" class="custom-file-upload">
                        Upload Image
                        <input type="file" class="custom-file-input" id="imageUpload" onchange="displayFileName()">
                      </label>

                      <div id="fileContainer">
                        <span id="fileName"></span>
                        <span id="removeFile" onclick="removeFileName()"><i class="fas fa-times"></i></span>
                      </div>
                      
                      <div style="float: right;">
                        <button type="button" class="btn btn2" onclick="closeModal()">Cancel</button>
                        <button type="submit" class="btn btn1">Save</button>

                      </div>

                    </div>
                  </form>

                </div>

              </div>
            </div>
          </div>

          <hr style="border: none; background-color: grey; height: 2px; margin-top:1%; margin-bottom:2%;">

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./assets/images/blogs/blog1.png" alt="" style="padding-bottom:5%;">
                <strong>Plug-and-play integrations.</strong>
                <span>Connect to existing HCM systems and create a single source of </span>

                <div class="form-check form-switch">
                  <input class="form-check-input custom-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    onclick="toggleColor(this)" style="border-color: #0FBE21; background-color: #0FBE21">
                  <button type="button" class="btn custom-btn" style="float: right;  margin-top: 10px;">Send</button>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./assets/images/blogs/blog2.png" alt="" style="padding-bottom:5%;">
                <strong>Plug-and-play integrations.</strong>
                <span>Connect to existing HCM systems and create a single source of </span>

                <div class="form-check form-switch">
                  <input class="form-check-input custom-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    onclick="toggleColor(this)" style="border-color: #0FBE21; background-color: #0FBE21">
                  <button type="button" class="btn custom-btn" style="float: right;  margin-top: 10px;">Send</button>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./assets/images/blogs/blog3.png" alt="" style="padding-bottom:5%;">
                <strong>Plug-and-play integrations.</strong>
                <span>Connect to existing HCM systems and create a single source of </span>

                <div class="form-check form-switch">
                  <input class="form-check-input custom-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    onclick="toggleColor(this)" style="border-color: #0FBE21; background-color: #0FBE21">
                  <button type="button" class="btn custom-btn" style="float: right;  margin-top: 10px;">Send</button>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./assets/images/blogs/blog4.png" alt="" style="padding-bottom:5%;">
                <strong>Plug-and-play integrations.</strong>
                <span>Connect to existing HCM systems and create a single source of </span>

                <div class="form-check form-switch">
                  <input class="form-check-input custom-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    onclick="toggleColor(this)" style="border-color: #0FBE21; background-color: #0FBE21">
                  <button type="button" class="btn custom-btn" style="float: right;  margin-top: 10px;">Send</button>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./assets/images/blogs/blog4.png" alt="" style="padding-bottom:5%;">
                <strong>Plug-and-play integrations.</strong>
                <span>Connect to existing HCM systems and create a single source of </span>

                <div class="form-check form-switch">
                  <input class="form-check-input custom-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    onclick="toggleColor(this)" style="border-color: #0FBE21; background-color: #0FBE21">
                  <button type="button" class="btn custom-btn" style="float: right;  margin-top: 10px;">Send</button>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./assets/images/blogs/blog4.png" alt="" style="padding-bottom:5%;">
                <strong>Plug-and-play integrations.</strong>
                <span>Connect to existing HCM systems and create a single source of </span>

                <div class="form-check form-switch">
                  <input class="form-check-input custom-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    onclick="toggleColor(this)" style="border-color: #0FBE21; background-color: #0FBE21">
                  <button type="button" class="btn custom-btn" style="float: right;  margin-top: 10px;">Send</button>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./assets/images/blogs/blog3.png" alt="" style="padding-bottom:5%;">
                <strong>Plug-and-play integrations.</strong>
                <span>Connect to existing HCM systems and create a single source of </span>

                <div class="form-check form-switch">
                  <input class="form-check-input custom-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    onclick="toggleColor(this)" style="border-color: #0FBE21; background-color: #0FBE21">
                  <button type="button" class="btn custom-btn" style="float: right;  margin-top: 10px;">Send</button>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./assets/images/blogs/blog4.png" alt="" style="padding-bottom:5%;">
                <strong>Plug-and-play integrations.</strong>
                <span>Connect to existing HCM systems and create a single source of </span>

                <div class="form-check form-switch">
                  <input class="form-check-input custom-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    onclick="toggleColor(this)" style="border-color: #0FBE21; background-color: #0FBE21">
                  <button type="button" class="btn custom-btn" style="float: right;  margin-top: 10px;">Send</button>
                </div>

              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="m-0"></h1>
            <a href=""><strong style="color: #000; font-size:16px">View All <i
                  class="fas fa-angle-right"></i></strong></a>
          </div>

        </div>

      </div>

      <!-- Right Side Model  -->
      <script>
        function displayFileName() {
          const input = document.getElementById('imageUpload');
          const fileNameSpan = document.getElementById('fileName');
          const fileContainer = document.getElementById('fileContainer');
          if (input.files.length > 0) {
            fileNameSpan.textContent = input.files[0].name;
            fileContainer.style.border = '1px solid #ccc';
            document.getElementById('removeFile').style.display = 'inline-block';
          } else {
            fileNameSpan.textContent = '';
            fileContainer.style.border = 'none';
            document.getElementById('removeFile').style.display = 'none';
          }
        }

        function removeFileName() {
          document.getElementById('imageUpload').value = '';
          document.getElementById('fileName').textContent = '';
          document.getElementById('fileContainer').style.border = 'none';
          document.getElementById('removeFile').style.display = 'none';
        }

        function closeModal() {
          const modal = document.getElementById('addBlogModal');
          const backdrop = document.getElementsByClassName('modal-backdrop')[0]; // Target the backdrop element

          modal.classList.remove('show'); // Remove the 'show' class to hide the modal
          backdrop.classList.remove('show'); // Remove the 'show' class to hide the backdrop
          document.body.classList.remove('modal-open'); // Remove the class added to the body when the modal is open

          window.location.reload(); // Reload the page to reset it to its previous state
        }
      </script>

      <script>
        // Retrieve the checkbox state from local storage
        document.addEventListener("DOMContentLoaded", function () {
          var checkbox = document.getElementById("flexSwitchCheckChecked");
          var isChecked = localStorage.getItem("checkboxState") === "true";
          checkbox.checked = isChecked;
          toggleColor(checkbox); // Update color based on state
        });

        function toggleColor(checkbox) {
          if (checkbox.checked) {
            checkbox.style.backgroundColor = "#0FBE21"; // Set green color if checked
            checkbox.style.borderColor = "#0FBE21";
          } else {
            checkbox.style.backgroundColor = "#DEDEDE"; // Set red color if unchecked
            checkbox.style.borderColor = "#DEDEDE";
          }

          // Store the checkbox state in local storage
          localStorage.setItem("checkboxState", checkbox.checked);
        }
      </script>

      <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
      <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Popper.js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

      <!-- Bootstrap JS -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script src="./assets/js/sidebarmenu.js"></script>
      <script src="./assets/js/app.min.js"></script>
      <script src="./assets/js/table.js"></script>
      <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>