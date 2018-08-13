<?php

use PHPUnit\Framework\TestCase;


class TableBuilderTest extends TestCase
{
	public function testCliTableBuilder() {
		$builder = new CliTableBuilder();

		$director = new RandomTableDirector();
		$table = $director->build($builder);
		$this->assertStringStartsNotWith('<table>', $table);
		echo "\n\n\n";
		echo $table;
	}

	public function testHtmlTableBuilder() {
		$builder = new HtmlTableBuilder();

		$director = new RandomTableDirector();
		$table = $director->build($builder);
		$this->assertStringStartsWith('<table>', $table);
		echo "\n\n\n";
		echo $table;

	}
}