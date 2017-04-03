<h2> Parts </h2>
<div id="body">
    <div class="container">
        <h3>Heads</h3>
        {heads}
        <div class="row">
            <div class="col-sm-3 col-md-3 col-xl-3"><a href="/parts/{part_id}"><img src="assets/parts/{img}.jpeg" alt="Part Image" height="250" width="250"></a></div>
        </div>
        {/heads}
        </br>
        <h3>Torso</h3>
        {torso}
        <div class="row">
        <div class="col-sm-4 col-md-4 col-xl-4">
       <img src="assets/parts/{img}.jpeg" alt="Part Image" height="250" width="250" onclick='item({part_id})'>
        </div>
        </div>
        {/torso}
        </br>
        <h3>Feet</h3>
        {feet}
        <div class="row">
        <div class="col-sm-4 col-md-4 col-xl-4">
        <a href="/parts/{part_id}"><img src="assets/parts/{img}.jpeg" alt="Part Image" height="250" width="250"></a>
        </div>
        </div>
        {/feet}
        </br>
    </div>    
    <div class="row btn-align2">
        <!--
        <button  type="button" onclick="build()" class="btn btn-success btn-sm" style="width: 200px">Build More Parts</button>
        <button  type="button" onclick="buy()" class="btn btn-success btn-sm" style="width: 200px">Buy More Parts</button> 
        -->

        <span><a href="/parts/build" class="btn btn-success btn-sm">Build More Parts</a></span>
        <span><a href="/parts/buy" class="btn btn-success btn-sm">Buy Parts</a></span>

    </div>
    </div>