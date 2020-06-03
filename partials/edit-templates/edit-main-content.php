<!-- EDIT MAIN CONTENT-->
<main class="edit-room">
    <div class="container">
        <header>
            <div class="title text-primary text-center">
                <h1>EDIT ROOM</h1>
            </div>
        </header>
        <form action="./partials/update/server-update.php" method="POST">
            <div class="form-group">
                <label for="room_number">Room number</label>
                <input class="form-control" type="number" name="room_number" id="room_number" value="<?php echo $room['room_number']; ?>">
            </div>
            <div class="form-group">
                <label for="beds">Beds</label>
                <input class="form-control" type="number" name="beds" id="beds" value="<?php echo $room['beds']; ?>">
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input class="form-control" type="number" name="floor" id="floor" value="<?php echo $room['floor']; ?>">
            </div>
            <div class="form-group text-right">
                <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                <input class="btn btn-primary" type="submit" value="Save">
            </div>
        </form>
        <div class="text-right">
            <a class="btn btn-primary" href="<?php echo $base_path; ?>show.php?id=<?php echo $room['id']; ?>">
                Room Details
            </a>
        </div>
    </div>
</main>