<!DOCTYPE html>
<html>
<head>
	<title>medium</title>
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
<header>	
	<div id="menu">
		<ul>
			<li><h1>Medium</h1></li>
			<li><a href="#">Staff picks</a></li>
			<li><a href="#">Top stories</a></li>
			<li><a href="#">Bookmarks</a></li>
			<li>
				<li class="login"><a href="#">Sign in/ Sign up</a></li>
				<li class="login"><a href="#">Write a story</a></li>
				<li class="login"><a href="#">Search Medium</a></li>
			</li>
		</ul>
	</div>	
</header>
<!--main-->
<section>
<div id="menu-main">
	<ul>
		<li>
			<?php for ($i =1; $i < 5 ; $i++): ?>
			<div class="main">
				<div class="item">
					<h3>Sexism is Hard to Explain</h3>
					<p>This morning I was walking into my building and a man was walking parallel with me. He was going towards one set of doors; I was going towards a pair adjacent to them. He smiled at me and gestured me over to his side with a 	</p>
				</div>
				</div>
				<?php endfor; ?>
		</li>
		<li>
			<div class="right">
				<div id="right-li">
					<ul>
						<li><div class="right-li-li">Featured tags</div></li>
						<li><div class="left-li-li">Learn more</div></li>
					</ul>
				</div>
				<div class="tag-right-link">
					<a class="link" href="#"><em>2016 election</em></a>
					<a class="link" href="#"><em>Bernie Sanders</em></a>
					<a class="link" href="#"><em>Hillary Clinton</em></a>
					<a class="link" href="#"><em>World Proty Day</em></a>
					<a class="link" href="#"><em>March Madness</em></a>
					<a class="link" href="#"><em>Apple</em></a>
					<a class="link" href="#"><em>Flint Water Crisis</em></a>
					<a class="link" href="#"><em>Android</em></a>
					<a class="link" href="#"><em>Travel</em></a>
					<a class="link" href="#"><em>Open Letter</em></a>
					<a class="link" href="#"><em>Refugess</em></a>
					<a class="link" href="#"><em>Donald Trump</em></a>
					<a class="link" href="#"><em>Ted Cruz</em></a>
					<a class="link" href="#"><em>BlackLivesMatter</em></a>
					<a class="link" href="#"><em>Millenials</em></a>
					<a class="link" href="#"><em>Racism</em></a>
					<a class="link" href="#"><em>Sent Email Poem</em></a>
				</div>
			</div>
		</li>
	</ul>
</div>
</section>
<form>
	<input type="text" name="Name">Name</input><br/>
	<input type="radio" name="rd" value="nam">Nam</input>
	<input type="radio" name="rd" value="nu">Nu</input><br/>
	<input type="checkbox" name="check" value="yes">yes</input>
	<select name="sit">
		<option value="ha noi">Ha Noi</option>
		<option value="tphcm">Tp HCM</option>
		<option value="long an">Long An</option>
	</select>
	<textarea name="area"></textarea>
	<input type="submit" name="submit-gui" value="gui"></input>
</form>
<footer>	
</footer>
</body>
</html>