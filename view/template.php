<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeterie en gros - <?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/style.css">



</head>
<body>
    <?php if(isset($msg)) :?>
        <div class="msg <?= $msg['code'] ?>">
            <?= $msg['txt'] ?>
        </div>
    <?php endif ?>
    <header>
        <h1>Papeterie en gros - <?= $title ?></h1>
    </header>
    <main>
        <?= $content ?>
    </main>
</body>
</html>