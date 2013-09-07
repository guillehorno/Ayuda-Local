<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
      <meta name="viewport" content="width=device-width" />
    <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        // css
        echo $this->Html->css('normalize');
        echo $this->Html->css('foundation');

        // javascript
        echo $this->Html->script('foundation.min');
    ?>
</head>
<body>
    <nav class="top-bar">
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">AyudaLocal</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
            <ul class="right">
                <li class="divider hide-for-small"></li>
                <li class="has-dropdownx"><a href="#">Iniciar sesión</a>
                <li class="has-dropdownx"><a href="#">Registrarse</a>
                <li class="divider show-for-small"></li>
            </ul>
        </section>
    </nav>

    <?php echo $this->fetch('content'); ?>

    <div class="row">
        <div class="large-12 columns">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="large-12 columns">
                <p>Desarrollado para la #Hackatrix2013</p>
            </div>
        </div>
    </footer>

    <script>
    document.write('<script src=' +
    ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
    '.js><\/script>')
    </script>

    <?php
    echo $this->Html->script('foundation/foundation');
    echo $this->Html->script('foundation/foundation.alerts');
    echo $this->Html->script('foundation/foundation.clearing');
    echo $this->Html->script('foundation/foundation.cookie');
    echo $this->Html->script('foundation/foundation.dropdown');
    echo $this->Html->script('foundation/foundation.forms');
    echo $this->Html->script('foundation/foundation.joyride');
    echo $this->Html->script('foundation/foundation.magellan');
    echo $this->Html->script('foundation/foundation.orbit');
    echo $this->Html->script('foundation/foundation.placeholder');
    echo $this->Html->script('foundation/foundation.reveal');
    echo $this->Html->script('foundation/foundation.section');
    echo $this->Html->script('foundation/foundation.tooltips');
    echo $this->Html->script('foundation/foundation.topbar');
    echo $this->Html->script('foundation/foundation.interchange');

    echo $this->Html->scriptBlock("
        // Inicializa foundation
        $(document).foundation();
    ");
    ?>

</body>
</html>
