<?php // Allerts
if (!empty($_GET['del'])) { ?>
    <div class="alert alert-success">
        Stanza cancellata con successo.
    </div>
<?php } ?>
<!-- HOME MAIN CONTENT -->
<main class="rooms">
        <div class="container text-center">
            <header>
                <div class="title text-primary text-center">
                    <h1>HOTEL ROOMS</h1>
                </div>
            </header>
            <div class="d-inline-flex">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Number</th>
                            <th>Floor</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php // Loop DB records
                        if (!empty($rooms)) {
                            foreach ($rooms as $room) { ?>
                                <tr>
                                    <td><?php echo $room['id']; ?></td>
                                    <td><?php echo $room['room_number']; ?></td>
                                    <td><?php echo $room['floor']; ?></td>
                                    <td>
                                        <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">
                                            View
                                        </a>
                                    </td>
                                    <td>
                                        <a class="text-primary" href="./edit.php?id=<?php echo $room['id']; ?>">
                                            Update
                                        </a>
                                    </td>
                                    <td class="text-danger">
                                        <form action="./partials/delete/server.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $room['id']; ?>"> 
                                            <input class="btn btn-danger" type="submit" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
</main>