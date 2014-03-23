<?php
class ReservationServicesController extends AppController {

	var $name = 'ReservationServices';

	function index() {
		$this->ReservationService->recursive = 0;
		$this->set('reservationServices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid reservation service', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('reservationService', $this->ReservationService->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ReservationService->create();
			if ($this->ReservationService->save($this->data)) {
				$this->Session->setFlash(__('The reservation service has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation service could not be saved. Please, try again.', true));
			}
		}
		$reservations = $this->ReservationService->Reservation->find('list');
		$services = $this->ReservationService->Service->find('list');
		$employees = $this->ReservationService->Employee->find('list');
		$this->set(compact('reservations', 'services', 'employees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid reservation service', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ReservationService->save($this->data)) {
				$this->Session->setFlash(__('The reservation service has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation service could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ReservationService->read(null, $id);
		}
		$reservations = $this->ReservationService->Reservation->find('list');
		$services = $this->ReservationService->Service->find('list');
		$employees = $this->ReservationService->Employee->find('list');
		$this->set(compact('reservations', 'services', 'employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for reservation service', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ReservationService->delete($id)) {
			$this->Session->setFlash(__('Reservation service deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Reservation service was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
