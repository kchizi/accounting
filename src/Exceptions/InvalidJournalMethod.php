<?php

namespace Ngodasamuel\Accounting\Exceptions;

class InvalidJournalMethod extends BaseException {
	
	public $message = 'Journal methods must be credit or debit';
	
}