# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2" 

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    config.vm.box = 'ubuntu/trusty64'

    config.vm.hostname = "phpdev"

    config.vm.provider :virtualbox do |vb|
      vb.customize ["modifyvm", :id, "--memory", "512", "--name", "matc-php"]
    end

    config.vm.synced_folder "www","/var/www/code" 
    config.vm.synced_folder "Units","/var/www/notes" 

    config.vm.network :private_network, ip: "33.33.13.37"
end
