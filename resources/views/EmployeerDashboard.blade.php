<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Employer Dashboard</title>
  <style>
    /* ========== GLOBAL ========== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f4f6fa;
      color: #2c3e50;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* ========== HEADER ========== */
    header {
      background: #ffffff;
      padding: 18px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #e1e5ee;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    header h1 {
      font-size: 1.6rem;
      font-weight: 600;
      color: #1e3a8a;
    }

    nav a {
      text-decoration: none;
      color: #555;
      margin-left: 25px;
      font-weight: 500;
      font-size: 1rem;
      transition: 0.3s;
    }

    nav a:hover {
      color: #1e3a8a;
    }

    /* ========== DASHBOARD GRID ========== */
    .dashboard {
      flex: 1;
      padding: 60px 80px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    /* ========== CARD ========== */
    .card {
      background: #ffffff;
      border-radius: 16px;
      padding: 30px 25px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .card h2 {
      color: #1e3a8a;
      font-size: 1.3rem;
      margin-bottom: 12px;
    }

    .card p {
      color: #555;
      font-size: 0.95rem;
      line-height: 1.4;
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      background: #1e3a8a;
      color: white;
      padding: 10px 18px;
      border: none;
      border-radius: 8px;
      font-size: 0.95rem;
      cursor: pointer;
      transition: 0.3s;
      text-align: center;
      text-decoration: none;
      width: fit-content;
      align-self: center;
    }

    .btn:hover {
      background: #2e5cb8;
    }

    /* ========== FOOTER ========== */
    footer {
      text-align: center;
      padding: 15px;
      background: #ffffff;
      border-top: 1px solid #e1e5ee;
      color: #777;
      font-size: 0.9rem;
      box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.03);
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        text-align: center;
      }

      nav {
        margin-top: 10px;
      }

      .dashboard {
        padding: 30px 25px;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Employer Dashboard</h1>
    <nav>
      <a href="{{ '/' }}">Home</a>
      <a href="#">Post Job</a>
      <a href="#">Applicants</a>
      <a href="/empProfile">Profile</a>
      <a href="#">Logout</a>
    </nav>
  </header>

  <section class="dashboard">
    <div class="card">
      <div>
        <h2>Post a New Job</h2>
        <p>Create and publish new job listings to reach potential candidates easily.</p>
      </div>
      <a href="{{url('/jobpost')}}" class="btn">Create Job</a>
    </div>

    <div class="card">
      <div>
        <h2>View Applications</h2>
        <p>Check all applicants who have applied for your active job postings.</p>
      </div>
      <a href="#" class="btn">View Applicants</a>
    </div>

    <!-- <div class="card">
      <div>
        <h2>Manage Jobs</h2>
        <p>Edit, update, or remove your posted jobs anytime in a single click.</p>
      </div>
      <a href="#" class="btn">Manage Jobs</a>
    </div> -->

    <div class="card">
      <div>
        <h2>Profile Settings</h2>
        <p>Update your company details and employer profile information.</p>
      </div>
      <a href="{{url('/employeerform')}}" class="btn">Edit Profile</a>
    </div>
  </section>

  <footer>
    &copy; 2025 Job Application Portal | Designed by <strong>Ajit</strong>
  </footer>
</body>
</html>
