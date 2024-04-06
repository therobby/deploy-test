<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'git@github.com:therobby/deploy-test.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('oracle.chipiapps.pl')
  ->set('remote_user', 'deployer')
  ->set('deploy_path', '/var/www/test');

// Hooks

after('deploy:failed', 'deploy:unlock');
