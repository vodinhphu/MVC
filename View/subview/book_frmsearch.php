<form action="http://localhost/MVC3/index.php" method="get">
	<input type="hidden" name="controller" value="book">
	<input type="hidden" name="action" value="search">
	<input type="text" name="key">
	<input type="submit" name="search" value="Tìm kiếm" >
</form>
<form action="http://localhost/MVC3/index.php?controller=book&action=search2" method="post">
	<input type="text" name="key">
	<input type="submit" name="search" value="Tìm kiếm">
</form>
<input type="text" name="" id="key" onkeyup="f()">
<div id="kq"></div>


<!-- <script type="text/javascript">
		var x = new XMLHttpRequest();
		/**
		 * thuoc tinh:readyState (0,1,2,3,4). status: ma loi. 200:ok,404:.., responseText: data server tra ve (text)
		 * phuong thuc:open- ket noi toi server. send: gui data len server
		 * su kien:onreadystatechange
		 * 
		 */
		function F()
		{
		n = document.getElementById("key").value;
		//if x ranh roi
		if (x.readyState==0 || x.readyState==4)
		{
			x.open("GET", "index.php?controller=book&action=search3&n="+ n, true);
			x.onreadystatechange=function(){
				if (x.readyState==4)//tra ve roi
				{
					if (x.status==200)//ok
					{
						document.getElementById('kq').innerHTML =x.responseText;
					}
				}
			}
			x.send(null);
		}
	}
</script> -->
<script type="text/javascript">
	var x = new XMLHttpRequest();
	function f()
	{
		key = document.getElementById("key").value;
		if (x.readyState==0 || x.readyState==4) 
		{
			x.open("GET", "index.php?controller=Book&action=search3&n="+key,true);
			x.onreadystatechange = function()
			{
				if (x.readyState==4) 
				{
					if (x.status==200) 
					{
						document.getElementById('kq').innerHTML = x.responseText;
					}
				}
			}
			x.send();
		}
	}
</script>