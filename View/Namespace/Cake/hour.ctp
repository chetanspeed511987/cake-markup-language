<?php
switch ($state) {
	case self::TAG_OPEN:
	case self::TAG_SELF:
		echo $this->compile('$out = $this->%s->hour(%s, %s, %s); $set = %s; if (!empty($set)) { $this->set($set, $out); } else { echo $out; }', $this->{$ns}->settings['classes']['Form'], $this->resolve($attrs, 'field'), $this->resolve($attrs, 'format24'), $this->resolve($attrs, 'attributes', array('type' => self::TYPE_ARRAY)), $this->resolve($attrs, 'set'));
}

