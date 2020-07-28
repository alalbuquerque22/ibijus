<?php
/* 
require __DIR__ . '/src/BuscaViaCEP_inc.php';
   //usar o helper
     use Jarouche\ViaCEP\HelperViaCep;

     //tipos permitidos
     $array_tipos =['Querty','Piped','JSON','JSONP','XML'];


     // testando todos os tipos de requisição
     foreach ($array_tipos as $tipo){
         //helper retorna da dados do cep através dos parâmetros tipo e cep
         $class_cep = HelperViaCep::getBuscaViaCEP($tipo,'01311300');
           var_dump($class_cep);
     } */
/**
 * 
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\local $local
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Locais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="locais form large-9 medium-8 columns content">
    <?= $this->Form->create($local) ?>
    <fieldset>
        <legend><?= __('Add local') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cep');
            echo $this->Form->control('logradouro');
            echo $this->Form->control('complemento');
            echo $this->Form->control('numero');
            echo $this->Form->control('bairro');
            echo $this->Form->control('uf');
            echo $this->Form->control('cidade');
            echo $this->Form->control('data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
