<?php
namespace CityUGE\Entities\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

/**
 * A global query scope for returning enabled records only.
 *
 * It looks for the field <code>is_enabled</code> which has the value of <code>1</code>.
 * @package CityUGE\Entities\Scopes
 */
class IsEnabledScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        return $builder->where('is_enabled', true);
    }
}
