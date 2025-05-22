<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articulos Model
 *
 * @method \App\Model\Entity\Articulo newEmptyEntity()
 * @method \App\Model\Entity\Articulo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Articulo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Articulo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Articulo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Articulo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Articulo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Articulo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Articulo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Articulo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Articulo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Articulo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Articulo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Articulo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Articulo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Articulo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Articulo> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArticulosTable extends Table
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

        $this->setTable('articulos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('texto')
            ->maxLength('texto', 255)
            ->requirePresence('texto', 'create')
            ->notEmptyString('texto');

        return $validator;
    }
}
