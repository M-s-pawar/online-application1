<?php
function clean($d) {
    return htmlspecialchars(trim($d));
}

$name = clean($_POST['name']);
$email = clean($_POST['email']);
$mobile = clean($_POST['mobile']);
$gender = clean($_POST['gender']);
$course = clean($_POST['course']);

$file = "data/users.json";

if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}

$users = json_decode(file_get_contents($file), true);

/* Check duplicate email */
foreach ($users as $u) {
    if ($u['email'] === $email) {
        showResult(false, "Application Already Exists",
            "This email is already registered.");
        exit;
    }
}

/* Save application */
$users[] = [
    "name"=>$name,
    "email"=>$email,
    "mobile"=>$mobile,
    "gender"=>$gender,
    "course"=>$course
];

file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

showResult(true, "Application Submitted Successfully");

function showResult($success, $title, $msg="") {
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="result-box">
    <h2><?= $title ?></h2>

    <?php if (!$success): ?>
        <p class="error"><?= $msg ?></p>
    <?php else: ?>
        <p>Your application has been successfully registered.</p>
    <?php endif; ?>

    <a href="index.html" class="back-btn">New Application</a>
</div>

</body>
</html>
<?php } ?>
