<?php
require __DIR__ . '/vendor/autoload.php';
use LibrarySystem\Books;
use LibrarySystem\User\Admin;
use LibrarySystem\User\Librarian;
use LibrarySystem\User\User;
use LibrarySystem\Trait\Logging;
use LibrarySystem\Trait\UuidTrait;
use LibrarySystem\Member;
use LibrarySystem\Library;
use LibrarySystem\NotificationInterface;