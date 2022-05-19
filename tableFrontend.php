<!--Table-->


 
  <div class="container pt-4">
    <div class="table-responsive text-center">
        <table class="table table-bordered bg-white "id="datatable"   >
            <thead class="bg-dark text-light">
                <tr>
                    <th>id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>

              <?php
              include("showtableBackend.php");
              ?>
            </tbody>
          

        </table>

      </div>


    </div>
<!--End of Table-->