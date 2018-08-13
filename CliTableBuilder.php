<?php


class CliTableBuilder implements TableBuilderInterface
{
	private $table = ''; // usually some object

	public function __construct()
	{
		$this->table = '';
	}

	public function addHeader($row)
	{
		$this->table .= "\033[1m";
		$this->table .= " " . str_pad("", 17 * count($row) - 1,"-");
		$this->table .= "\n";
		foreach ($row as $key => $column) {
			$this->table .= "| " . str_pad($column, 15);
		}
		$this->table .= "|";
		$this->table .= "\n";
		$this->table .= " " . str_pad("", 17 * count($row) - 1,"-");
		$this->table .= "\e[0m";
	}

	public function addRow($row)
	{
		$this->table .= "\n";
		foreach ($row as $key => $column) {
			$this->table .= "| " . str_pad($column, 15);
		}
		$this->table .= "|";
		$this->table .= "\n";
		$this->table .= " " . str_pad("", 17 * count($row) - 1,"-");

	}

	public function getTable()
	{
		$table = $this->table;
		$this->table = ''; // important
		return $table;
	}
}