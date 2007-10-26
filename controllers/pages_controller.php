<?php
class PagesController extends AppController {

	var $name = 'Pages';
	var $helpers = array('Html', 'Form' );

	function index() {
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}

	function view($slug = null) {
		if (!$slug) {
			$this->notFound();
		}
		$pageName=$slug;		
		if ($page=$this->Page->findBySlug($slug)){
			$this->set(compact('page','pageName') );			
		}else{
			$this->set(compact('pageName') );				
			$this->render($slug);
		}
	}


	function admin_index() {
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Page.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->cleanUpFields();
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash('The Page has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Page could not be saved. Please, try again.');
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Page');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			$this->cleanUpFields();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash('The Page saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Page could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for Page');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->Page->del($id)) {
			$this->Session->setFlash('Page #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>