<?php
    $hoje = new DateTime('');
    $natal = new DateTime('2025-12-25');
    $intervalo = $hoje->diff($natal);
    Echo "Faltam " . $intervalo->days." dias para o Natal";
?>
