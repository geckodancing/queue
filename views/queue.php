	<header>
		<h1>Queue Application</h1>
	</header>

    <div id="leftContent" style="">
		<div><h2>New Customer</h2></div>
		<form action="index.php" method="post">
			<input type="radio" name="service" value="Housing" checked="checked"> Housing<br>
			<input type="radio" name="service" value="Benefits"> Benefits<br>
			<input type="radio" name="service" value="Council Tax"> Council Tax<br>
			<input type="radio" name="service" value="Fly-tipping"> Fly-tipping<br>
			<input type="radio" name="service" value="Missed Bin"> Missed Bin<br><br>
			
			<button type="button" id="citizenButton" onclick="showCitizen()">Citizen</button>
			<button type="button" id="organisationButton" onclick="showOrganisation()">Organisation</button>
			<button type="button" id="anonymousButton" onclick="showAnonymous()">Anonymous</button>
			<br><br>
			
			<div id="citizenFields">
				<label for="title">Title</label><br>
				<select name="title" id="title">
					<option value="Mr">Mr</option>
					<option value="Mrs">Mrs</option>
					<option value="Miss">Miss</option>
				</select>
				<br><br>
				<label for="firstname">First Name</label><br>
				<input type="text" name="firstname" value=""><br><br>
				<label for="lastname">Last Name</label><br>
				<input type="text" name="lastname" value=""><br><br>
			</div>
			
			<div id="organisationFields" style="display:none">
				<label for="name">Name</label><br>
				<input type="text" name="name" id="title" value=""><br><br>
			</div>
			
			<input type="hidden" name="customerType" id="customerType" value="citizen"><br><br>

			<input type="submit">
		</form>
	</div>
	
	<div id="rightContent" style="float:left; margin: 5px;">
		<div><h2>Queue</h2></div>
		<p>Customers currently Queued</p>
		<table id="queueTable">
			<tr>
				<th>#</th>
				<th>Type</th>
				<th>Name</th>
				<th>Service</th>
				<th>Queued at:</th>
			</tr>
			<?php foreach ($queueEntries as $key=>$value)
			{
				echo "<tr>";
				echo "<td>".$value->id."</td>";
				echo "<td>".$value->type."</td>";
				echo "<td>".$value->title." ".$value->firstname." ".$value->lastname."</td>";
				echo "<td>".$value->service."</td>";
				echo "<td>".$value->timeQueued."</td>";
				echo "</tr>";
			}
			?>
			</tr>
		</table>
	</div>
