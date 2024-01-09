<?php include("header.php"); ?>
<?php include("dbconnection.php"); ?>

<div class="box1">
    <h2>All students</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> ADD students
    </button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>last Name</th>
            <th>age</th>
            <th>update</th>
            <th>delete</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $query = "select * from `students`";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("query failed");
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                    <td>
                        <?php echo $row['first_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['last_name']; ?>
                    </td>
                    <td>,
                        <?php echo $row['age']; ?>
                    </td>
                    <td><a href="update_page1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">update</a></td>
                    <td><a href="delete_page.php?<?php echo $row['id']; ?>" class="btn btn-success">delete</a></td>
                </tr>

                <?php


            }
        }
        ?>


    </tbody>
</table>

<?php

if (isset($_GET['message'])) {
    echo "<h6>" . $_GET['message'] . "</h6>";
}
?>
<?php

if (isset($_GET['insert_msg'])) {
    echo "<h6>" . $_GET['insert_msg'] . "</h6>";
}
?>

<?php

if (isset($_GET['update_msg'])) {
    echo "<h6>" . $_GET['update_msg'] . "</h6>";
}
?>

<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">add students</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="f_name">first name</label>
                        <input type="text" name="f_name" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="l_name">last name</label>
                        <input type="text" name="l_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">age</age>
                            <input type="text" name="age" class="form-control">
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="add_students" value="ADD">
                    </div>
                </div>
            </div>
        </div>
</form>
<?php include("footer.php"); ?>