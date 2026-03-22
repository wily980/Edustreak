<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EduStreak – Build Your Future</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@400;600;700&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
/*bekgron*/
    :root {
      --teal: #0d9488;
      --teal-dark: #0a7c72;
      --teal-light: #ccfbf1;
      --teal-mid: #14b8a6;
      --white: #ffffff;
      --gray-50: #f8fafc;
      --gray-100: #f1f5f9;
      --gray-200: #e2e8f0;
      --gray-400: #94a3b8;
      --gray-600: #475569;
      --gray-800: #1e293b;
      --yellow: #fbbf24;
      --font-head: 'Sora', sans-serif;
      --font-body: 'Plus Jakarta Sans', sans-serif;
    }

    body { font-family: var(--font-body); color: var(--gray-800); background: var(--white); line-height: 1.6; }

    a { text-decoration: none; color: inherit; }

    /*ats*/
    nav {
      background: var(--teal-dark);
      padding: 0 5%;
      display: flex; align-items: center; justify-content: space-between;
      height: 64px; position: sticky; top: 0; z-index: 100;
    }
    .nav-logo { font-family: var(--font-head); font-weight: 700; color: #fff; font-size: 1.2rem; }
    .nav-logo span { color: var(--teal-light); }
    .nav-links { display: flex; gap: 2rem; }
    .nav-links a { color: rgba(255,255,255,0.85); font-size: 0.9rem; font-weight: 500; transition: color .2s; }
    .nav-links a:hover { color: #fff; }
    .nav-btn { background: #fff; color: var(--teal-dark); font-weight: 700; font-size: 0.85rem; padding: 8px 20px; border-radius: 8px; transition: opacity .2s; }
    .nav-btn:hover { opacity: .9; }

    /*makasih ai bagian awal*/
    .hero {
      background: linear-gradient(135deg, var(--teal-dark) 0%, var(--teal) 60%, #2dd4bf 100%);
      padding: 80px 5% 60px;
      display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;
      overflow: hidden; position: relative;
    }
    .hero::after {
      content: ''; position: absolute; right: -80px; top: -80px;
      width: 400px; height: 400px; border-radius: 50%;
      background: rgba(255,255,255,0.06);
    }
    .hero-text h1 { font-family: var(--font-head); font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; color: #fff; line-height: 1.2; margin-bottom: 1rem; }
    .hero-text p { color: rgba(255,255,255,0.82); font-size: 0.95rem; margin-bottom: 2rem; max-width: 400px; }
    .hero-search { display: flex; gap: .5rem; background: #fff; border-radius: 10px; padding: 6px 6px 6px 14px; max-width: 380px; }
    .hero-search input { flex: 1; border: none; outline: none; font-size: 0.9rem; font-family: var(--font-body); color: var(--gray-800); }
    .hero-search input::placeholder { color: var(--gray-400); }
    .hero-search button { background: var(--teal); color: #fff; border: none; border-radius: 7px; padding: 8px 18px; font-weight: 600; cursor: pointer; font-size: 0.88rem; }
    .hero-badges { display: flex; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap; }
    .badge { display: flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.15); color: #fff; border-radius: 20px; padding: 6px 14px; font-size: 0.8rem; font-weight: 600; }
    .badge-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--yellow); }
    .hero-img { display: flex; justify-content: center; }
    .placeholder-img { background: rgba(255,255,255,0.15); border-radius: 16px; border: 2px dashed rgba(255,255,255,0.35); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.6); font-size: 0.85rem; font-weight: 600; letter-spacing: .5px; }
    .hero-img .placeholder-img { width: 320px; height: 280px; }

    /*fitur*/
    .features-strip {
      background: #fff; border-bottom: 1px solid var(--gray-200);
      padding: 20px 5%;
      display: flex; gap: 2rem; justify-content: center; flex-wrap: wrap;
    }
    .feature-item { display: flex; align-items: center; gap: 10px; }
    .feature-icon { width: 42px; height: 42px; border-radius: 10px; background: var(--teal-light); display: flex; align-items: center; justify-content: center; }
    .feature-icon svg { width: 20px; height: 20px; stroke: var(--teal); fill: none; stroke-width: 2; }
    .feature-text strong { display: block; font-size: 0.88rem; font-weight: 700; color: var(--gray-800); }
    .feature-text span { font-size: 0.78rem; color: var(--gray-400); }

    /*section*/
    section { padding: 70px 5%; }
    .section-label { font-size: 0.78rem; font-weight: 700; color: var(--teal); text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: .5rem; }
    .section-title { font-family: var(--font-head); font-size: clamp(1.5rem, 3vw, 2.2rem); font-weight: 800; color: var(--gray-800); margin-bottom: .75rem; }
    .section-sub { color: var(--gray-600); font-size: 0.93rem; max-width: 520px; }
    .section-head { margin-bottom: 2.5rem; }
    .section-head.center { text-align: center; }
    .section-head.center .section-sub { margin: 0 auto; }

    /*pembeda*/
    .about { background: var(--gray-50); }
    .about-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; }
    .about-img .placeholder-img { width: 100%; height: 320px; }
    .about-card { display: flex; align-items: center; gap: 12px; background: #fff; border-radius: 12px; padding: 14px 18px; margin-top: 1.5rem; box-shadow: 0 2px 12px rgba(0,0,0,.07); max-width: 260px; }
    .about-avatar { width: 44px; height: 44px; background: var(--teal-light); border-radius: 50%; flex-shrink: 0; }
    .about-card-text strong { font-size: 0.88rem; font-weight: 700; }
    .about-card-text span { font-size: 0.78rem; color: var(--gray-400); }

    /*kategori*/
    .cat-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.25rem; }
    .cat-card { border-radius: 14px; overflow: hidden; box-shadow: 0 2px 14px rgba(0,0,0,.07); transition: transform .25s, box-shadow .25s; cursor: pointer; }
    .cat-card:hover { transform: translateY(-4px); box-shadow: 0 8px 28px rgba(0,0,0,.12); }
    .cat-card-img .placeholder-img { width: 100%; height: 130px; border-radius: 0; }
    .cat-card-body { padding: 14px 16px; background: #fff; }
    .cat-card-body h3 { font-family: var(--font-head); font-size: 0.95rem; font-weight: 700; margin-bottom: .3rem; }
    .cat-card-body p { font-size: 0.78rem; color: var(--gray-400); margin-bottom: .8rem; }
    .cat-btn { display: inline-block; background: var(--teal); color: #fff; font-size: 0.78rem; font-weight: 700; padding: 6px 14px; border-radius: 6px; transition: background .2s; }
    .cat-btn:hover { background: var(--teal-dark); }

    /*bagian kuis*/
    .quiz-banner {
      background: linear-gradient(120deg, var(--teal-dark), var(--teal-mid));
      border-radius: 20px; margin: 0 5%; padding: 60px 5%;
      display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;
      position: relative; overflow: hidden;
    }
    .quiz-banner::before {
      content: ''; position: absolute; right: 30px; bottom: -40px;
      width: 280px; height: 280px; border-radius: 50%;
      background: rgba(255,255,255,.07);
    }
    .quiz-banner h2 { font-family: var(--font-head); font-size: clamp(1.5rem, 3vw, 2.2rem); font-weight: 800; color: #fff; line-height: 1.3; margin-bottom: 1rem; }
    .quiz-banner p { color: rgba(255,255,255,.82); font-size: 0.93rem; margin-bottom: 1.8rem; }
    .quiz-dots { display: flex; gap: 8px; }
    .quiz-dot { width: 10px; height: 10px; border-radius: 50%; background: rgba(255,255,255,.4); }
    .quiz-dot.active { background: #fff; }
    .quiz-img .placeholder-img { width: 100%; height: 280px; }

    /*course mungkin kg kepake*/
    .course-list { display: flex; flex-direction: column; gap: 1.25rem; }
    .course-card { background: #fff; border-radius: 14px; box-shadow: 0 2px 14px rgba(0,0,0,.07); overflow: hidden; display: grid; grid-template-columns: 180px 1fr; transition: box-shadow .25s; }
    .course-card:hover { box-shadow: 0 8px 28px rgba(0,0,0,.12); }
    .course-card-img .placeholder-img { width: 180px; height: 130px; border-radius: 0; }
    .course-card-body { padding: 16px 20px; display: flex; flex-direction: column; justify-content: space-between; }
    .course-tag { display: inline-block; background: var(--teal-light); color: var(--teal-dark); font-size: 0.72rem; font-weight: 700; padding: 3px 10px; border-radius: 20px; margin-bottom: .5rem; text-transform: uppercase; letter-spacing: .5px; }
    .course-tag.dev { background: #dbeafe; color: #1d4ed8; }
    .course-card-body h3 { font-family: var(--font-head); font-size: 0.97rem; font-weight: 700; margin-bottom: .3rem; }
    .course-card-body p { font-size: 0.8rem; color: var(--gray-400); margin-bottom: .6rem; }
    .course-meta { display: flex; align-items: center; gap: 1rem; font-size: 0.78rem; color: var(--gray-400); }
    .stars { color: var(--yellow); }
    .explore-btn { display: inline-flex; align-items: center; gap: 6px; background: var(--teal); color: #fff; font-weight: 700; font-size: 0.88rem; padding: 10px 24px; border-radius: 8px; margin-top: 2rem; transition: background .2s; cursor: pointer; border: none; font-family: var(--font-body); }
    .explore-btn:hover { background: var(--teal-dark); }
    .explore-wrap { text-align: center; }

    /*even*/
    .events { background: var(--gray-50); }
    .events-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2rem; }
    .event-card { background: #fff; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 14px rgba(0,0,0,.07); }
    .event-card-img .placeholder-img { width: 100%; height: 160px; border-radius: 0; }
    .event-card-body { padding: 16px 18px; }
    .event-card-body h3 { font-family: var(--font-head); font-size: 0.95rem; font-weight: 700; margin-bottom: .5rem; }
    .event-meta { display: flex; gap: 1rem; font-size: 0.78rem; color: var(--gray-400); }
    .event-meta span { display: flex; align-items: center; gap: 4px; }

    /*Jovan sisingamangaraja*/
    .testi-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
    .testi-card { background: #fff; border-radius: 14px; padding: 24px; box-shadow: 0 2px 14px rgba(0,0,0,.07); }
    .testi-avatar { width: 60px; height: 60px; border-radius: 50%; background: var(--teal-light); margin: 0 auto 1rem; border: 3px solid var(--teal); }
    .testi-card h4 { font-family: var(--font-head); font-weight: 700; font-size: 0.95rem; text-align: center; margin-bottom: .2rem; }
    .testi-card span { display: block; font-size: 0.78rem; color: var(--teal); text-align: center; margin-bottom: .8rem; }
    .testi-card p { font-size: 0.82rem; color: var(--gray-600); text-align: center; line-height: 1.7; }

    /*Bagian bawa foter*/
    footer { background: var(--gray-800); color: #fff; padding: 50px 5% 20px; }
    .footer-top { display: grid; grid-template-columns: 1.4fr 1fr 1fr 1fr; gap: 2.5rem; margin-bottom: 2.5rem; }
    .footer-brand p { font-size: 0.85rem; color: rgba(255,255,255,.6); margin: .75rem 0 1.2rem; }
    .footer-subscribe { display: flex; gap: 8px; margin-top: .5rem; }
    .footer-subscribe input { flex: 1; background: rgba(255,255,255,.1); border: 1px solid rgba(255,255,255,.2); border-radius: 8px; padding: 8px 12px; color: #fff; font-size: 0.85rem; font-family: var(--font-body); outline: none; }
    .footer-subscribe input::placeholder { color: rgba(255,255,255,.45); }
    .footer-subscribe button { background: var(--teal); color: #fff; border: none; border-radius: 8px; padding: 8px 16px; font-weight: 700; font-size: 0.82rem; cursor: pointer; }
    .footer-col h4 { font-family: var(--font-head); font-weight: 700; font-size: 0.95rem; margin-bottom: 1rem; }
    .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: .5rem; }
    .footer-col ul li a { font-size: 0.83rem; color: rgba(255,255,255,.6); transition: color .2s; }
    .footer-col ul li a:hover { color: #fff; }
    .footer-bottom { border-top: 1px solid rgba(255,255,255,.1); padding-top: 1.2rem; display: flex; justify-content: space-between; align-items: center; }
    .footer-bottom p { font-size: 0.8rem; color: rgba(255,255,255,.45); }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .hero, .about-inner, .quiz-banner { grid-template-columns: 1fr; }
      .cat-grid { grid-template-columns: 1fr 1fr; }
      .footer-top { grid-template-columns: 1fr 1fr; }
      .testi-grid { grid-template-columns: 1fr 1fr; }
      .events-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 600px) {
      .cat-grid, .testi-grid { grid-template-columns: 1fr; }
      .footer-top { grid-template-columns: 1fr; }
      .course-card { grid-template-columns: 1fr; }
      .course-card-img .placeholder-img { width: 100%; }
      .nav-links { display: none; }
    }
  </style>
</head>
<!--Bagian html asli css atas-->
<body>

  <!-- NAVBAR -->
  <nav>
    <div class="nav-logo">Edu<span>Streak</span></div>
    <div class="nav-links">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Course</a>
      <a href="#">Support</a>
    </div>
    <a href="#" class="nav-btn">Sign In</a>
  </nav>

  <!-- HERO -->
  <div class="hero">
    <div class="hero-text">
      <h1>Build Your Future,<br>Choose<br>Your Course</h1>
      <p>Receiving Education Streak tells us all the future to reach that the right skills to be prepared for tomorrow.</p>
      <div class="hero-search">
        <input type="text" placeholder="Search Your Course"/>
        <button>Search</button>
      </div>
      <div class="hero-badges">
        <div class="badge"><span class="badge-dot"></span> 500+ Courses</div>
        <div class="badge"><span class="badge-dot"></span> Expert Teachers</div>
        <div class="badge"><span class="badge-dot"></span> Certificate</div>
      </div>
    </div>
    <div class="hero-img">
      <div class="placeholder-img">Hero Image</div>
    </div>
  </div>

  <!-- FEATURES STRIP -->
  <div class="features-strip">
    <div class="feature-item">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
      </div>
      <div class="feature-text">
        <strong>Video Training</strong>
        <span>800+ Video Courses</span>
      </div>
    </div>
    <div class="feature-item">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
      </div>
      <div class="feature-text">
        <strong>Versatile Course</strong>
        <span>500+ Skill Courses</span>
      </div>
    </div>
    <div class="feature-item">
      <div class="feature-icon">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg>
      </div>
      <div class="feature-text">
        <strong>Expert Teacher</strong>
        <span>200+ Instructors</span>
      </div>
    </div>
  </div>

  <!-- ABOUT -->
  <section class="about">
    <div class="about-inner">
      <div class="about-img">
        <div class="placeholder-img" style="width:100%; height:320px; background:#e0f2fe; border-color:#93c5fd; color:#3b82f6;">About Image</div>
      </div>
      <div>
        <div class="section-label">About Us</div>
        <h2 class="section-title">About Our Next Level E-Course For Everyone</h2>
        <p style="color:var(--gray-600); font-size:.93rem; margin-bottom:1.5rem;">E-learning is now a dream to access courses best effort to compete among others. Keep your mind positive with our platform. The platform benefits for local learners.</p>
        <div class="about-card">
          <div class="about-avatar"></div>
          <div class="about-card-text">
            <strong>Create Account</strong>
            <span>By Jo · 10+ Student</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CATEGORIES -->
  <section>
    <div class="section-head center">
      <div class="section-label">Categories</div>
      <h2 class="section-title">Our Main Course Categories</h2>
      <p class="section-sub">Discover the wide selection of courses with student-focused plans that come with the best value-per-design to login.</p>
    </div>
    <div class="cat-grid">
      <div class="cat-card">
        <div class="cat-card-img"><div class="placeholder-img" style="background:#dbeafe; border-color:#93c5fd; color:#3b82f6;">UI/UX Image</div></div>
        <div class="cat-card-body">
          <h3>UI/UX Design</h3>
          <p>Master modern design with user-focused principles and tools.</p>
          <a href="#" class="cat-btn">Explore Course</a>
        </div>
      </div>
      <div class="cat-card">
        <div class="cat-card-img"><div class="placeholder-img" style="background:#dcfce7; border-color:#86efac; color:#16a34a;">Dev Image</div></div>
        <div class="cat-card-body">
          <h3>Development</h3>
          <p>Build real applications with hands-on development skills.</p>
          <a href="#" class="cat-btn">Explore Course</a>
        </div>
      </div>
      <div class="cat-card">
        <div class="cat-card-img"><div class="placeholder-img" style="background:#fef9c3; border-color:#fde047; color:#ca8a04;">Tech Image</div></div>
        <div class="cat-card-body">
          <h3>Technology</h3>
          <p>Stay ahead with the latest in tech trends and innovations.</p>
          <a href="#" class="cat-btn">Explore Course</a>
        </div>
      </div>
      <div class="cat-card">
        <div class="cat-card-img"><div class="placeholder-img" style="background:#fce7f3; border-color:#f9a8d4; color:#be185d;">Marketing Image</div></div>
        <div class="cat-card-body">
          <h3>Marketing</h3>
          <p>Grow brands and audiences with strategic digital marketing.</p>
          <a href="#" class="cat-btn">Explore Course</a>
        </div>
      </div>
    </div>
  </section>

  <!-- QUIZ BANNER -->
  <div class="quiz-banner">
    <div>
      <p style="color:rgba(255,255,255,.7); font-size:.8rem; font-weight:700; text-transform:uppercase; letter-spacing:1.5px; margin-bottom:.5rem;">Why Choose Us</p>
      <h2>Build A Custom Quiz site with varies Design.</h2>
      <p>Receiving Education Streak tells us all the future to reach that the right skills to be prepared for tomorrow.</p>
      <div class="quiz-dots">
        <div class="quiz-dot active"></div>
        <div class="quiz-dot"></div>
        <div class="quiz-dot"></div>
      </div>
    </div>
    <div class="quiz-img">
      <div class="placeholder-img" style="background:rgba(255,255,255,.15); border-color:rgba(255,255,255,.3); color:rgba(255,255,255,.7);">Quiz Banner Image</div>
    </div>
  </div>

  <!-- POPULAR COURSES -->
  <section style="padding-top:70px;">
    <div class="section-head center">
      <div class="section-label">Categories</div>
      <h2 class="section-title">Our Main Course Categories</h2>
      <p class="section-sub">E-learning is a dream to access courses best to compete among others. Keep your mind positive and complete your schedule.</p>
    </div>
    <div class="course-list">
      <div class="course-card">
        <div class="course-card-img"><div class="placeholder-img" style="width:180px; height:130px; background:#dbeafe; border-color:#93c5fd; color:#3b82f6;">Course 1</div></div>
        <div class="course-card-body">
          <div>
            <span class="course-tag">Beginner</span>
            <h3>Web Developer & Javascript for Beginners</h3>
            <p>A learning full web stack to become a developer at the best grade and complete your schedule.</p>
          </div>
          <div class="course-meta">
            <span class="stars">★★★★★</span>
            <span>5.0 Rating</span>
            <span>📚 4 Modules</span>
            <span>👤 100+ Students</span>
          </div>
        </div>
      </div>
      <div class="course-card">
        <div class="course-card-img"><div class="placeholder-img" style="width:180px; height:130px; background:#dcfce7; border-color:#86efac; color:#16a34a;">Course 2</div></div>
        <div class="course-card-body">
          <div>
            <span class="course-tag dev">Developer</span>
            <h3>Web Developer & Javascript for Beginners</h3>
            <p>A learning full web stack to become a developer at the best grade and complete your schedule.</p>
          </div>
          <div class="course-meta">
            <span class="stars">★★★★</span>
            <span>4.0 Rating</span>
            <span>📚 6 Modules</span>
            <span>👤 250+ Students</span>
          </div>
        </div>
      </div>
      <div class="course-card">
        <div class="course-card-img"><div class="placeholder-img" style="width:180px; height:130px; background:#fef9c3; border-color:#fde047; color:#ca8a04;">Course 3</div></div>
        <div class="course-card-body">
          <div>
            <span class="course-tag dev">Developer</span>
            <h3>Web Developer & Javascript for Beginners</h3>
            <p>A learning full web stack to become a developer at the best grade and complete your schedule.</p>
          </div>
          <div class="course-meta">
            <span class="stars">★★★★</span>
            <span>4.5 Rating</span>
            <span>📚 5 Modules</span>
            <span>👤 180+ Students</span>
          </div>
        </div>
      </div>
    </div>
    <div class="explore-wrap" style="margin-top:2rem;">
      <button class="explore-btn">Explore All Course →</button>
    </div>
  </section>

  <!-- EVENTS -->
  <section class="events">
    <div class="section-head center">
      <div class="section-label">Event Site</div>
      <h2 class="section-title">We Arrange Learning Event<br>For Student</h2>
    </div>
    <div class="events-grid">
      <div class="event-card">
        <div class="event-card-img"><div class="placeholder-img" style="height:160px; background:#dbeafe; border-color:#93c5fd; color:#3b82f6; border-radius:0;">Event 1 Image</div></div>
        <div class="event-card-body">
          <h3>Education School Technology Summit 2027</h3>
          <div class="event-meta">
            <span>👤 1 Speaker</span>
            <span>📍 Offline</span>
            <span>💵 $22.981</span>
          </div>
        </div>
      </div>
      <div class="event-card">
        <div class="event-card-img"><div class="placeholder-img" style="height:160px; background:#dcfce7; border-color:#86efac; color:#16a34a; border-radius:0;">Event 2 Image</div></div>
        <div class="event-card-body">
          <h3>Learning Network Webinars For Public Teachers</h3>
          <div class="event-meta">
            <span>👤 5 Speaker</span>
            <span>🌐 Online</span>
            <span>💵 $21 PM</span>
          </div>
        </div>
      </div>
    </div>
    <div class="explore-wrap">
      <button class="explore-btn">Explore All Course →</button>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section>
    <div class="section-head center">
      <div class="section-label">Testimonial</div>
      <h2 class="section-title">What Our Students Say<br>About Us</h2>
    </div>
    <div class="testi-grid">
      <div class="testi-card">
        <div class="testi-avatar"></div>
        <h4>Trevor Thornton</h4>
        <span>UI/UX Teaching</span>
        <p>The platform benefited me to access courses best effort to compete among others and completed my schedule on time.</p>
      </div>
      <div class="testi-card">
        <div class="testi-avatar" style="background:#dbeafe; border-color:#3b82f6;"></div>
        <h4>Alexia Kevin</h4>
        <span>Web Developer</span>
        <p>Learning here has truly transformed my career path. The expert teachers and structured content helped me land my first job.</p>
      </div>
      <div class="testi-card">
        <div class="testi-avatar" style="background:#dcfce7; border-color:#16a34a;"></div>
        <h4>Jessie Albert</h4>
        <span>Digital Marketing</span>
        <p>I love the quiz features and the versatile course library. It's the best investment I've ever made in my own education.</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-top">
      <div class="footer-brand">
        <div class="nav-logo" style="font-size:1.3rem;">Edu<span>Streak</span></div>
        <p>Make better future for your Career</p>
        <div class="footer-subscribe">
          <input type="email" placeholder="Enter your email"/>
          <button>Send</button>
        </div>
      </div>
      <div class="footer-col">
        <h4>Business Info</h4>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Instagram</h4>
        <ul>
          <li><a href="#">@edustreak</a></li>
          <li><a href="#">@edu.teach</a></li>
          <li><a href="#">@learn_daily</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact Info</h4>
        <ul>
          <li><a href="#">info@edustreak.com</a></li>
          <li><a href="#">+62 812 3456 7890</a></li>
          <li><a href="#">Jakarta, Indonesia</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 EduStreak. All rights reserved.</p>
      <p style="color:rgba(255,255,255,.3); font-size:.78rem;">Built with ❤️ for learners</p>
    </div>
  </footer>

</body>
</html>