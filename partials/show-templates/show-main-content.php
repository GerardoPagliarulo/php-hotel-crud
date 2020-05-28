<!-- SHOW MAIN CONTENT-->
<main class="rooms">
        <div class="container">
            <div class="d-flex justify-content-center flex-column">
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
                    </ul>
                </div>
                <a href="./">back to home</a>
        </div>
</main>
