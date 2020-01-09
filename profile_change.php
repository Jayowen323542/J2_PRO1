<?php

$iduser = $_SESSION["id"];

$result = mysqli_query($conn,"SELECT * FROM `student_gegvens` WHERE `iduser`= $iduser "); 
while($row = mysqli_fetch_assoc($result)){

//var_dump($record);

'<div class=row>
                <div class="col-md-3 col-6">
                    <form action="./update_edit.php" method="post">

                        <div class="form-group">
                            <label for="Firstname">Firstname</label>
                            <input value=" echo '. $row['naam'] .'; " type="text" class="form-control" id="Name"
                                aria-describedby="FirstnameHelp" placeholder="Type your Name" name="Name">

                        </div>
                        <div class="form-group">
                            <label for="Lastname">Lastname</label>
                            <input value=" echo $lastname; " type="text" class="form-control" id="Lastname"
                                aria-describedby="LastnameHelp" placeholder="Type your Lastname" name="lastname">

                        </div>
                        <div class="form-group">
                            <label for="age">age</label>
                            <input value=" echo $age; " type="text" class="form-control" id="age"

                        </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="form-group">
                        <label for="place">email</label>
                        <input value=" echo $email; " type="text" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Type Here your email" name="email">

                    </div>
                    <div class="form-group">
                        <label for="place">Phone</label>
                        <input value=" echo $phone; " type="text" class="form-control" id="number"
                            aria-describedby="phoneHelp" placeholder="Type Here your phone number" name="phone">

                    </div>


                </div>
                <div class="col-md-5 col-6">
                    <div class="form-group">
                        <label for="place">address</label>
                        <input value=" echo $address; " type="text" class="form-control" id="address"
                            aria-describedby="addressHelp" placeholder="Type Here your address like cheesestreet, 007"
                            name="address">

                    </div>
                    <div class="form-group">
                        <label for="city">city</label>
                        <input value=" echo $city; " type="text" class="form-control" id="city"
                            aria-describedby="cityHelp" placeholder="Type Here your village or city" name="city">
</div>';
}
?>