<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link rel="icon" type="image" href="favicon.ico">
    <title>User Profile</title>
</head>
<body>
    <div class="sidebar close">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <img src="dwcl_logo.png" alt="dwcl logo" class="mb-4"><br><br>
            <a href="2-dashboard.php">Dashboard</a>
            <a href="https://github.com/">Cloud Storage</a>
            <a href="0-login.html">Logout</a>
        </div>
    </div>
    <span style="color:#0074d9; font-size:30px;cursor:pointer" onclick="openNav()">&#9776; DWC Library</span>


  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
 
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
    </script>


<div class="container">
    <div class="center-content">
        <img src="dwcl_logo.png" alt="dwcl logo" class="mb-4"><br>
        <p>ID NO. 09876543</p>
        <p>USERNAME  abcdefg</p>
    </div>
</div>


</body>
</html>

