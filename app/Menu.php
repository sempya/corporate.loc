<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

/**
 * Corp\Menu
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $path
 * @property int $parent_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Corp\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Corp\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Corp\Menu whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Corp\Menu wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Corp\Menu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Corp\Menu whereUpdatedAt($value)
 */
class Menu extends Model
{
    //
}
