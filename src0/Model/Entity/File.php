<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * File Entity
 *
 * @property int $id
 * @property int $nna_id
 * @property string $fileName
 * @property string $category
 * @property string $description
 * @property string $location
 * @property \Cake\I18n\FrozenDate $dateUpdate
 * @property \Cake\I18n\FrozenDate $dateModified
 * @property string $active
 *
 * @property \App\Model\Entity\Nna $nna
 */
class File extends Entity
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
        'affairs_id' => true,
        'fileName' => true,
        'category' => true,
        'description' => true,
        'location' => true,
        'dateUpdate' => true,
        'dateModified' => true,
        'active' => true,
    ];
}
