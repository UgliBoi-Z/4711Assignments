<h1>UgliBoi-Z Transaction History</h1>
<div id="transacHistory">
    <table id = "historyTable">
        <tr>
            <th>Trans ID</th>
            <th>Parts Ordered</th>
            <th>Robots Assembled</th>
            <th>Shipments</th>
            <th>Date</th>
        </tr>
        {transacHistory}
        <tr>
            <td>{id}</td>
            <td>{purchases}</td>
            <td>{assemblies}</td>
            <td>{shipments}</td>
            <td>{dtTrans}</td>
        </tr>
        {/transacHistory}
    </table>
</div>
