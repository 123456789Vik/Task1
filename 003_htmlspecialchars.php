<?php
//htmlspecialchars — Преобразует специальные символы в HTML-сущности
$new = htmlspecialchars("<a href='test'>Test</a>");
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

?>