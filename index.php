<?php include "includes/header.php";
 require __DIR__ . '/vendor/autoload.php';



$env = file_get_contents(__DIR__ . '/.env');
// $dotenv = Dotenv\Dotenv::createUnsafeUnsafeImmutable(__DIR__);
// $dotenv->load();
?>

<h2>Welcome to the Rugby Portal</h2>
<p>Use this portal to manage players, penalties, and discussions.</p>

<button type="button" class="btn btn-primary" onclick="window.location.href='/players'">Players</button>
<button type="button" class="btn btn-primary" onclick="window.location.href='/penalties'">Penalties</button>
<button type="button" class="btn btn-primary" onclick="window.location.href='/roles'">Roles</button>
<button type="button" class="btn btn-primary" onclick="window.location.href='/discussions'">Discussions</button>

<?php include "includes/footer.php"; ?>