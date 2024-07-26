<?php
include '../includes/db.php';
include '../includes/header.php';

$func = new PlayerService($conn);
$db = new db($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $roles = $_POST['roles'];
    $db->Add($lastname, $firstname, $roles);
    header('Location: /players');
    exit;
}
?>

<h2>Add New Player</h2>
<form method="POST" action="">
    <label for="lastname">Lastname:</label>
    <input type="text" id="lastname" name="lastname" required>
    <br>
    <label for="firstname">Firstname:</label>
    <input type="text" id="firstname" name="firstname">
    <br>
    <label for="roles">Role:</label>
    <input type="text" id="roles" name="roles" required>
    <br>
    <button type="submit">Add Player</button>
</form>

<?php include '../includes/footer.php'; ?>