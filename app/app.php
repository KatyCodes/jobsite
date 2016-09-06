<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<!DOCTYPE html>
        <html>
          <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
            <title>Job Posting</title>
          </head>
          <body>
            <div class='container'>
            <h1>Please enter information about your job opening</h1>
              <form action='/jobs'>
                <div class='form-group'>
                  <label for='title'>Enter title</label>
                  <input id='title' name='title' class='form-control'>
                </div>
                <div class='form-group'>
                  <label for='description'>A brief description</label>
                  <input id='description' name='description' class='form-control'>
                </div>
                <div class='form-group'>
                  <label for='contactInfo'>Your contact information</label>
                  <input id='contactInfo' name='contactInfo' class='form-control'>
                </div>
                <button type='submit' class='btn btn-success'>Submit</button>
              </form>
            </div>
          </body>
        </html>";
      });

    $app->get("/jobs", function() {
      $jobListings = new JobOpening($_GET['title'], $_GET['description'], $_GET['contactInfo']);
      return "<html>
        <head>
          <title>Jobs</title>
        </head>
        <body>
        <h1>" . $jobListings->title
         . "</h1>
        </body>
      </html>";
      });


    return $app;
?>
<!DOCTYPE html>
