<?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="testdb";
        //create conncetion
        $connection =new mysqli($servername,$username,$password,$database);
        if($connection->connect_error){
          die("Connection failed:">$connection->connect_error);
        }
        //read now
        $sql="SELECT * FROM samplecrud";
        $result= $connection->query($sql);
      if(!$result){
        die("invalid query " . $connection->error);
      }
      //read data of each row
      while($row= $result->fetch_assoc()){
        echo "
        <tr>
          <td>$row[id]</td>
          <td>$row[name]</td>
          <td>$row[email]</td>
          <td>$row[phone]</td>
          <td>$row[address]</td>
         <td>$row[created_at]</td>

          
          <td>
            <a class='btn btn-primary btn-sm' href='/Edit/Edit.php?id=$row[id]'>Edit</a>
            <a class='btn btn-danger btn-sm' href='/Delete/Delete.php?id=$row[id]'>Delete</a>
          </td>
        </tr>";
      }

      