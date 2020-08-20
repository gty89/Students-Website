<?php
    session_start();
    
    // initializing variables
    $FirstName = "";
    $LastName = "";
    $StreetAddress = "";
    $City = "";
    $State = "";
    $Zipcode = "";
    $Email = "";
    $Login = "";

    $errors = array();
    
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'StudentHome');
    
    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
        $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
        $StreetAddress = mysqli_real_escape_string($db, $_POST['StreetAddress']);
        $City = mysqli_real_escape_string($db, $_POST['City']);
        $State = mysqli_real_escape_string($db, $_POST['State']);
        $Zipcode = mysqli_real_escape_string($db, $_POST['Zipcode']);
        $Email = mysqli_real_escape_string($db, $_POST['Email']);
        $Login = mysqli_real_escape_string($db, $_POST['Login']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($Login)) { array_push($errors, "Login Name is required"); }
        if (empty($Email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) {
            array_push($errors, "The passwords do not match");
        }
        
        // first check the database to make sure
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM UserInformation WHERE Login='$Login' OR Email='$Email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
            if ($user['Login'] === $Login) {
                array_push($errors, "Login Name already exists");
            }
            
            if ($user['Email'] === $Email) {
                array_push($errors, "Email already exists");
            }
        }
        
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $Password = md5($password_1);//encrypt the password before saving in the database
            
            $query = "INSERT INTO UserInformation (FirstName,LastName,StreetAddress,City,State,Zipcode,Email, Login, Password)
            VALUES('$FirstName', '$LastName', '$StreetAddress', '$City', '$State', '$Zipcode','$Email','$Login', '$Password')";
            mysqli_query($db, $query);
            $_SESSION['Login'] = $Login;

            header('location: index.php');
        }
    }

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $Login = mysqli_real_escape_string($db, $_POST['Login']);
        $Password = mysqli_real_escape_string($db, $_POST['Password']);
        
        if (empty($Login)) {
            array_push($errors, "Login Name is required");
        }
        if (empty($Password)) {
            array_push($errors, "Password is required");
        }
        
        if (count($errors) == 0) {
            $Password = md5($Password);
            $query = "SELECT * FROM UserInformation WHERE Login='$Login' AND Password='$Password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['Login'] = $Login;

                header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
    
    

    // RESET PASSWORD
    if (isset($_POST['reset-password'])) {
        $Email = mysqli_real_escape_string($db, $_POST['Email']);
        // ensure that the user exists on our system
        $query = "SELECT * FROM UserInformation WHERE Email='$Email'";
        $results = mysqli_query($db, $query);
        
        if (empty($Email)) {
            array_push($errors, "Your email is required");
        }else if(mysqli_num_rows($results) <= 0) {
            array_push($errors, "No user with that email exists");
        }
        
        $Token = bin2hex(random_bytes(50));
        
        if (count($errors) == 0) {
            $log = $_SESSION['Login'];
            
            // store token in the password-reset database table against the user's email
            $sql = "INSERT INTO UserInformation(Token) VALUES ('$Token') WHERE Email=$Email";
            $results = mysqli_query($db, $sql);
            
            // Send email to user with the token in a link they can click on
            $to = $Email;
            $subject = "Recover Account on www.studenthome.com";
            $msg =  "Your login is: " .$log.
                    "Your password is: " .md5($Password).
                    "\nClick on this <a href=\"new_pass.php?token=" . $token . "\">link</a> if you want to reset your password on our site";
            $msg = wordwrap($msg,70);
            $headers = "From: recovery@studenthome.com";
            mail($to, $subject, $msg, $headers);
            header('location: pending.php?Email=' . $Email);
        }
    }
    
    
    // ENTER A NEW PASSWORD
    if (isset($_POST['update_pass'])) {
        $newPass1 = mysqli_real_escape_string($db, $_POST['newPass1']);
        $newPass2 = mysqli_real_escape_string($db, $_POST['newPass2']);
        
        if (empty($newPass1)) {
            array_push($errors, "Password is required");
        }
        if (empty($newPass2)) {
            array_push($errors, "Confirmation password is required");
        }
        
        if ($newPass1 != $newPass2) {
            array_push($errors, "The passwords do not match");
        }
        
        if (count($errors) == 0) {
            $log = $_SESSION['Login'];
            
            $newPass = md5($newPass1);
            
            $query = "UPDATE UserInformation SET Password='$newPass' WHERE Login='$log'";
            mysqli_query($db, $query);
            header('location: resetConfirmation.php');
        }
    }

    
    
    //UPDATE USER
    if (isset($_POST['update_user'])) {
        // receive all input values from the form
        $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
        $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
        $StreetAddress = mysqli_real_escape_string($db, $_POST['StreetAddress']);
        $City = mysqli_real_escape_string($db, $_POST['City']);
        $State = mysqli_real_escape_string($db, $_POST['State']);
        $Zipcode = mysqli_real_escape_string($db, $_POST['Zipcode']);
        $Email = mysqli_real_escape_string($db, $_POST['Email']);

        
        // first check the database to make sure
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM UserInformation WHERE Email='$Email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
            if ($user['Email'] === $Email) {
                array_push($errors, "Email already exists");
            }
        }
        
        if (empty($FirstName) && empty($LastName) && empty($StreetAddress) && empty($City) && empty($State) && empty($Zipcode) && empty($Email))
        {
            array_push($errors, "Input information to update");
        }
            
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $log = $_SESSION['Login'];
            
            if (!empty($FirstName))
            {
                $query = "UPDATE UserInformation SET FirstName='$FirstName' WHERE Login='$log'";
                mysqli_query($db, $query);
            }
            
            if (!empty($LastName))
            {
                $query = "UPDATE UserInformation SET LastName='$LastName' WHERE Login='$log'";
                mysqli_query($db, $query);
            }
                
            if (!empty($StreetAddress))
            {
                $query = "UPDATE UserInformation SET StreetAddress='$StreetAddress' WHERE Login='$log'";
                mysqli_query($db, $query);
            }
                    
            if (!empty($City))
            {
                $query = "UPDATE UserInformation SET City='$City' WHERE Login='$log'";
                mysqli_query($db, $query);
            }

            if (!empty($State))
            {
                $query = "UPDATE UserInformation SET State='$State'";
                mysqli_query($db, $query);
            }
                    
            if (!empty($Zipcode))
            {
                $query = "UPDATE UserInformation SET Zipcode='$Zipcode' WHERE Login='$log'";
                mysqli_query($db, $query);
            }
                        
            if (!empty($Email))
            {
                $query = "UPDATE UserInformation SET Email='$Email' WHERE Login='$log'";
                mysqli_query($db, $query);
            }
                        

            header('location: updateConfirmation.php');
        }
    }
    
    
    // Search People
    $people = [];
    if (isset($_GET['search_people'])) {
        $FirstName = mysqli_real_escape_string($db, $_GET['FirstName']);
        $LastName = mysqli_real_escape_string($db, $_GET['LastName']);
        $Department = mysqli_real_escape_string($db, $_GET['Department']);
        
        if (empty($FirstName) && empty($LastName) && empty($Department)) {
            array_push($errors, "A search parameter is required");
        }
        
        if (count($errors) == 0) {
            $query = "SELECT * FROM People WHERE FirstName='$FirstName' OR LastName='$LastName' OR Department='$Department'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) > 0) {
                while($row = mysqli_fetch_assoc($results)) {
                    array_push($people, $row);
                }
            }
            else {
                array_push($errors, "No search results found");
            }
        }
    }
    
    
    // Search Roommate
    $roommate= [];
    if (isset($_GET['search_roommate'])) {
        $MoveIn = mysqli_real_escape_string($db, $_GET['MoveIn']);
        $Gender = mysqli_real_escape_string($db, $_GET['Gender']);
        $Price = mysqli_real_escape_string($db, $_GET['Price']);
        
        if (empty($MoveIn) && empty($Gender) && empty($Price)) {
            array_push($errors, "A search parameter is required");
        }
        
        if (count($errors) == 0) {
            $query = "SELECT * FROM Roommate WHERE MoveIn ='$MoveIn' OR Gender ='$Gender' OR Price ='$Price'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) > 0) {
                while($row = mysqli_fetch_assoc($results)) {
                    array_push($roommate, $row);
                }
            }
            else {
                array_push($errors, "No search results found");
            }
        }
    }
    
    
    // Search Text
 $text= [];
    if (isset($_GET['search_textbook'])) {
        $Title = mysqli_real_escape_string($db, $_GET['Title']);
        $Author = mysqli_real_escape_string($db, $_GET['Author']);
        $ISBN = mysqli_real_escape_string($db, $_GET['ISBN']);
        
        if (empty($Title) && empty($Author) && empty($ISBN)) {
            array_push($errors, "A search parameter is required");
        }
        
        if (count($errors) == 0) {
            $query = "SELECT * FROM Textbooks WHERE Title ='$Title' OR Author ='$Author' OR ISBN ='$ISBN'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) > 0) {
                while($row = mysqli_fetch_assoc($results)) {
                    array_push($text, $row);
                }
            }
            else {
                array_push($errors, "No search results found");
            }
        }
    }


    
    
    ?>
