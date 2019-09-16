<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('post_id');
        $this->setPrimaryKey('post_id');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {

<<<<<<< HEAD
      $validator->provider('ProviderKey', 'App\Model\Validation\CustomValidation');
=======
      $validator->setProvider('ProviderKey', 'App\Model\Validation\CustomValidation');
>>>>>>> origin/master

        $validator
            ->integer('post_id')
            ->allowEmptyString('post_id', null, 'create');


        $validator
            ->scalar('username')
            ->requirePresence('username', 'create')
            ->notEmptyString('username')
            ->add('username', 'ruleName', [
            'rule' => ['postal_codeCustom'],
            'provider' => 'ProviderKey',
            'message' => 'ログインIDは半角英数字で入力してください。'])
            ->lengthBetween('username', [4, 10], 'ログインIDは4文字以上、10文字以内でおねがいします。');

        $validator
            ->scalar('password')
            ->requirePresence('password', 'create')
            ->notEmptyString('password')
            ->add('password', 'ruleName', [
            'rule' => ['postal_codeCustom'],
            'provider' => 'ProviderKey',
            'message' => 'ログインIDは半角英数字で入力してください。'])
            ->lengthBetween('password', [4, 10], 'ログインIDは4文字以上、10文字以内でおねがいします。');

        $validator
            ->scalar('role')
            ->maxLength('role', 255)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->integer('icon')
            ->allowEmptyString('icon', null, 'create');

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
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
