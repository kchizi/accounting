<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Ngodasamuel\Accounting\ModelTraits\AccountingJournal;

/**
 * Class Account
 *
 * @property    int                     $id
 * @property 	string					$name
 *
 */
class Account extends Model
{
	use AccountingJournal;
}


