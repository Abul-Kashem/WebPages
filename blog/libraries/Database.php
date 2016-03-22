<?php
class Database{
    public $host=DB_HOST;
    public $username=DB_USER;
    public $password=DB_PASS;
    public $db_name=DB_NAME ;
    
    public $link;
    public $error;
    
    
    
    //class constructon
    
    public function __construct(){
        //Call connect function
        $this->connect();
    }
    
    
    //Connectior
    public function connect()
    {
        $this->link = new mysqli($this->host,$this->username,$this->password,$this->db_name);
        
        
        if($this->link)
        {
            $this->error = "Connection Failed: ".$this->link->connect_error;
            
            return false;
        }
        else
        {
            
        }
    }
    
    
    //Select Query
    
    public function select($query)
    {
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        
        if($result->num_rows>0)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }
    
    //Insert Query
    
    public function insert($query)
    {
        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        
        //Validate Insert
        
        if($insert_row)
        {
            header("Location: index.php?msg=".urlencode('Record Added'));
            exit();
        }
        else
        {
            die('Error: ('. $this->link->errno .') '. $this->link->error);
        }
    } 
    
    //Update Query
    
    public function update($query)
    {
        $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
        
        //Validate Insert
        
        if($update_row)
        {
            header("Location: index.php?msg=".urlencode('Record Updated'));
            exit();
        }
        else
        {
            die('Error: ('. $this->link->errno .') '. $this->link->error);
        }
    }
    //Delete Query
    
    public function delete($query)
    {
        $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
        
        //Validate Insert
        
        if($delete_row)
        {
            header("Location: index.php?msg=".urlencode('Record Deleted'));
            exit();
        }
        else
        {
            die('Error: ('. $this->link->errno .') '. $this->link->error);
        }
    }

}



