<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

// $this->disableAutoLayout();

// if (!Configure::read('debug')) :
//     throw new NotFoundException(
//         'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
//     );
// endif;

 $cakeDescription = 'Xmas 2020';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <a href="https://cakephp.org/" target="_blank" rel="noopener">
                <!-- <img alt="CakePHP" src="https://cakephp.org/v2/img/logos/CakePHP_Logo.svg" width="350" /> -->
            </a>
            <br>
            <h1>
                Welcome to Xmas 2020  (🎅)
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <div class="message default text-center">
                            <!-- <small>Please be aware that this page will not be shown if you turn off debug mode unless you replace templates/Pages/home.php with your own version.</small> -->
                        </div>
                        <!-- <div id="url-rewriting-warning" class="alert url-rewriting">
                            <ul>
                                <li class="bullet problem">
                                    URL rewriting is not properly configured on your server.<br />
                                    1) <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/en/installation.html#url-rewriting">Help me configure it</a><br />
                                    2) <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/en/development/configuration.html#general-configuration">I don't / can't use URL rewriting</a>
                                </li>
                            </ul>
                        </div> -->
                        <!-- <?php Debugger::checkSecurityKeys(); ?> -->
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <h4>Environment</h4>
                        <ul>
                        
                            <li class="bullet success">Your version of PHP is 7.2.0 or higher (detected <?php echo PHP_VERSION ?>).</li>
                        
                        </ul>
                    </div>
                    <div class="column">
                        <h4>Filesystem</h4>
                        <ul>
                        
                            <li class="bullet success">Your tmp directory is writable.</li>
                        
                        </ul>
                    </div>
                </div>
                <hr>

                
                
    </main>
</body>
</html>
