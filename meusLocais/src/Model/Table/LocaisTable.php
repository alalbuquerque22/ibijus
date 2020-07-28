<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locais Model
 *
 * @method \App\Model\Entity\local get($primaryKey, $options = [])
 * @method \App\Model\Entity\local newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\local[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\local|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\local saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\local patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\local[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\local findOrCreate($search, callable $callback = null, $options = [])
 */
class LocaisTable extends Table
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

        $this->setTable('locais');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 8)
            ->requirePresence('cep', 'create')
            ->notEmptyString('cep');

        $validator
            ->scalar('logradouro')
            ->maxLength('logradouro', 150)
            ->requirePresence('logradouro', 'create')
            ->notEmptyString('logradouro');

        $validator
            ->scalar('complemento')
            ->maxLength('complemento', 100)
            ->requirePresence('complemento', 'create')
            ->notEmptyString('complemento');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 6)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 100)
            ->requirePresence('bairro', 'create')
            ->notEmptyString('bairro');

        $validator
            ->scalar('uf')
            ->maxLength('uf', 2)
            ->requirePresence('uf', 'create')
            ->notEmptyString('uf');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 100)
            ->requirePresence('cidade', 'create')
            ->notEmptyString('cidade');

        $validator
            ->date('data')
            ->requirePresence('data', 'create')
            ->notEmptyDate('data');

        return $validator;
    }
}
