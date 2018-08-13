<?php

class RandomTableDirector implements TableDirectorInterface
{
	public function build(TableBuilderInterface $builder) {
		$builder->addHeader(['This', 'Is', 'A', 'Nice', 'Table']);
		$builder->addRow(['Some', 'Example', 'Should', 'Be', 'Here']);
		$builder->addRow(['One', 'More', 'Row', 'Is', 'Here']);
		$builder->addRow(['This', 'Is', 'The', 'Last', 'One']);
		return $builder->getTable();
	}
}