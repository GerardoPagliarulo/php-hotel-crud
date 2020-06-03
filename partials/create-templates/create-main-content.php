<!-- CREATE MAIN CONTENT-->
<main class="create-room">
    <div class="container">
        <header>
            <div class="title text-primary text-center">
                <h1>CREATE ROOM</h1>
            </div>
        </header>
        <form action="./partials/create/server.php" method="POST">
            <div class="form-group">
                <label for="room_number">Room number</label>
                <input class="form-control" type="number" name="room_number" id="room_number" placeholder="Insert room number">
            </div>
            <div class="form-group">
                <label for="beds">Beds</label>
                <input class="form-control" type="number" name="beds" id="beds" placeholder="Insert beds number">
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input class="form-control" type="number" name="floor" id="floor" placeholder="Insert floor">
            </div>
            <div class="form-group text-right">
                <input class="btn btn-primary" type="submit" value="Create">
            </div>
        </form>
    </div>
</main>