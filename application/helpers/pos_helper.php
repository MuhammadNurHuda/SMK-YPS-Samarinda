<?php 
function cek()
{
	$CI = & get_instance();
	$session = $CI-> session ->userdata('status_login');
	if ($session != 'oke') {
		redirect ('auth/login');
	}
}

function cek_login()
{
	$CI = & get_instance();
	$session = $CI-> session ->userdata('status_login');
	if ($session == 'oke') {
		redirect ('dashboard');
	}
}

function tanggal()
{
	return date('Y-m-d');
}

function tgl_indo($tanggals)
{
	//2016-04-03
	//03-04-2016
	$tanggal=substr($tanggals,8,2);
	$bulan=substr($tanggals,5,2);
	$tahun=substr($tanggals,0,4);
	return $tanggal." ".bulan($bulan)." ".$tahun;
}

function bulan($bulan)
{
	switch ($bulan){
		case 1:return 'Januari';
		break;
		case 2:return 'Februari';
		break;
		case 3:return 'Maret';
		break;
		case 4:return 'April';
		break;
		case 5:return 'Mei';
		break;
		case 6:return 'Juni';
		break;
		case 7:return 'Juli';
		break;
		case 8:return 'Agustus';
		break;
		case 9:return 'September';
		break;
		case 10:return 'Oktober';
		break;
		case 11:return 'November';
		break;
		case 12:return 'Desember';
		break;
	}
}

 ?>

