<style>
	a.hover-underline-animation {
  display: inline;
  position: relative;
  color: red;
}

.hover-underline-animation:after{
	content: '';
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: black;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
	
	}

.hover-underline-animation:hover:after {
  transform: scaleX(0.95);
  transform-origin: bottom left;
}

	}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width : 25%;
    background-color : #f1f1f1;
    height : 100%; /* Full height */
    position : fixed; /* Make it stick, even on scroll */
    overflow: auto; /* Enable scrolling if the sidenav has too much content */
}

li {
    display: inline;
}
	
li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #CCCCCC;
    color: white;
}
</style>
<div align="center" id="banner">
<img src="banner.gif" width="960" height="160" alt="banner"/></div>
<center><ul><li><a style="text-decoration: none" id="double" class="hover-underline-animation"  href="logcall.php" ><font size="+2">Log Call&nbsp;</font></li></a>
<li><a style="text-decoration: none" id="double" class="hover-underline-animation" href="update.php"><font size="+2">Update&nbsp;</font></li></a>
<li><a style="text-decoration: none" id="double" class="hover-underline-animation" href="#"><font size="+2">Report&nbsp;</font></li></a>
<li><a style="text-decoration: none" id="double" class="hover-underline-animation" href="#"><font size="+2">History</font></li></ul></a></center>
</div>
