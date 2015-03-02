#Include capistrano stuff
require 'rubygems'
require 'railsless-deploy'

#Set general info
set :application, #Your Application Name
set :repository,  #Your Repo Name
set :scm, :git

#Set to use a local git cache
set :deploy_via, :remote_cache

#SSH settings
set :use_sudo, false
set :copy_exclude, [".git",".gitignore",".gitmodules","Capfile","local-config-sample.php","README.md"]
set :keep_releases, 10

#Allow pass backs
default_run_options[:pty] = true

#Enable submodule support
set :git_enable_submodules, 1


#Production environment
task :production do
    set :stage, "production"
    role :web, #Your Domain/IP
    set :deploy_to, #/home/YOUR ACCOUNT NAME/deploy
    set :user, #Your Username
    set :db_host, "localhost"
    set :db_name, #Your DB Name
    set :db_user, #Your DB User
    set :db_password, #Your DB Password
end

#Define deployment tasks
namespace :deploy do
 
    task :update do
        transaction do
            update_code
            make_shared_dir
            make_shared_symlinks
            # composer_setup
            make_config
            fix_permissions
            symlink
        end
    end

    task :make_shared_dir do
        run "if [ ! -d #{shared_path}/content ]; then mkdir #{shared_path}/content; fi"
        run "if [ ! -d #{shared_path}/content/uploads ]; then mkdir #{shared_path}/content/uploads; fi"
    end

    task :make_shared_symlinks do
        run "if [ ! -h #{release_path}/content/uploads ]; then ln -s #{shared_path}/content/uploads #{release_path}/content/uploads; fi"
    end

    # task :composer_setup do
    #     transaction do
    #         run "cd #{release_path}/content/plugins/gulf_lib && curl -sS https://getcomposer.org/installer | php && php composer.phar install --prefer-dist --no-dev && rm -f composer.phar"
    #     end
    # end

    task :make_config do
        {:'%%WP_STAGE%%' => stage, :'%%DB_NAME%%' => db_name, :'%%DB_USER%%' => db_user, :'%%DB_PASSWORD%%' => db_password, :'%%DB_HOST%%' => db_host}.each do |k,v|
            run "sed -i 's/#{k}/#{v}/' #{release_path}/wp-config.php", :roles => :web
        end
    end

    task :fix_permissions do
        transaction do
            run "find #{deploy_to} -type d -exec chmod 755 {} \\;"
            run "find #{deploy_to} -type f -exec chmod 644 {} \\;"
            run "chmod 777 #{shared_path}/content/uploads"
        end
    end

    task :symlink do
        transaction do
            run "ln -nfs #{current_release} #{deploy_to}/#{current_dir}"
        end
    end

    task :submodule_tags do
        run "if [ -d #{shared_path}/cached-copy/ ]; then cd #{shared_path}/cached-copy/ && git submodule foreach --recursive git fetch origin --tags; fi"
    end

end
 
before "deploy", "deploy:submodule_tags"