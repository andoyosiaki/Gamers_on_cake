<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('main.css') ?>
    <?= $this->Html->script('https://kit.fontawesome.com/c2064407e9.js') ?>
</head>
<body>
  <?= $this->element('my_header')  ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
