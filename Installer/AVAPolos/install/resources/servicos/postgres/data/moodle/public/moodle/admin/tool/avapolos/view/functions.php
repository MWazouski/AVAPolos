<?php
   set_time_limit(0);


  class MySQL_AVAEntity{

    protected $mysql_host;
    protected $mysql_username;
    protected $mysql_password;
    protected $db;
    protected $mysql_port;
    protected $connection;

    public function __construct($mysql_host, $mysql_username, $mysql_password, $db, $mysql_port){
      $this->mysql_host      = $mysql_host;
      $this->mysql_username  = $mysql_username;
      $this->mysql_password  = $mysql_password;
      $this->db              = $db;
      $this->mysql_port      = $mysql_port;
      $this->connection      = null;
    }

    protected function create_mysql_connection(){
      $this->connection = mysqli_connect($this->mysql_host, $this->mysql_username, $this->mysql_password, $this->db, $this->mysql_port);
      if(!$this->connection){
        die("Não foi possível conectar ao banco de dados.<br>");
      }else{
        return true;
      }
    }

    protected function check_connection(){
      if($this->connection->connect_error){
        die("Falha na conexão.<br>");
      }
      return true;
    }

    protected function close_mysql_connection(){
      mysqli_close($this->connection);
    }

    protected function dump_table($table){
      if(check_connection()){
        $query = "SELECT * FROM ".$table.";";
        $output = mysqli_query($query);
        return $output;
      }
    }

    protected function import_mysqldump($filename){
      $templine = '';
      // Read in entire file
      $lines = file($filename);
      // Loop through each line
      foreach ($lines as $line){
        // Skip it if it's a comment
        if (substr($line, 0, 2) == '--' || $line == '')
            continue;
        // Add this line to the current segment
        $templine .= $line;
        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';'){
            // Perform the query
            mysqli_query($this->connection, $templine) or print('Error performing query \'<strong>' . $templine . '<\strong>\': ' . mysqli_error() . '<br /><br />');
            // Reset temp variable to empty
            $templine = '';
        }
      }
    }

    protected function insert_dummy_value(){
      if($this->check_connection()){
        $query = "INSERT INTO dummy VALUES (NULL);";
        mysqli_query($this->connection, $query );
      }
    }

    protected function create_mysqldump($filename){
      $command = 'mysqldump -u ' . $this->mysql_username . ' --password="' . $this->mysql_password . '" -h ' . $this->mysql_host . ' -P ' . $this->mysql_port . ' ' . $this->db . ' > ' . $filename;
      exec($command);
    }

    protected function fetch_query($query){
      $row = [];
      $resultado;
      if ($result = mysqli_query($this->connection, $query)) {
          while ($row[] = $result->fetch_row()) {
          }
          $result->close();
      }
      return $row;
    }

    protected function execute_query($query){
      mysqli_query($this->connection, $query);
    }
  }

  class Slave extends MySQL_AVAEntity{
    public function __construct($mysql_host, $mysql_username, $mysql_password, $db, $mysql_port){
      parent::__construct($mysql_host, $mysql_username, $mysql_password, $db, $mysql_port);
      echo $this->connection;
    }

    public function stop_slave(){
      $query = 'STOP SLAVE;';
      mysqli_query($this->connection, $query);
    }

    public function start_slave(){
      $query = 'START SLAVE;';
      if(parent::check_connection()){
        mysqli_query($this->connection, $query);
      }
    }

    public function wait_for_finish_logs(){
      do{
        exec('echo "show slave status \G;" | mysql -u replication -ppassword -h 10.5.0.5 -P 3307 > teste.txt');
        $status = $this->get_slave_status();
        echo 'SLAVE_STATUS='.$status.'<br>';
        if($status == "Slave has read all relay log; waiting for more updates" ) {
          // echo 'Slave has read all relay log; waiting for more updates';
          break;
        }
        sleep(5);
      }while(true);
    }

    public function get_slave_status(){
      exec('echo "show slave status \G;" | mysql -u replication -ppassword -h 10.5.0.5 -P 3307 > teste.txt');
      return substr(exec("grep 'Slave_SQL_Running_State:' teste.txt"), 31);
    }

    public function create_mysql_connection(){
      parent::create_mysql_connection();
    }

    public function check_connection(){
      parent::check_connection();
    }

    public function close_mysql_connection(){
      parent::close_mysql_connection();
    }

    public function dump_table($table){
      parent::dump_table($table);
    }

    public function import_mysqldump($filename){
      parent::import_mysqldump($filename);
    }

    public function insert_dummy_value(){
      parent::insert_dummy_value();
    }

    public function create_mysqldump($filename){
      parent::create_mysqldump($filename);
    }

    public function fetch_query($query){
      parent::fetch_query($query);
    }

    public function update_master_position($master_status){
      // echo "Var_dump de dentro da update_master_position<br>";
      // echo "Master_log_file = " . $master_status["master_log_file"]."<br>";
      // echo "Master_log_pos = " . $master_status["master_log_pos"]."<br>";
      $query = "CHANGE MASTER TO master_host='10.5.0.4', master_port=3305, master_user='replication', master_password='password', master_log_file='".$master_status["master_log_file"]."', master_log_pos=".$master_status["master_log_pos"].";";
      // echo "<br>".$query."<br>";
      return "Fez algo? ". parent::execute_query($query);
    }

  }

  class Master extends MySQL_AVAEntity{
    public function __construct($mysql_host, $mysql_username, $mysql_password, $db, $mysql_port){
      parent::__construct($mysql_host, $mysql_username, $mysql_password, $db, $mysql_port);
    }

    public function create_mysql_connection(){
      parent::create_mysql_connection();
    }

    public function check_connection(){
       parent::check_connection();
    }

    public function close_mysql_connection(){
      parent::close_mysql_connection();
    }

    public function dump_table($table){
      parent::dump_table($table);
    }

    public function import_mysqldump($filename){
      parent::import_mysqldump($filename);
    }

    public function insert_dummy_value(){
      parent::insert_dummy_value();
    }

    public function create_mysqldump($filename){
      parent::create_mysqldump($filename);
    }

    public function get_log_status(){
      $query = "SHOW MASTER STATUS;";
      $master_status = parent::fetch_query($query);
      $array = array("master_log_file"=>$master_status[0][0],"master_log_pos" => $master_status[0][1]);
      // echo "Var_dump de dentro da get_log_status<br>";
      // var_dump($array);
      return $array;
      // return $array = [$master_status[0][0], $master_status[0][1]];
    }
  }

  class Connect_SSH{
    public $ip;
    public $port;
    public $login;
    public $password;
    public $sh_file;
    public $output_file;
    public $connection;

    public function __construct($ip, $port, $login, $password){
      $this->ip         = $ip;
      $this->port       = $port;
      $this->login      = $login;
      $this->password   = $password;
      $this->dirPath    = '/opt/AVAPolos';
      $this->sh_file    = 'sync.sh'; //Script de sinconização! Este arquivo nunca muda!
      $this->output_file= 'sync.log'; //Script de sinconização! Este arquivo nunca muda!
    }

    public function create_ssh_connection(){
      $this->connection = ssh2_connect($this->ip, 22);
      return $this->connection;
    }

    public function close_ssh_connection(){
      $this->connection = null; 
      unset($this->connection); 
    }

    public function exec_ssh_export(){
      // print_r($this->connection);
      if(ssh2_auth_password($this->connection, 'avapolos', 'avapolos')) { //CREDENCIAIS
        try{
          $stream = ssh2_exec($this->connection, 'cd '.$this->dirPath.'; bash '.$this->sh_file.' 1 > '.$this->output_file);
        }catch(Exception $e){
          echo "Erro";
        }
        ssh2_exec($this->connection, 'exit');
      }else{
        die('Falha na autenticação...');
      }
    }

    public function exec_ssh_import(){
      // print_r($this->connection);
      if(ssh2_auth_password($this->connection, 'avapolos', 'avapolos')) { //CREDENCIAIS
        try{
           $stream = ssh2_exec($this->connection, 'cd '.$this->dirPath.';bash '.$this->sh_file.' 2 > '.$this->output_file);
        }catch(Exception $e){
          echo "Erro";
        }
        ssh2_exec($this->connection, 'exit');
      }else{
        die('Falha na autenticação...');
      }
    }
  }

?>
