<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Course - Home Page</title>
  <link rel="stylesheet" href="../css/1-1.css" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>

  <!-- Sidebar Icons -->
  <aside class="icon-sidebar">
    <div class="icon-box">
      <i><img src="../images/logo.png" alt=""></i>
    </div>
    <div class="icon-box">
      <i class="fa-solid fa-chart-bar"></i>
    </div>
    <div class="icon-box">
      <i class="fa-solid fa-hippo"></i>
    </div>
    <div class="icon-box">
      <i class="fa-regular fa-comment-dots"></i>
    </div>
    <div class="icon-box active">
      <i class="fa-solid fa-user-group"></i>
    </div>
    <div class="icon-box settings">
      <i class="fa-solid fa-gear"></i>
    </div>
  </aside>

  <!-- Left Panel -->
  <aside class="left-panel">
    <a href="#" class="back-btn">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back</span>
    </a>

    <div class="container">
      <img src="../images/history.png" alt="" class="profile-img">
      <div class="title">     
      <h1>Budi Sugiono - History Class</h1>
      </div>

      <div class="divider"></div>
    </div>

    <nav class="nav-menu">
     <button class="nav-item active">Home Page</button>
     <button class="nav-item">Daily Tasks</button>
     <button class="nav-item">Grades</button>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="main-content">

    <!-- Top Bar -->
    <div class="topbar">
      <div class="search-bar">
        <i class="fa-solid fa-magnifying-glass search-icon"></i>
        <input type="text" placeholder="" />
      </div>
      <div class="topbar-right">
        <span class="date-range">10 June – 23 June</span>
        <span class="status-dot"></span>
        <div class="avatar-wrap">
          <img src="https://i.pravatar.cc/32?img=5" alt="avatar" class="avatar" />
        </div>
        <span class="username">Lmaopisang</span>
      </div>
    </div>


<div class="course">

  <!-- LEFT -->
  <div class="left">
    <h2>Course</h2>
    <p>All (4)</p>

    <a href="#" class="course-card">
      <div class="course-title">Rise of Hitler Course</div>
      <div class="course-desc">Finish it tonight for the best score</div>
    </a>

    <a href="#" class="course-card">
      <div class="course-title">Fall of Stalin</div>
      <div class="course-desc">A quiz about the fall of stalin</div>
    </a>

    <a href="#" class="course-card">
      <div class="course-title">Black Plague</div>
      <div class="course-desc">Black plague is a plague that happen in europe</div>
    </a>

    <a href="#" class="course-card">
      <div class="course-title">Vietnam War</div>
      <div class="course-desc">A civil war in vietnam which USA involved in</div>
    </a>
  </div>

  <!-- RIGHT -->
  <div class="right">
    <h2>Class Schedule</h2>

    <div class="tabs">
      <span class="active">Upcoming</span>
      <span>Past</span>
    </div>

    <!-- schedule item -->
    <div class="schedule-card">
      <div class="date">
        March<br>21
      </div>
      <div class="details">
        <div class="title-1">Title</div>
        <div class="time">Mon 12.00 PM</div>
        <div class="location">Location</div>
      </div>
    </div>

    <!-- duplicate -->
    <div class="schedule-card">
      <div class="date">
        March<br>21
      </div>
      <div class="details">
        <div class="title-1">Title</div>
        <div class="time">Mon 12.00 PM</div>
        <div class="location">Location</div>
      </div>
    </div>

  </div>

</div>


  </main>

</body>
</html>