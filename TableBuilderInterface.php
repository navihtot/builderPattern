<?php

interface TableBuilderInterface
{
	public function addHeader($row);
	public function addRow($row);
	public function getTable();
}