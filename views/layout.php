<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Mi sitio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a href="" class="navbar-brand h1">
            FW
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>
        </ul>
    </div>

    </nav>

    <div class="container">
        <div class="row">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>