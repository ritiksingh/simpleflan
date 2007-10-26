<?php
class CategoriesController extends AppController {

	var $name = 'Categories';
	var $helpers = array('Html', 'Form' );

	function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function view($slug = null) {
		$this->Category->recursive=2;
		if (!$slug) {
			$this->notFound();
		}
		$this->set('category', $this->Category->findBySlug($slug));
	}


	function admin_index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Category.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('category', $this->Category->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->cleanUpFields();
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash('The Category has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Category could not be saved. Please, try again.');
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Category');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			$this->cleanUpFields();
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash('The Category saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Category could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for Category');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->Category->del($id)) {
			$this->Session->setFlash('Category #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>