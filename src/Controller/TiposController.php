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
}