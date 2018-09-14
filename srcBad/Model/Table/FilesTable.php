<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Files Model
 *
 * @property \App\Model\Table\NnaTable|\Cake\ORM\Association\BelongsTo $Nna
 *
 * @method \App\Model\Entity\File get($primaryKey, $options = [])
 * @method \App\Model\Entity\File newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\File[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\File|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\File|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\File patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\File[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\File findOrCreate($search, callable $callback = null, $options = [])
 */
class FilesTable extends Table
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

        $this->setTable('files');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // $this->belongsTo('Nna', [
        //     'foreignKey' => 'nna_id',
        //     'joinType' => 'INNER'
        // ]);

        $this->belongsTo('Affairs', [
            'foreignKey' => 'affairs_id',
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

        // $validator
        //     ->scalar('fileName')
        //     ->maxLength('fileName', 200)
        //     ->requirePresence('fileName', 'create')
        //     ->notEmpty('fileName');

        $validator
            ->scalar('category')
            ->maxLength('category', 45)
            ->requirePresence('category', 'create')
            ->notEmpty('category');

        $validator
            ->scalar('description')
            ->maxLength('description', 300)
            ->allowEmpty('description');

        $validator
            ->scalar('location')
            ->maxLength('location', 300)
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->scalar('dateUpdate')
            ->allowEmpty('dateUpdate');

        $validator
            ->scalar('dateModified')
            ->allowEmpty('dateModified');


        $validator
            ->scalar('active')
            ->maxLength('active', 45)
            ->allowEmpty('active');

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
        $rules->add($rules->existsIn(['affairs_id'], 'Affairs'));

        return $rules;
    }
}
