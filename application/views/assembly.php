

<div id="body">
<div id="homepageDash" >
<form action=<?php echo site_url("assembly/assemble");?> method="post">
   <table id = "partlist">
     	<tr>
	<th>Select</th>
    	<th>Part</th>
	<th>CA Code</th>
	<th>Plant</th>
	<th>Timestamp</th>
	<th>Image</th>
  	</tr>
    {partlist}
  	<tr>
	<th><input type="checkbox" name="selected[]" value={part_id}></th>
    	<td>{part_code}</td>
	<td>{part_ca}</td>
	<td>{built_at}</td>
	<td>{date_built}</td>
	<th><img src="assets/parts/{part_code}.jpeg" alt="Part Image" height="40" width="50"></th>
  	</tr>
        {/partlist}
    </table>
	<input type="submit" value="Assemble it"/>

</div>

</div>
