<?php
namespace Sample;

/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

interface GreeterIf
{
    /**
     * @param \Sample\User $user
     * @return \Sample\Response
     */
    public function SayHello(\Sample\User $user);
    /**
     * @param int $uid
     * @return \Sample\Response
     */
    public function GetUser($uid);
}
