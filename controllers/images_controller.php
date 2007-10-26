<?php
class ImagesController extends AppController {

	var $name = 'Images';
	var $helpers = array('Html', 'Form' );

	function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Image.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('image', $this->Image->read(null, $id));
	}


	function admin_index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Image.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('image', $this->Image->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->cleanUpFields();
			$this->Image->create();
			if ($this->Image->save($this->data)) {
				$this->Session->setFlash('The Image has been saved');
				if (isset($this->data['Image']['project_id'])){
					$this->redirect(array('controller'=>'projects','action'=>'admin_view',$this->data['Image']['project_id']), null, true);					
				}else{
					$this->redirect(array('action'=>'index'), null, true);					
				}
			} else {
				$this->Session->setFlash('The Image could not be saved. Please, try again.');
			}
		}
		if (isset($this->namedArgs['projectId'])){
			$projectId=$this->namedArgs['projectId'];
		}		
		$projects = $this->Image->Project->generateList();
		$this->set(compact('projects','projectId'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Image');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			$this->cleanUpFields();
			if ($this->Image->save($this->data)) {
				$this->Session->setFlash('The Image saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Image could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Image->read(null, $id);
		}
		$projects = $this->Image->Project->generateList();
		$this->set(compact('projects'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for Image');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->Image->del($id)) {
			$this->Session->setFlash(__("image has been deleted",true));
			if (isset($this->namedArgs['projectId'])){
				$this->redirect(array('controller'=>'projects','action'=>'view',$this->namedArgs['projectId']), null, true);					
			}else{
				$this->redirect(array('action'=>'index'), null, true);
			}
		}
	}

}
?>