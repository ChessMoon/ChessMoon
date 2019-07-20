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
		<p>	<b>ցանկանում եք միանալ {$CFG_SITE_NAME} ?</b></p>
    <br>
		<p>է {$CFG_SITE_NAME};</p>
		<ul>
		<li>դուք կարող եք խաղալ շախմատ և շախմատային տարբերակներ, </li>
		<li>ստեղծել իր թիմին և միանալ համաշխարհային լիգայի</li>
		<li>լուծել շախմատային խնդիրները եւ մրցել այլ խաղացողների,</lip>
		<li>կարող եք մասնակցելու է մրցաշարերի.</li>
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
