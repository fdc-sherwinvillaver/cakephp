<?php  
/**
* 
*/
class PostsController extends AppController {
	
	public function index() {
		$posts = $this->Post->find('all');
		$this->set('posts',$posts);
	}

	public function add() {
		//checking if there is posted data
		if($this->request->is('post')) {
			$this->Post->create();
			if($this->Post->save($this->request->data)) {
				//setting flash on screen
				$this->Flash->success(__('Post was Added'));
				//redirect to index
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add your post.'));
		}
	}

	public function edit($id = null) {
		if(!$id){
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if(!$post){
			throw new NotFoundException(__('Invalid post'));
		}

		if($this->request->is(array('post','put'))){
			$this->Post->id = $id;

			if($this->Post->save($this->request->data)){
				$this->Flash->success(__('Post was update'));
				//redirect to index
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
	        $this->request->data = $post;
	    }
	}

	public function delete($id){
		if(!$this->request->is('get')){
			throw new MethodNotAllowedException();
		}

		if($this->Post->delete($id)) {
		$this->Flash->success(__('Post was deleted'));
			//redirect to index
			return $this->redirect(array('action' => 'index'));
		}
		$this->Flash->error(__('Unable to delete your post.'));
	}
}
?>