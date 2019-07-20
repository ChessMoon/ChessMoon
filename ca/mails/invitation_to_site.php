<?php

$link_html = getMessagewoButton("
<a href=\"{$CFG_SITE_URL}index.php?todo=newuser&ref_id=$refid&ps={$ps}\">To register, please click here.</a>", "danger");

$contents = <<<EOT
<table  width="100%">
	<tr>
		<td valign="top">
		{$player->getAvatar()}
		</td>
		<td>
		<p>	<b>t'agradaria unir-te {$CFG_SITE_NAME} ?</b></p>
    <br>
		<p>En {$CFG_SITE_NAME};</p>
		<ul>
		<li>Vostè pot jugar a escacs i escacs variants, </li>
		<li>Configurar el seu propi equip i unir-se a la escacs lliga,</li>
		<li>Resoldre problemes d'escacs i competir amb altres jugadors,</lip>
		<li>Pot participar en tornejos.</li>
		</ul>
		{$recommendation_note}
		<br>
		<p><b>{$player->getName()}</b></p>
		<br>
		</td>
	</tr>
 	<tr>
		<td colspan= "2">
 		{$link_html}
		</td>
	 </tr>
</table>
EOT;
