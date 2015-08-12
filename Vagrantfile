# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2" 

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    config.vm.box = 'scotch/box'
    config.vm.hostname = "phpdev"
    config.vm.provider :virtualbox do |vb|
      vb.customize ["modifyvm", :id, "--memory", "512", "--name", "matc-php"]
    end
    config.vm.synced_folder "www","/var/www/public/code" 
    config.vm.synced_folder "course_projects","/var/www/public/course_projects" 
    config.vm.synced_folder "Units","/var/www/public/notes" 
    config.vm.network :private_network, ip: "33.33.13.37"
end
