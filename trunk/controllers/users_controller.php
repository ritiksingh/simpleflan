<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form' );
	
	function admin_login() {
			$this->layout="login";
			if ($this->Auth->user()) {
				if (!empty($this->data)) {
					if (empty($this->data['User']['remember_me'])) {
						$this->Cookie->del('User');
					}
					else {
						$cookie = array();
						$cookie['email'] = $this->data['User']['email'];
						$cookie['token'] = $this->data['User']['pasword'];
						$this->Cookie->write('User', $cookie, true, '+2 weeks');
					}
					unset($this->data['User']['remember_me']);
				}
				$this->redirect($this->Auth->redirect());
			}
		}	

	function admin_logout() {
			$this->Session->setFlash(__('You have logged out',true));
			$this->redirect($this->Auth->logout());
	}
	

	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid User.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->cleanUpFields();
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('The User has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The User could not be saved. Please, try again.');
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid User');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			$this->cleanUpFields();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('The User saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The User could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for User');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->User->del($id)) {
			$this->Session->setFlash('User #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>