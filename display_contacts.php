<?php

include "db.php";

$sql = "SELECT * FROM contacts ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

?>

<tr>

    <td><?php echo $row["id"]; ?></td>

    <td><?php echo htmlspecialchars($row["name"]); ?></td>

    <td><?php echo htmlspecialchars($row["email"]); ?></td>

    <td><?php echo htmlspecialchars($row["phone"]); ?></td>

    <td><?php echo htmlspecialchars($row["address"]); ?></td>

    <td>

        <a href="edit_contact.php?id=<?php echo $row['id']; ?>"
           class="edit-btn">
            Edit
        </a>

        <a href="delete_contact.php?id=<?php echo $row['id']; ?>"
           class="delete-btn"
           onclick="return confirmDelete()">
            Delete
        </a>

    </td>

</tr>

<?php

    }

} else {

?>

<tr>
    <td colspan="6">No contacts found.</td>
</tr>

<?php

}

mysqli_close($conn);

?>