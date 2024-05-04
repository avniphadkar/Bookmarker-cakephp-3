<?php

use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Core\Plugin;


Configure::write('Log.debug.file', 'cli-debug');
Configure::write('Log.error.file', 'cli-error');

try {
    Plugin::load('Bake');
} catch (MissingPluginException $e) {

}
