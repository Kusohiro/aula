foreach($vetorJogador as $dado){
		  if($dado == 6){
            $contt6++;
        }
	 if($contt6 == 3){
        $jogadast = 20; 
    }
		  if($dado == 5){
            $contt5++;
        }
	 if($contt5 == 3){
        $jogadast = 20; 
    }
		  if($dado == 4){
            $contt4++;
        }
	 if($contt4 == 3){
        $jogadast = 20; 
    }  
		if($dado == 3){
            $contt3++;
        }
	 if($contt3 == 3){
        $jogadast = 20; 
    }  
		if($dado == 2){
            $contt2++;
        }
	 if($contt2 == 3){
        $jogadast = 20; 
    }  
		if($dado == 1){
            $contt1++;
        }
	 if($contt1 == 3){
        $jogadast = 20; 
    }
	}
	echo "<br>Trinca: $jogadast";
