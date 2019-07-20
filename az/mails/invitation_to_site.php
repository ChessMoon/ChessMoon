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
		<p>	<b>siz qoşulmaq istəyirəm {$CFG_SITE_NAME} ?</b></p>
    <br>
		<p>bu {$CFG_SITE_NAME};</p>
		<ul>
		<li>bilərsiniz şahmat oynamaq və şahmat variantları </li>
		<li>yaratmışıq, öz komandasına qoşulmaq şahmat liqası,</li>
		<li>həll şahmat vəzifələri və rəqabət digər oyunçular ilə</lip>
		<li>iştirak edə bilər turnirlərdə.</li>
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
