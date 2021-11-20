<?php
// source: /var/www/html/IIS/app/config/common.neon
// source: /var/www/html/IIS/app/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_f1cd70ec2b extends Nette\DI\Container
{
	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.context',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.context']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [
			2 => [
				'01',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Countable' => [2 => ['01']],
		'IteratorAggregate' => [2 => ['01']],
		'Traversable' => [2 => ['01']],
		'Nette\Application\Routers\RouteList' => [['01']],
		'Nette\Security\Authenticator' => [['02']],
		'Nette\Security\IAuthenticator' => [['02']],
		'App\LoginModule\Model\MyAuthenticator' => [['02']],
		'App\BookModule\Model\BookFinder' => [['03']],
		'App\UserModule\Model\EditUser' => [['04']],
		'App\AdminModule\Model\UserAdmPage' => [['05']],
		'App\LibraryModule\Model\LibraryModel' => [['06']],
		'App\OrderModule\Model\OrderModel' => [['07']],
		'App\BookTransactionModule\Model\BookTransactionModel' => [['08']],
		'App\BorrowingModule\Model\BorrowingModel' => [['09']],
		'Nette\Security\Authorizator' => [['010']],
		'App\CoreModule\Presenters\LogedPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.16',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'App\CoreModule\Presenters\BasePresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\Application\UI\Presenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\Application\UI\Control' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\Application\UI\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\ComponentModel\Container' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\ComponentModel\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.18',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
				'application.33',
				'application.34',
			],
		],
		'Nette\Application\UI\Renderable' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.19',
				'application.20',
				'application.21',
				'application.22',
				'application.23',
				'application.24',
				'application.25',
				'application.26',
				'application.27',
				'application.28',
				'application.29',
				'application.30',
				'application.31',
				'application.32',
			],
		],
		'App\AdminModule\Presenters\UserAdmCreatePresenter' => [2 => ['application.1']],
		'App\AdminModule\Presenters\UserAdmEditPresenter' => [2 => ['application.2']],
		'App\AdminModule\Presenters\UsersAdminPresenter' => [2 => ['application.3']],
		'App\BookModule\Presenters\BookAddPresenter' => [2 => ['application.4']],
		'App\BookModule\Presenters\BookEditPresenter' => [2 => ['application.5']],
		'App\BookModule\Presenters\KnihaPresenter' => [2 => ['application.6']],
		'App\BookModule\Presenters\VyhledaniPresenter' => [2 => ['application.7']],
		'App\BookTransactionModule\Presenters\LibBookManualAddPresenter' => [2 => ['application.8']],
		'App\BookTransactionModule\Presenters\LibBookManualEditPresenter' => [2 => ['application.9']],
		'App\BookTransactionModule\Presenters\LibBooksPresenter' => [2 => ['application.10']],
		'App\BorrowingModule\Presenters\BorrowPresenter' => [2 => ['application.11']],
		'App\BorrowingModule\Presenters\KnihovnikBorrowsPresenter' => [2 => ['application.12']],
		'App\BorrowingModule\Presenters\UserBorrowsPresenter' => [2 => ['application.13']],
		'App\CoreModule\Presenters\HomepagePresenter' => [2 => ['application.15']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.17']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.18']],
		'App\LibraryModule\Presenters\LibraryAddKnihovnikPresenter' => [2 => ['application.19']],
		'App\LibraryModule\Presenters\LibraryAddPresenter' => [2 => ['application.20']],
		'App\LibraryModule\Presenters\LibraryDashBoardPresenter' => [2 => ['application.21']],
		'App\LibraryModule\Presenters\LibraryEditPresenter' => [2 => ['application.22']],
		'App\LibraryModule\Presenters\LibraryPresenter' => [2 => ['application.23']],
		'App\LibraryModule\Presenters\ViewLibrariesPresenter' => [2 => ['application.24']],
		'App\LibraryModule\Presenters\ViewLibraryPresenter' => [2 => ['application.25']],
		'App\LoginModule\Presenters\SignInPresenter' => [2 => ['application.26']],
		'App\LoginModule\Presenters\SignUpPresenter' => [2 => ['application.27']],
		'App\OrderModule\Presenters\OrderDViewPresenter' => [2 => ['application.28']],
		'App\OrderModule\Presenters\OrderEditPresenter' => [2 => ['application.29']],
		'App\OrderModule\Presenters\OrderPresenter' => [2 => ['application.30']],
		'App\OrderModule\Presenters\OrdersPresenter' => [2 => ['application.31']],
		'App\UserModule\Presenters\UserEditPresenter' => [2 => ['application.32']],
		'NetteModule\ErrorPresenter' => [2 => ['application.33']],
		'NetteModule\MicroPresenter' => [2 => ['application.34']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [];
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createService02(): App\LoginModule\Model\MyAuthenticator
	{
		return new App\LoginModule\Model\MyAuthenticator(
			$this->getService('database.default.context'),
			$this->getService('security.passwords')
		);
	}


	public function createService03(): App\BookModule\Model\BookFinder
	{
		return new App\BookModule\Model\BookFinder($this->getService('database.default.context'));
	}


	public function createService04(): App\UserModule\Model\EditUser
	{
		return new App\UserModule\Model\EditUser($this->getService('database.default.context'), $this->getService('02'));
	}


	public function createService05(): App\AdminModule\Model\UserAdmPage
	{
		return new App\AdminModule\Model\UserAdmPage($this->getService('database.default.context'), $this->getService('02'));
	}


	public function createService06(): App\LibraryModule\Model\LibraryModel
	{
		return new App\LibraryModule\Model\LibraryModel($this->getService('database.default.context'));
	}


	public function createService07(): App\OrderModule\Model\OrderModel
	{
		return new App\OrderModule\Model\OrderModel($this->getService('database.default.context'));
	}


	public function createService08(): App\BookTransactionModule\Model\BookTransactionModel
	{
		return new App\BookTransactionModule\Model\BookTransactionModel($this->getService('database.default.context'));
	}


	public function createService09(): App\BorrowingModule\Model\BorrowingModel
	{
		return new App\BorrowingModule\Model\BorrowingModel($this->getService('database.default.context'));
	}


	public function createService010(): Nette\Security\Authorizator
	{
		return App\LoginModule\Model\AuthorizatorFactory::create();
	}


	public function createServiceApplication__1(): App\AdminModule\Presenters\UserAdmCreatePresenter
	{
		$service = new App\AdminModule\Presenters\UserAdmCreatePresenter(
			$this->getService('05'),
			$this->getService('04'),
			$this->getService('02')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__10(): App\BookTransactionModule\Presenters\LibBooksPresenter
	{
		$service = new App\BookTransactionModule\Presenters\LibBooksPresenter($this->getService('08'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__11(): App\BorrowingModule\Presenters\BorrowPresenter
	{
		$service = new App\BorrowingModule\Presenters\BorrowPresenter($this->getService('09'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__12(): App\BorrowingModule\Presenters\KnihovnikBorrowsPresenter
	{
		$service = new App\BorrowingModule\Presenters\KnihovnikBorrowsPresenter($this->getService('09'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__13(): App\BorrowingModule\Presenters\UserBorrowsPresenter
	{
		$service = new App\BorrowingModule\Presenters\UserBorrowsPresenter($this->getService('09'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__14(): App\CoreModule\Presenters\BasePresenter
	{
		$service = new App\CoreModule\Presenters\BasePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__15(): App\CoreModule\Presenters\HomepagePresenter
	{
		$service = new App\CoreModule\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__16(): App\CoreModule\Presenters\LogedPresenter
	{
		$service = new App\CoreModule\Presenters\LogedPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__17(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__18(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__19(): App\LibraryModule\Presenters\LibraryAddKnihovnikPresenter
	{
		$service = new App\LibraryModule\Presenters\LibraryAddKnihovnikPresenter($this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__2(): App\AdminModule\Presenters\UserAdmEditPresenter
	{
		$service = new App\AdminModule\Presenters\UserAdmEditPresenter($this->getService('05'), $this->getService('04'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__20(): App\LibraryModule\Presenters\LibraryAddPresenter
	{
		$service = new App\LibraryModule\Presenters\LibraryAddPresenter($this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__21(): App\LibraryModule\Presenters\LibraryDashBoardPresenter
	{
		$service = new App\LibraryModule\Presenters\LibraryDashBoardPresenter($this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__22(): App\LibraryModule\Presenters\LibraryEditPresenter
	{
		$service = new App\LibraryModule\Presenters\LibraryEditPresenter($this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__23(): App\LibraryModule\Presenters\LibraryPresenter
	{
		$service = new App\LibraryModule\Presenters\LibraryPresenter($this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__24(): App\LibraryModule\Presenters\ViewLibrariesPresenter
	{
		$service = new App\LibraryModule\Presenters\ViewLibrariesPresenter($this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__25(): App\LibraryModule\Presenters\ViewLibraryPresenter
	{
		$service = new App\LibraryModule\Presenters\ViewLibraryPresenter($this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__26(): App\LoginModule\Presenters\SignInPresenter
	{
		$service = new App\LoginModule\Presenters\SignInPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__27(): App\LoginModule\Presenters\SignUpPresenter
	{
		$service = new App\LoginModule\Presenters\SignUpPresenter($this->getService('02'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__28(): App\OrderModule\Presenters\OrderDViewPresenter
	{
		$service = new App\OrderModule\Presenters\OrderDViewPresenter($this->getService('07'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__29(): App\OrderModule\Presenters\OrderEditPresenter
	{
		$service = new App\OrderModule\Presenters\OrderEditPresenter($this->getService('07'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\AdminModule\Presenters\UsersAdminPresenter
	{
		$service = new App\AdminModule\Presenters\UsersAdminPresenter($this->getService('05'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__30(): App\OrderModule\Presenters\OrderPresenter
	{
		$service = new App\OrderModule\Presenters\OrderPresenter($this->getService('07'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__31(): App\OrderModule\Presenters\OrdersPresenter
	{
		$service = new App\OrderModule\Presenters\OrdersPresenter($this->getService('07'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__32(): App\UserModule\Presenters\UserEditPresenter
	{
		$service = new App\UserModule\Presenters\UserEditPresenter($this->getService('04'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__33(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__34(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceApplication__4(): App\BookModule\Presenters\BookAddPresenter
	{
		$service = new App\BookModule\Presenters\BookAddPresenter($this->getService('03'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): App\BookModule\Presenters\BookEditPresenter
	{
		$service = new App\BookModule\Presenters\BookEditPresenter($this->getService('03'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__6(): App\BookModule\Presenters\KnihaPresenter
	{
		$service = new App\BookModule\Presenters\KnihaPresenter($this->getService('03'), $this->getService('09'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__7(): App\BookModule\Presenters\VyhledaniPresenter
	{
		$service = new App\BookModule\Presenters\VyhledaniPresenter($this->getService('03'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__8(): App\BookTransactionModule\Presenters\LibBookManualAddPresenter
	{
		$service = new App\BookTransactionModule\Presenters\LibBookManualAddPresenter($this->getService('08'), $this->getService('09'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__9(): App\BookTransactionModule\Presenters\LibBookManualEditPresenter
	{
		$service = new App\BookTransactionModule\Presenters\LibBookManualEditPresenter($this->getService('08'), $this->getService('09'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = null;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('01'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'/var/www/html/IIS/temp/cache/nette.application/touch'
		));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/html/IIS/temp/cache');
	}


	public function createServiceContainer(): Container_f1cd70ec2b
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection(
			'mysql:host=sql11.freemysqlhosting.net:3306;dbname=sql11452280',
			'sql11452280',
			'JqLSklab9q',
			[]
		);
		Nette\Database\Helpers::initializeTracy(
			$service,
			true,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen')
		);
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_f1cd70ec2b $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/html/IIS/temp/cache/latte');
				$service->setAutoRefresh();
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'));
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			$this->getService('02'),
			$this->getService('010'),
			$this->getService('security.userStorage')
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['readAndClose' => null, 'cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize()
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer')), 'send'];
			$this->getService('session.session')->start();
			Tracy\Debugger::dispatch();
		})();
	}
}
