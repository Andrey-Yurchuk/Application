<?php

declare(strict_types=1);

namespace Application\Database;

final readonly class Databaseconfig implements Databaseinterface
{
    public const HOST = 'localhost';

    public const DBNAME = 'products_db';

    public const USER = 'admin';

    public const PASSWORD = 'StrongPassword123!';
}
