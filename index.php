<?php
namespace homework;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    <link href="css/normalize.css" rel="stylesheet">-->
<!--    <link href="css/style.css" rel="stylesheet">-->
</head>

<body>

<p>Hello, world!</p>

<?php
include("Classroom.php");
include("Student.php");
include("Lesson.php");
include("Teacher.php");
    $student = new Student(123, "Tiez","LastName" );
    $student->toString();
    $teacher = new Teacher("Ja", "ty");
?>
</body>

</html>
