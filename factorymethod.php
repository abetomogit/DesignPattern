<?php
include './FactoryMethod/ProductClass.php';
include './FactoryMethod/CreatorClass.php';
include './FactoryMethod/product_01/ConcreteCreator1.php';
include './FactoryMethod/product_01/ConcreteProduct1.php';
include './FactoryMethod/product_02/ConcreteCreator2.php';
include './FactoryMethod/product_02/ConcreteProduct2.php';

// ファクトリー（クリエイター）インスタンスを作成
$creator1 = new ConcreteCreator1();
$creator2 = new ConcreteCreator2();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>FactoryMethod</title>
</head>
<body>
<!-- 表示 -->
<?php
// プロダクトのインスタンスを作成し$product1に格納
$product1 = $creator1->create("名無し"); echo "<br>";
// プロダクトインスタンスのuseProductを呼出
$product1->useProduct(); echo "<br>";

// プロダクトのインスタンスを作成し$product2に格納
$product2 = $creator2->create("名無し"); echo "<br>";
// プロダクトインスタンスのuseProductを呼出
$product2->useProduct(); echo "<br>";
// ファイトリーインスタンスの所持者を取得
// echo "ConcreteCreatorのメンバ変数[names]：".$creator->getNames(); echo "<br>";
// プロダクトインスタンスの所持者を取得
// echo "ConcreteProductのメンバ変数[name]：".$product1->getName();
?>
<!-- /表示 -->
</body>
</html>