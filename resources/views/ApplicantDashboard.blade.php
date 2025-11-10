<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Dashboard</title>
    <style>
        /* ===== Reset and Base Styles ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: linear-gradient(145deg, #e3f2fd, #f8fafc);
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ===== Header ===== */
        header {
            background: #ffffffcc;
            backdrop-filter: blur(8px);
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        header h1 {
            font-size: 1.6rem;
            color: #0077b6;
            letter-spacing: 0.5px;
        }

        nav a {
            color: #2c3e50;
            text-decoration: none;
            margin-left: 25px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #0077b6;
        }

        /* ===== Dashboard Layout ===== */
        .dashboard {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            padding: 40px 60px;
        }

        /* ===== Card Style ===== */
        .card {
            background: #ffffff;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 119, 182, 0.15);
        }

        .card h2 {
            margin-bottom: 12px;
            color: #0077b6;
            font-size: 1.3rem;
        }

        .card p {
            color: #555;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        /* ===== Buttons ===== */
        .btn {
            background: #0077b6;
            color: white;
            padding: 10px 22px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background: #005f87;
            transform: scale(1.05);
        }

        /* ===== Footer ===== */
        footer {
            text-align: center;
            padding: 15px;
            background: #f1f5f9;
            font-size: 0.9rem;
            color: #555;
            border-top: 1px solid #e0e0e0;
        }

        /* ===== Responsive ===== */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            nav {
                margin-top: 10px;
            }

            nav a {
                margin: 10px;
                display: inline-block;
            }

            .dashboard {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Applicant Dashboard</h1>
        <nav>
            <a href="{{ '/' }}">Home</a>
            <a href="#">Browse Jobs</a>
            <a href="#">Applications</a>
            <a href="#">Profile</a>
            <a href="#">Logout</a>
        </nav>
    </header>

    <section class="dashboard">
        <div class="card">
            <h2>Browse Jobs</h2>
            <p>Explore the latest job listings and apply with one click.</p>
            <button class="btn">Find Jobs</button>
        </div>

        <div class="card">
            <h2>My Applications</h2>
            <p>Keep track of all your submitted job applications easily.</p>
            <button class="btn">View Status</button>
        </div>

        <!-- <div class="card">
            <h2>Recommended Jobs</h2>
            <p>Get job suggestions based on your profile and interests.</p>
            <button class="btn">View Recommendations</button>
        </div> -->

        <div class="card">
            <h2>Profile Settings</h2>
            <p>Manage your account and update personal details anytime.</p>
            <button class="btn">Edit Profile</button>
        </div>
    </section>

    <footer>
        &copy; 2025 Job Application Portal | Designed by Ajit
    </footer>
</body>
</html>
