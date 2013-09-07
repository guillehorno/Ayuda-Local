<div class="row">
    <div class="large-12 columns">
        <h2>Necesitan ayuda!</h2>
    </div>
</div>

<div class="row">
    <div class="large-8 columns">
        <img src="http://dummyimage.com/630x400/eeeeee/cccccc.gif&text=map+placeholder" alt="placeholder+image">
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
