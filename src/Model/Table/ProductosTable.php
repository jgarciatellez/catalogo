<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductosTable extends Table{
    
    public function initialize(array $config){
        
        parent::initialize($config);
        
        $this->setTable('productos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');
        
        $this->belongsTo('Tipos', [
            'foreignkey'=>'tipo_id',
            'joinType' => 'INNER'
        ]);
    }
    
    public function validationDefault(Validator $validator){
        
        $validator
            ->integer('id')
            ->allowEmpty('id','create');
        
        $validator
            ->requirePresence('nombre','create')
            ->notEmpty('nombre');
        
        $validator
        ->decimal('precio')
        ->requirePresence('precio','create')
        ->notEmpty('precio');
            
         return $validator;
        
    }
}

