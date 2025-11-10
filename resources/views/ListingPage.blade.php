<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #eef2f7;
            color: #333;
            padding: 40px 0;
        }

        /* Header */
        header {
            width: 90%;
            margin: auto;
            background: #0077b6;
            color: white;
            border-radius: 10px;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 1.6rem;
            letter-spacing: 0.5px;
        }

        header a {
            text-decoration: none;
            background: white;
            color: #0077b6;
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: 500;
            transition: 0.3s;
        }

        header a:hover {
            background: #e6f4ff;
        }

        /* Table Styles */
        table {
            width: 90%;
            margin: 40px auto;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        th, td {
            padding: 15px 20px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #0077b6;
            color: #fff;
            font-weight: 600;
            letter-spacing: 0.4px;
        }

        tr:hover {
            background-color: #f1faff;
            transition: 0.3s ease;
        }

        td {
            font-size: 0.95rem;
        }

        /* Buttons */
        a.action-btn {
            text-decoration: none;
            background: #1e90ff;
            color: white;
            padding: 6px 14px;
            border-radius: 6px;
            transition: 0.3s ease;
            font-size: 0.9rem;
            display: inline-block;
        }

        a.action-btn:hover {
            background: #1256a3;
        }

        button {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 6px 14px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s ease;
            font-size: 0.9rem;
        }

        button:hover {
            background: #c0392b;
        }

        form {
            display: inline;
        }

        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Employer Job Listings</h1>
        <a href="{{ url('/') }}">🏠 Home</a>
    </header>

    <table>
        <tr>
            <th>Company Name</th>
            <th>Job Title</th>
            <th>Skills</th>
            <th>Experience</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
        @foreach($Listing as $JobPost)
        <tr>
            <td>{{ $JobPost->company_name }}</td>
            <td>{{ $JobPost->job_title }}</td>
            <td>{{ $JobPost->job_skills }}</td>
            <td>{{ $JobPost->job_experience }}</td>
            <td>{{ $JobPost->job_salary }}</td>
            <td>
                <a href="{{ route('job.edit', $JobPost->id) }}" class="action-btn">Edit</a>
                <form action="{{ route('job.destroy', $JobPost->id) }}" method="POST">
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
