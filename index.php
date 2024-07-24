<?php include "includes/header.php";

$env = file_get_contents(__DIR__ . '/.env');
// $dotenv = Dotenv\Dotenv::createUnsafeUnsafeImmutable(__DIR__);
// $dotenv->load();
?>

<h2>Welcome to the Rugby Portal</h2>
<p>Use this portal to manage players, penalties, and discussions.</p>

<?php include "includes/footer.php"; ?>