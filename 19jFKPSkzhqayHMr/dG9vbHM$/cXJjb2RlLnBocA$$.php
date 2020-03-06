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
	#return{
		position: absolute;
		right: 5%;
		bottom: 5%;
	}
	.button{
		margin-left: 3vw;
	    border: none;
	    transition-duration: 0.4s;
		border-radius:15px;
		height: 50px;
		width: 100px;
		background-color:#00FF00;
    	cursor: pointer;
    	color:white;
    	font-size: 30px;
	}
	.button:hover{
		background-color:#228B22;
	}
	#ldiv{
		position: absolute;
		top:8%;
		left:1.5%;
		float:left;
		width: 50%;
		/*height: 50vw;*/
	}
	#rdiv{
		position: absolute;
		top:10%;
		right:0;
		float:right;
		height:50%;
		width:50%;
	}
	#img{
		height: 30vw;
		width: 30vw;
	}
	#textarea_text{
		resize:vertical;
	    outline-style: none ;
	    border: 1px solid #ccc; 
	    border-radius: 3px;
	    padding: 13px 14px;
	    /*width: 100%;*/
	    font-size: 14px;
	    font-weight: 700;
	    font-family: "Microsoft soft";
	    
	}
	#input_size{
	    outline-style: none ;
	    border: 1px solid #ccc; 
	    border-radius: 3px;
	    padding: 13px 14px;
	    width: 100%;
	    font-size: 14px;
	    font-weight: 700;
	    font-family: "Microsoft soft";
	}
	#input_size:focus{
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
	}
	</style>

<div id="head">二维码生成</div>
<div id="div1">
	<div id="ldiv">
		<div class="text">内容：</div>
		<textarea id="textarea_text" oninput="qrcode()" style="width:40vw;height:23vw">Oblivion</textarea>
		<font color="red" id="remind"></font>
		<div class="text">二维码大小：</div>
		<input type="number" id="input_size" value="400" oninput="qrcode()"></input>
		<font color="red" id="remind2"></font>
	</div>
	<center>
	<div id="rdiv">
		<img src="https://cdn.jsdelivr.net/gh/urlib/furry-computing-machine/9zCHYJ7VG0s645bm/Oblivion.400.cached.png" id="img"><br>
		<!--<button type="button" onclick="qrcode()" class="button">生成</button>-->
		<a id="download" download=""></a>
		<button type="button" onclick="download()" class="button">下载</button>
		<button type="button" onclick="javascrtpt:window.location.href='../tools.php'" class="button">返回</button>
	</div></center>
</div>


<script>
function qrcode(){
	var text=document.getElementById('textarea_text').value;
	var size=document.getElementById('input_size').value;
	if(text=="") document.getElementById('remind').innerHTML="请输入二维码的内容！";
	else {
		document.getElementById('remind').innerHTML="";
		if(size<20) document.getElementById('remind2').innerHTML="二维码太小了！";
		else if(size>10000) document.getElementById('remind2').innerHTML="二维码太大了！";
		else {
			document.getElementById('remind2').innerHTML="";
			document.getElementById('img').src="./qrcode.php?text="+text+"&size="+size;
		}
	}
}
function download(){
	var text=document.getElementById('textarea_text').value;
	var size=document.getElementById('input_size').value;
	document.getElementById('download').href="./qrcode.php?text="+text+"&size="+size;
	document.getElementById('download').click();
	// window.open("./qrcode.php?text="+text+"&size="+size);
	
}
</script>




</body>
</html>
    	