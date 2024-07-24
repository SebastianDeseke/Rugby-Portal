<?php 
include '../includes/db.php';
include '../includes/header.php';

$func = new PlayerService($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $role = $_POST['role'];


}
?>

<h2>Add New Player</h2>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="role">Role:</label>
    <input type="text" id="role" name="role" required>
    <br>
    <button type="submit">Add Player</button>
</form>

<?php include '../includes/footer.php'; ?>