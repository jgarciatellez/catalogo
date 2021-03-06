<?php

namespace App\Controller;

use App\Controller\AppController;

class TiposController extends AppController{

    public $paginate = ['maxLimit'=> 5];
    
    public function index(){
        $tipos = $this->paginate($this->Tipos);
        $this->set(compact('tipos'));
        
    }
    
    public function add(){
        
        $tipo = $this->Tipos->newEntity();
        
        if ($this->request->is('post')){
            
            $tipo=$this->Tipos->patchEntity($tipo,$this->request->getData());
            if ($this->Tipos->save($tipo)){
                
                $this->Flash->success('Tipo guardado correctamente.');
                return $this->redirect(['action'=>'index']);
                
            }
            $this->Flash->error('Error al guardar el tipo');
            
        }
        $this->set(compact('tipo'));
    }
    
    public function edit($id=null){
        
        $tipo = $this->Tipos->get($id);
        
        if ($this->request->is(['post','patch','put'])){
            
            $tipo=$this->Tipos->patchEntity($tipo,$this->request->getData());
            if ($this->Tipos->save($tipo)){
                
                $this->Flash->success('Tipo modificado correctamente.');
                return $this->redirect(['action'=>'index']);
                
            }
            $this->Flash->error('Error al modificar el tipo');
            
        }
        $this->set(compact('tipo'));
    }
    
    public function view($id=null){
        
        $tipo = $this->Tipos->get($id);
        $this->set(compact('tipo'));
    }

    public function delete($id=null){
        
        
        $this->request->allowMethod(['post','delete']);
        $tipo = $this->Tipos->get($id);
        
        if ($this->Tipos->delete($tipo)){
                $this->Flash->success('Tipo eliminado correctamente.');
        }else{

            $this->Flash->error('Error al eliminar.');
        }
        return $this->redirect(['action'=>'index']);
    }
    
    
}