<?php
require "vendor/autoload.php";

$client = new Client\UserClient("127.0.0.1:50001", [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);

echo '-----开始创建用户' . PHP_EOL;
$user = new \User\User();
$user->setAge(10);
$user->setName('joe');
$user->setMobile('18899008876');
$response = $client->Create($user)->wait();
list($resUser, $status) = $response;
if (!$resUser instanceof \User\User) {
    return;
}
echo '创建用户成功,ID是' . $resUser->getID() . PHP_EOL;