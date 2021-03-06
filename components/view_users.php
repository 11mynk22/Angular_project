<div class="table-scrol">
    <h1 align="center">All the Users</h1>

    <h4><a href="#/logout">Logout</a></h4>

    <div class="table-responsive">
        <!--this is used for responsive display in mobile and other devices-->


        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>

                <tr>

                    <th>User Id</th>
                    <th>User Name</th>
                    <th>User E-mail</th>
                    <th>User Pass</th>
                    <th>Delete User</th>
                </tr>
            </thead>

            <?php  
        include("database/db_conection.php");  
        $view_users_query="select * from users";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_email=$row[2];  
            $user_pass=$row[3];  
  
  
  
        ?>

            <tr>
                <!--here showing results in the table -->
                <td>
                    <?php echo $user_id;  ?>
                </td>
                <td>
                    <?php echo $user_name;  ?>
                </td>
                <td>
                    <?php echo $user_email;  ?>
                </td>
                <td>
                    <?php echo $user_pass;  ?>
                </td>
                <td><a href="#/delete<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td>
                <!--btn btn-danger is a bootstrap button to show danger-->
            </tr>

            <?php } ?>

        </table>
    </div>
</div>

<div id="show" style="display: none" ;>
    <?php  
        include("database/db_conection.php");  
        $display_comment="select comment from data";//select query for viewing users.  
        $run=mysqli_query($dbcon,$display_comment);//here run the sql query.  
    
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            
        {  
            $comment=$row[0];  
  
        ?>
    <p>
        <?php echo $comment ?>
    </p>

    <?php } ?>


</div>


<button onclick="document.getElementById('show').style.display='block'" name="display_comment" class="btn btn-danger">Display</button>
