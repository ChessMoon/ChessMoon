<?php
$contents = <<<EOT
هذا البريد الإلكتروني تم إرسالها مع 'تذكير كلمة المرور' الطلب.
<br>
<b><a href="{$CFG_SITE_URL}index.php?todo=rnwpass&ps={$pw}&e={$email}">يمكنك إعادة تعيين كلمة المرور الخاصة بك عن طريق النقر هنا.</a></b>
EOT;
