<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nna Entity
 *
 * @property int $id
 * @property string $nnanames
 * @property string $nnasurenames
 * @property string $conventionalName
 * @property string $age
 * @property string $sex
 * @property string $home
 * @property \Cake\I18n\Time $birthDate
 * @property string $solePrint
 * @property string $imageOne
 *
 * @property \App\Model\Entity\Affair[] $affairs
 */
class Nna extends Entity
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
        '*' => true,
        'id' => false
    ];
}
