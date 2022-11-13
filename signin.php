<div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signinModalLabel">Sign In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="handlers/handle_signin.php" method="POST">
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Username</label>
                        <input type="text" class="form-control" name="user_name" id="user_name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="user_email" id="user_email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="user_pass" class="form-label">Password</label>
                        <input type="text" class="form-control" name="user_pass" id="user_pass">
                        <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="user_pass1" class="form-label">Password</label>
                        <input type="text" class="form-control" name="user_pass1" id="user_pass1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>