<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Applicant Profile Form</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #1a1a2e, #16213e);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    form {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
      width: 500px;
    }

    table {
      width: 100%;
      border-spacing: 10px;
    }

    td {
      padding: 8px 0;
      vertical-align: middle;
      color: #e0e0e0;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      outline: none;
      transition: 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="date"]:focus {
      background: rgba(255, 255, 255, 0.3);
      box-shadow: 0 0 10px #00ffff;
    }

    input[type="radio"] {
      accent-color: #00ffff;
      transform: scale(1.2);
      margin: 0 8px;
    }

    input[type="file"] {
      border: none;
      background: rgba(255, 255, 255, 0.1);
    }

    tr td:first-child {
      width: 40%;
      font-weight: bold;
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
      background: #00bcd4;
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    button:hover {
      background: #00e5ff;
      box-shadow: 0 0 15px #00e5ff;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Full Name</td>
        <td><input type="text" name="applicant_name"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="applicant_email"></td>
      </tr>
      <tr>
        <td>Contact</td>
        <td><input type="text" name="applicant_contact"></td>
      </tr>
      <tr>
        <td>DOB</td>
        <td><input type="date" name="applicant_dob"></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <label><input type="radio" name="applicant_gender" value="Male"> Male</label>
          <label><input type="radio" name="applicant_gender" value="Female"> Female</label>
          <label><input type="radio" name="applicant_gender" value="Other"> Other</label>
        </td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input type="text" name="applicant_address"></td>
      </tr>
      <tr>
        <td>Qualification</td>
        <td><input type="text" name="applicant_qualification"></td>
      </tr>
      <tr>
        <td>Experience</td>
        <td><input type="text" name="applicant_experience"></td>
      </tr>
      <tr>
        <td>Skills</td>
        <td><input type="text" name="applicant_skills"></td>
      </tr>
      <tr>
        <td>Profile Photo</td>
        <td><input type="file" name="applicant_photo" accept="image/*"></td>
      </tr>
      <tr>
        <td>Resume</td>
        <td><input type="file" name="applicant_resume" accept=".pdf,.doc,.docx"></td>
      </tr>
      <tr>
        <td>LinkedIn Profile</td>
        <td><input type="text" name="applicant_linkedin"></td>
      </tr>
      <tr>
        <td>GitHub Link</td>
        <td><input type="text" name="applicant_github"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <button type="submit">Save Profile</button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
