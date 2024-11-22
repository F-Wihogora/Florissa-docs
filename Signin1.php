<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="signin.css">
            
    </head>
    <body>
        <h4 class="h">ORGANIZATION FORM</h4>
        <div class="body">
        <form action="Signin.php" method="POST" class="form">

        <label class="labe">FULL NAME</label><br>
        <input type="text" class="input" name="F" placeholder="NAME"><br>
        <label class="labe">ID NUMBER</label><br>
        <input  class="input" type="number" name="meh" placeholder="ID number"  required><br>
        <label class="labe">EMAIL</label><br>
        <input class="input" type="text" name="email" placeholder="Email"required><br>
        <label class="labe">DATE OF BIRTH</label><br>
        <input  class="input" type="date" name="DOB" placeholder="Date of birth" required><br>
        <label class="labe">PHONE NUMBER</label><br>
        <input class="input" type="number" name="No" placeholder="Phone number"required><br>
        <label class="labe">EMPLOYEE ID</label><br>
        <input class="input" type="text" name="Id" placeholder="Employee ID"required><br>
        <label class="labe">AGE</label><br>
        <input class="input" type="text" name="age" placeholder="age" required><br>
        <label class="labe">DEPARTMENT</label><br>
        <select name="Dep">
            <option>Research and Development</option>
            <option>Design and Drafting</option>
            <option>Manufacturing</option>
            <option>Quality Assurance and Quality Control</option>
            <option>Project Mannagement</option>
            <option>Mantainance and Operations</option>
            <option>Civil and Structural Engineering</option>
            <option>Electrical and Electonics engineering</option>
            <option>Mechanical Engineering</option>
            <option>Emvironmental, Healthy, Safety(EHS)</option>
        </select>
        <label class="labe">MANAGER</label><br>
        <input  class="input" type="text" name="Man" placeholder="manager" required><br>
        <label class="labe">DESIGNATION/JOB TITLE</label><br>
        <input  class="input" type="text" name="Des" placeholder="Job title" required><br>
        <label class="labe">DATE OF JOINING</label><br>
        <input  class="input" type="text" name="pay" placeholder="Date of joining"  required><br>
        <label class="labe">PAYROLL INFORMATION</label><br>
        <input  class="input" type="text" name="dec" placeholder="Payroll info" required><br>
        <label class="labe">EMERGENCY NUMBER</label><br>
        <input  class="input" type="text" name="name" placeholder="Name" required><br>
        <input class="input" type="text" name="Relationship" placeholder="Relationship" required><br>
        <input class="input" type="number" name="Relative" placeholder="Phone number" required><br>
        <label class="labe">GENDER</label><br>
        <input class="gend"type="radio" name="Gender" value="Female" required>FEMALE<br>
        <input class="gend" type="radio" name="Gender" value="Male" required>MALE<br>
        <input class="gend" type="radio" name="Gender" value="Custom" required>CUSTOM<br>
        <label for="level" class="labe">AT WHICH LEVEL WOULD YOU RATE THE ORGANIZATION?</label><br>
        <input type="range" id="level"  class="color" name="level" min="0" max="100" step="1" ><br>
        <output class="level">0</output>%<br><br>
        <label for="color">What is your favorite color?</label><br>
        <input type="color" id="color" name="color"><br>
        <label class="labe"> BANK NAME</label><br>
        <select name="Bank">
            <option value="BK">BANK OF KIGALI</option>
            <option>EQUITY BANK</option>
            <option>COGEBANQUE</option>
            <option>BPR BANK RWANDA </option>
            <option>ZIGAMA CSS</option>
            <option>BANK OF AFRICA</option>
            <option>ECO BANK</option>
            <option>KCB BANK RWANDA</option>
            <option>I&M BANK</option>
        </select><br>
        <label class="labe" name="account">BANK ACCOUNT NUMBER</label><br>
        <input type="number" name="account" placeholder="Account number" class="input"><br>
<label>PROVINCE</label>
        <select name="resident">
            <option>WESTERN PROVINCE</option>
            <option>EASTERN PROVINCE</option>
            <option>KIGALI CITY</option>
            <option>NORTHERN PROVINCE</option>
            <option>SOUTHERN PROVINCE</option>
        </select><br>
        <label class="labe">REQUEST</label><br>
        <input class="input" type="text" name="request" placeholder="Request"><br>
        <button class="button" type ="submit" >Submit</button>
        
        </form>
    </div>
</body>
        </html>
       
        