<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Projects Dashboard</title>
  <link rel="stylesheet" href="/public/css/all-project.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>

  <!-- Sidebar Icons -->
  <aside class="icon-sidebar">
    <div class="icon-box">
      <i><img src="/public/assets/logo.png" alt=""></i>
    </div>
    <div class="icon-box active">
      <i class="fa-solid fa-chart-bar"></i>
    </div>
    <div class="icon-box">
      <i class="fa-solid fa-hippo"></i>
    </div>
    <div class="icon-box">
      <i class="fa-regular fa-comment-dots"></i>
    </div>
    <div class="icon-box">
      <i class="fa-solid fa-user-group"></i>
    </div>
    <div class="icon-box settings">
      <i class="fa-solid fa-gear"></i>
    </div>
  </aside>

  <!-- Left Panel -->
  <aside class="left-panel">
    <h2 class="panel-title">Projects</h2>
    <nav class="nav-menu">
      <a href="#" class="nav-item active">
        <span class="dot dark"></span> All Projects
      </a>
      <a href="noprogress.html" class="nav-item">
        <span class="dot dark"></span> No Progress
      </a>
      <a href="#" class="nav-item">
        <span class="dot dark"></span> In Progress
      </a>
      <a href="#" class="nav-item">
        <span class="dot dark"></span> Completed
      </a>
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

    <!-- Action Row -->
    <div class="action-row">
      <div class="avatars">
        <img src="https://i.pravatar.cc/28?img=1" class="av" />
        <img src="https://i.pravatar.cc/28?img=2" class="av" />
        <img src="https://i.pravatar.cc/28?img=3" class="av" />
        <img src="https://i.pravatar.cc/28?img=4" class="av" />
      </div>
      <button class="btn-invite"><i class="fa-solid fa-plus"></i> Invite People</button>
      <button class="btn-newtask"><i class="fa-solid fa-plus"></i> New task</button>
    </div>

    <!-- Section Title -->
    <h2 class="section-title">All Project</h2>

    <!-- Kanban Columns -->
    <div class="kanban">

      <!-- Assignment Column -->
      <div class="kanban-col">
        <div class="col-header">
          <span class="col-label">Assigment</span>
          <span class="col-badge dark">100</span>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
      </div>

      <!-- In Progress Column -->
      <div class="kanban-col">
        <div class="col-header">
          <span class="col-label">In progress</span>
          <span class="col-badge dark">100</span>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
      </div>

      <!-- Completed Column -->
      <div class="kanban-col">
        <div class="col-header">
          <span class="col-label">Completed</span>
          <span class="col-badge dark">20</span>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
        <div class="task-card">
          <div class="card-top">
            <span class="dot-green"></span>
            <span class="card-title">Design</span>
          </div>
          <p class="card-desc">Create additional fields for payment flow. Update dwsign system</p>
          <div class="card-divider"></div>
          <div class="card-footer"><span class="dots">•••</span></div>
        </div>
      </div>

    </div>
  </main>

</body>
</html>