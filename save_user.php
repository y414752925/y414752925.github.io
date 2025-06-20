<?php
session_start();
$dir = __DIR__ . "/user";
if (!file_exists($dir)) mkdir($dir, 0755, true);
if ($_POST['captcha'] != ($_SESSION['captcha'] ?? '')) exit("验证码错误！<a href='register.php'>返回</a>");
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$qq = trim($_POST['qq']);
$hashed = password_hash($password, PASSWORD_DEFAULT);
$data = ['username' => $username, 'password' => $hashed, 'qq' => $qq, 'registered_at' => date("Y-m-d H:i:s")];
function random_filename($len = 16) { return bin2hex(random_bytes($len / 2)); }
foreach (glob(__DIR__."/user/*.json") as $file) {
  $content = json_decode(file_get_contents($file), true);
  if ($content['username'] === $username) exit("用户名已存在！<a href='register.php'>换一个</a>");
}
file_put_contents($dir.'/'.random_filename().'.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo "注册成功！<a href='login.php'>去登录</a>";