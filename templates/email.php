<?php
/**
 * @var array $winner
 */
?>
<h1>Поздравляем с победой</h1>
<p>Здравствуйте, <?= $winner['user_name']?></p>
<p>Ваша ставка для лота <a href="<?= 'lot.php?id=' . $winner['lot_id'] ;?>"><?= $winner['title'] ;?></a> победила.</p>
<p>Перейдите по ссылке <a href="/my-bets.php">мои ставки</a>,
    чтобы связаться с автором объявления</p>
<small>Интернет-Аукцион "YetiCave"</small>
