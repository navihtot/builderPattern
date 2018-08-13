<?php
use TableBuilderInterface;

interface TableDirectorInterface
{
	public function build(TableBuilderInterface $builder);
}