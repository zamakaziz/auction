<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<body>
<?php include 'menu.html';?>

<div class="container">
  <h2>Create a team</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <input type="email" class="form-control" id="teamName" placeholder="Enter Team Name" name="teamName">
    </div>
    <div class="form-group">
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose Team Logo(image) file</label>
  </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
