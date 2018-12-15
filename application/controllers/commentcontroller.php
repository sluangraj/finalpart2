
<?php
class CommentController extends Controller{
	
	public $commentObject;
	
    protected $access = "1";
	
	public function remove($commentID){
       $this->commentObject = new Comment();
       $comment = $this->commentObject->getComment($commentID);
       $result = $this->commentObject->deleteComment($commentID);
        $this->set('messsage', $result);
	  
    }
		
	
    public function add($commentID){
		
        $this->commentObject = new Comment();
        $data = array('uID'=>$_SESSION['uID'],'commentText'=>$_POST['comment'],'date'=>date('Y-m-d H:i:s'),'postID'=>$_POST['postID']);
        $result = $this->commentObject->addComment($data);
        $this->set('message', $result);
		//refresh the blog/post page
         header('Location: '.BASE_URL.'blog/post/'.$_POST['postID']);
    }
    

}
