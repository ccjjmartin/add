# Add
Harness the power of Aquifer plus Drupal and DrupalVM

## Download and install all dependencies:
- VirtualBox: https://www.virtualbox.org/wiki/Downloads
- Vagrant: https://www.vagrantup.com/
- Ansible: http://docs.ansible.com/ansible/intro_installation.html
- DrupalVM needs the following vagrant plugins:
- `vagrant plugin install vagrant-hostsupdater`
- `vagrant plugin install vagrant-auto_network`

## Get DrupalVM up and running
- `cd vm/`
- `ansible-galaxy install -r provisioning/requirements.yml --force`
- `vagrant up`
- `cd ../`

## Manual site install:
- `cd aquifer/`
- `aquifer build`
- Go to drupal.dev/install.php
- `cd ../`

## Use the master module to enable local modules:
- `drush @drupal.drupal.dev en master -y`
- `drush @drupal.drupal.dev master-execute --scope=local -y`
