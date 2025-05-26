<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome to Course Registration</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      overflow: hidden;
    }

    .welcome-box {
      text-align: center;
      padding: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      max-width: 500px;
      backdrop-filter: blur(5px);
      opacity: 0;
      transform: scale(0.9);
      animation: fadeInScale 1s ease-out forwards;
    }

    @keyframes fadeInScale {
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .welcome-box h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      animation: slideUp 1s ease-out 0.3s forwards;
      opacity: 0;
    }

    .welcome-box p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      animation: slideUp 1s ease-out 0.5s forwards;
      opacity: 0;
    }

    .welcome-box a {
      text-decoration: none;
      background-color: #fff;
      color: #2575fc;
      padding: 12px 25px;
      border-radius: 30px;
      font-weight: bold;
      transition: background 0.3s ease, transform 0.3s ease;
      animation: slideUp 1s ease-out 0.7s forwards;
      opacity: 0;
      display: inline-block;
    }

    .welcome-box a:hover {
      background-color: #f1f1f1;
      transform: scale(1.05);
    }

    @keyframes slideUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
      from {
        transform: translateY(30px);
      }
    }
  </style>
</head>
<body>
  <div class="welcome-box">
    <h1>Welcome to Course Registration</h1>
    <p>Register for your desired courses quickly and easily.</p>
    <a href="registration.html">Get Started</a>
  </div>
</body>
</html>
