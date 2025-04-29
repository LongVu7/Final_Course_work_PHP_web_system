<form action="" method="post">
    <div class="col-md-6 col-lg-4">
        <div class=form-group>
            <input type="hidden" name="userid" value="<?=$user['id'];?>">
            <label for='name'>Username</label>
            <textarea id="name" name="name" rows="3" cols="40"><?=$user['name'];?></textarea>
        </div>


        <div class=form-group>
            <input type="hidden" name="passwordid" value="<?=$user['id'];?>">
            <label for='password'>Password</label>
            <textarea id="password" name="password" rows="3" cols="40"><?=$user['password'];?></textarea>
        </div>

        <div class=form-group>
            <input type="hidden" name="emailid" value="<?=$user['id'];?>">
            <label for='email'>Email</label>
            <textarea id="email" name="email" rows="3" cols="40"><?=$user['email'];?></textarea>
            <br />
            <small class="text-danger">
                <i class="fas fa-exclamation-triangle"></i>
                Warning: Email is unique. Changing email may affect your login credentials.
            </small>
        </div>

        <div class=form-group>

            <input type="hidden" name="lastnameid" value="<?=$user['id'];?>">
            <label for='lastname'>Lastname</label>
            <textarea id="lastname" name="lastname" rows="3" cols="40"><?=$user['lastname'];?></textarea>
        </div>

        <div class=form-group>
            <input type="hidden" name="firstnameid" value="<?=$user['id'];?>">
            <label for='firstname'>Firstname</label>
            <textarea id="firstname" name="firstname" rows="3" cols="40"><?=$user['firstname'];?></textarea>
        </div>
    </div>
    <!-- Button style -->
    <div class="card-action">
        <input class="btn btn-primary" type="submit" value="Save">
    </div>
    
</form>