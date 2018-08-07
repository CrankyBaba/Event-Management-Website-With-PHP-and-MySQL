var img = [
"myrah2.jpg",
"myrah3.jpg",
"myrah4.jpg",
"myrah5.jpg",
"myrah1.jpg"
];
var img2 = [
"longia5.jpg",
"longia2.jpg",
"longia3.jpg",
"longia4.jpg",
"longia1.jpg"
];
var pic = [
"khushali2.jpg",
"khushali3.jpg",
"khushali4.jpg",
"khushali5.jpg",
"khushali1.jpg"
];
var img3 = [
"filigree2.jpg",
"filigree3.jpg",
"filigree4.jpg",
"filigree5.jpg",
"filigree1.jpg"
];
setTimeout("changeimg()",3000);
var x=0;
function changeimg()
{
	document.getElementById("myrahimg").src=img[x];
	document.getElementById("longimg").src=img2[x];
	document.getElementById("khuimg").src=pic[x];
	document.getElementById("filigreeimg").src=img3[x];
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
		var opti=document.getElementById("opt2").value;
		if(opti==0)
  		{
		  	alert("Select number of days for booking");
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
		var opti=document.getElementById("opt3").value;
		if(opti==0)
  		{
		  	alert("Select number of days for booking");
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
		var opti=document.getElementById("opt4").value;
		if(opti==0)
  		{
		  	alert("Select number of days for booking");
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