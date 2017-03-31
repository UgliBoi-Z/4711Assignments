<h2> Dashboard </h2>
<div id="homepageDash" >
	{records}
	<table id = "dashboard">
		<tr>
			<th>Parts on hand</th>
			<th>Assembled Robots</th>
			<th>Funds spent</th>
			<th>Daily Net Balance</th>
			<th>Current Funds</th>
		</tr>
		<tr>
			<th>{part}</th>
			<th>{assembled}</th>
			<th>${fundSpent}</th>
			<th>${fundNet}</th>
			<th>${fundCurrent}</th>
		</tr>
	</table>
	{/records}
	
</div>
