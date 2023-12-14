<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Details Model
 *
 * @property \App\Model\Table\NamesTable&\Cake\ORM\Association\BelongsTo $Names
 *
 * @method \App\Model\Entity\Detail newEmptyEntity()
 * @method \App\Model\Entity\Detail newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Detail> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detail get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Detail findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Detail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Detail> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detail|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Detail saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Detail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detail>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detail> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detail>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detail> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DetailsTable extends Table
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

        $this->setTable('details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Names', [
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
            ->integer('name_id')
            ->allowEmptyString('name_id');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('name_id', 'Names'), ['errorField' => 'name_id']);

        return $rules;
    }
}
