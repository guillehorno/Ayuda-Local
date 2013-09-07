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
                <tr>
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
            </tbody>
        </table>
    </div>
</div>

<?php echo $this->Html->scriptBlock("
    $(document).ready(function() {
        ayudalocal.mapeo().mostrar({
            selector: 'map-canvas',
            casos: [
            { lat: -34.397, long: 150.644, title: 'Titulo', details: 'Detalles', callback: function () { alert('detalles'); },afectados:'af1',necesitan:'nec1',contacto:'c1' },
            { lat: -34.596, long: 150.643, title: 'Titulo 2', details: 'Detalles 2', callback: function () { alert('detalles 2'); },afectados:'af2',necesitan:'nec2',contacto:'c2' }]
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
        <?php
            echo $this->Nodes->info();
            echo $this->Nodes->body();
            echo $this->Nodes->moreInfo();
        ?>
    </div> -->
    <?php
        endforeach;
    ?>
<!--     <div class="paging"><?php echo $this->Paginator->numbers(); ?></div> -->
</div>
