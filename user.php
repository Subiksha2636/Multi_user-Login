<?php

session_start();



?>


<!DOCTYPE html>
<html>
<head>
	<title> multi user login Demo</title>
	<link rel="stylesheet" type="text/css"href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="css/image4.jpg">
	<div class="container">
		<div class="row">
			<div class="com-md-6">
				<div class="jumbotron">
					<h2>
						<?php echo $_SESSION['User']; ?>
						<h2 class=text-center> Welcome User </h2>
						<div>
						<video autoplay controls>
							<source src="video.mp4" type="video/mp4" >
						</video><hr/>
						<span> 12 views</span>
						.
						<span>2days ago</span>
						<button id="button" class="style-scope yt-icon-button" aria-label="like this video along with 9,090 other people" aria-pressed="false"><yt-icon class="style-scope ytd-toggle-button-renderer"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: red; width: 10px; height: 10px;"><g class="style-scope yt-icon"><path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1.91l-.01-.01L23 10z" class="style-scope yt-icon"></path></g></svg></yt-icon></button>
						<yt-icon-button id="button" class="style-scope ytd-toggle-button-renderer style-text"><!--css-build:shady--><button id="button" class="style-scope yt-icon-button" aria-label="dislike this video along with 15 other people" aria-pressed="false"><yt-icon class="style-scope ytd-toggle-button-renderer"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: yellow; width: 10px; height: 10px;"><g class="style-scope yt-icon"><path d="M15 3H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v1.91l.01.01L1 14c0 1.1.9 2 2 2h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 23l6.59-6.59c.36-.36.58-.86.58-1.41V5c0-1.1-.9-2-2-2zm4 0v12h4V3h-4z" class="style-scope yt-icon"></path></g></svg</yt-icon></button></yt-icon-button>
					</div>

						<!-- second video-->
						<div class="videowrapper">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/51h76yjA3wQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<hr/>
						
						<span>6views</span>
						.
						<span>1days ago</span>
						<button id="button" class="style-scope yt-icon-button" aria-label="like this video along with 9,090 other people" aria-pressed="false"><yt-icon class="style-scope ytd-toggle-button-renderer"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: red; width: 10px; height: 10px;"><g class="style-scope yt-icon"><path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1.91l-.01-.01L23 10z" class="style-scope yt-icon"></path></g></svg></yt-icon></button>
						<yt-icon-button id="button" class="style-scope ytd-toggle-button-renderer style-text"><!--css-build:shady--><button id="button" class="style-scope yt-icon-button" aria-label="dislike this video along with 15 other people" aria-pressed="false"><yt-icon class="style-scope ytd-toggle-button-renderer"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 11px; height: 22px;"><g class="style-scope yt-icon"><path d="M15 3H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v1.91l.01.01L1 14c0 1.1.9 2 2 2h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 23l6.59-6.59c.36-.36.58-.86.58-1.41V5c0-1.1-.9-2-2-2zm4 0v12h4V3h-4z" class="style-scope yt-icon"></path></g></svg></yt-icon></button></yt-icon-button>
						
						</div>


					</h2>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js.jquery.min.js"></script>
	<script type="text/javascript" src="js.bootstrap.min.js"></script>
	<script type="text/javascript" src="js.popper.min.js"></script>

</body>
</html>