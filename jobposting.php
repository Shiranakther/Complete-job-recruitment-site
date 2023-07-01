<!DOCTYPE html>
<html>
  <head>
    <title>Recruiter Job Position Form</title>
    <style>
      .job-postings {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-left: 500px;

        width: 500px;
        background-color: rgb(238, 255, 255);
      }
      .topic {
        color: rgba(8, 8, 77, 0.958);
        font-size: 25px;
        font-weight: bold;
      }
      .input {
        width: 300px;
        border-radius: 5px;
        border: 2px rgb(11, 11, 127) solid;
      }
    </style>
  </head>
  <body>
    <div class="job-postings">
      <h1>Recruiter Job Position Form</h1>

      <form action="process_job_position.php" method="POST">
        <p class="topic">Job Title</p>
        <input
          type="text"
          name="job_title"
          class="input"
          required
        /><br /><br />

        <p class="topic">Job Description</p>
        <textarea
          name="job_description"
          id="job_description"
          rows="5"
          class="input"
          required
        ></textarea
        ><br /><br />

        <p class="topic">Requirements</p>
        <textarea
          name="requirements"
          id="requirements"
          rows="5"
          class="input"
          required
        ></textarea
        ><br /><br />

        <p class="topic">Salary</p>
        <input
          type="text"
          name="salary"
          id="salary"
          required
          class="input"
        /><br /><br />

        <p class="topic">Location</p>
        <input
          type="text"
          name="location"
          id="location"
          class="input"
          required
        /><br /><br />

        <p class="topic">Employment Type</p>
        <select name="employment_type" id="employment_type" required>
          <option value="">Select Employment Type</option>
          <option value="Full-Time">Full-Time</option>
          <option value="Part-Time">Part-Time</option>
          <option value="Contract">Contract</option>
          <option value="Freelance">Freelance</option></select
        ><br /><br />

        <p class="topic">Application Email</p>
        <input
          type="email"
          name="application_email"
          id="application_email"
          class="input"
          required
        /><br /><br />

        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>
