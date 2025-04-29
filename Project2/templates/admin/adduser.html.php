<form action="" method="post">
    <div class="card-header">
        <div class="card-title">Add New User</div>
    </div>    

    <br />
    <div class="col-md-6 col-lg-4">
        <label for='username'>Username</label>
        <textarea id="username" name="username" rows="3" cols="40" placeholder="Enter Username"></textarea>
        <br />
        <label for='email'>Email</label>
        <br />
        <textarea id="email" name="email" rows="3" cols="40" placeholder="Enter Email"></textarea>
        <br />
        <small class="text-danger">
            <i class="fas fa-exclamation-triangle"></i>
            Warning: Email must be unique.
        </small>
        <br />

        <label for='password'>Password</label>
        <textarea  id="password" name="password" rows="3" cols="40" placeholder="Password"></textarea>
        <br />

        <label for='firstname'>Firstname</label>
        <textarea id="firstname" name="firstname" rows="3" cols="40" placeholder="Enter Firstname"></textarea>
        <br />
        <label for='lastname'>Lastname</label>
        <textarea id="lastname" name="lastname" rows="3" cols="40" placeholder="Enter Lastname"></textarea>
        
    </div>    
        <div class="card-action">
            <input class="btn btn-primary" type="submit" name="submit" value="Add" >
        </div>
    



</form>