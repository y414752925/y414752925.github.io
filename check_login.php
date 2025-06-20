<?php
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');
$found = false;
foreach (glob(__DIR__."/user/*.json") as $file) {
  $data = json_decode(file_get_contents($file), true);
  if ($data['username'] === $username && password_verify($password, $data['password'])) {
    $found = true;
    echo "登录成功！<br>欢迎你，{$data['username']}！<br>绑定QQ：{$data['qq']}<br><a href='index.php'>返回首页</a>";
    break;
  }
}
if (!$found) echo "用户名或密码错误。<a href='login.php'>返回</a>";