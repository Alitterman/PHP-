<?php

class  Message{
    var $name;
    var $time;
    var $content;
    function __construct($n,$t,$c)
    {
        $this->name = $n;
        $this->time = $t;
        $this->content = $c;
    }
    function show()
    {
        echo "Name:  ".$this->name."<br>";
        echo "Time:  ".$this->time."<br>";
        echo "Content:  ".$this->content."<br>";
        echo "---------------------------------"."<br>";
    }
}
class DB{
    var $database = null;
    
    function __construct()
    {
        //����
        $dbhost = "localhost";
        $account = "root";
        $password = "root";
    
        $this->database = mysql_connect($dbhost, $account, $password);
        //�������ݿ�����
         if($this->database)
         {
         //echo "DB connected";
         }
         else {
         //echo "DB connect fail";
         }
         
        $result = mysql_select_db("db_messages",$this->database);
        //     ���ݱ�ѡ�����
               if ($result)
         {
         //echo "DB select success";
         }
         else {
        // echo "DB select fail";
         }
         }

        function __destruct()
        {
            //����
            mysql_close($this->database);
        }
    
}
//run test
//$m = new Message("Ren","2019-02-02","I");
//$m ->show();
//$db = new DB;
?>