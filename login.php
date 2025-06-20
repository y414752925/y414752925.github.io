<!DOCTYPE html>
<html lang="zh-CN">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>登录 - KOR-Craft</title>
<style>
  body { background: #111; color: white; display: flex; height: 100vh; justify-content: center; align-items: center; font-family: sans-serif; }
  .box { background: #222; padding: 30px; border-radius: 12px; width: 300px; }
  input, button { width: 100%; margin: 8px 0; padding: 10px; border-radius: 6px; border: none; }
  button { background: seagreen; color: white; }
</style>
</head>
<body>
<div class="box">
  <h2>登录账号</h2>
  <form action="check_login.php" method="POST">
    <input name="username" placeholder="用户名" required>
    <input type="password" name="password" placeholder="密码" required>
    <button type="submit">登录</button>
  </form>
</div>
</body>
</html>