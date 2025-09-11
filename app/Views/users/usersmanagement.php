<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="/PMSystem/public/Css/usersmanagement.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <div class="sidebar-header">
                Admin Dashborad
            </div>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#" class="active">Users</a></li>
                <li><a href="#">Records</a></li>
                <li><a href="#">Logutt</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Users</h1>
                <a href="/PMSystem/users/create" class="new-user-btn">+ New User</a>
            </div>
            <?php
            if (empty($users)) {
                echo "<p>No users found.</p>";
            } else {
                echo "<table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>";
                foreach ($users as $user) {
                    echo "<tr>
                            <td>" . htmlspecialchars($user['username']) . "</td>
                            <td>" . htmlspecialchars($user['role']) . "</td>
                            <td class='action-icons'>
                                <a href='#'><i class='fas fa-pencil-alt'></i></a>
                                <a href='#'><i class='fas fa-trash-alt'></i></a>
                            </td>
                          </tr>";
                }
                echo "</tbody>
                    </table>";
            }
            ?>
        </div>
    </div>
</body>
</html>
