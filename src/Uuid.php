<?php
namespace Pimenta\Domain;

use Rhumsaa\Uuid\Uuid as RemoteUuid;

class Uuid
{

    public static function uuid()
    {
        return (string)RemoteUuid::uuid4();
    }

}
