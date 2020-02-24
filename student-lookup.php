<?php

define("DB_DSN", "mysql:dbname=cdrennan_grc");
define("DB_USERNAME", "cdrennan_grcuser");
define("DB_PASSWORD", 't#,f3X2SnBQK');

try {
    $dbh = new PDO(DB_DSN, DB_USERNAME,DB_PASSWORD);
}
catch (PDOException $ex) {
    echo $ex->getMessage();
    return;
}

$sid = $_POST['sid'];

//1. Define the query
$sql = "SELECT * FROM student
                WHERE sid = :sid";

//2. prepare the statement
$statement = $dbh->prepare($sql);

//3. Bind the parameters
$statement->bindParam(":sid", $sid);



//4. Execute the statement
$statement->execute();

//5. Get the result
$result = $statement->fetch(PDO::FETCH_ASSOC);

if (empty($result)) {
    $out = "No match found.";
}
else {
    $out = "<p>SID: $sid</p>";
    $out .= "Name: {$result['first']} {$result['last']}<br>";
    $out .= "Birthdate: {$result['birthdate']}<br>";
    $out .= "GPA: {$result['gpa']}<br>";
}
echo $out;
