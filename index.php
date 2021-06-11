<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos nulla?
        </aside>
        <main>
            <div class="attracties">

                <div class="attractie">
                    <div class="foto">
                        <img src="" alt="">
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, quibusdam libero. Minima, temporibus cupiditate enim impedit necessitatibus dolor, illo numquam, sint quae rerum eum veritatis quo fugiat ducimus quod reiciendis.</p>
                </div>

                <div class="attractie fastpass">
                    <div class="foto">
                        <img src="" alt="">
                    </div>
                    <div class="informatie">
                        <p>ADVENTURELAND</p>
                        <p><b>Speedy XL</b></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="fastticket">
                        <p>deze attractie is alleen maar te bezoeken met een fastpass.</p>
                        <p>boek nu en sla de wachtrij over</p>
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>

</html>
