Vagrant.configure("2") do |config|
  config.vm.box = "hashicorp/precise32"
  config.vm.network "forwarded_port", guest: 8181, host: 8181
  config.vm.hostname = "myprecise.box"
  config.vm.network :private_network, ip: "192.168.12.43"
  config.vm.synced_folder ".", "/vagrant"
  config.vm.provider :virtualbox do |vb|
    vb.customize [
      "modifyvm", :id,
      "--cpuexecutioncap", "50",
      "--memory", "256",
    ]
  end
end
