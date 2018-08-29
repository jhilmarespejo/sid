<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nna Model
 *
 * @property \App\Model\Table\CasesTable|\Cake\ORM\Association\HasMany $Cases
 *
 * @method \App\Model\Entity\Nna get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nna newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Nna[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nna|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nna|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nna patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nna[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nna findOrCreate($search, callable $callback = null, $options = [])
 */
class NnaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('nna');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // $this->hasMany('Cases', [
        //     'foreignKey' => 'nna_id'
        // ]);
        $this->hasMany('Affairs', [
            'foreignKey' => 'nna_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nnanames')
            ->maxLength('nnanames', 45)
            ->allowEmpty('nnanames');

        // $validator
        //     ->scalar('nnasurenames')
        //     ->maxLength('nnanames', 45)
        //     ->allowEmpty('nnanames');

        $validator
            ->scalar('conventionalName')
            ->maxLength('conventionalName', 45)
            ->allowEmpty('conventionalName');

        $validator
            ->scalar('age')
            ->maxLength('age', 45)
            ->allowEmpty('age');

        $validator
            ->scalar('sex')
            ->maxLength('sex', 45)
            ->requirePresence('sex', 'create')
            ->notEmpty('sex');

        $validator
            ->scalar('home')
            ->maxLength('home', 45)
            ->allowEmpty('home');

        $validator
            ->date('birthDate')
            ->allowEmpty('birthDate');

        $validator
            ->scalar('solePrint')
            ->maxLength('solePrint', 45)
            ->allowEmpty('solePrint');

        $validator
            ->scalar('imageOne')
            ->maxLength('imageOne', 45)
            ->allowEmpty('imageOne');

        return $validator;
    }
}
