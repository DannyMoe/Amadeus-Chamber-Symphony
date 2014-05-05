<?php
					$dbhost = "localhost";
					$username = "danielw0_admin";
					$password = "2edppmb2";
					$dbname = "danielw0_acs";
					
					mysql_connect("$dbhost", "$username", "$password") or die("cannot connect");
					mysql_select_db("$dbname") or die ("cannot select DB");
				
					$sql = "select * from meeting_posts order by date desc";
					$result = mysql_query($sql);
					
					while($row = mysql_fetch_array($result)) {
						echo "<table class='sql_results'>";
						
						echo "<tr><td>Date</td><td>".$row[date]."</td></tr>
								<tr><td>Title</td><td>".$row[title]."</td></tr>
								<tr><td>Agenda</td><td>".$row[agenda]."</td></tr>
								<tr><td>Minutes</td><td>".$row[minutes]."</td></tr>
								<tr><td>Notes</td><td>".$row[notes]."</td></tr>
								<tr><td>Entered By</td><td>".$row[entered_by]."</td></tr>
								<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
								</table>";
					}
					mysql_close();
				?>