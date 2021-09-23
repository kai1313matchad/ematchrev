<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('idnBulanTahun'))
{
	function idnBulanTahun($mY)
	{
		//format parameter mm-yyyy
		$d = explode('-',$mY);
		$m = intval($d[1])-1;
		$bulan = ["JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI",
		  "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER"
		];
		return $bulan[$m].' '.$d[0];
	}
}

