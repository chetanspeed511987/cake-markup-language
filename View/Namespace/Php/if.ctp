<?php
switch ($state) {
	case self::TAG_OPEN:
		echo $this->compile('if (%s):', str_replace(array('isset(', 'empty('), array('$this->_isset(', '$this->_empty('), $this->resolve($attrs, 'expr', array('default' => 'true', 'format' => '%s', 'parse' => true))));
		break;
	case self::TAG_CLOSE:
		echo $this->compile('endif;');
}

