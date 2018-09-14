<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Affair Entity
 *
 * @property int $id
 * @property int $nna_id
 * @property string $place
 * @property string $district
 * @property string $tipology
 * @property string $description
 * @property string $processType
 *
 * @property \App\Model\Entity\Nna $nna
 */
class Affair extends Entity
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
        'nna_id' => true,
        'place' => true,
        'district' => true,
        'tipology' => true,
        'description' => true,
        'processType' => true,
        'location' => true,
        'affairDate' => true,
        'nna' => true
    ];
}
