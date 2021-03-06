<?php
Class User extends CI_Model
{
 	function login($username, $password)
 	{
/*
		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'EDIT',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);
*/

		$this -> db -> select('salt');
   		$this -> db -> from('users_auth');
   		$this -> db -> where('username', $username);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		$result = $query -> result_array();

		foreach($result as $row){
			$saltx = $row['salt'];
		}

   		//$this -> db -> where('userpword', MD5($password));

		//$intermediateSalt = md5(uniqid(rand(), true));
		//$salt = substr($intermediateSalt, 0, 6);
		$salted = hash("sha256", $password.$saltx);
		
   				
   		$this -> db -> select('userID, username, userpword');
   		$this -> db -> from('users_auth');
   		$this -> db -> where('username', $username);
   		$this -> db -> where('userpword', $salted);
   		$this -> db -> limit(1);

   		$query = $this -> db -> get();

   		if($query -> num_rows() == 1)
   		{
     			return $query->result();
   		}
   		else
   		{
     			return false;
   		}
 	}

	function getRole($userID){
/*		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'EDIT',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);
*/	
		$this -> db -> select('roleID, role_type, role_section');
   		$this -> db -> from('users_role');
   		$this -> db -> where('userID', $userID);
   		//$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getUserInfo($userID){
/*		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'EDIT',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);
*/

		$this -> db -> select('userFName, userMName, userLName');
   		$this -> db -> from('users');
   		$this -> db -> where('userID', $userID);
   		$this -> db -> limit(1);

		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1)
   		{
     			return $query->row_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getUserInfopt1($userID){
/*		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'EDIT',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);
*/
		$this -> db -> select('userFName, userMName, userLName');
   		$this -> db -> from('users');
   		$this -> db -> where('userID', $userID);
   		$this -> db -> limit(1);

		$query = $this -> db -> get();
		
		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getUserInfo2($userID){
/*		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'EDIT',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);*/

		$this -> db -> select('userFName, userMName, userLName');
   		$this -> db -> from('users');
   		$this -> db -> where('userID', $userID);
   		$this -> db -> limit(1);

		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1)
   		{
     			return $query->row_array();
   		}
   		else
   		{
     			return "none";
   		}
	}

	function getUserInfo3($username){
/*		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'EDIT',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);*/

		$this -> db -> select('userFName, userMName, userLName');
   		$this -> db -> from('users');
		$this->db->join('users_auth', 'users.userID = users_auth.userID');
   		$this -> db -> where('users_auth.username', $username);
   		$this -> db -> limit(1);

		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}
	
	function getUserID($username){
/*		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'EDIT',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);*/

		$this -> db -> select('userID');
   		$this -> db -> from('users_auth');
   		$this -> db -> where('username', $username);
   		//$this -> db -> limit(1);

		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->row_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function selectUsers(){
/*		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'SELECT',
			'form' => 'Users',
			'committedTo' => '',
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);*/


		$this -> db -> select('users.userID, users.userFName, users.userMName, users.userLName, users_auth.username');
   		$this -> db -> from('users', 'users_auth');
		$this->db->join('users_auth', 'users.userID = users_auth.userID');
		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result();
   		}
   		else
   		{
     			return false;
   		}
	}
	
	function selectUsersBySection($section){
/*		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'SELECT',
			'form' => 'Users',
			'committedTo' => '',
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);*/


		$this -> db -> select('users.userID, users.userFName, users.userMName, users.userLName, users_auth.username, users_role.role_type');
   		$this -> db -> from('users', 'users_auth', 'users_role');
		$this->db->join('users_auth', 'users.userID = users_auth.userID');
		$this->db->join('users_role', 'users.userID = users_role.userID');
		$this->db->where('users_role.role_section', $section);
		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getUsers($section){
		$this -> db -> select('userID, role_section');
   		$this -> db -> from('users_role');
		//$this->db->join('users_role', 'users.userID = users_role.userID');
		$this->db->where('role_section', $section);
		$this->db->where('role_type', 'Student');
		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function selectUsers_pt2($name, $uname){
	
		/*$query = $this->db->query("SELECT users_role.role_type, users_role.role_section FROM  users_role, users_auth, users WHERE users.userID = users_auth.userID AND users.userID = users_role.userID AND CONCAT(users.userFName, ' ', users.userLName)='$name' AND users_auth.username='$uname'");*/

		$query = $this->db->query("SELECT users_role.role_type, users_role.role_section FROM  users_role, users_auth, users WHERE users.userID = users_auth.userID AND users.userID = users_role.userID AND users_auth.username='$uname'");

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result();
   		}
   		else
   		{
     			return false;
   		}
	}

	/*	$this -> db -> select('users.userID, users.userFName, users.userMName, users.userLName, users_auth.username, users_role.role_type, users_role.role_section');
   		$this -> db -> from('users', 'users_auth', 'users_role');
		$this->db->join('users_auth', 'users.userID = users_auth.userID');
		$this->db->join('users_role', 'users.userID = users_role.userID');
   		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result();
   		}
   		else
   		{
     			return false;
   		}
	}*/

	function selectUsers2($userID){
		$this -> db -> select('users.userID, users.userFName, users.userMName, users.userLName, users_auth.username, users_auth.userpword, users_role.role_type, users_role.role_section, users_role.role_date, users_auth.secret_question, users_auth.secret_answer');
   		$this -> db -> from('users', 'users_auth', 'users_role');
		$this->db->join('users_auth', 'users.userID = users_auth.userID');
		$this->db->join('users_role', 'users.userID = users_role.userID');
		$this->db->where('users.userID', $userID);
   		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result();
   		}
   		else
   		{
     			return false;
   		}
	}

	function searchUser($string){

		/*$query = $this->db->query("SELECT users.userID, users.userFName, users.userMName, users.userLName, users_auth.username FROM users_auth, users WHERE users.userID = users_auth.userID AND CONCAT(users.userFName, ' ', users.userLName) LIKE '%$string%'");*/

		$query = $this->db->query("SELECT users.userID, users.userFName, users.userMName, users.userLName, users_auth.username FROM users_auth, users WHERE users.userID = users_auth.userID AND (users.userFName='$string' OR users.userMName='$string' OR users.userLName='$string')");

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getMName($username){
		/*$this -> db -> select('users.userMName');
   		$this -> db -> from('users_auth', 'users');
		$this->db->join('users_auth', 'users.userID = users_auth.userID');
		$this->db->where('users_auth.username', $username);
   		$query = $this -> db -> get();
		*/
		$query = $this->db->query("SELECT userMName FROM users, users_auth WHERE users.userID = users_auth.userID AND users_auth.username = '$username'");	

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result();
   		}
   		else
   		{
     			return false;
   		}
	}

	function changePword($username, $password){
		//$password = "bscs114";
		$intermediateSalt = md5(uniqid(rand(), true));
		$salt = substr($intermediateSalt, 0, 6);
		$salted = hash("sha256", $password.$salt);

		$data3 = array(	
			'userpword' => $salted,
			'salt' => $salt);
		$this->db->where('username', $username);
		$this->db->update('users_auth', $data3);
	}

	function getUsernames($fname, $mname, $lname){
		/*$this -> db -> select('username');
   		$this -> db -> from('users_auth');
		$this->db->join('users', 'users_auth.userID = users.userID');
		$this -> db -> where('users.userFName !=', $fname);
		$this -> db -> where('users.userLName !=', $lname);
		$this -> db -> where('users.userMName !=', $mname);
   	*/
		$query = $this->db->query("SELECT username FROM users_auth, users WHERE users.userID = users_auth.userID AND (users.userFName !='$fname' OR users.userMName!='$mname' OR users.userLName!='$lname')");		

		//$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getUsernames2($userID){
		$this -> db -> select('username');
   		$this -> db -> from('users_auth');
   		$this -> db -> where('userID !=', $userID);

		$query = $this -> db -> get();
		//$query = $this->db->query("SELECT username FROM users_auth, users WHERE users.userID = users_auth.userID AND (users.userFName !='$fname' OR users.userMName!='$mname' OR users.userLName!='$lname')");
		
   		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function addUser($lname, $fname, $mname, $role, $section, $username, $password, $date, $secques, $secans){
		$this -> db -> select('salt');
   		$this -> db -> from('users_auth');
   		$this -> db -> where('username', $username);
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		$result = $query -> result_array();
		$saltx = "";
		foreach($result as $row){
			$saltx = $row['salt'];
		}
		$salted = hash("sha256", $password.$saltx);
		
		$this -> db -> select('users.userID');
   		$this -> db -> from('users');
		$this->db->join('users_auth', 'users.userID = users_auth.userID');
   		$this -> db -> where('users_auth.username', $username);
		$this -> db -> where('users_auth.userpword', $salted);
		$this -> db -> where('users.userFName', $fname);
		$this -> db -> where('users.userLName', $lname);
		$this -> db -> where('users.userMName', $mname);
		$userID = 0;
		
		$query = $this -> db -> get()->result_array();
		foreach($query as $row){
			$userID = $row['userID'];
		}


		if($userID != 0){
			$maxroleID = 0;

			$this->db->select_max('roleID');
			$query1 = $this->db->get('users_role');
			$res1 = $query1->row_array();

			if($query1 -> num_rows() >= 1) $maxroleID = $res1['roleID'];

			$data2 = array(
			'roleID' => $maxroleID+1,
			'userID' => $userID,
			'role_type' => $role,
			'role_section' => $section);
			$this->db->insert('users_role', $data2);

		}
		else{
			$maxuserID = 0;

			$this->db->select_max('userID');
			$query1 = $this->db->get('users');
			$res1 = $query1->row_array();

			if($query1 -> num_rows() >= 1) $maxuserID = $res1['userID'];

		$data = array(
			'userID' => $maxuserID+1,
			'userLName' => $lname,
			'userFName' => $fname,
			'userMName' => $mname);
		$this->db->insert('users', $data);

		$this -> db -> select('userID');
   		$this -> db -> from('users');
		$this -> db -> where('userLName', $lname);
		$this -> db -> where('userFName', $fname);
		$this -> db -> where('userMName', $mname);

		$result = $this->db->get()->result_array();
		foreach($result as $row){
			$userID = $row['userID'];
		}

		$this->db->select_max('roleID');
		$query1 = $this->db->get('users_role');
		$res1 = $query1->row_array();

		if($query1 -> num_rows() >= 1) $maxroleID = $res1['roleID'];
	
		$data2 = array(
			'roleID' => $maxroleID+1,
			'userID' => $userID,
			'role_type' => $role,
			'role_section' => $section,
			'role_date' => $date);
		$this->db->insert('users_role', $data2);

		//$pword = MD5($password);

		$intermediateSalt = md5(uniqid(rand(), true));
		$salt = substr($intermediateSalt, 0, 6);
		$salted = hash("sha256", $password.$salt);

		$this->db->select_max('authID');
		$query1 = $this->db->get('users_auth');
		$res1 = $query1->row_array();

		if($query1 -> num_rows() >= 1) $maxauthID = $res1['authID'];

		$data3 = array(	
			'authID' => $maxauthID+1,
			'userID' => $userID,
			'username' => $username,
			'userpword' => $salted,
			'salt' => $salt,
			'secret_question' => $secques,
			'secret_answer' => $secans);
		$this->db->insert('users_auth', $data3);
		}
	}

	function deleteUser($userID, $userID2, $date){
		$this->db->delete('users', array('userID' => $userID));
		$this->db->delete('users_role', array('userID' => $userID));
		$this->db->delete('users_auth', array('userID' => $userID));

		$audit = array(	
			'committedBy' => $userID2,
			'action' => 'DELETE',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);
	}

	function editUser($userID, $userID2, $lname, $fname, $mname, $roleID, $role, $section, $username, $password, $date, $secques, $secans){
		$data = array(
			'userLName' => $lname,
			'userFName' => $fname,
			'userMName' => $mname);
		$this->db->where('userID', $userID);
		$this->db->update('users', $data);
	
		for($i=0; $i<sizeof($role); $i++){
			$data2 = array(
				'role_type' => $role[$i],
				'role_section' => $section[$i]);
			$this->db->where('userID', $userID);
			$this->db->where('roleID', $roleID[$i]);
			$this->db->update('users_role', $data2);
		}
		//$pword = MD5($password);

		$intermediateSalt = md5(uniqid(rand(), true));
		$salt = substr($intermediateSalt, 0, 6);
		$salted = hash("sha256", $password.$salt);

		$data3 = array(	
			'username' => $username,
			'userpword' => $salted,
			'salt' => $salt,
			'secret_question' => $secques,
			'secret_answer' => $secans);
		$this->db->where('userID', $userID);
		$this->db->update('users_auth', $data3);

		$maxauditID = 0;

		$this->db->select_max('audittrailID');
		$query1 = $this->db->get('audittrail');
		$res1 = $query1->row_array();

		if($query1 -> num_rows() >= 1) $maxauditID = $res1['audittrailID'];

		$audit = array(	
			'audittrailID' => $maxauditID+1,
			'committedBy' => $userID2,
			'action' => 'UPDATE',
			'form' => 'Users',
			'committedTo' => $userID,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);

	}

	function getAuditTrail(){
		$this -> db -> select('*');
   		$this -> db -> from('audittrail');

		$query = $this -> db -> get();
		
		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function addAuditTrail($committedBy, $action, $form, $committedTo, $date){

		$maxauditID = 0;

		$this->db->select_max('audittrailID');
		$query1 = $this->db->get('audittrail');
		$res1 = $query1->row_array();

		if($query1 -> num_rows() >= 1) $maxauditID = $res1['audittrailID'];

		$audit = array(	
			'audittrailID' => $maxauditID+1,
			'committedBy' => $committedBy,
			'action' => $action,
			'form' => $form,
			'committedTo' => $committedTo,
			'committedOn' => $date);
		$this->db->insert('audittrail', $audit);

	}

	function searchAuditTrail($text, $from, $to, $action, $form){
		$actionq = "";
		$formq = "";

		if($action != ""){
			$actionq = "AND action = '$action'";
		}
		if($form != ""){
			$formq = "AND form = '$form'";
		}

		$query = $this->db->query("SELECT * FROM users, users_auth, audittrail WHERE users.userID = users_auth.userID AND users.userID = audittrail.committedBy AND (users.userFName='$text' OR users.userMName='$text' OR users.userLName='$text' OR users_auth.username='$text') $actionq $formq");

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getUsernameTrue($userID){
		$this -> db -> select('username');
   		$this -> db -> from('users_auth');
		//$this->db->join('users', 'users_auth.userID = users.userID');
		//$this -> db -> where('users.userFName !=', $fname);
		//$this -> db -> where('users.userLName !=', $lname);
		$this -> db -> where('userID', $userID);
   	
		
		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->row_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getAuditDate(){
		$this -> db -> select('committedOn');
   		$this -> db -> from('audittrail');
		//$this->db->join('users', 'users_auth.userID = users.userID');
		//$this -> db -> where('users.userFName !=', $fname);
		//$this -> db -> where('users.userLName !=', $lname); 	
		
		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getUsernames3(){
		$this -> db -> select('username');
   		$this -> db -> from('users_auth');
		//$this->db->join('users', 'users_auth.userID = users.userID');
		//$this -> db -> where('users.userFName !=', $fname);
		//$this -> db -> where('users.userLName !=', $lname); 	
		
		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getSecQues($username){
		$this -> db -> select('secret_question');
   		$this -> db -> from('users_auth');
		$this -> db -> where('username', $username); 	
		
		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getSecAns($username){
		$this -> db -> select('secret_answer');
   		$this -> db -> from('users_auth');
		$this -> db -> where('username', $username); 	
		
		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}
}
?>


