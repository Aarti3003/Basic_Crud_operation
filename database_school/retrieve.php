<html>
<head>
  <style>
    td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
<h1>Student Table</h1>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "school";

$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_error){
  die("connection failed");
}

$students_query = "select * from students;";
$students_result = $conn->query($students_query);
// echo "<h1>Student Table</h1>";
echo "<table>";

while($row = $result->fetch_assoc()){
  echo "<tr>";
//   echo "<td>".$row["id"]."</td>";
  echo "<td>".$row["name"]."</td>";
  echo "<td>".$row["address"]."</td>";
  echo "</tr>";
}
echo "</table>";

echo '    
  <a href="addStudent.php">
    <button>
      add student
    </button>
  </a>
';
echo '<a href="index.php">
      <button>
        Back to Home
      </button>
    </a>
';
$conn->close();

?>
</body>
</html>