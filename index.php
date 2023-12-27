<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./index.css" />
  <title>Document</title>
</head>


<body>
  <form action="./forms.php" method="post">
    <div>
      <label>Project Name</label>
      <input type="text" name="projectname" placeholder="project name" required>
    </div>

    <div>
      <label>Assigned to</label>
      <select name="forms" id="forms">
        <option value="restaurant">Moments</option>
        <option value="restaurant">Pakistan</option>
        <option value="restaurant">Indian</option>
        <option value="restaurant">Arab</option>
      </select>
    </div>


    <div>
      <label>Start Date</label>
      <input type="date" id="date" name="date">
    </div>


    <div>
      <label>End Date</label>
      <input type="date" id="date" name="date">
    </div>

    <div>
      <label>Priority</label>
        <input type="radio" id="forms" name="High" value="High" />
        <label class="choices" for="radio">High</label>
        <input type="radio" id="forms" name="Average" value="Average" />
        <label class="choices" for="radio">Average</label>
        <input type="radio" id="visa" name="Low" value="Low" />
        <label class="choices" for="radio">Low</label>
    </div>

    <div>
      <label for="Description">Description</label>
      <textarea name="Description" id="Description" cols="34" rows="10"></textarea>
    </div>

    <div>
      <button id="submit">Submit</button>
      <button id="clear">Clear</button>
    </div>
  </form>
</body>

</html>