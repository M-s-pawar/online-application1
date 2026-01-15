<?php
function clean($d) {
    return htmlspecialchars(trim($d));
}

$name = clean($_POST['name']);
$email = clean($_POST['email']);
$mobile = clean($_POST['mobile']);
$gender = clean($_POST['gender']);
$course = clean($_POST['course']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Review Application</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="result-box">
    <h2>Review Your Details</h2>

    <table width="100%">
        <tr><td><b>Name</b></td><td><?= $name ?></td></tr>
        <tr><td><b>Email</b></td><td><?= $email ?></td></tr>
        <tr><td><b>Mobile</b></td><td><?= $mobile ?></td></tr>
        <tr><td><b>Gender</b></td><td><?= $gender ?></td></tr>
        <tr><td><b>Course</b></td><td><?= $course ?></td></tr>
    </table>

    <!-- Hidden values passed to final page -->
    <form action="success.php" method="POST">
        <input type="hidden" name="name" value="<?= $name ?>">
        <input type="hidden" name="email" value="<?= $email ?>">
        <input type="hidden" name="mobile" value="<?= $mobile ?>">
        <input type="hidden" name="gender" value="<?= $gender ?>">
        <input type="hidden" name="course" value="<?= $course ?>">

        <button type="submit">Confirm & Submit</button>
        <a href="index.html" class="back-btn">Edit Details</a>
    </form>
</div>
</body>
</html>
