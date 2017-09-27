<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuthorsPosts Model
 *
 * @property \App\Model\Table\PostsTable|\Cake\ORM\Association\HasMany $Posts
 *
 * @method \App\Model\Entity\AuthorsPost get($primaryKey, $options = [])
 * @method \App\Model\Entity\AuthorsPost newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AuthorsPost[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AuthorsPost|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AuthorsPost patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorsPost[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorsPost findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AuthorsPostsTable extends Table
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

        $this->setTable('authors_posts');
        $this->setDisplayField('name_author');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Posts', [
            'foreignKey' => 'authors_post_id'
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
            ->scalar('name_author')
            ->requirePresence('name_author', 'create')
            ->notEmpty('name_author');

        return $validator;
    }
}
