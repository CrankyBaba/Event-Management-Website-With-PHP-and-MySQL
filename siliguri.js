var img = [
"cinderella3.jpg",
"cinderella4.jpg",
"cinderella5.jpg",
"cinderella2.jpg",
"cinderella1.jpg"
];
var img2 = [
"forresta2.jpg",
"forresta3.jpg",
"forresta4.jpg",
"forresta5.jpg",
"forresta1.jpg"
];
var img3 = [
"raajdarbar2.jpg",
"raajdarbar3.jpg",
"raajdarbar4.jpg",
"raajdarbar5.jpg",
"raajdarbar1.jpg"
];
var img4 = [
"mount2.jpg",
"mount3.jpg",
"mount4.jpg",
"mount5.jpg",
"mount1.jpg"
];
var img5 = [
"sevoke2.jpg",
"sevoke3.jpg",
"sevoke4.jpg",
"sevoke5.jpg",
"sevoke1.jpg"
];
setTimeout("changeimg()",3000);
var x=0;
function changeimg()
{
	document.getElementById("cinimg").src=img[x];
	document.getElementById("forrestaimg").src=img2[x];
	document.getElementById("rajimg").src=img3[x];
	document.getElementById("mountimg").src=img4[x];
	document.getElementById("sevokeimg").src=img5[x];
	x++;
	setTimeout("changeimg()",3000);
	if(x==4){
		x=0;
	}
}


function valid1()
{
		var count=0;
		var opti=document.getElementById("opt1").value;
		if(opti==0)
  		{
		  	alert("Select number of days for booking");
		  	count++;
	  	}
	  	else
		{
			// alert(opti);
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
		var opti=document.getElementById("opt2").value;
		if(opti==0)
  		{
		  	alert("Select number of days for booking");
		  	count++;
	  	}
	  	else
		{
			// alert(opti);
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
		var opti=document.getElementById("opt3").value;
		if(opti==0)
  		{
		  	alert("Select number of days for booking");
		  	count++;
	  	}
	  	else
		{
			// alert(opti);
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
		var opti=document.getElementById("opt4").value;
		if(opti==0)
  		{
		  	alert("Select number of days for booking");
		  	count++;
	  	}
	  	else
		{
			// alert(opti);
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