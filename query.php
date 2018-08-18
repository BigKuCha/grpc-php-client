<?php
require "vendor/autoload.php";

$client = new Client\UserClient("127.0.0.1:50001", [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);

echo '-------开始查询用户信息' . PHP_EOL;
$request = new \User\RequestUser();
$request->setId(11);

$response = $client->GetUserInfo($request)->wait();
list($user, $status) = $response;

if (!$user instanceof \User\User) {
    return;
}
printf("ID:%s, 姓名:%s, 手机号:%s, 年龄：%s \n",
    $user->getID(),
    $user->getName(),
    $user->getMobile(),
    $user->getAge()
);
