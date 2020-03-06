<html>
	<style>
		body{
			background-image: url("../img/background");
			background-size: 100% 100%;
		}
		.text{
			font-family:cursive;
			font-size: 30px;
			color:#FF4500;
		}
		#head{
			font-family:cursive;
			font-size: 60px;
			text-align:center;
			position:fixed;
			width: 100vw;
			color:#FF00FF;
		}
		#div1{
			border:2px solid;
			border-width: 5px;
			border-style: dotted;
			border-color: #696969;
			border-radius:25px;
			/*box-shadow: 10px 10px 5px #888888;*/
	
			background-color:rgba(0,255,255,0.6);
			position:fixed;
			top:100px;
			left:10%;
			width: 80%;
			height: 80%;
		}
		#mid{
			position: absolute;
			width: 80%;
			left:10%;
			float:left;
		}
		#ans{
			border:solid;
			border-width: 2px;
			border-color: #696969;
			border-radius:10px;
			/*position: absolute;*/
			/*top:1px;*/
			width: 100%;
			height: 500px;
			background-color: white;
		}
	</style>
	<body>
		<div id="head">二维码解码</div>
		<div id="div1">
			<div id="mid">
			<form action="" method="post" enctype="multipart/form-data" name="upload_form">
				<label>选择图片文件</label>
				<input name="imgfile" type="file" value="test" id="upload" onchange="document.getElementById('upp').click()">
				<input name="upload" type="submit" value="解码" hidden="hidden" id="upp" >
			</form>
			<div class="text">内容：</div>
			<div id="ans"></div>
			</div>
		</div>
		<script>
		    document.onkeydown = function (e) {//键盘按键控制
		        e = e || window.event;
		        if ((e.ctrlKey && e.keyCode == 82) || //ctrl+R
		            e.keyCode == 116) {//F5刷新，禁止
		            window.location="./deqrcode.php";
		            return false;
		        }
		    }
		</script>
	</body>
</html>