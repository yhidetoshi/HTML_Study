//登録フォームにデータが入力されていれば下記を実行される
if(!empty($_POST)){
	//sprintfに実行するSQL文を記述する
	$sql = sprintf('INSERT INTO members SET name="%s", email="%s", password="%s", picture="%s", created="%s"',
		mysql_real_escape_string($_SESSION['join']['name']),
		mysql_real_escape_string($_SESSION['join']['email']),
		mysql_real_escape_string(sha1($_SESSION['join']['password'])),
		mysql_real_escape_string($_SESSION['join']['image']),
		date('Y-m-d H:i:s')
		);
		mysql_query($sql) or die(mysql_error());
		unset($_SESSION['join']);
		header('Location: thanks.php');
		exit();
}

mysql_real_escape_string
//SQL 文中で用いる文字列の特殊文字をエスケープする

$record = mysql_query($sql)
// mysql_query — MySQL クエリを送信する
// $recordに$sqlの結果のレコードを格納する

if($table = mysql_fetch_assoc($record))
  header('Location: index.php')
// mysql_fetch_assoc — "連想配列"として結果の行を取得する
// if文は$tableに連想配列の結果が格納されていればtureになり、ログイン成功としてindex.phpに移動する
