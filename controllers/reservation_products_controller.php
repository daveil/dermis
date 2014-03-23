<?php
class ReservationProductsController extends AppController {

	var $name = 'ReservationProducts';

	function index() {
		$this->ReservationProduct->recursive = 0;
		$this->set('reservationProducts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid reservation product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('reservationProduct', $this->ReservationProduct->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ReservationProduct->create();
			if ($this->ReservationProduct->save($this->data)) {
				$this->Session->setFlash(__('The reservation product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation product could not be saved. Please, try again.', true));
			}
		}
		$reservations = $this->ReservationProduct->Reservation->find('list');
		$products = $this->ReservationProduct->Product->find('list');
		$this->set(compact('reservations', 'products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid reservation product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ReservationProduct->save($this->data)) {
				$this->Session->setFlash(__('The reservation product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ReservationProduct->read(null, $id);
		}
		$reservations = $this->ReservationProduct->Reservation->find('list');
		$products = $this->ReservationProduct->Product->find('list');
		$this->set(compact('reservations', 'products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for reservation product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ReservationProduct->delete($id)) {
			$this->Session->setFlash(__('Reservation product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Reservation product was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
