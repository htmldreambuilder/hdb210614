set :application, "htmlDreamBuilder"
set :domain,      "hl230.dinaserver.com"
set :deploy_to,   "/home/raul/htmlDreamDeployed/"
set :app_path,    "app"
set :password, " "

set :repository,  "file:///var/www/html/htmlDream/.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

# Your HTTP server, Apache/etc
role :web,        {domain}                 
       
# This may be the same as your `Web` server
role :app,        domain, :primary => true       

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL

# Esta línea hace que la próxima vez que se despliegue, no 
# clone todo el proyecto sino solo los cambios desde el 
# último deploy


set :deploy_via, :rsync_with_remote_cache

# Para Symfony2 

# Para que todo tire de aquí parameters.yml
set :shared_files,      ["app/config/parameters.yml"]

# Compartir vendors para acelerar los deploy
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor"]

# Para instalar vendors
set :use_composer, true

# Para actualizar vendors
 set :update_vendors, true

# Conexión
#set :user, 'raul'
#ssh_options[:port] ='22'
#set :use_sudo, false
#ssh_options[:use_agent] = false
#ssh_options[:keys] = %w(/var/git/.shh/bitbucket_rsa)