<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Create an acount in uDoubt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/PHP-Learning/Forum%20Project/partials/_handleSignup.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="signupEmail">Email address</label>
                        <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="signupPassword">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="signupCpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="signupCpassword" name="signupCpassword" placeholder="Confirm ur Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Create account</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>