<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo SITE_URL;?>" target="_blank" rel="noopener">
        <?php echo gettext('logo'); ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-between">
            <?php /* Dashboard */ ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo SITE_URL_ADMIN;?>">
                    <?php echo PHPArcade\Core::showGlyph('dashboard'); ?>&nbsp;<?php echo gettext('dashboard'); ?>
                </a>
            </li>

            <?php /* Create */ ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <?php echo PHPArcade\Core::showGlyph('plus-square'); ?>&nbsp;<?php echo gettext('Add'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=ads&mthd=addad-form">Advertising</a>
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=media&mthd=addcat-form">Category</a>
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=media&mthd=addgame-form">Game</a>
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=pages&mthd=addpage-form">Page</a>
                </div>
            </li>

            <?php /* Configuration */ ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <?php echo PHPArcade\Core::showGlyph('cogs'); ?>&nbsp;<?php echo gettext('Configure'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=site&mthd=site-config">Main
                        Configuration</a>
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=site&mthd=theme-config">Theme</a>
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=site&mthd=feature-config">Features</a>
                </div>
            </li>

            <?php /* Manage */ ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <?php echo PHPArcade\Core::showGlyph('eye'); ?>&nbsp;<?php echo gettext('Manage'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=ads&mthd=manage">Advertising</a>
                    <a class="dropdown-item" href="<?php echo SITE_URL_ADMIN; ?>index.php?act=media&mthd=manage-cat">Categories</a>
                    <a class="dropdown-item"
                       href="<?php echo SITE_URL_ADMIN; ?>index.php?act=media&mthd=manage">Games</a>
                    <a class="dropdown-item"
                       href="<?php echo SITE_URL_ADMIN; ?>index.php?act=pages&mthd=manage">Pages</a>
                    <a class="dropdown-item"
                       href="<?php echo SITE_URL_ADMIN; ?>index.php?act=users&mthd=manage">Users</a>
                </div>
            </li>

            <?php /* My Profile dropdown */ ?>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <?php echo PHPArcade\Core::showGlyph('user'); ?><?php echo PHPArcade\Core::showGlyph('caret-down'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link" href="<?php echo SITE_URL . 'index.php?params=login/logout'; ?>"
                       id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <?php echo PHPArcade\Core::showGlyph('sign-out'); ?>
                        <?php echo gettext('logout'); ?>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>