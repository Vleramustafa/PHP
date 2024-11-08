<?php
    
    // $my_file = fopen('ds.txt','w');

    //  fclose($my_file);

    // //set the name of the file to be open
    // $my_filename='ds.txt';

    // //open the file for reading
    // $my_file=fopen($my_filename,'r');
 
    // //get the size of the file
    // $my_size=filesize($my_filename);

    // //read the contents of the file into a variable
    // $my_filedate=fread($my_file,$my_size);


    // $file=fopen('example.txt','r');

    // while(!feof($file)){
    //     echo fgets($file) . "<br>";
    // }

    // fclose($file);

    // $my_text="Digital School\n";

    // fwrite($my_file,$my_text);

    // $h=fopen('data.txt','w+');
    // fwrite($h,'Text test 1');

    file_put_contents('test.txt','\nText test 1');
    echo file_get_contents('test.txt');
    
?>