<?php

class ManageUsersController extends Controller {

	public $userObject;

	protected $access = "1";



	public function remove_user($uID) {
		$this->userObject = new User();
		$data = array('uID'=>$uID);
		$response = $this->userObject->removeUser($data);
		$this->set('response',$response);
	}

	   	public function users($uID){
	     $this->userObject = new Users();
		$user = $this->userObject->getUser($uID);
		 $this->set('user',$user);
	   	}

		public function approve_user($uID){
        $this->userObject = new Users();
		  if ($this->userObject->isActive($uID)) {
            $result = $this->userObject->removeUser($uID);
        } else {
            $result = $this->userObject->approveUser($uID);
        }
		$outcome = $this->userObject->getAllUsers1();
        $this->set('users', $outcome);
		$this->set('message',$result);
		$this->set('task', 'change');
        }
	public function index(){
	    $this->userObject = new User();
			$users = $this->userObject->getAllUsers();
			$this->set('title', 'Manage Users');
			$this->set('users',$users);
			$this->set('first_name',$first_name);
			$this->set('last_name',$last_name);
			$this->set('email',$email);
	}
	public function add(){
		$this->userObject = new User();
		$this->set('task', 'save');
	}
	public function save(){
		$this->userObject = new User();
		$password = $_POST['post_password'];
		$passhash = password_hash($password,PASSWORD_DEFAULT);
		$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'], 'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT));
		//$this->getCategories();
		$result = $this->userObject->addUser($data);
		$this->set('message', $result);
	}
	public function edit($uID){
			$this->userObject = new Users();
			$user = $this->userObject->getUser($uID);
			$this->set('uID', $user['uID']);
			$this->set('first_name', $user['first_name']);
			$this->set('last_name', $user['last_name']);
			$this->set('email', $user['email']);
			$this->set('password', $user['password']);
			$this->set('task', 'update');
	}

	public function update(){
		$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'], 'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT));
		$this->userObject = new Users();
		$result = $this->userObject->updateUser($data);
		$outcome = $this->userObject->getUser();
		$this->set('user',$outcome);
		$this->set('message', $result);
		$this->set('task', 'update');
	}
	public function checkUser($uID){
		$this->userObject = new Users();
		$this->userObject->isActive($userInfo['uID']) ;
	}



}
