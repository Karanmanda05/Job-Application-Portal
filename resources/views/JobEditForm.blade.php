<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Posting Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      min-height: 100vh;
      width: 100vw;
      display: flex;
      justify-content: center;
      align-items: center;
      background: radial-gradient(circle at top left, #004e92, #000428);
      padding: 50px 15px;
      color: #fff;
    }

    .container {
      width: 100%;
      max-width: 700px;
      background: rgba(255, 255, 255, 0.08);
      box-shadow: 0 8px 40px rgba(0, 0, 0, 0.4);
      border-radius: 20px;
      backdrop-filter: blur(12px);
      padding: 40px 35px;
      animation: fadeIn 0.8s ease;
    }

    h1 {
      text-align: center;
      font-size: 2rem;
      color: #00eaff;
      margin-bottom: 25px;
      letter-spacing: 1px;
      text-shadow: 0 0 10px rgba(0, 255, 255, 0.6);
      border-bottom: 2px solid rgba(0, 255, 255, 0.3);
      padding-bottom: 5px;
    }

    h2 {
      font-size: 1.3rem;
      color: #00eaff;
      margin: 30px 0 15px 0;
      text-shadow: 0 0 5px rgba(0, 255, 255, 0.5);
      border-left: 4px solid #00b4d8;
      padding-left: 10px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
    }

    label {
      margin-bottom: 6px;
      font-size: 0.95rem;
      color: #d1f3ff;
      letter-spacing: 0.3px;
    }

    input,
    select {
      padding: 10px 12px;
      border: none;
      border-radius: 10px;
      outline: none;
      width: 100%;
      background: rgba(255, 255, 255, 0.15);
      color: white;
      font-size: 0.95rem;
      transition: all 0.3s ease;
    }

    input:focus,
    select:focus {
      background: rgba(255, 255, 255, 0.25);
      box-shadow: 0 0 10px #00b4d8;
      transform: scale(1.02);
    }

    button {
      width: 60%;
      padding: 12px;
      border: none;
      border-radius: 12px;
      background: linear-gradient(90deg, #00b4d8, #0077b6);
      color: white;
      font-size: 1.1rem;
      letter-spacing: 0.5px;
      cursor: pointer;
      display: block;
      margin: 35px auto 10px;
      transition: 0.3s ease;
      box-shadow: 0 0 15px rgba(0, 180, 216, 0.3);
    }

    button:hover {
      transform: scale(1.07);
      box-shadow: 0 0 25px #00b4d8;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Scrollbar styling for long forms */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-thumb {
      background: rgba(0, 180, 216, 0.5);
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="{{route('job.update' , $Job->id)}}" method="post">
      @csrf
      @method('PUT')
      <h1>Job Posting Form</h1>

      <h2>Company Details</h2>
      <div class="form-group">
        <label>Company Name</label>
        <input type="text" name="company_name" value="{{$Job->company_name}}"/>
      </div>
      <div class="form-group">
        <label>Company Location / Address</label>
        <input type="text" name="company_address" value="{{$Job->company_address}}"/>
      </div>
      <div class="form-group">
        <label>Contact No.</label>
        <input type="text" name="company_contact" value="{{$Job->company_contact}}"/>
      </div>

      <h2>Job Details</h2>
      <div class="form-group">
        <label>Job Title</label>
        <input type="text" name="job_title" value="{{$Job->job_title}}"/>
      </div>
      <div class="form-group">
        <label>Job Type</label>
        <input type="text" name="job_type" value="{{$Job->job_type}}"/>
      </div>
      <div class="form-group">
        <label>Job Category</label>
        <input type="text" name="job_category" value="{{$Job->job_category}}"/>
      </div>
      <div class="form-group">
        <label>Job Description</label>
        <input type="text" name="job_description" value="{{$Job->job_description}}"/>
      </div>
      <div class="form-group">
        <label>Responsibilities</label>
        <input type="text" name="job_responsibility" value="{{$Job->job_responsibility}}"/>
      </div>
      <div class="form-group">
        <label>Required Skills</label>
        <input type="text" name="job_skills" value="{{$Job->job_skills}}"/>
      </div>
      <div class="form-group">
        <label>Experience</label>
        <input type="text" name="job_experience" value="{{$Job->job_experience}}" />
      </div>
      <div class="form-group">
        <label>Education / Qualification</label>
        <input type="text" name="job_qualification" value="{{$Job->job_qualification}}"/>
      </div>

      <h2>Compensation</h2>
      <div class="form-group">
        <label>Salary Range</label>
        <input type="text" name="job_salary" value="{{$Job->job_salary}}"/>
      </div>
      <div class="form-group">
        <label>Perks</label>
        <input type="text" name="job_perks" value="{{$Job->job_perks}}"/>
      </div>

      <h2>Location</h2>
      <div class="form-group">
        <label>City</label>
        <input type="text" name="job_city" value="{{$Job->job_city}}"/>
      </div>
      <div class="form-group">
        <label>State</label>
        <input type="text" name="job_state" value="{{$Job->job_state}}"/>
      </div>
      <div class="form-group">
        <label>Country</label>
        <input type="text" name="job_country" value="{{$Job->job_country}}"/>
      </div>

      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
