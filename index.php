<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KOR-Craft 官网</title>
  <style>
    body {
      background: url('background.jpg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: sans-serif;
    }
    .overlay {
      background: rgba(0,0,0,0.6);
      backdrop-filter: blur(8px);
      padding: 40px;
      border-radius: 12px;
      text-align: center;
      color: white;
    }
    h1 { color: #ff4444; font-size: 2.5rem; }
    button {
      background: crimson; border: none; color: white;
      padding: 10px 20px; margin: 10px;
      border-radius: 6px; cursor: pointer;
    }
    button:hover { background: darkred; }
  </style>
</head>
<body>
<div class="overlay">
  <h1>KOR-Craft</h1>
  <p>共产主义 Minecraft 服务器</p>
  <a href="register.php"><button>注册账号</button></a>
  <a href="login.php"><button>登录账号</button></a>
  <a href="recover.php"><button>找回密码</button></a>
</div>
</body>
</html>