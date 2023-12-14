<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Names Model
 *
 * @property \App\Model\Table\DetailsTable&\Cake\ORM\Association\HasMany $Details
 *
 * @method \App\Model\Entity\Name newEmptyEntity()
 * @method \App\Model\Entity\Name newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Name> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Name get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Name findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Name patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Name> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Name|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Name saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Name>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Name>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Name>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Name> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Name>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Name>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Name>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Name> deleteManyOrFail(iterable $entities, array $options = [])
 */
class NamesTable extends Table
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

        $this->setTable('names');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Details', [
            'foreignKey' => 'name_id',
        ]);
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
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmptyString('last_name');

        return $validator;
    }
}
