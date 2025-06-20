<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>KOR-Craft 注册</title>
<style>
  body { background: #111; color: white; display: flex; height: 100vh; justify-content: center; align-items: center; font-family: sans-serif; }
  .box { background: #222; padding: 30px; border-radius: 12px; width: 300px; }
  input, button { width: 100%; margin: 8px 0; padding: 10px; border-radius: 6px; border: none; }
  button { background: crimson; color: white; }
</style>
</head>
<body>
<div class="box">
  <h2>注册账号</h2>
  <form action="save_user.php" method="POST">
    <input name="username" placeholder="用户名" required>
    <input type="password" name="password" placeholder="密码" required>
    <input name="qq" placeholder="QQ号" required>
    <div style="display:flex;align-items:center;">
      <input name="captcha" placeholder="验证码" required style="flex:1;">
      <img src="captcha.php" onclick="this.src='captcha.php?'+Math.random()" title="点击刷新" style="height: 32px; margin-left: 10px;">
    </div>
    <button type="submit">注册</button>
  </form>
</div>
</body>
</html>