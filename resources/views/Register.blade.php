<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      width: 100vw;
      display: flex;
      justify-content: center;
      align-items: center;
      background: radial-gradient(circle at top left, #004e92, #000428);
    }

    .container {
      width: 420px;
      background: rgba(255, 255, 255, 0.08);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
      border-radius: 16px;
      backdrop-filter: blur(10px);
      padding: 35px 30px;
      color: white;
      animation: fadeIn 0.8s ease;
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 2.2rem;
      letter-spacing: 1px;
      color: #ffffff;
      text-shadow: 0 0 8px rgba(0, 255, 255, 0.6);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 10px 5px;
      vertical-align: middle;
      font-size: 1rem;
    }

    input, select {
      padding: 8px 12px;
      border: none;
      border-radius: 8px;
      outline: none;
      width: 100%;
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.15);
      color: white;
    }

    input:focus, select:focus {
      box-shadow: 0 0 10px #00b4d8;
      background: rgba(255, 255, 255, 0.25);
    }

    option {
      color: black;
    }

    .checkbox-group label {
      margin-right: 15px;
      font-size: 0.95rem;
    }

    .checkbox-group input {
      width: auto;
      margin-right: 5px;
      accent-color: #00b4d8;
    }

    button {
      width: 50%;
      padding: 10px;
      border: none;
      border-radius: 10px;
      background: linear-gradient(90deg, #00b4d8, #0077b6);
      color: white;
      font-size: 1rem;
      letter-spacing: 0.5px;
      cursor: pointer;
      display: block;
      margin: 20px auto 0;
      transition: 0.3s;
    }

    button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px #00b4d8;
    }

    #error {
      color: #ff6b6b;
      text-align: center;
      font-size: 0.9rem;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Registration Form</h1>

    <form action="{{route('main.store')}}" method="POST" class="main_form" onSubmit="return validatePassword()">
      @csrf
      <table>
        <tr>
          <td>Full Name</td>
          <td><input type="text" name="fullname" required></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><input type="email" name="email" required></td>
        </tr>

        <tr>
          <td>Password</td>
          <td><input type="password" name="password" id="password" required></td>
        </tr>

        <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="confirm_password" id="confirm_password" required></td>
        </tr>

        <tr>
          <td colspan="2"><p id="error"></p></td>
        </tr>

        <tr>
          <td>User Role</td>
          <td>
            <select name="role" required>
              <option value="">Select Role</option>
              <option value="Applicant">Applicant</option>
              <option value="Employeer">Employeer</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Phone Number</td>
          <td><input type="tel" name="phone"></td>
        </tr>

        <tr>
          <td>City</td>
          <td><input type="text" name="city"></td>
        </tr>

        <tr>
          <td>Qualifications</td>
          <td>
            <select name="qualification" id="qualification" required>
              <option value="">---Select Qualifications---</option>
              <option value="BCA">BCA</option>
              <option value="MCA">MCA</option>
              <option value="B.Tech">B.Tech</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Experience</td>
          <td><input type="text" name="experience" required></td>
        </tr>

        <tr>
          <td>Language</td>
          <td class="checkbox-group">
            <label><input type="checkbox" value="C++" name="languages">C++</label>
            <label><input type="checkbox" value="Java" name="languages">Java</label>
            <label><input type="checkbox" value="Python" name="languages">Python</label>
            <label><input type="checkbox" value="Php" name="languages">Php</label>
          </td>
        </tr>

        <tr>
          <td colspan="2"><button type="Submit">Register</button></td>
        </tr>
      </table>
    </form>
  </div>

  <script>
    function validatePassword() {
      const Password = document.getElementById("password").value;
      const Confirm = document.getElementById("confirm_password").value;
      const ErrorMessage = document.getElementById("error");

      if (Password !== Confirm) {
        ErrorMessage.textContent = "Password not matched";
        return false;
      }
      ErrorMessage.textContent = "";
      return true;
    }
  </script>
</body>
</html>
