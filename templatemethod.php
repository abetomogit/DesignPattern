<?php
include './TemplateMethod/AbstractClass.php';
include './TemplateMethod/ConcreteClassUl.php';
include './TemplateMethod/ConcreteClassDl.php';

// 表示用文字の作成
$ul_str = "今週の天気";
$dl_str = array("2013-05-09" => "晴れ", "2013-05-10" => "曇り", "2013-05-11" => "雨");

// インスタンス作成
$ul = new ConcreteClassUl($ul_str);
$dl = new ConcreteClassDl($dl_str);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>TemplateMethod</title>
</head>
<body>
<!-- 表示 -->
<?php $ul->displayTag(); ?>
<?php $dl->displayTag(); ?>
<!-- /表示 -->
</body>
</html>