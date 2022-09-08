<?php

require 'database/Connection.php';
require 'database/queryBuilder.php';

$pdo = Connection::make();

return new QueryBuilder(Connection::make());
