# Add
Harness the power of Aquifer plus Drupal and DrupalVM

## Download all dependencies:
- VirtualBox, Vagrant, Ansible
- Don't forget the last steps on the DrupalVM install 
- `vagrant plugin install vagrant-hostsupdater`
- `vagrant plugin install vagrant-auto_network`

## Get DrupalVM up and running
- `ansible-galaxy install -r provisioning/requirements.yml --force`
- `vagrant up`

## Manual site install:
- `aquifer build -c`
- Go to drupal.dev/install.php

## Use the master module to enable local modules:
- `drush @drupal.drupal.dev en master -y`
- `drush @drupal.drupal.dev master-execute --scope=local -y`
