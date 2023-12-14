<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imenik Model
 *
 * @method \App\Model\Entity\Imenik newEmptyEntity()
 * @method \App\Model\Entity\Imenik newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Imenik> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Imenik get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Imenik findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Imenik patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Imenik> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Imenik|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Imenik saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Imenik>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Imenik>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Imenik>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Imenik> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Imenik>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Imenik>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Imenik>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Imenik> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ImenikTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('imenik');
        $this->setDisplayField('ime');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('ime')
            ->maxLength('ime', 100)
            ->requirePresence('ime', 'create')
            ->notEmptyString('ime');

        $validator
            ->scalar('prezime')
            ->maxLength('prezime', 100)
            ->requirePresence('prezime', 'create')
            ->notEmptyString('prezime');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        return $validator;
    }
}
