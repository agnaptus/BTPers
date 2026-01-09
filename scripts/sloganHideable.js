
	window.onscroll = function() {myFunction()};

	var header = document.getElementById("myHeader");
	var sticky = header.offsetTop;

	function myFunction() 
	{
	  if (window.pageYOffset > sticky) 
	  {
		header.classList.add("sticky");
	  } 
	  else 
	  {
		header.classList.remove("sticky");
	  }
	}

	function myFunction() 
	{
	  let x = null;
	  if (document.documentElement.scrollTop > 10)
	  {
		document.getElementById("myP").innerHTML = "";
	  }
	  else
	  {
		document.getElementById("myP").innerHTML = "<center> Breakthrough  Perspectives<br><a class=\"pixText2\">Your Source for Insight</center></div>";
	  }
	  
    }
