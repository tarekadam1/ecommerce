<div id="table" class="listing"><?php require __DIR__ . '/table.php'; ?></div>

<form method="POST">
    <h3>Create new user account</h3>
    <div>
        <label for="name">Mail*</label>
        <input type="email" name="mail" placeholder="E-mail" required/>
    </div>
    <div>
        <label for="password">Password*</label>
        <input type="password" name="password" placeholder="Password" required/>
    </div>
    
    <div id="reset">
        <button type="submit">Add New User</button>
        <input type="reset" value="Reset">
    </div>

</form>