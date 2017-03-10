<?php
     session_start();
     require_once 'TwitterNerMain.php';

     $msg = FALSE;
     $busca= $_POST['busca'];

    ini_set("allow_url_fopen", 1);

	$url = "http://api.twitter.com/1.1/search/tweets.json?q=%200" .$busca;
	$json = file_get_contents($url);
	preg_match_all('/\"text\":\"(.+?)\"/', $json, $tweets, PREG_SET_ORDER);

	$arq2 = fopen("ner.txt","w+");

	$i=1;
	foreach ($tweets as $tweet) {
		echo $tweet[1].  " FAKE_LABEL" . "<br><br>" ;
		//$aux2 = $tweets[1];
		//for $j=0 ; $j < 100 ; $j++ ){
		//}
		//$aux = explode(" ",(string)$aux2);
         //print_r($aux2);
		//echo $aux[1].  " FAKE_LABEL" . "<br><br>" ;
		
		
		for ($j=0; $j < count($tweet[1]) ; $j++) {

                $vetor_palavra = explode(" ", $tweet[$j]);

                for ($k=0; $k < count($vetor_palavra); $k++) {
                       $vetfinal =  $vetor_palavra[$k] . " FAKE_LABEL" ."";
                       echo $vetor_palavra[$k] . " FAKE_LABEL" ."<br>";
                       	fwrite($arq2, $vetfinal.PHP_EOL);
                       	
                }
       }
                      $enter = "" ;
		              fwrite($arq2, $enter.PHP_EOL);

		
		
		
	//	fwrite($arq2, $tweet[1].PHP_EOL);
	}


	$output = shell_exec('python C:\xampp\htdocs\TwitterStreams\Sunita\crf\samples\prepare.py < ner.txt');

	//$f=fopen("ner.txt","w+",0);
	
//	$array=explode(" ",(string)$arq2);
 //   $n_palavras=count($array);

  //  for($i=0 ; $i < $n_palavras ; $i++ ){
  //           echo "$array[$i] \n";
  //  }
	
    //     $aux = "FAKE_LABEL";
	//$array=explode(" ",(string)$arq2);
	// $s = implode(" ", $array);
    //$linha= (string)$s;
   // fwrite($arq2,$linha,strlen($linha));
    fclose($arq2);
	echo "OUTPUT ->>> ".$output;

	//$i = 1;
	//while ($linha = fgets($arq)){

	//	preg_match_all('/\"text\":\"(.+?)\"/', $linha, $tweet, PREG_SET_ORDER);
	//	if ($tweet[0][1]){
	//		echo "TWEET(".$i.") -> ".$tweet[0][1] . "<br><br>";
	//		$i++;
	//	}
	//}
?>
