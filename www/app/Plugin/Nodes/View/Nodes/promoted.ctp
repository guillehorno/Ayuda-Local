<div class="row">
    <div class="large-12 columns">
        <h2>Necesitan ayuda!</h2>
    </div>
</div>

<div class="row">
    <div class="large-8 columns">
        <div id="map-canvas">
            &nbsp;
        </div>
    </div><!-- /large-8 -->

    <div class="large-4 columns">
        <p><strong>Escoje una causa para ayudar</strong></p>
        <table>
            <tbody>
                <?php
        if (count($nodes) == 0) {
            echo __d('croogo', 'No items found.');
        }
    ?>

    <?php
        foreach ($nodes as $node):
            $this->Nodes->set($node);
    ?>
    <tr>
                    <td><a href="#"><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></a></td>
                </tr>

    <?php
        endforeach;
    ?>
<!--                 <tr>
                    <td><a href="#">Familia El Kohuri pierde todo en incendio</a></td>
                </tr>
                <tr>
                    <td><a href="#">30 familias damnificadas por voladura de techos</a></td>
                </tr>
                <tr>
                    <td><a href="#">Otra causa cerca mío</a></td>
                </tr>
                <tr>
                    <td><a href="#">Y además otra causa cerca mío</a></td>
                </tr>
 -->            </tbody>
        </table>
    </div>
</div>

<?php echo $this->Html->scriptBlock("
    $(document).ready(function() {
        ayudalocal.mapeo().mostrar({
            selector: 'map-canvas',
                casos: [
                    { id: 1, lat: -32.85321935039961, long: -68.86436462402344, title: 'Familia Kohuri', details: 'Una familia de Guaymallén perdió todas sus pertenencias al incendiarse su casa en la noche de este lunes. Necesitan ayuda porque sus hijos no tienen ropa para vestirse.', callback: function () { alert('detalles'); }, afectados: 'Familia Kohuri', necesitan: 'ropa, muebles, materiales de construcción, electrodimesticos, utiles escolares, dinero.', contacto: 'Carlos El Kohuri, 0261-155273491' },
                    { id: 2, lat: -32.88782406149432, long: -68.81439277110985, title: 'Familia Perez', details: 'Mas info: Más de 30 viviendas afectadas por voladuras de techos y caídas de árboles, calles cortadas y dos focos de incendio', callback: function () { alert('detalles 2'); }, afectados: 'Familia Perez', necesitan: 'nylons, rollizos', contacto: 'Juan Carlos Perez, 555-3555' }
                ]
        });
});
"); ?>

<div class="nodes promoted">
    <?php
        if (count($nodes) == 0) {
            echo __d('croogo', 'No items found.');
        }
    ?>

    <?php
        foreach ($nodes as $node):
            $this->Nodes->set($node);
    ?>
<!--     <div id="node-<?php echo $this->Nodes->field('id'); ?>" class="node node-type-<?php echo $this->Nodes->field('type'); ?>">
        <h2><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></h2>



    </div> -->
    <?php
        endforeach;
    ?>
<!--     <div class="paging"><?php echo $this->Paginator->numbers(); ?></div> -->
</div>
