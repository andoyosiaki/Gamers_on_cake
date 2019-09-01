<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $title
 * @property string $hardware
 * @property string $texts
 * @property string $image
 * @property string $itemurl
 */
class Post extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'hardware' => true,
        'texts' => true,
        'image' => true,
        'itemurl' => true,
        'author' => true,
        'authoricon' => true,
        'authorname' => true
    ];

    protected function _setPassword($password)
    {
      return (new DefaultPasswordHasher)->hash($password);
    }
}
