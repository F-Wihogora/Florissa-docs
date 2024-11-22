<?php 
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['F'];
            $ID=$_POST['meh'];
            $email=$_POST['email'];
            $Dateofbirth=$_POST['DOB'];
            $Phonenumber=$_POST['No'];
            $EmployeeID=$_POST['Id'];
            $Age=$_POST['age'];
            $Department=$_POST['Dep'];
            $Request=$_POST['request'];
            $Manager=$_POST['Man'];
            $Jobtitle=$_POST['Des'];
            $Bankaccount=$_POST['Bank'];
            $Payrollinformation=$_POST['dec'];
            $Province=$_POST['resident'];
            $color=$_POST['color'];
            $level=isset($_POST['level'])?$_POST['level']:0;
            $Bank=$_POST['Bank'];
            $Dep=$_POST['Dep'];
            $Rname=$_POST['name'];
            $relationship=$_POST['Relationship'];
            $Relative=$_POST['Relative'];
            $pay=$_POST['pay'];
            $Gender=$_POST['Gender'];

        echo "<table border='1px' cellspacing='0'>
        <thead>
        <th>LABELS</th>
        <th>INPUTS</th>
        </thead>
        <tbody>
        <tr>
        <th>NAME</th>
        <td>$name</th>
        </tr>
        <tr>
        <th>Id number</th>
        <td>$ID</td>
        </tr>
        <tr>
        <th>Email</th>
        <td>$email</td>
        </tr>
        <tr>
        <th>Date of birth</th>
        <td>$Dateofbirth</td>
        </tr
        <tr>
        <th>Phone nunber</th>
        <td>$Phonenumber</td>
        </tr>
        <tr>
        <th>Employee ID</th>
        <td>$EmployeeID</td>
        </tr>
        <tr>
        <th>AGE</th>
        <td>$Age</td>
        </tr>
        <tr>
        <th>Job department</th>
        <td>$Department</td>
        </tr>
        <tr>
        <th>Request</th>
        <td>$Request</td>
        </tr>
        <tr>
        <th>Manager</th>
        <td>$Manager</td>
        </tr>
        <tr>
        <th>DESIGNATION</th>
        <td>$Jobtitle</td>
        </tr>
        <tr>
        <th>Date of joining</th>
        <td>$pay</td>
        </tr>
        <tr>
        <th>Gender</th>
        <td>$Gender</td>
        </tr>
        <tr>
        <th>BANK ACCOUNT</th>
        <td>$Bank</td>
        </tr>
        <tr>
        <th>Province</th>
        <td>$Province</td>
        </tr>
        <tr>
        <th>Level</th>
        <td>$level</td>
        </tr>
        <tr>
        <th>Payroll information</th>
        <td>$Payrollinformation</td>
        </tr>
        <tr>
        <th>Favorite color</th>
        <td>$color</td>
        </tr>
        <tr>
        <th>Departmeent</th>
        <td>$Dep</td>
        </tr>
        <tr>
        <th>Emergency name</th>
        <td>$Rname</td>
        </tr>
        <tr>
        <th>Relationship</th>
        <td>$relationship</th>
        </tr>
        <tr>
        <th>Relative number</th>
        <td>$Relative</td>
        </tr>
       
 </table>";
        }  
   
        
        ?>