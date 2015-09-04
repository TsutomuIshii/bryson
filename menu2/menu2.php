<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>メールフォーム</title>
<style type="text/css"><!--
body   {background-color:#ffffcc;
}
.title {color:#339966;
        text-align:center;
}
.que   {color:#ffffff;
        background-color:#339966;

}
.ans   {color:#000000;
        background-color:#ccff99;
}
--></style>

<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script type="text/javascript"><!--
function Nul_Check(){

    if(document.mail_form.name.value==""){
        alert("名前を入力して下さい");
        return false;
    }

    if(document.mail_form.address.value==""){
        alert("メールアドレスを入力して下さい");
        return false;
    }

    if(window.confirm('メールを送信します。\nよろしいですか？')){

	// AjaxでPHPを呼び出す
	$.ajax({
		type: 'POST',
		url: './success_mail.php', // 実行するPHPの相対パス
		cache: false,
		data: '111', // PHPに渡すデータ。↑で定義。PHPでは$_POST['sender_name']のように、通常フォーム送信された時と同じように値が取得できる。
		success: function(html) {
	alert('送信しました。');
			// 特にエラーが無くPHPが実行された後に実行する処理
			// jQueryなどが記述可能
			// 引数の html は予約語（決められた名前）で、実行したPHPのecho命令（複数可）などで出力された内容が格納されている。
		},
		error: function() {
	alert('送信が失敗しました。');
			// エラーが返ってきた場合の処理
		}
	});
    }





    return true;
}
// -->
</script>

</head>
<body>


<h1 class="title">メール送信</h1>

<form method="post" action="http://xxx.xxx.xxx/xxx/xxx.cgi" name="mail_form" onSubmit="javascript:return Nul_Check()">
<input type="hidden" name="xxxxx" value="xxxx@xxx.xx.xx">
<input type="hidden" name="xxxxx" value="メール送信フォーム">
<input type="hidden" name="xxxxx" value="http://www.xxx.xx.xxx/~xxx/">

<table cellspacing="3" cellpadding="10" border="0" align="center">

<tr>
<td width="220" class="que">■お名前</td>
<td width="380" class="ans"><input type="text" name="name" size="40"></td>
</tr>

<tr>
<td class="que">■メールアドレス</td>
<td class="ans"><input type="text" name="address" size="40"></td>
</tr>

<tr>
<td class="que">■性別</td>
<td class="ans">
<input type="radio" name="sex" value="male">男性
<input type="radio" name="sex" value="female">女性
</td>
</tr>

<tr>
<td class="que">■どこからアクセスしていますか</td>
<td class="ans">
<select name="area">
<option value="">--- 選択してください ---</option>
<option value="myhome">自宅</option>
<option value="office">会社</option>
<option value="mobile">モバイル</option>
</select>
</td>
</tr>

<tr>
<td class="que">■このページの評価は</td>
<td class="ans">
<input type="radio" name="rate" value="good">良い
<input type="radio" name="rate" value="normal">ふつう
<input type="radio" name="rate" value="bad">悪い
</td>
</tr>

<tr>
<td class="que">■良かった点を教えてください</td>
<td class="ans">
<input type="checkbox" name="fine" value="design">デザイン
<input type="checkbox" name="fine" value="illust">イラスト
<input type="checkbox" name="fine" value="photo">写真
<input type="checkbox" name="fine" value="diary">日記
</td>
</tr>

<tr>
<td class="que">■一言だけメッセージを</td>
<td class="ans">
<textarea name="message" cols="50" rows="10"></textarea>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="button" value=" 送信 " onClick="javascript:return Nul_Check();">
<input type="reset"  value=" 消去 ">
</td>
</tr>



</table>
</form>
<p align="center"><a href="../index.html">戻る</a></p>
</body>
</html>
