<?php
namespace App\Controller;
use App\Controller\AppController;

/**
 * Classification Controller
 *
 * @property \App\Model\Table\ClassificationTable $Classification
 *
 * @method \App\Model\Entity\Classification[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class ClassificationController extends AppController
{

  public function initialize() {
      parent::initialize();
      $this->Auth->allow(['autocompletedemo', 'findClassification', 'add', 'edit', 'delete']);
  }

  /**
   * findCar method
   * for use with JQuery-UI Autocomplete
   *
   * @return JSon query result
   */

  public function findClassification() {

      if ($this->request->is('ajax')) {

          $this->autoRender = false;
          $name = $this->request->query['term'];
          $results = $this->Classification->find('all', array(
              'conditions' => array('Classification.name LIKE ' => '%' . $name . '%')
          ));

          $resultArr = array();
          foreach ($results as $result) {
              $resultArr[] = array('label' => $result['name'], 'value' => $result['name']);
          }
          echo json_encode($resultArr);
      }
  }
  public function autocompletedemo() {
  }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $classification = $this->paginate($this->Classification);

        $this->set(compact('classification'));
    }

    /**
     * View method
     *
     * @param string|null $id Classification id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classification = $this->Classification->get($id, [
            'contain' => []
        ]);

        $this->set('classification', $classification);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classification = $this->Classification->newEntity();
        if ($this->request->is('post')) {
            $classification = $this->Classification->patchEntity($classification, $this->request->getData());
            if ($this->Classification->save($classification)) {
                $this->Flash->success(__('The classification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classification could not be saved. Please, try again.'));
        }
        $this->set(compact('classification'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Classification id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classification = $this->Classification->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classification = $this->Classification->patchEntity($classification, $this->request->getData());
            if ($this->Classification->save($classification)) {
                $this->Flash->success(__('The classification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classification could not be saved. Please, try again.'));
        }
        $this->set(compact('classification'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Classification id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classification = $this->Classification->get($id);
        if ($this->Classification->delete($classification)) {
            $this->Flash->success(__('The classification has been deleted.'));
        } else {
            $this->Flash->error(__('The classification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
