<?php
namespace Pimenta\Domain;

use Exception;

final class CorruptAggregateHistory extends Exception implements ButtercupProtectsException
{
}
