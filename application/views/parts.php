<h2> Parts </h2>
<div id="body">
    <div id="homepageDash" >
        <form action=<?php echo site_url("parts/part"); ?> method="post">
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
                            <a href="/parts/{part_code}"><img src="assets/parts/{part_code}.jpeg" alt="Part Image" height="250" width="250">
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
                            <a href="/parts/{part_code}"><img src="assets/parts/{part_code}.jpeg" alt="Part Image" height="250" width="250">
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
                            <a href="/parts/{part_code}"><img src="assets/parts/{part_code}.jpeg" alt="Part Image" height="250" width="250">
                        </td>
                        {/feet}
                    </tr>

            </table>
            <button id="{title}" type="button" onclick="build()" class="btn btn-success btn-sm" style="width: 200px">Build More Parts</button>
            <button id="{title}" type="button" onclick="buy()" class="btn btn-danger btn-sm" style="width: 200px">Buy More Parts</button>
    </div>
</div>