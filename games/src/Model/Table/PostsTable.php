<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 * @method \App\Model\Entity\Post get($primaryKey, $options = [])
 * @method \App\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Post|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Post findOrCreate($search, callable $callback = null, $options = [])
 */
class PostsTable extends Table
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
        $this->setTable('posts');
        $this->setDisplayField('title');
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
        $validator
            ->integer('post_id')
            ->allowEmptyString('post_id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('hardware')
            ->maxLength('hardware', 255)
            ->requirePresence('hardware', 'create')
            ->notEmptyString('hardware');

        $validator
            ->scalar('texts')
            ->requirePresence('texts', 'create')
            ->notEmptyString('texts')
            ->add('texts', [
               'length' => [
                 'rule' => ['maxLength',200],
                 'message' => 'body length must be 10+'
               ]
             ]);

        $validator
            ->scalar('image')
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('itemurl')
            ->maxLength('itemurl', 255)
            ->requirePresence('itemurl', 'create')
            ->notEmptyString('itemurl');

        $validator
            ->integer('author')
            ->notEmptyString('author', 'create');

        $validator
            ->integer('authoricon')
            ->notEmptyString('authoricon', 'create');

        $validator
            ->scalar('authorname')
            ->requirePresence('authorname', 'create')
            ->notEmptyString('authorname');

        return $validator;
    }
}
