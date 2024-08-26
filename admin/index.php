<?php
include '../includes/header.php';
include '../includes/db.php';

$func = new db();
$players_result = $func->GetAll('players');

?>

<h2>Admin Panel</h2>
<h3>Players</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Roles</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($players_result as $player) : ?>
        <tr>
            <td><?= $player['id'] ?></td>
            <td><?= $player['lastname'] ?></td>
            <td><?= $player['firstname'] ?></td>
            <td><?= $player['roles'] ?></td>
            <td>
                <a href="/admin/edit.php?id=<?= $player['id'] ?>">Edit</a>
                <a href="/admin/delete.php?id=<?= $player['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <h3>Assign Roles</h3>
    <form method="POST" action="">
        <label for="player">Player:</label>
        <select id="player" name="player_id">
            <?php while ($player = $this->players_result->fetch_assoc()) : ?>
                <option value="<?= $player['id'] ?>"><?= $player['name'] ?></option>
            <?php endwhile; ?>
        </select>
        </br>
        <label for="role">Role:</label>
        <input type="text" id="role" name="role">
        <br>
        <button type="submit">Assign Role</button>
    </form>


    <?php include '../includes/footer.php'; ?>