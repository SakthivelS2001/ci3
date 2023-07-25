<html>

<head>
    <title>Display Record</title>
    <style>
        .result,
        .result td,
        .result th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 7px;
            margin: auto;
            background-color: lightcoral;

        }

        .result th {
            background-color: blue;
        }
    </style>
</head>

<body>
    <a href="http://localhost:8080/ci3/college/student/">Go to Register</a>

    <?php

    if (isset($data)) {
        
    ?>
   
    <form action="<?=base_url('college/update/')?>" method="post">
    <table.cellspacing="20">
        <tr>
            <td>ID</td>
            <td><input value="id" value="<?=$data[0]->id?>" readonly=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input value="name" value="<?=$data[0]->Name?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input value="date_of_joining" value="<?=$data[0]->Date_of_Joining?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input value="address" value="<?=$data[0]->Address?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input value="department" value="<?=$data[0]->Department?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input value="phone_number" value="<?=$data[0]->Phone_Number?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input value="gender" value="<?=$data[0]->Gender?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input value="blood_group" value="<?=$data[0]->Blood_Group?>"></td>
        </tr>
        <tr>
            <td><button>UPDATE</button></td>
            <td></td>
        </tr>
    </table>

    </form>
    <?php

    } else {
    ?>
        <table class="result">
            <tr>
                <th>ACTION</th>
                <th>ID</th>
                <th>NAME</th>
                <th>DATE OF JOINING</th>
                <th>ADDRESS</th>
                <th>DEPARTMENT</th>
                <th>PHONE NUMBER</th>
                <th>GENDER</th>
                <th>BLOOD GROUP</th>

            </tr>
            <?php

            if (isset($table)) {

                foreach ($table as $row) {

            ?>
                    <tr>
                        <td><a href="<?=base_url('college/edit/'.$row->id)?>">Edit</a></td>
                        <td><?= $row->id?></td>
                        <td><?= $row->Name ?></td>
                        <td><?= $row->Date_of_Joining ?></td>
                        <td><?= $row->Address ?></td>
                        <td><?= $row->Department ?></td>
                        <td><?= $row->Phone_Number ?></td>
                        <td><?= $row->Gender ?></td>
                        <td><?= $row->Blood_Group ?></td>
                    </tr>


            <?php
                }
            }

            ?>
        </table>
    <?php
    }


    ?>




</body>

</html>