<!-- <?php 
    session_start();
    ?> -->
    <?php
    
    
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $connection = new mysqli('localhost', 'root', '', 'iwtdb');
    
        if ($connection->connect_error) {
            die("Connection error: " . $connection->connect_error);
        }
    
        $email = $_POST['adminName'];
        $password = $_POST['password'];
    
        $query = "SELECT * FROM admindata WHERE adminName = ? AND password = ? LIMIT 1";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $result_set = $stmt->get_result();
    
        if ($result_set && $result_set->num_rows == 1) {
            $user = $result_set->fetch_assoc();
            $_SESSION['user_id'] = $user['adminName'];
            $_SESSION['email'] = $user['adminName'];
    
            header('Location: supplier.php');
            exit;
        } else {
            $error_message = "Invalid email or password";
        }
    }
    
    
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>WeeNet</title>
        <!-- link css file -->
        <link rel="stylesheet" href="css/style.css">
        <!-- link js file -->
        <script src="js/script.js"></script>
    
        <style>
            .main {
              flex-direction: column;
              overflow: hidden;
              background-image: url("resources/login/adlog.jpg");
              width: 1285px;
              height: 800px;
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
              border-radius: 12px;
              box-shadow: 7px 7px 10px 3px #24004628;
              padding: 24px;
              color: whitesmoke;
              text-align: center;
    
              /* Centering content */
              display: flex;
              justify-content: center;
              align-items: center;
            }
    
            .label {
              margin: 10px 5;
              font-size: 3rem;
              font-weight: bold;
              cursor: pointer;
              transition: .5s ease-in-out;
            }
    
            .input {
              width: 80%;
              height: 20px;
              background: #e0dede;
              border: none;
              outline: none;
              border-radius: 4px;
              margin-bottom: 1px;
            }
    
            .form button {
              width: 25%;
              height: 40px;
              margin-top: 2%;
              color: #fff;
              background: grey;
              font-size: 1rem;
              font-weight: bold;
              border: none;
              border-radius: 8px;
              cursor: pointer;
              transition: .2s ease-in;
              outline: none;
            }
    
            .form button:hover {
              background-color: #6d44b8;
            }
    
            .register-link {
              margin-top: 10px;
              font-size: 0.9rem;
              color: #e0dede;
            }
    
            .register-link a {
              color: #fff;
              font-weight: bold;
              text-decoration: none;
            }
        </style>
    </head>
    <body>
        <!-- Including Header -->
        <?php include 'header.php'; ?>
    
        <div class="main">
            <h2 class="label">Log in</h2>
            <form class="form" method="POST">
                <input class="input" type="text" name="adminName" placeholder="Admin Name" required="">
                <input class="input" type="password" name="password" placeholder="Password" required="">
                <button type="submit" class="form-button" name="submit">Log in</button>
            </form>
        </div>
    
        <hr>
    
        <!-- Including footer -->
        <?php include 'footer.php'; ?>
    </body>
    </html>
    