<?php
$tang['KSI']=-9.1751656444142E-5;
$tang['ETA']=8.5076090069491E-5;

$sol['X']['k']=-222.45470924306;
$sol['X']['e']=-8.1787760034414;
$sol['X'][1]=-0.020231298698539;

$sol['Y']['k']=-14.400586941152;
$sol['Y']['e']=392.95090925357;
$sol['Y'][1]=-0.035664413413272;

$sol['xc']=968;
$sol['yc']=548;

for( $p=0; $p<3; $p++ )
{
	print($p.': ');
	Tangential2XY($tang,$sol);
}

function Tangential2XY(array $tang, array $sol) : array
{
	$x = $sol['X']['k']*$tang['KSI'] + $sol['X']['e']*$tang['ETA'] + $sol['X'][1];
	$y = $sol['Y']['k']*$tang['KSI'] + $sol['Y']['e']*$tang['ETA'] + $sol['Y'][1];
	printf("In;%.12f;%.12f;%.12f;%.12f;",$x,$y,$sol['xc'],$sol['yc']);
	$x = $sol['xc']*($x+1);
	$y = $sol['yc']*($y+1);
	printf("Out;%.12f;%.12f\n",$x,$y);
	if( $x<100 )
		exit("Mamy to!\n");
	return ['x'=>$x,'y'=>$y];
}
?>
