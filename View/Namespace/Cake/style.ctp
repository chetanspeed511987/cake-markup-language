<?php
switch ($state) {
	case self::TAG_OPEN:
	case self::TAG_SELF:
		echo $this->_compile('$out = $this->%s->style(%s, %s); $set = %s; if (!empty($set)) { $this->viewVars[$set] = $out; } else { echo $out; }', $this->_helpers['Html'], $this->_processAttribute($attributes, 'data', array('default' => 'array()', 'format' => null)), $this->_processAttribute($attributes, 'oneline', array('default' => 'true', 'format' => null)), $this->_processAttribute($attributes, 'set'));
}
