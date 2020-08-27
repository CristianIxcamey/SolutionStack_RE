<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review A lot</title>
</head>

<body>
    <?php
    $userId = "newUser123";
    $movieid = "newMovie123";
    $movieName = "Kong";

    ?>

    <form name="form" action="../Back-end/create_review_post.php" method="post">
        <input type="text" name="rating" placeholder="Rating">
        <input type="text" name="reviewMessage" placeholder="Review Message">
        <input type='hidden' name='userId' value='<?php echo "$userId"; ?>' />
        <input type='hidden' name='movieid' value='<?php echo "$movieid"; ?>' />
        <input type='hidden' name='movieName' value='<?php echo "$movieName"; ?>' />
        <input type="submit" name="submit" value="Create Review" />
    </form>

</body>

</html>