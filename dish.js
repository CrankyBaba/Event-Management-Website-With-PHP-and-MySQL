var img = [
"thai2.jpg",
"thai3.jpg",
"thai8.jpg",
"thai7.jpg",
"thai6.jpg",
"thai5.jpg",
"thai4.jpg",
"thai3.jpg",
"thai2.jpg",
"thai1.jpg"
];
var img2 = [
"chin2.jpg",
"chin3.jpg",
"chin4.jpg",
"chin5.jpg",
"chin6.jpg",
"chin7.jpg",
"chin8.jpg",
"chin9.jpg",
"chin10.jpg",
"chin1.jpg"
];
var img3 = [
"ni2.jpg",
"ni3.jpg",
"ni4.jpg",
"ni5.jpg",
"ni6.jpg",
"ni7.jpg",
"ni8.jpg",
"ni9.jpg",
"ni10.jpg",
"ni1.jpg"
];
var img4 = [
"si2.jpg",
"si3.jpg",
"si4.jpg",
"si5.jpg",
"si6.jpg",
"si7.jpg",
"si8.jpg",
"si1.jpg"
];
var img5 = [
"ben2.jpg",
"ben3.jpg",
"ben4.jpg",
"ben5.jpg",
"ben6.jpg",
"ben7.jpg",
"ben8.jpg",
"ben9.jpg",
"ben10.jpg",
"ben1.jpg"
];

setTimeout("changeimg()",2000);
var x=0;
function changeimg()
{
	document.getElementById("thai").src=img[x];
	document.getElementById("chin").src=img2[x];
	document.getElementById("northind").src=img3[x];
	document.getElementById("southind").src=img4[x];
	document.getElementById("ben").src=img5[x];
	x++;
	setTimeout("changeimg()",2000);
	if(x==10){
		x=0;
	}
}


function valid1()
{
		var count=0;
		var gustno=document.getElementById("guestno1").value;
		if(gustn="")
  		{
		  	alert("Select any dish pakage");
		  	count++;
	  	}
	  	else
		{
			/*alert(opti);*/
		  	count=count;
		}

	if(count>0)
 	{
  			return false;
  	}
  	else
  	{
  		return true;
  	}
}
function valid2()
{
		var count=0;
		var gstno=document.getElementById("guestno2").value;
		if(gstno=="")
  		{
		  	alert("Select any dish pakage");
		  	count++;
	  	}
	  	else
		{
			/*alert(opti);*/
		  	count=count;
		}

	if(count>0)
 	{
  			return false;
  	}
  	else
  	{
  		return true;
  	}
}
function valid3()
{
		var count=0;
		var gstno=document.getElementById("guestno3").value;
		if(gstno=="")
  		{
		  	alert("Select any dish pakage");
		  	count++;
	  	}
	  	else
		{
			/*alert(opti);*/
		  	count=count;
		}

	if(count>0)
 	{
  			return false;
  	}
  	else
  	{
  		return true;
  	}
}
function valid4()
{
		var count=0;
		var gstno=document.getElementById("guestno4").value;
		if(gstno=="")
  		{
		  	alert("Select any dish pakage");
		  	count++;
	  	}
	  	else
		{
			/*alert(opti);*/
		  	count=count;
		}

	if(count>0)
 	{
  			return false;
  	}
  	else
  	{
  		return true;
  	}
}

function valid5()
{
		var count=0;
		var gstno=document.getElementById("guestno5").value;
		if(gstno=="")
  		{
		  	alert("Select any dish pakage");
		  	count++;
	  	}
	  	else
		{
			/*alert(opti);*/
		  	count=count;
		}

	if(count>0)
 	{
  			return false;
  	}
  	else
  	{
  		return true;
  	}
}