<?php include ("../sub_top.php"); ?>				<div id="title">			<div class="tr">						<h1>StoneWays Gallery</h1>			</div>		</div>				<div id="content">		<h3>Before &amp; After</h3>		<div id="gallery">			<?php				$job = 12;				$curr = $id;				$max = 12;								if ($curr == 1) $prev = $max;				else $prev = $curr - 1;								if ($curr == $max) $next = 1;				else $next = $curr + 1;								switch ($curr)				{					case 1: 					case 2: 					case 3: $currCat = "before"; break;					case 4: 					case 5:					case 6: 					case 7: 					case 8:					case 9:						{							$currCat = "patio";							$curr = $curr - 3; break;						}					case 10:					case 11:					case 12:						{							$currCat = "steps";							$curr = $curr - 9; break;						}					}					$path = "../images/jobs/job27_$currCat$curr.jpg";					echo("<img src=\"$path\" />");				echo("<br /><br />");				echo("$id of $max");				echo("<br /><br />");				echo("<a href=\"ba$job.php?id=$prev\">Previous</a>");				echo("|");				echo("<a href=\"ba$job.php?id=$next\">Next</a>");			?>		</div>		</div>		<a href="index.php">&lt; Back</a>		</div>	</div></div><?php include ("../bottom.php"); ?>