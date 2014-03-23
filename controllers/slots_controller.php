<?php
class SlotsController extends AppController {

	var $name = 'Slots';

	function index() {
		$this->Slot->recursive = 0;
		$this->set('slots', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid slot', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('slot', $this->Slot->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Slot->create();
			if ($this->Slot->save($this->data)) {
				$this->Session->setFlash(__('The slot has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The slot could not be saved. Please, try again.', true));
			}
		}
		$areas = $this->Slot->Area->find('list');
		$this->set(compact('areas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid slot', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Slot->save($this->data)) {
				$this->Session->setFlash(__('The slot has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The slot could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Slot->read(null, $id);
		}
		$areas = $this->Slot->Area->find('list');
		$this->set(compact('areas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for slot', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Slot->delete($id)) {
			$this->Session->setFlash(__('Slot deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Slot was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
