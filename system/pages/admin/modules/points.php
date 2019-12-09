<?php
if ($db->hasColumn('accounts', 'premium_points')) {
	$points = $db->query('SELECT `premium_points`, `' . (USE_ACCOUNT_NAME ? 'name' : 'id') . '` as `name` FROM `accounts` ORDER BY `premium_points` DESC LIMIT 10;');
} else {
	$points = 0;
}

// $twig->display('points.html.twig', array(
// 	'points' => $points,
// ));
?>
<div style="text-align:center">
    <h1>Donate - OverOt Server</h1>
    <h3>
        Estamos aceitando apenas transferencia bancaria no momento.
    </h3>
</div>

<ul>
    <h2>Dados:</h2>
    <li><b>Banco:</b> NuBank</li>
    <li><b>Agencia:</b> 0001</li>
    <li><b>C/C:</b> 24234677-9</li>
    <li><b>Nome:</b> Andre Felipe Santos Cruz</li>
    <li><b>CPF:</b> 405.336.638.06</li>
</ul>

<h3>Após concluir sua transferencia, encaminhe o comprovante para o email: <a href="mailto:overot@gmail.com">overot@gmail.com</a></h3>