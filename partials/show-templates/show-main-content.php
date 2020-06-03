<!-- SHOW MAIN CONTENT-->
<main class="show-room">
    <div class="container">
        <header>
            <div class="title text-primary text-center">
                <h1>DETAILS ROOM <?php echo $room['room_number']; ?></h1>
            </div>
        </header>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    ID:<?php echo $room['id']; ?>
                </li>
                <li class="list-group-item">
                    Room number:<?php echo $room['room_number']; ?>
                </li>
                <li class="list-group-item">
                    Beds:<?php echo $room['beds']; ?>
                </li>
                <li class="list-group-item">
                    Floor:<?php echo $room['floor']; ?>
                </li>
                <li class="list-group-item">
                    Created:<?php echo $room['created_at']; ?>
                </li>
                <li class="list-group-item">
                    Updated:<?php echo $room['updated_at']; ?>
                </li>
            </ul>
        </div>
        <a class="btn btn-primary mt-5" href="<?php echo $base_path; ?>edit.php?id=<?php echo $room['id']; ?>">
            Update
        </a>
    </div>
</main>
