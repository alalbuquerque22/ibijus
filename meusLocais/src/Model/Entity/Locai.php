<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * local Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cep
 * @property string $logradouro
 * @property string $complemento
 * @property string $numero
 * @property string $bairro
 * @property string $uf
 * @property string $cidade
 * @property \Cake\I18n\FrozenDate $data
 */
class local extends Entity
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
        'nome' => true,
        'cep' => true,
        'logradouro' => true,
        'complemento' => true,
        'numero' => true,
        'bairro' => true,
        'uf' => true,
        'cidade' => true,
        'data' => true,
    ];
}
