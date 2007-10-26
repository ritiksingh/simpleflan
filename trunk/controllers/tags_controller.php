<?php
class TagsController extends AppController {

	var $name = 'Tags';
	var $helpers = array('Html', 'Form' );

	function index() {
		$this->Tag->recursive = 0;
		$this->set('tags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Tag.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('tag', $this->Tag->read(null, $id));
	}


	function admin_index() {
		$this->Tag->recursive = 0;
		$this->set('tags', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Tag.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('tag', $this->Tag->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->cleanUpFields();
			$this->Tag->create();
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash('The Tag has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Tag could not be saved. Please, try again.');
			}
		}
		$projects = $this->Tag->Project->generateList();
		$this->set(compact('projects'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Tag');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			$this->cleanUpFields();
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash('The Tag saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Tag could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tag->read(null, $id);
		}
		$projects = $this->Tag->Project->generateList();
		$this->set(compact('projects'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for Tag');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->Tag->del($id)) {
			$this->Session->setFlash('Tag #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>