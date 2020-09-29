<?php
// @formatter:off

namespace PHPSTORM_META {
    /**
     * PhpStorm Meta file, to provide autocomplete information for PhpStorm
     *
     * @author Barry vd. Heuvel <barryvdh@gmail.com>
     * @see https://github.com/barryvdh/laravel-ide-helper
     */
    override(
        new \Illuminate\Contracts\Container\Container(),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Illuminate\Container\Container::makeWith(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Illuminate\Contracts\Container\Container::get(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Illuminate\Contracts\Container\Container::make(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Illuminate\Contracts\Container\Container::makeWith(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \App::get(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \App::make(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \App::makeWith(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \app(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \resolve(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Psr\Container\ContainerInterface::get(0),
        map([
            '' => '@',
            'Asm89\Stack\CorsService' => \Asm89\Stack\CorsService::class,
            'Facade\FlareClient\Flare' => \Facade\FlareClient\Flare::class,
            'Facade\IgnitionContracts\SolutionProviderRepository' =>
                \Facade\Ignition\SolutionProviders\SolutionProviderRepository::class,
            'Facade\Ignition\DumpRecorder\DumpRecorder' =>
                \Facade\Ignition\DumpRecorder\DumpRecorder::class,
            'Facade\Ignition\DumpRecorder\MultiDumpHandler' =>
                \Facade\Ignition\DumpRecorder\MultiDumpHandler::class,
            'Facade\Ignition\ErrorPage\Renderer' =>
                \Facade\Ignition\ErrorPage\Renderer::class,
            'Facade\Ignition\IgnitionConfig' =>
                \Facade\Ignition\IgnitionConfig::class,
            'Facade\Ignition\LogRecorder\LogRecorder' =>
                \Facade\Ignition\LogRecorder\LogRecorder::class,
            'Facade\Ignition\QueryRecorder\QueryRecorder' =>
                \Facade\Ignition\QueryRecorder\QueryRecorder::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Whoops\Handler\HandlerInterface' =>
                \Facade\Ignition\ErrorPage\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.auth.resets.clear' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'command.cache.clear' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'command.cache.forget' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'command.cache.table' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'command.cast.make' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'command.channel.make' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'command.clear-compiled' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'command.component.make' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'command.config.cache' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'command.config.clear' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'command.console.make' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'command.controller.make' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'command.db.wipe' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'command.down' => \Illuminate\Foundation\Console\DownCommand::class,
            'command.environment' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'command.event.cache' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'command.event.clear' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'command.event.generate' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'command.event.list' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'command.event.make' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'command.exception.make' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'command.factory.make' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'command.flare:test' =>
                \Facade\Ignition\Commands\TestCommand::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.job.make' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'command.key.generate' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'command.listener.make' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'command.mail.make' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'command.make:solution' =>
                \Facade\Ignition\Commands\SolutionMakeCommand::class,
            'command.make:solution-provider' =>
                \Facade\Ignition\Commands\SolutionProviderMakeCommand::class,
            'command.middleware.make' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'command.migrate' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'command.migrate.fresh' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'command.migrate.install' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'command.migrate.make' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'command.migrate.refresh' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'command.migrate.reset' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'command.migrate.rollback' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'command.migrate.status' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'command.model.make' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'command.notification.make' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'command.notification.table' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'command.observer.make' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'command.optimize' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'command.optimize.clear' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'command.package.discover' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'command.policy.make' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'command.provider.make' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'command.queue.batches-table' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'command.queue.clear' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'command.queue.failed' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'command.queue.failed-table' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'command.queue.flush' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'command.queue.forget' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'command.queue.listen' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'command.queue.restart' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'command.queue.retry' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'command.queue.retry-batch' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'command.queue.table' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'command.queue.work' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'command.request.make' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'command.resource.make' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'command.route.cache' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'command.route.clear' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'command.route.list' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'command.rule.make' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'command.schema.dump' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'command.seed' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'command.seeder.make' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'command.serve' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'command.session.table' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'command.storage.link' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'command.stub.publish' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'command.test.make' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'command.up' => \Illuminate\Foundation\Console\UpCommand::class,
            'command.vendor.publish' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'command.view.cache' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'command.view.clear' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.http' => \Facade\FlareClient\Http\Client::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'redis.connection' =>
                \Illuminate\Redis\Connections\PhpRedisConnection::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );

    override(\Illuminate\Support\Arr::add(0), type(0));
    override(\Illuminate\Support\Arr::except(0), type(0));
    override(\Illuminate\Support\Arr::first(0), elementType(0));
    override(\Illuminate\Support\Arr::last(0), elementType(0));
    override(\Illuminate\Support\Arr::get(0), elementType(0));
    override(\Illuminate\Support\Arr::only(0), type(0));
    override(\Illuminate\Support\Arr::prepend(0), type(0));
    override(\Illuminate\Support\Arr::pull(0), elementType(0));
    override(\Illuminate\Support\Arr::set(0), type(0));
    override(\Illuminate\Support\Arr::shuffle(0), type(0));
    override(\Illuminate\Support\Arr::sort(0), type(0));
    override(\Illuminate\Support\Arr::sortRecursive(0), type(0));
    override(\Illuminate\Support\Arr::where(0), type(0));
    override(\array_add(0), type(0));
    override(\array_except(0), type(0));
    override(\array_first(0), elementType(0));
    override(\array_last(0), elementType(0));
    override(\array_get(0), elementType(0));
    override(\array_only(0), type(0));
    override(\array_prepend(0), type(0));
    override(\array_pull(0), elementType(0));
    override(\array_set(0), type(0));
    override(\array_sort(0), type(0));
    override(\array_sort_recursive(0), type(0));
    override(\array_where(0), type(0));
    override(\head(0), elementType(0));
    override(\last(0), elementType(0));
    override(\with(0), type(0));
    override(\tap(0), type(0));
    override(\optional(0), type(0));
}
