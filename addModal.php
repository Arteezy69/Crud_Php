<!-- Add user Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Adding users -->
        <!--ADDing users through Forms in MODAL BODY -->


        <form class="form text-center" id="loginform" style="max-width:500px ; margin:auto" action="insert.php" method="POST">
            <input type="text" id="firstname"  name="fname" class="form-control mb-3" placeholder="Firstname" >
            <input type="text" id="password" name="lname" class="form-control mb-3" placeholder="Lastname">
            <input type="text" id="email" name="email" class="form-control mb-3" placeholder="Email">  
            <input type="password" id="password" name="password" class="form-control mb-3" placeholder="Password">
       
      
      </div>
      <div class="modal-footer">
        <!--Forms in MODAL FOOTER -->


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-danger " name="save"  >Save</button>

        </form>
      </div>
    </div>
  </div>
</div>


<!-- END OF MODAL-->