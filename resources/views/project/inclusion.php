<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | CodingLab </title>
    <link rel="stylesheet" href="style2.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style2.css">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">NGO </span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.html" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="ngoform.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">ngo</span>
          </a>
        </li>
        <li>
          <a href="#funds.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Funds</span>
          </a>
        </li>
        <li>
          <a href="donars.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Donars</span>
          </a>
        </li>
        <li>
          <a href="beneficialers.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Beneficialers</span>
          </a>
        </li>
        <li>
          <a href="employees.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">emplyoyees</span>
          </a>
        </li>
        <li>
          <a href="role.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Role</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> 
        <li class="log_out">
          <a href="signup.php">
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
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
