
<!-- <section>
	<div class="card-header">
		<input type="text" id="userMail" class="form-control" name="" placeholder="Email">
	</div>
	<div class="card-header">
		<input type="text" id="sub" class="form-control" name="" placeholder="Subject">
	</div>
	<div class="card-header">
		<textarea class="form-control" id="message" rows='5' placeholder="Message"></textarea>
	</div>
	<div class="card-header">
		<button class="btn btn-info" onclick="mailfunction()">Send</button>
	</div>
</section>

<script type="text/javascript">
	function mailfunction(){
		var sub=document.getElementById("sub").value;
		var mail=document.getElementById("userMail").value;
		var msg=document.getElementById("message").value;
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(xhttp.readyState==4 && xhttp.status==200){
				console.log(this.response);
			}
		};
		xhttp.open("POST", "send-mail", true);
		xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp.send("subject="+sub+"&email="+mail+"&message="+msg);
	}
</script> -->




<div>
	<input type="file" name="file" id="file" onchange="fileUpload()">
</div>

<script type="text/javascript">
	function fileUpload(){
		var data = new FormData();
		var image = document.querySelector('#file').files[0];
		data.append('file',image);
		var fileUp = new XMLHttpRequest;
    fileUp.onreadystatechange = function () {
      if(this.readyState == 4 && this.status == 200) {
        console.log(this.response);
      }
    };
    fileUp.open( 'POST', 'file-upload', true);
    fileUp.send( data );
	}
</script>