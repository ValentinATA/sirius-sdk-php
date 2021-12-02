<?php


namespace Siruis\Base;


interface JsonSerializable
{
    public function serialize();

    public function deserialize($buffer);
}