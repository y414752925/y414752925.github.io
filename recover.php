<!DOCTYPE html>
<html lang="zh-CN">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>找回密码 - KOR-Craft</title>
<style>
  body { background: #111; color: white; display: flex; height: 100vh; justify-content: center; align-items: center; font-family: sans-serif; }
  .box { background: #222; padding: 30px; border-radius: 12px; width: 300px; }
  input, button { width: 100%; margin: 8px 0; padding: 10px; border-radius: 6px; border: none; }
  button { background: orange; color: white; }
</style>
</head>
<body>
<div class="box">
  <h2>找回密码</h2>
  <form method="POST">
    <input name="qq" placeholder="请输入注册绑定的QQ号" required>
    <button type="submit">找回</button>
  </form>
</div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $qq = trim($_POST['qq']);
  $found = false;
  foreach (glob(__DIR__.'/user/*.json') as $file) {
    $data = json_decode(file_get_contents($file), true);
    if ($data['qq'] === $qq) {
      echo "<p style='color:lime;'>匹配成功！账号：{$data['username']}（密码为加密状态无法直接找回，请联系管理员）</p>";
      $found = true;
      break;
    }
  }
  if (!$found) echo "<p style='color:red;'>未找到对应QQ号。</p>";
}
?>