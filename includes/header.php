<?php $flash=take_flash(); ?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=e($title??'HackSelect')?></title><link rel="stylesheet" href="<?=e($base??'')?>assets/css/style.css"></head><body>
<header class="top"><a class="brand" href="<?=e($base??'')?>index.php">Hack<span>Select</span></a><nav><?= $nav??'' ?></nav></header>
<?php if($flash): ?><div class="flash <?=e($flash[0])?>"><?=e($flash[1])?></div><?php endif; ?><main class="wrap">
