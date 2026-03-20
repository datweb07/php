<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main-layout</title>
</head>

<body>
    <?php

    $this->renderView('parts/header');

    ?>

    <?php

    $this->renderView('parts/sidebar');

    ?>

    <?php

    echo $content;

    ?>

    <?php

    $this->renderView('parts/footer');

    ?>
</body>

</html>