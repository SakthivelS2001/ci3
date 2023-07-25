<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="ws_noth=device-ws_noth, initial-scale=1">
    
    <title>Registration</title>
</head>

<body>
    
    <div class="contanier my-5">
    <?php

if(isset($status)){
    echo $status;
    echo '<br>', $test;
}
if(isset($msg)){
    echo '<h2>'.$msg.'<h2>';
}

?>
        <form action="http://localhost:8080/ci3/college/savedata/" method="post">
            <div class="mb-3 mx-5">
                <div class="mb-3">
                    <label>NAME</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                   <label> DATE OF JOINING</label>
                    <input type="date" class="form-control" name="date_of_joining">
                </div>
                <div class="mb-3">
                    <label>ADDRESS</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="mb-3">
                    <label>PHONE NUMBER</label>
                    <input type="number" class="form-control" name="phone_number">
                </div>
                <div class="mb-3">
                   <label >GENDER</label>
                </div>
                
                    <input type="radio" name="gender" value="male">Male
                
                
                    <input type="radio"  name="gender" value="female">Female
                
                </div>
                <div class="from-group mx-5">
                    <label>Blood Group</label>
                    <select name="blood_group" class="form-control">
                        <option value=""name="blood_group">...Select Blood Group...</option>
                        <option value="A+ve" name="A+ve">A+ve</option>
                        <option value="A-ve" name="A-ve">A-ve</option>
                        <option value="B+ve" name="B+ve">B+ve</option>
                        <option value="B-ve" name="B-ve">B-ve</option>
                        <option value="O+ve" name="O+ve">O+ve</option>
                        <option value="O-ve" name="O-ve">O-ve</option>
                        
                    </select>
                </div>
                <div class="from-group mx-5">
                    <label>Department</label>
                    <select name="department" class="form-control"  >
                        <option value=""name="department">...Select Department...</option>
                        <option value="physics" name="physics">Physics</option>
                        <option value="viscom" name="viscom">Viscom</option>
                        <option value="chemistry" name="chemistry">Chemistry</option>
                        <option value="computer_science" name="computer_science">Computer Science</option>
                        
                    </select>
                </div>
                <div>
                    
                    <input type="submit" class="mx-5"  name="submit" value="Register">
                    <a href="http://localhost:8080/ci3/college/fetchdata/">View Record</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>