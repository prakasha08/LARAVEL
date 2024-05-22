<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Management
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    font-family: "Poppins", sans-serif;
}
ul.navbar {
    list-style-type: none;
    margin-top: 3%;
    margin-bottom: 0%;
    margin-left: 10%;
    margin-right: 10%;
    padding: 0%;
    overflow: hidden;
    background-color: #68bbdb;
    border-radius: 35px;
  }
  
  /* Styling for the navigation bar items */
  ul.navbar li {
    float: left;
    padding: .6%;
  }
  
  /* Styling for the navigation bar links */
  ul.navbar li a {
    color: white;
    padding: 10px 10px;
    text-decoration: none;
  }
  
  /* Styling for the navigation bar links on hover */
  ul.navbar li a:hover {
    background-color: #111;
    border-radius: 35px;
  }
  .nav{
    padding: 0%;
    margin-top: 0%;
    width: 100%;
  }
    </style>
  </head>
  <body>
<nav >
  <ul class="navbar">
    <li><a href="#">EVENT STATUS</a></li>
    <li><a href="#">EVENT REQUEST LIST</a></li>
    <li><a href="#">IRA</a></li>
    <li><a href="logout">Log Out</a></li>
  </ul>
</nav>
<div class="container mt-5">
  <div class="row">
    @if($message=Session::get('success'))
    <div style="color: black ;background-color:aquamarine "  class="alert alert - success alert-dismissible fade show">
      <strong>Success </strong>{{$message}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" button> 
     </div>
    @endif
    @yield('main')
   <!-- Row end -->
 </div>
 <!-- Container end -->
</div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 