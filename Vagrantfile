
# project settings
project_name = "wpproject"
project_hostname = "wpproject.dev"
project_aliases = "www.#{project_hostname}"
project_managed_aliases = ["www.#{project_hostname}"]
project_root = "/vagrant"
project_public = "/vagrant/public"
project_webserver = "apache"

# server settings
server_box = "ubuntu/trusty64"
server_ip = "192.168.89.10"
server_cpus = "1"
server_memory = "1024"
server_swap = "2048"

# windows test
def which(cmd)
    exts = ENV["PATHEXT"] ? ENV["PATHEXT"].split(";") : [""]
    ENV["PATH"].split(File::PATH_SEPARATOR).each do |path|
        exts.each { |ext|
            exe = File.join(path, "#{cmd}#{ext}")
            return exe if File.executable? exe
        }
    end
    return nil
end

# vagrant config
Vagrant.configure(2) do |config|

    # shell
    config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"

    # server operating system
    config.vm.box = server_box

    # hostmanager plugin
    if Vagrant.has_plugin?("vagrant-hostmanager")
        config.hostmanager.enabled = true
        config.hostmanager.manage_host = true
        config.hostmanager.ignore_private_ip = false
        config.hostmanager.include_offline = false
        config.hostmanager.aliases = project_managed_aliases
    end

    # server networking and sync
    config.vm.hostname = project_hostname
    config.vm.network :private_network, ip: server_ip
    config.vm.synced_folder ".", project_root, id: "core",
        :nfs         => true,
        :nfs_udp     => false,
        :nfs_version => 4

    # virtualbox setup
    config.vm.provider :virtualbox do |vb|
        vb.name = project_name
        vb.customize ["modifyvm", :id, "--cpus", server_cpus]
        vb.customize ["modifyvm", :id, "--memory", server_memory]
        vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
        vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
    end

    # provisioning
    if which("ansible-playbook")
        config.vm.provision "ansible" do |ansible|
            #ansible.verbose = "vvv"
            ansible.playbook = "app/devops/vagrant.yml"
            ansible.limit = "all"
            ansible.groups = {
                "application"          => ["default"],
                "development:children" => ["application"]
            }
            ansible.extra_vars = {
                project_name: project_name,
                project_hostname: project_hostname,
                project_aliases: project_aliases,
                project_root: project_root,
                project_public: project_public,
                project_webserver: project_webserver,
                server_swap: server_swap
            }
        end
    else
        config.vm.provision :shell,
            path: "app/devops/windows.sh",
            args: [
                project_name,
                project_hostname,
                project_aliases,
                project_root,
                project_public,
                project_webserver,
                server_swap
            ],
            privileged: false
    end

end

# -*- mode: ruby -*-
# vi: set ft=ruby :
