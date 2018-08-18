<?php

namespace Client;

use Grpc\BaseStub;
use User\RequestUser;
use User\User;

class UserClient extends BaseStub
{
    /**
     * UserClient constructor.
     *
     * @param       $hostname
     * @param array $opts
     * @param null  $channel
     * @throws \Exception
     */
    public function __construct($hostname, array $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param RequestUser $argument
     * @param array       $metadata
     * @param array       $options
     * @return \Grpc\UnaryCall
     */
    public function GetUserInfo(RequestUser $argument, $metadata = [], $options = [])
    {
        return $this->_simpleRequest(
            '/user.UserService/GetUserInfo',
            $argument,
            [User::class, 'decode'],
            $metadata,
            $options
        );
    }

    /**
     * @param User  $argument
     * @param array $metadata
     * @param array $options
     * @return \Grpc\UnaryCall
     */
    public function Create(User $argument, $metadata = [], $options = [])
    {
        return $this->_simpleRequest(
            '/user.UserService/Create',
            $argument,
            [User::class, 'decode'],
            $metadata,
            $options
        );
    }
}