<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <form action="{{route('emp.update' , $Profile->id)}}" method="POST">
        @csrf
        @method('PUT')
            <table>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="company_name" value="{{$Profile->company_name}}"></td>
            </tr>
            <tr>
                <td>Company Email</td>
                <td><input type="email" name="company_email" value="{{$Profile->company_email}}"></td>
            </tr>
            <tr>
                <td>Company Phone Number</td>
                <td><input type="number" name="company_phone" value="{{$Profile->company_phone}}"></td>
            </tr>
            <tr>
                <td>Company Address</td>
                <td><input type="text" name="company_address" value="{{$Profile->company_address}}"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="company_city" value="{{$Profile->company_city}}"></td>
            </tr>
            <tr>
                <td>State</td>
                <td><input type="text" name="company_state" value="{{$Profile->company_state}}"></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="company_country" value="{{$Profile->company_country}}"></td>
            </tr>
            <tr>
                <td>Pincode/Zip Code</td>
                <td><input type="number" name="company_zipcode" value="{{$Profile->company_zipcode}}"></td>
            </tr>
            <tr>
                
                <td colspan="2"><button type="submit">Update</button></td>
            </tr>
            </table>
        </form>
    </div>  
</body>
</html>