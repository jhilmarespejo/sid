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

        $this->Table('affairs');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->allowEmpty('place');

        $validator
            ->allowEmpty('district');

        $validator
            ->allowEmpty('tipology');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('processType');

        $validator
            ->allowEmpty('location');

        $validator
            ->date('affairDate')
            ->allowEmpty('affairDate');

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
