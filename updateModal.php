

<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Update users -->
        <!--ADDing users through Forms in MODAL BODY -->


        <form class="form text-center" id="loginform" style="max-width:500px ; margin:auto" action="update.php" method="POST">
            <input type="text" id="id" name="id" class="form-control mb-3" placeholder="ID"   >
            <input type="text" id="firstname"  name="fname" class="form-control mb-3" placeholder="Firstname" >
            <input type="text" id="password" name="lname" class="form-control mb-3" placeholder="Lastname">
            <input type="text" id="email" name="email" class="form-control mb-3" placeholder="Email">  
            <input type="text" id="password" name="password" class="form-control mb-3" placeholder="Password">
       
      
      </div>
      <div class="modal-footer">
        <!--Forms in MODAL FOOTER -->


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-danger " name="update"  >Update</button>

        </form>
      </div>
    </div>
  </div>
</div>


<!-- END OF MODAL-->

<!-- Button trigger modal || id=#updatemodal-->