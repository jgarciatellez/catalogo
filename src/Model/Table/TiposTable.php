<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class TiposTable extends Table{
    
    public function initialize(array $config){
        
        parent::initialize($config);
        
        $this->setTable('tipos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');
        
        $this->hasMany('Productos', [
            'foreignkey'=>'tipo_id'
        ]);
    }
    
    public function validationDefault(Validator $validator){
        
        $validator
            ->integer('id')
            ->allowEmpty('id','create');
        
        $validator
            ->requirePresence('nombre','create')
            ->notEmpty('nombre');
        
        return $validator;
        
    }
}