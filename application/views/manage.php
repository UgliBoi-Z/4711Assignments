<h2>Manage</h2>

<div class="row">
    <h3>Register</h3>
    <form method ="POST" action="/manage/generate">
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

<div class="row">
    <h3>Reboot</h3>
    <form method ="POST" action="/manage/reboot">
        <button type="submit" class="btn btn-default">Reboot</button>       
    </form>
</div>