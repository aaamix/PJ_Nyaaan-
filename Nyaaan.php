<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!-- BootstrapのCSS読み込み -->
   <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery読み込み 先にjQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>

    	<style>
		body {
			padding-top: 50px;
			background-color:#FFEAEC;
		}

		.starter-template {
			padding: 40px 15px;
			background-color: white;
		}
	</style>
  </head>
  <!--ここからbody-->
  <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project Nyaan</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#list">List</a></li>
					<li><a href="#table">Table</a></li>
					<li><a href="#form">Form</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
    		<div class="row">
			<div class="col-sm-12">
		<div class="starter-template">
			<h1>吾輩は猫である。</h1>
			<p class="lead">名前はまだない。</p>
			<img src="img\01.png" class="img-responsive center-block">
			<p>どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。
			</p>

			<h2 id="list">動物リスト</h2>
			<ul class="list-group">
				<li class="list-group-item">ねこ</li>
				<li class="list-group-item">いぬ</li>
				<li class="list-group-item">うさぎ</li>
			</ul>
        </div>
		</div>
        </div>　<!-- /.containerのdiv -->

    	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>猫様のお言葉</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<h2>その壱</h2>
				<p>吾輩はここで始めて人間というものを見た。
				しかもあとで聞くとそれは書生という人間中で一番獰悪どうあくな種族であったそうだ。
				この書生というのは時々我々を捕つかまえて煮にて食うという話である。<br>しかしその当時は何という考もなかったから
				別段恐しいとも思わなかった。<br>
				ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。</p>
			</div>
			<div class="col-sm-4">
				<h2>その弐</h2>
				<p>掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。
				この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで
				薬缶やかんだ。その後ご猫にもだいぶ逢あったがこんな片輪かたわには一度も出会でくわした事がない。
				のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙けむりを吹く。
				どうも咽むせぽくて実に弱った。これが人間の飲む煙草たばこというものである事はようやくこの頃知った。</p>
			</div>
			<div class="col-sm-4">
				<h2>その参</h2>
				<p>掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。
				この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで
				薬缶やかんだ。その後ご猫にもだいぶ逢あったがこんな片輪かたわには一度も出会でくわした事がない。
				のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙けむりを吹く。
				どうも咽むせぽくて実に弱った。これが人間の飲む煙草たばこというものである事はようやくこの頃知った。</p>
			</div>
		</div>
        </div>　<!-- /.containerのdiv -->


        <div class="container">
         <table class="table" id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>名前</th>
                <th>職業</th>
                <th>好きな動物</th>
            </tr>
        </thead>
        <tbody>
		<h2>飼い主になってほしいランキング</h2>
            <tr>
                <td scope="row">1</td>
                <td>a子さん</td>
                <td>ITエンジニア</td>
                <td>犬</td>
            </tr>
            <tr>
                <td scope="row">2</td>
                <td>B子さん</td>
                <td>女子高生</td>
                <td>猫</td>
            </tr>
            <tr>
                <td scope="row">3</td>
                <td> C太郎さん</td>
                <td>女子高生</td>
                <td>ハムスター</td>
            </tr>
        </tbody>
    </table>
	</div>　<!-- /.containerのdiv -->


<div class="container">
<!--<div id="main">-->
			<?php
			// データベースに接続する
			$pdo = new PDO("mysql:host=127.0.0.1;dbname=lesson;charset=utf8", "root", "");
			// print_r($_POST);

			// 受け取ったidのレコードの削除
			if (isset($_POST["delete_id"])) {
				$delete_id = $_POST["delete_id"];
				$sql  = "DELETE FROM bbs WHERE id = :delete_id;";
				$stmt = $pdo->prepare($sql);
				$stmt -> bindValue(":delete_id", $delete_id, PDO::PARAM_INT);
				$stmt -> execute();
			}

			// 受け取ったデータを書き込む
			if (isset($_POST["content"]) && isset($_POST["user_name"])) {
				$content   = $_POST["content"];
				$user_name = $_POST["user_name"];
				$sql  = "INSERT INTO bbs (content, user_name, updated_at) VALUES (:content, :user_name, NOW());";
				$stmt = $pdo->prepare($sql);
				$stmt -> bindValue(":content", $content, PDO::PARAM_STR);
				$stmt -> bindValue(":user_name", $user_name, PDO::PARAM_STR);
				$stmt -> execute();
			} ?>

    <form action="Nyaaan.php" method="post">
    <div class="form-group">
    <label for="control-label">投稿者</label>
    <input type="text" class="form-control" name="user_name">
    </div>
     <div class="form-group"><br><br>
	<label for="control-labele">メッセージ</label>
	<textarea name="content" id="content" rows="3" class="form-control"></textarea><br>
	<button type="submit">送信する</button>
     </div>
    </form>

  <!--  <form action="#" method="post">
	<div class="form-group"><br><br>
		<select class="form-control" name="select" id="select">
			<option>タマ</option>
			<option>ミケ</option>
			<option>トラ</option>
		</select>
	</div>
</form>-->
<h2>発言リスト</h2>
			<?php
			// データベースからデータを取得する
			$sql = "SELECT * FROM bbs ORDER BY updated_at;";
			$stmt = $pdo->prepare($sql);
			$stmt -> execute();
			?>
			<table class="table table-bordered" style="background-color: white">
				<tr>
					<th>id</th>
					<th>日時</th>
					<th>投稿内容</th>
					<th>投稿者</th>
					<th></th>
				</tr>
				<?php
				// 取得したデータを表示する
				while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) { ?>
					<tr>
						<td><?= $row["id"] ?></td>
						<td><?= $row["updated_at"] ?></td>
						<td><?= $row["content"] ?></td>
						<td><?= $row["user_name"] ?></td>
						<td>
							<form action="bbs.php" method="post">
								<input type="hidden" name="delete_id" value=<?= $row["id"] ?>>
								<button class="btn btn-danger" type="submit">削除</button>
							</form>
						</td>
					</tr>
				<?php } ?>
			</table>
</div>　<!-- /.containerのdiv -->
	
  </body>
</html>
