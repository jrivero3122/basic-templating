<!-- Modal from bootstrap -->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <!-- Altered the modal so that it has a form -->
                    <div id="loginErrorMessage" class="alert alert-danger" role="alert">
                      Information missing, please check again.
                    </div>
                    <div id="loginErrorMessageInvalid" class="alert alert-danger" role="alert">
                      Wrong email and/or password, please check again.
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                      </div>
                      <!-- Altered the modal so that it has a form -->
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!-- Altered the modal so that it has a form -->
              <button id="loginButton" type="button" class="btn btn-primary">Login</button>
              <!-- Altered the modal so that it has a form -->
            </div>
          </div>
        </div>
      </div>
<!-- Modal from bootstrap -->