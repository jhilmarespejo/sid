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

        $this->table('nna');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->allowEmpty('nnanames');

        $validator
            ->allowEmpty('nnasurenames');

        $validator
            ->allowEmpty('conventionalName');

        $validator
            ->allowEmpty('age');

        $validator
            ->requirePresence('sex', 'create')
            ->notEmpty('sex');

        $validator
            ->allowEmpty('home');

        $validator
            ->date('birthDate')
            ->allowEmpty('birthDate');

        $validator
            ->allowEmpty('solePrint');

        $validator
            ->allowEmpty('imageOne');

        return $validator;
    }
}
