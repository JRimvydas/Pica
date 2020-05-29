    <header>
        <div class="container">
            <h1>PZ2A PICERIJA</h1>
            <div class="<?php print $class; ?>">
                <?php foreach ($nav['nav'] as $key => $links) : ?>
                    <a href="<?php print $links['link'] ?>"><?php print $key; ?> </a>
                <?php endforeach; ?>
            </div>
        </div>
    </header>