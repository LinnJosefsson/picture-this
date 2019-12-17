<?php
// Front-end
declare(strict_types=1);

require __DIR__ . '/views/header.php';

?>

<section class="profile">
    <div class="profile__bio">
        <form action="/app/users/edit-profile.php" method="post">
            <div>
                <label for="first-name">First name: </label>
                <input type="text" name="first-name" value="<?php echo $_SESSION['user']['first_name']; ?>">
            </div>

            <div>
                <label for="last-name">Last name: </label>
                <input type="text" name="last-name" value="<?php echo $_SESSION['user']['last_name']; ?>">
            </div>

            <div>
                <label for="biography">Bio: </label>
                <input type="text" name="biography" value="<?php $_SESSION['user']['biography']; ?>">
            </div>

            <button type="submit">Save</button>
        </form>
    </div>
</section>