<?php

$fname = filter_input(INPUT_POST, 'fname');
$full_address = filter_input(INPUT_POST, 'full_address');
$contact = filter_input(INPUT_POST, 'contact');
$email = filter_input(INPUT_POST, 'email');
$bdate = filter_input(INPUT_POST, 'bdate');
$bplace= filter_input(INPUT_POST, 'bplace');
$age = filter_input(INPUT_POST, 'age');
$gender = filter_input(INPUT_POST, 'gender');
$citizenship = filter_input(INPUT_POST, 'citizenship');
$school = filter_input(INPUT_POST, 'school');
$lrn = filter_input(INPUT_POST, 'lrn');
$awards = filter_input(INPUT_POST, 'awards');
$yr_level = filter_input(INPUT_POST, 'yr_level');
$mother = filter_input(INPUT_POST, 'mother');
$father = filter_input(INPUT_POST, 'father');
$siblings = filter_input(INPUT_POST, 'siblings');
$guardian = filter_input(INPUT_POST, 'guardian');
$relation = filter_input(INPUT_POST, 'relation');
$home = filter_input(INPUT_POST, 'home');
$num_ber = filter_input(INPUT_POST, 'num_ber');


if (!empty($fname)){
if (!empty($full_address)){
if (!empty($contact)){
if (!empty($email)){
if (!empty($bdate)){
if (!empty($bplace)){
if (!empty($age)){
if (!empty($gender)){
if (!empty($citizenship)){
if (!empty($school)){
if (!empty($lrn)){
if (!empty($awards)){
if (!empty($yr_level)){
if (!empty($mother)){
if (!empty($father)){
if (!empty($siblings)){
if (!empty($guardian)){
if (!empty($relation)){
if (!empty($home)){
if (!empty($num_ber)){

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "PHPform";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
        die('FAILED TO CONNECT ('. mysqli_connect_error() .')'
        .mysqli_connect-error());
    } else {
        $sql = "INSERT INTO students (fname, full_address, contact, email, bdate, bplace, age, gender, citizenship,
        school, lrn, awards, yr_level, mother, father, siblings, guardian, relation, home, num_ber)
        VALUES ('$fname', '$full_address','$contact','$email','$bdate','$bplace','$age','$gender','$citizenship','$school','$lrn','$awards',
        '$yr_level','$mother','$father','$siblings','$guardian','$relation','$home','$num_ber')";
        if ($conn->query($sql)){
            echo " YOUR FORM IS SUCCESSFULLY SUBMITTED , KINDLY WAIT FOR THE ADMINS TO REVIEW YOUR FORM AND WILL CONTACT YOU SHORTLY ";

        } else{
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
    }






}else{
     echo "number required";
    die();
    }

}else{
    echo "home required";
    die();
    }    

}else{
    echo "relation required";
    die();
    }

 }else{
     echo "guardian required";
     die();
    }

}else{
    echo "siblings required";
     die();
    }

}else{
    echo "father required";
     die();
    }

}else{
     echo "mother required";
    die();
    }

}else{
     echo "yr level required";
     die();
    }

}else{
     echo "awards required";
    die();
    }

}else{
    echo "lrn required";
    die();
    } 

}else{
    echo "school required";
    die();
    }

}else{
    echo "citizenship required";
    die();
    } 

}else{
     echo "gender required";
     die();
    } 

}else{
     echo "age required";
     die();
    }   

}else{
    echo "bplace required";
    die();
    }
 
}else{
     echo "bdate required";
     die();
    }    

}else{
    echo "email is required";
    die();
    }    

}else{
    echo "contact required";
     die();
    }

}else{
    echo "address required";
    die();
}
} else {
    echo "name required";
    die();
}

?>
