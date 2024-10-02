<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmic Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to right, #1a1a1a, #2e2e2e);
        }

        .login-container {
            background: rgba(0, 0, 0, 0.9);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(255, 87, 34, 0.5);
            text-align: center;
            width: 400px;
            position: relative;
        }

        h2 {
            margin-bottom: 30px;
            font-size: 28px;
            color: #ffeb3b; /* Yellow */
            text-transform: uppercase;
        }

        input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 2px solid rgba(255, 255, 255, 0.6);
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 16px;
            transition: background 0.3s, border-color 0.3s;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        input:focus {
            background: rgba(255, 255, 255, 0.2);
            outline: none;
            border-color: #ffeb3b; /* Yellow */
        }

        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #ff5722, #ffeb3b); /* Orange to Yellow gradient */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
            box-shadow: 0 4px 20px rgba(255, 87, 34, 0.5);
        }

        button:hover {
            transform: translateY(-2px);
            background: linear-gradient(to right, #ffeb3b, #ff5722); /* Reverse gradient on hover */
        }

        .error-message {
            color: #ff4d4d; /* Red for error messages */
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div id="message" class="error-message"></div>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === "user" && password === "123") {
                window.location.href = "{{ route('resume') }}"; // Redirect to the resume page
            } else {
                document.getElementById('message').innerText = 'Invalid username or password.';
            }
        });
    </script>
</body>
</html>
