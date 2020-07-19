# Include vs Require vs RequireOnce

## Include
If it fails to locate the file to be imported, it will still continue the script.
```php
<?php include "includes/header.php" ?>
```

## Require
If it fails to locate the file to be imported, it will halt the script.
```php
<?php require "includes/header.php" ?>
```

## Require Once
If the file to be imported has already been included, it will not require it again.
```php
<?php require_once "includes/header.php" ?>
```