

<!--inserting to db-->
<div class="crud">

<form class="form text-center " id="loginform" style="max-width:400px ; margin:auto" action="insert.php" method="POST">
  <h1 class="p-3">Crud Operations</h1>

  <!-- Button trigger modal || id=#examplemodal-->
  <button type="button" class="btn btn-secondary form-control mt-3 mb-3" 
  data-toggle="modal" data-target="#exampleModal">Add modal</button>

  <!-- Input fields -->
  <input type="text" id="firstname"  name="fname" class="form-control mb-3" placeholder="Firstname">
  <input type="text" id="password" name="lname" class="form-control mb-3" placeholder="Lastname">
  <input type="text" id="email" name="email" class="form-control mb-3" placeholder="Email">  
  <input type="password" id="password" name="password" class="form-control mb-3" placeholder="Password">
  <button class="btn btn-dark form-control " name="save"  >Save</button>


  
</form>


</div>



<!--end of insert-->