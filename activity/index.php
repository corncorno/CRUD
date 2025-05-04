<?php
include("read.php");
session_start();

$members = getMembers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <main>
        <section id="manage-users" class="admin-section">
            <form method="POST" action="create.php" class="admin-form">
                <h3>Create User</h3>
                <input type="text" name="name" placeholder="Name" required>
                <input type="number" name="age" placeholder="Age" required>
                <button type="submit" name="create" class="btn">Create</button>
            </form>
            <table class="admin-table" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $members->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td>
                            <form method="POST" action="update.php" class="inline-form" style="display:inline-block;">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
                                <input type="number" name="age" value="<?php echo $row['age']; ?>" required>
                                <button type="submit" name="update" class="btn">Update</button>
                            </form>
                            <form method="POST" action="delete.php" class="inline-form" style="display:inline-block;">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>