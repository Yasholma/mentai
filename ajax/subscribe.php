<?php include_once "../core/init.php"; ?>
<?php 
    if (isset($_POST['action']) && $_POST['action'] === "subscribe") {
        $email = sanitize('payload');
        // Server code to check if it is a valid email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "INVALID";
            exit();
        } else {
            // Check if email already exist
            $subscriber->email = $email;
            if (!$subscriber->isEmailExist()) {
                // Save if email is unique
                if ($subscriber->save()) {
                    echo "SAVED";
                    exit();
                }
            } else {
                echo "EXIST";
                exit();
            }
        }
        
    }

