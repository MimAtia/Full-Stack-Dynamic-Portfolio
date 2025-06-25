<!DOCTYPE html>
<html>
<head>
  <title>Project Cards</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      padding: 20px;
    }
    .container {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    .card {
      background-color: white;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 200px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .card:hover {
      background-color: lightgray;
    }
    .card img {
      width: 100%;
      height: 100px;
      object-fit: cover;
    }
    .card h3 {
      margin: 10px 0 5px;
    }
    .card p {
      margin: 0;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="card" onclick="showInfo('Project 1', 'This is project 1')">
      <img src="https://via.placeholder.com/200x100" alt="Project 1">
      <h3>Project 1</h3>
      <p>This is project 1</p>
    </div>

    <div class="card" onclick="showInfo('Project 2', 'This is project 2')">
      <img src="https://via.placeholder.com/200x100" alt="Project 2">
      <h3>Project 2</h3>
      <p>This is project 2</p>
    </div>

    <div class="card" onclick="showInfo('Project 3', 'This is project 3')">
      <img src="https://via.placeholder.com/200x100" alt="Project 3">
      <h3>Project 3</h3>
      <p>This is project 3</p>
    </div>

    <div class="card" onclick="showInfo('Project 4', 'This is project 4')">
      <img src="https://via.placeholder.com/200x100" alt="Project 4">
      <h3>Project 4</h3>
      <p>This is project 4</p>
    </div>
  </div>

  <script>
    function showInfo(title, description) {
      alert(title + "\n" + description);
      event.currentTarget.style.backgroundColor = "#cceeff";
    }
  </script>

</body>
</html> 