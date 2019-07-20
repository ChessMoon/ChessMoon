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
		<p>	<b>هل ترغب في الانضمام إلى {$CFG_SITE_NAME} ?</b></p>
    <br>
		<p>في {$CFG_SITE_NAME};</p>
		<ul>
		<li>يمكنك أن تلعب الشطرنج الشطرنج المتغيرات ، </li>
		<li>إنشاء فريق الخاصة بك والانضمام إلى لعبة الشطرنج الدوري ،</li>
		<li>حل مشكلة الشطرنج والتنافس مع لاعبين آخرين ،</lip>
		<li>من المشاركة في البطولات.</li>
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
