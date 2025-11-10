<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Job Application Form</title>
<style>
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #001f3f, #003366, #006699);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 30px 40px;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.4);
        transition: 0.3s;
    }

    form:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 30px rgba(0, 0, 0, 0.5);
    }

    table {
        width: 100%;
        border-spacing: 15px;
    }

    td {
        padding: 5px;
        font-size: 16px;
        color: #e0e0e0;
    }

    input, select {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: none;
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        outline: none;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    input:focus, select:focus {
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 0 5px #00ccff, 0 0 10px #00ccff;
    }

    input[type="file"] {
        background: transparent;
    }

    option {
        color: #000;
    }

    button {
        margin-top: 15px;
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: none;
        background: #00ccff;
        color: #001f3f;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #00ffff;
        box-shadow: 0 0 10px #00ffff, 0 0 20px #00ccff;
    }
</style>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Select Post</td>
            <td>
                <select name="applicant_post" id="applicant_post">
                    <option value="">Select Post</option>
                    <option value="Data Analyst">Data Analyst</option>
                    <option value="Full Stack">Full Stack</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Expected Salary</td>
            <td><input type="text" name="applicant_salary" placeholder="e.g., ₹50,000/month"></td>
        </tr>
        <tr>
            <td>Resume</td>
            <td><input type="file" name="applicant_resume"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Apply Now</button></td>
        </tr>
    </table>
</form>

</body>
</html>
