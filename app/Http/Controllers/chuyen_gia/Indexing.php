<?php

run in terminal php artisan tinker 

      for($i=0;$i<90;$i++){
        $temp1=$i*100000;
        $temp2=($i+1)*100000;
        $data = App\chuyen_gia_khcn::where('id', '>', $temp1)->where('id','<',$temp2+1)->get();
        $data->addToIndex();
}
