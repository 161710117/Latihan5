<?php
class baju
{
	public $namabaju;
	public $warna;
	public $type;
	public $merk;

	public function __construct($namabaju, $warna, $type, $merk)
	{
		$this->namabaju = $namabaju;
		$this->warna = $warna;
		$this->type = $type;
		$this->merk = $merk;
	}

	public function get_namabaju()
	{
		return $this->namabaju;
	}
	public function get_warna()
	{
		return $this->warna;
	}
	public function get_type()
	{
		return $this->type;
	}
	public function get_merk()
	{
		return $this->merk;
	}
}
?>