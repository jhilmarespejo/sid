<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nna Entity
 *
 * @property int $id
 * @property string $nnanames
 * @property string $conventionalName
 * @property string $age
 * @property string $sex
 * @property string $home
 * @property string $birthDate
 * @property string $solePrint
 * @property string $imageOne
 *
 * @property \App\Model\Entity\Case[] $cases
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
        'nnanames' => true,
        'nnasurenames' => true,
        'conventionalName' => true,
        'age' => true,
        'sex' => true,
        'home' => true,
        'birthDate' => true,
        'solePrint' => true,
        'imageOne' => true,
        'cases' => true
    ];
}
