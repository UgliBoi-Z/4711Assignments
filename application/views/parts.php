<h2> Parts </h2>
<div id="body">
    <table>
        <thead> 
            <tr>
                <th><h3>Heads</h3></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {heads}
                <td>
                    <a href="/parts/{part_code}"><img src="assets/parts/{part_id}.jpeg" alt="Part Image" height="250" width="250">
                </td>
                {/heads}
            </tr>

    </table>
    <table>
        <thead> 
            <tr>
                <th><h3>Torso</h3></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {torso}
                <td>
                    <a href="/parts/{part_code}"><img src="assets/parts/{part_id}.jpeg" alt="Part Image" height="250" width="250">
                </td>
                {/torso}
            </tr>

    </table>
    <table>
        <thead> 
            <tr>
                <th><h3>Feet</h3></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {feet}
                <td>
                    <a href="/parts/{part_id}"><img src="assets/parts/{part_id}.jpeg" alt="Part Image" height="250" width="250">
                </td>
                {/feet}
            </tr>

    </table>
    <div class="row btn-align2">
        <!--
        <button  type="button" onclick="build()" class="btn btn-success btn-sm" style="width: 200px">Build More Parts</button>
        <button  type="button" onclick="buy()" class="btn btn-success btn-sm" style="width: 200px">Buy More Parts</button> 
        -->
        
        <span><a href="/parts/build" class="btn btn-success btn-sm">Build More Parts</a></span>
        <span><a href="/parts/buy" class="btn btn-success btn-sm">Buy Parts</a></span>
        
    </div>
</div>