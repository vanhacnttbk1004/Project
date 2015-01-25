<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h4>Hello template About!</h4>
    <?php echo $this->ho; ?>
    <?php echo $data['ho']; ?>
    <?php echo $data['title']; ?>
    <?php
        echo "<pre>";
        var_dump($data['account']);
        echo "</pre>";
    ?>

    <?php echo $this->ten;?>
</body>
</html>