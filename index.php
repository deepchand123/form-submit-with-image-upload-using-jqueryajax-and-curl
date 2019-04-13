<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/custom.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <form id="contactForm" class="form-horizontal" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label class="control-label col-sm-2" for="first_name">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="first_name" placeholder="Enter first Name" name="first_name" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="last_name">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="last_name" placeholder="Enter last Name" name="last_name" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="phone_number">Phone Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone_number" placeholder="Enter phone number" name="phone_number" required>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="image">Image:</label>
      <div class="col-sm-10">
        <!-- image browse when click on "Image Browse" (its work with label "for" and input type file of "id" must be same) -->
        <label class="control-label col-sm-10" for="imageBrowse" style="padding-left: 0px; text-align: left;">Choose images to upload (PNG, JPG)</label>
        <input type="file" class="form-control" id="imageBrowse" name="image" style="display:none">        
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </div>
    </div>

  </form>
</div>

</body>
</html>