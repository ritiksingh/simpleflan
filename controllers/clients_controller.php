<?php
class ClientsController extends AppController {

	var $name = 'Clients';
	var $helpers = array('Html', 'Form' );

	function index() {
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}

	function view($slug = null) {
		$this->Client->recursive=2;
		if (!$slug) {
			$this->notFound();
		}
		$this->set('client', $this->Client->findBySlug($slug));
	}


	function admin_index() {
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Client.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('client', $this->Client->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->cleanUpFields();
			$this->Client->create();
			if ($this->Client->save($this->data)) {
				$this->Session->setFlash('The Client has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Client could not be saved. Please, try again.');
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Client');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			$this->cleanUpFields();
			if ($this->Client->save($this->data)) {
				$this->Session->setFlash('The Client saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Client could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Client->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for Client');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->Client->del($id)) {
			$this->Session->setFlash('Client #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}
	


}
?>