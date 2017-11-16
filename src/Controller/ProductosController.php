<?php

namespace App\Controller;

use App\Controller\AppController;

class ProductosController extends AppController{

    public $paginate = ['maxLimit'=> 5];
    
    public function index(){
        $this->paginate = ['contain'=>['Tipos']];
        $productos = $this->paginate($this->Productos);
        $this->set(compact('productos'));
        
    }
    
    public function add(){
        
        $producto = $this->Productos->newEntity();
        
        if ($this->request->is('post')){
            
            $producto=$this->Productos->patchEntity($producto,$this->request->getData());
            if ($this->Productos->save($producto)){
                
                $this->Flash->success('Producto guardado correctamente.');
                return $this->redirect(['action'=>'index']);
                
            }
            $this->Flash->error('Error al guardar el producto');
            
        }
        $tipos=$this->Productos->Tipos->find('list');
        $this->set(compact('producto','tipos'));
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