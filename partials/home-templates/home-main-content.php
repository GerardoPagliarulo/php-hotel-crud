<!-- HOME MAIN CONTENT -->
<main class="rooms">
        <div class="container text-center">
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
                        if (! empty($rooms)) {
                            foreach ($rooms as $room) { ?>
                                <tr>
                                    <td><?php echo $room['id']; ?></td>
                                    <td><?php echo $room['room_number']; ?></td>
                                    <td><?php echo $room['floor']; ?></td>
                                    <td>
                                        <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">View</a>
                                    </td>
                                    <td>
                                        <a class="text-primary" href="">Update</a>
                                    </td>
                                    <td>
                                        <a class="text-danger" href="">Delete</a>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
</main>