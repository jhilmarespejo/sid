<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Affairs Model
 *
 * @property \App\Model\Table\NnaTable|\Cake\ORM\Association\BelongsTo $Nna
 *
 * @method \App\Model\Entity\Affair get($primaryKey, $options = [])
 * @method \App\Model\Entity\Affair newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Affair[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Affair|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Affair|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Affair patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Affair[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Affair findOrCreate($search, callable $callback = null, $options = [])
 */
class AffairsTable extends Table
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

        $this->setTable('affairs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Nna', [
            'foreignKey' => 'nna_id',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('Files', [
            'foreignKey' => 'affairs_id'
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
            ->scalar('place')
            ->maxLength('place', 45)
            ->allowEmpty('place');

        $validator
            ->scalar('district')
            ->maxLength('district', 45)
            ->allowEmpty('district');

        $validator
            ->scalar('tipology')
            ->maxLength('tipology', 45)
            ->allowEmpty('tipology');

        $validator
            ->scalar('description')
            ->maxLength('description', 45)
            ->allowEmpty('description');

        $validator
            ->scalar('processType')
            ->maxLength('processType', 45)
            ->allowEmpty('processType');

        $validator
            ->scalar('location')
            ->maxLength('location', 200)
            ->allowEmpty('location');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['nna_id'], 'Nna'));

        return $rules;
    }
}
