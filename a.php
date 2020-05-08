<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $USER;
@unlink(__FILE__);
LocalRedirect("/bitrix/admin/");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>
