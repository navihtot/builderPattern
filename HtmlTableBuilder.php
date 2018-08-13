<?php


class HtmlTableBuilder implements TableBuilderInterface
{
	private $table = '';

	public function __construct()
	{
		$this->table = '';
	}

	public function addHeader($row)
	{
		$this->table .= "<tr>";
		foreach ($row as $key => $column) {
			$this->table .= "<th>" . $column . '</th>';
		}
		$this->table .= "</tr>";
	}

	public function addRow($row)
	{
		$this->table .= "<tr>";
		foreach ($row as $key => $column) {
			$this->table .= "<td>" . $column . '</td>';
		}
		$this->table .= "</tr>";

	}

	public function getTable()
	{
		$table = '<table>' . $this->table . '</table>';
		$this->table = ''; // important
		return $table;
	}
}