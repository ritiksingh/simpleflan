<?php
class ProjectsController extends AppController {

	var $name = 'Projects';
	var $helpers = array('Html', 'Form' );

	function home() {
		$this->Project->recursive = 1;
		$this->paginate = array( 'order' => array('Project.modified' => 'desc'));
		$projects=$this->paginate();
		$pageName="home";
		$this->set(compact('projects','pageName') );
	}
	
	function index() {
		$this->Project->recursive = 1;
		$this->paginate = array('limit' => 25, 'order' => array('Project.modified' => 'desc'));
		$projects=$this->paginate();
		$this->set(compact('projects','pageName') );
	}	

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Project.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('project', $this->Project->read(null, $id));
	}



	function admin_index() {
		$this->Project->recursive = 1;
		$this->paginate = array( 'order' => array('Project.modified' => 'desc'));
		$this->set('projects', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Project.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('project', $this->Project->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->cleanUpFields();
			$this->Project->create();
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The Project has been saved',true));
				$this->redirect(array('action'=>'view',$this->Project->getInsertId()), null, true);
			} else {
				$this->Session->setFlash('The Project could not be saved. Please, try again.');
			}
		}
		$tags = $this->Project->Tag->generateList();
		$clients = $this->Project->Client->generateList();
		$categories = $this->Project->Category->generateList();
		if (isset($this->namedArgs['clientId'])){
			$clientId=$this->namedArgs['clientId'];
		}
		$this->set(compact('tags', 'clients', 'categories','clientId'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Project');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			$this->cleanUpFields();
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash('The Project saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Project could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$tags = $this->Project->Tag->generateList();
		$clients = $this->Project->Client->generateList();
		$categories = $this->Project->Category->generateList();
		$this->set(compact('tags','clients','categories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for Project');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->Project->del($id)) {
			$this->Session->setFlash('Project #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>