<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css" rel="stylesheet"/>
<h1>UgliBoi-Z Transaction History</h1>
<div id="transacHistory">
    <table id = "historyTable" data-toggle="table">
        <thead>
            <tr>
                <th data-field="name" data-sortable="true"> Name </th>
                <th data-field="partType" data-sortable="true"> Part Type </th>
                <th data-field="partId" data-sortable="true"> Part ID </th>
                <th data-field="actionType" data-sortable="true"> Action Type </th>
                <th data-field="date" data-sortable="true"> Date </th>
            </tr>
        </thead>
        <tbody>
            {transacHistory}
            <tr>
                <td>{id}</td>
                <td>{partType}</td>
                <td>{partId}</td>
                <td>{actionType}</td>
                <td>{creationTime}</td>
            </tr>
            {/transacHistory}
        </tbody>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">next</a></li>
    </ul>
</div>
