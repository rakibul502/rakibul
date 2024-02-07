
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="prod.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="number">Thirts</label>
            <input type="Text" id="email" name="shirts" />

            <label for="email">D_T:</label>
            <input type="TEXT" name="D_T" />

            <label for="number">new_p</label>
            <input type="number" id="email" name="new_p" />

            <label for="old_p">old_p:</label>
            <input type="Number" name="old_p" />

            <div class="form-group">
                <input class="form-control" type="file" name="img" value="" />
            </div>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>