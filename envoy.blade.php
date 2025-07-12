
@servers(['web' => 'sc2trpa3376@strategie.o2switch.net'])

@task('deploy')
    git clone https://github.com/hackelh/envoyTest.git
    cd envoyTest
    git pull origin master
    composer install
    php artisan migrate
    php artisan db:seed
@endtask
