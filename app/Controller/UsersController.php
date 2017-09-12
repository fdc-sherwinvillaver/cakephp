<?php  
/**
* 
*/
class UsersController extends AppController {
	
	public function index() {
		$this->set('users',$this->User->find('all'));
	}

	public function add() {
		if($this->request->is('post')) {
			$this->User->create();
			if($this->User->save($this->request->data)){
				$this->Flash->success('User Added');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('User Not Added'));
		}
	}


	public function edit($id = null) {
		if(!$id){
			throw new NotFoundException(__('Invalid post'));
		}

		$user = $this->User->findById($id);

		if(!$user){
			throw new NotFoundException(__('Invalid post'));
		}

		if($this->request->is(array('post','put'))) {
			$this->User->id = $id;

			if($this->User->save($this->request->data)) {
				$this->Flash->success(__('User Updated'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->success(__('User not Updated'));
		}

		if(!$this->request->data) {
			$this->request->data = $user;
		}
	}


	public function delete($id) {
		if(!$this->request->is('get')){
			throw new MethodNotAllowedException();
		}

		if($this->User->delete($id)){
			$this->Flash->success(__('User Deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Flash->success(__('User not Deleted'));
	}
}

?>