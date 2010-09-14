<?php
namespace de\RaumZeitLabor\PartDB2\Auth\Exceptions;

use de\RaumZeitLabor\PartDB2\Util\SerializableException,
	de\RaumZeitLabor\PartDB2\PartDB2;

class InvalidLoginDataException extends SerializableException {
	public function __construct () {
		parent::__construct(PartDB2::i18n("Username or Password wrong."));
	}
}
?>