<?php include ("../sub_top.php"); ?>				<div id="title">			<div class="tr">						<h1>StoneWays Gallery</h1>			</div>		</div>				<div id="content">		<h3>Before &amp; After</h3>		<div id="gallery">			<?php				$job = 3;				$curr = $id;				$max = 3;								if ($curr == 1) $prev = $max;				else $prev = $curr - 1;								if ($curr == $max) $next = 1;				else $next = $curr + 1;								/* 4/1/09 - Got rid of pictures 1 (before1), 2 (before2), 6 (patio2), 7 (patio3) */								switch ($curr)				{					case 1: $photo = "before3"; break;					case 2: $photo = "before4"; break;					case 3: $photo = "patio1"; break;				}					$path = "../images/jobs/job7_$photo.jpg";					echo("<img src=\"$path\" />");				echo("<br /><br />");				echo("$id of $max");				echo("<br /><br />");				echo("<a href=\"ba$job.php?id=$prev\">Previous</a>");				echo("|");				echo("<a href=\"ba$job.php?id=$next\">Next</a>");			?>		</div>		</div>		<a href="index.php">&lt; Back</a>		</div>	</div></div><?php include ("../bottom.php"); ?>