<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   
    
    

    <style>
      /* Style the search bar (you can customize this as needed) */
      .search-bar {
          display: none; /* Initially hide the search bar */
      }
  </style>
  

  </head>
<body>
          <!-- container-fluid -->
    <div class="container-fluid">
          <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navi">
  <a class="navbar-brand" href="#">
    <div class="icon-logo">
  
    <img src="./images/image.jpg" height="80" ></a>
  
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Resources
        </a>
        <!-- dropdown menu -->
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="course.html">Course</a>
            <a class="dropdown-item" href="article.html">Article</a>
            <a class="dropdown-item" href="#">System</a>
            <div class="dropdown-divider"></div>
            <div class="dropdown">
              <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownFeatures" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Features
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownFeatures">
                  <a class="dropdown-item" href="#">Feature 1</a>
                  <a class="dropdown-item" href="#">Feature 2</a>
                  <a class="dropdown-item" href="#">Feature 3</a>
                  <!-- Add more features as needed -->
              </div>
          </div>
            
            
        </div>
    </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0" id="searchForm" style="display: none;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
  </form>
  
  <!-- Search icon -->
  <i class="bi bi-search clickable" id="searchIcon"></i>
  <form class="form-inline my-2 my-lg-0">
    
    <!-- <button class="btn btn-outline-success my-2 my-sm-0" id="login" type="submit">
      <a href="login.html">Login</a></button> -->
      <a href="login.html" class="btn btn-primary my-2 my-sm-0" id="login" type="submit">Login</a>
      <a href="signup.html" class="btn btn-success my-2 my-sm-0" id="signup" type="submit">Create Account</a>

    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Create Account</button> -->
    
  </form>
  
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    // Get search form and search icon elements
    var searchForm = document.getElementById('searchForm');
  var searchIcon = document.getElementById('searchIcon');

  // Add click event listener to the search icon
  searchIcon.addEventListener('click', function() {
      // Toggle visibility of search form
      if (searchForm.style.display === 'none') {
          searchForm.style.display = 'block';
      } else {
          searchForm.style.display = 'none';
      }
  });
</script>