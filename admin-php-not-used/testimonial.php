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

  
  <style>
      
        .table-wrapper {
        overflow-x: auto;
        }

        .table-head{
        font-family: 'Urbanist', sans-serif;
        }

        .table {
        width: 100%;
        border-collapse: collapse;
        }

        .table th, .table td {
        /* border: 1px solid #ddd; */
        padding: 8px;
        }

        .table th {
        /* background-color: #f2f2f2; */
        }

        .table tr:nth-child(even) {
        /* background-color: #f2f2f2; */
        }

        .table tr:hover {
        background-color: #F9FAFB;
        }

        .testimonial-card {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 2px solid #DEDEDE;
        }

        .testimonial-card-body {
            padding: 20px;
        }

        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            background-color: #F6FAFD;
        }

        .circle input[type="file"] {
            opacity: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
        }

        .circle label img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .circle label {
            display: block;
            width: 100%;
            height: 100%;
        }

        .rectangle {
            width: 100%; /* Adjust the width as needed */
            height: 100px; /* Adjust the height as needed */
            overflow: hidden;
            position: relative;
            background-color: #F6FAFD;
            margin-bottom: 15px;
            border-radius: 15px;
        }

        .rectangle input[type="file"] {
            opacity: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
        }

        .rectangle label img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .rectangle label {
            display: block;
            width: 100%;
            height: 100%;
        }

        .square {
            width: 100%; /* Adjust the width as needed */
            height: 235px; /* Adjust the height as needed */
            overflow: hidden;
            position: relative;
            background-color: #F6FAFD;
            margin-bottom: 15px;
            border-radius: 15px;
        }

        .square input[type="file"] {
            opacity: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
        }

        .square label img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .square label {
            display: block;
            width: 100%;
            height: 100%;
        }


        .testimonial-input {
            border-radius: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            width: 100%;
        }

        .testimonial-input:focus {
            outline: none;
            border-color: dodgerblue;
            box-shadow: 0 0 0 2px rgba(30, 144, 255, 0.2);
        }

        .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #DC3545;
            border-color: #DC3545;
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
            <h2 style="padding-bottom:1%;" class="m-3">Dashboard</h2>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <h4 style="text-align:center;">Text Testimonial</h4>
                    <hr style="border: none; background-color: grey; height: 2px; margin-top:1%; margin-bottom:0%;">
                    <div class="testimonial-card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="circle">
                                        <input type="file" id="imageInput" accept="image/*" onchange="previewImage(event)">
                                        <label for="imageInput">
                                            <img id="previewImage" src="./assets/images/backgrounds/circle.png" alt="Upload Image">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input class="testimonial-input" type="text" name="name" id="name" placeholder="Add Name">
                                    <input class="testimonial-input" type="text" name="company" id="company" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="testimonial-input" name="review" id="review" placeholder="Add Review" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center"> <!-- Center the button -->
                                <div class="col-md-4">
                                    <button type="submit" class="btn"
                                        style="border-radius: 50px; padding: 10px 50px; background-color: #0FBE21; color: white;">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial-card">
                    <h4 style="text-align:center;">Text Video Testimonial</h4>
                    <hr style="border: none; background-color: grey; height: 2px; margin-top:1%; margin-bottom:0%;">
                    <div class="testimonial-card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rectangle">
                                        <input type="file" id="imageInput" accept="image/*" onchange="previewImage(event)">
                                        <label for="imageInput">
                                            <img id="previewImage" src="./assets/images/backgrounds/rectangle.png" alt="Upload Image">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="testimonial-input" type="text" name="name" id="name" placeholder="Add Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="testimonial-input" name="review" id="review" placeholder="Add Review" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center"> <!-- Center the button -->
                                <div class="col-md-4">
                                    <button type="submit" class="btn"
                                        style="border-radius: 50px; padding: 10px 50px; background-color: #0FBE21; color: white;">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial-card">
                    <h4 style="text-align:center;">Video Testimonial</h4>
                    <hr style="border: none; background-color: grey; height: 2px; margin-top:1%; margin-bottom:0%;">
                    <div class="testimonial-card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="square">
                                        <input type="file" id="imageInput" accept="image/*" onchange="previewImage(event)">
                                        <label for="imageInput">
                                            <img id="previewImage" src="./assets/images/backgrounds/square.png" alt="Upload Image">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="testimonial-input" type="text" name="name" id="name" placeholder="Add Name">
                                </div>
                            </div>
                           
                            <div class="row justify-content-center"> <!-- Center the button -->
                                <div class="col-md-4">
                                    <button type="submit" class="btn"
                                        style="border-radius: 50px; padding: 10px 50px; background-color: #0FBE21; color: white;">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(event) {
                const previewImage = document.getElementById('previewImage');
                previewImage.src = event.target.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>


        

     <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="m-3">Active Reviews</h2>
                    <button id="activity-add-button" class="btn" style="border-radius: 50px; color: white;">March 2023</button>
                </div>
                <div class="table-wrapper">
                <!-- activity Table -->
                <table class="table table-class table-section" id="activity-table" style="display: table;">
                    <tbody class="activity-section">
                    <tr class="table-head activity-head" style="background-color:#F1F3F4;">
                        <th>Testimonial</th>
                        <th>Name</th>
                        <th></th>

                    </tr>
                    <tr class="activity-rows">
                        <td>Text Testimonial</td>
                        <td>Dewansh Gangil</td>
                        <th class="button-dropdown">
                            <i class="far fa-edit"></i> 
                        </th>
                    </tr>

                    <tr class="activity-rows">
                        <td>Text Video Testimonial</td>
                        <td>Karan Gupta</td>
                        <th class="button-dropdown">
                            <i class="far fa-edit"></i> 
                        </th>
                    </tr>

                    <tr class="activity-rows">
                        <td>Video Testimonial</td>
                        <td>Sourya Gupta</td>
                        <th class="button-dropdown">
                            <i class="far fa-edit"></i> 
                        </th>
                    </tr>

                    <tr class="activity-rows">
                        <td>Text Testimonial</td>
                        <td>Sonali Rai</td>
                        <th class="button-dropdown">
                            <i class="far fa-edit"></i> 
                        </th>
                    </tr> 
                    <!-- Add more rows for activity -->
                    </tbody>
                </table>

                </div>
            </div>
        </div>

        <hr style="border: none; background-color: grey; height: 2px; margin-top:1%; margin-bottom:0%;">
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
  <script src="./assets/js/activity-table.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script
</body>

</html>