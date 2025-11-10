<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Profiles</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #001f3f, #003366, #006699);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 0 0 10px #00ccff;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.8s ease;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            font-size: 15px;
        }

        th {
            background: rgba(0, 204, 255, 0.25);
            color: #fff;
            letter-spacing: 0.5px;
        }

        tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.05);
        }

        tr:hover {
            background: rgba(0, 204, 255, 0.2);
            transition: 0.3s ease;
        }

        a {
            color: #00ccff;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
        }

        a:hover {
            color: #00ffff;
            text-shadow: 0 0 6px #00ffff;
        }

        form {
            display: inline-block;
        }

        button {
            background: #00ccff;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            color: #001f3f;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #00ffff;
            box-shadow: 0 0 8px #00ffff, 0 0 12px #00ccff;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

    </style>
</head>
<body>

    <h1>Employer Profile Details</h1>
        <a href="{{url('/employeer')}}">Home</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Zip Code</th>
            <th>Actions</th>
        </tr>

        @foreach($Profile as $EmployeerProfile)
        <tr>
            <td>{{$EmployeerProfile->company_name}}</td>
            <td>{{$EmployeerProfile->company_email}}</td>
            <td>{{$EmployeerProfile->company_phone}}</td>
            <td>{{$EmployeerProfile->company_address}}</td>
            <td>{{$EmployeerProfile->company_city}}</td>
            <td>{{$EmployeerProfile->company_state}}</td>
            <td>{{$EmployeerProfile->company_country}}</td>
            <td>{{$EmployeerProfile->company_zipcode}}</td>
            <td>
                <a href="{{route('emp.edit' , $EmployeerProfile->id)}}">Edit</a>
                <form action="{{route('emp.destroy' , $EmployeerProfile->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>
