<div class="container-fluid">
  <div class="card shadow mx-auto mb-4" style="width: 45rem;">
    <div class="card-header py-3 text-center">
      <h5 class="d-sm-flex justify-content-between align-items-center m-0 font-weight-bold text-primary ">
        Add User Access
      </h5>
    </div>

    <div class="card-body">
      <form action="access_add" method="post">
        <div class="form-group">
          <label>User Access</label>
            <input class="form-control" name="user_access" id="user_access">
        </div>  

        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" rows="3" name="description" id="description"></textarea>
        </div>

        <div class="form-group">
          <input class="btn btn-danger" type="reset" value="Reset">
          <input class="btn btn-success" type="submit" value="Submit">
        </div>
      </form>
    </div>

  </div>
</div>


