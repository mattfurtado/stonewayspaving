<?php include ("../sub_top.php"); ?>				<div id="title">			<div class="tr">						<h1>StoneWays Gallery</h1>			</div>		</div>				<div id="content">		<h3>Before &amp; After</h3>		<div id="gallery">			<?php				$job = 7;				$curr = $id;				$max = 4;								if ($curr == 1) $prev = $max;				else $prev = $curr - 1;								if ($curr == $max) $next = 1;				else $next = $curr + 1;								/* Deleted picture 5 (walk2) */								switch ($curr)				{					case 1: 					case 2: $currCat = "before"; break;					case 3: 						{							$currCat = "driveway";							$curr = $curr - 2; break;						}					case 4: 						{							$currCat = "walk";							$curr = $curr - 3; break;						}				}					$path = "../images/jobs/job11_$currCat$curr.jpg";					echo("<img src=\"$path\" />");				echo("<br /><br />");				echo("$id of $max");				echo("<br /><br />");				echo("<a href=\"ba$job.php?id=$prev\">Previous</a>");				echo("|");				echo("<a href=\"ba$job.php?id=$next\">Next</a>");			?>		</div>		</div>		<a href="index.php">&lt; Back</a>		</div>	</div></div><?php include ("../bottom.php"); ?>