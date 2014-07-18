<?if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Контроллер Pages. Все страницы сайта
 *
 * @author zombiQWERTY <zombiqwerty.ru>
 * @version 1.0
 * 
 */

class Pages extends CI_Controller {

	private $data;


	/**
	 * Конструктор. Генерация CSS, Передача данных в layout, переадресация с неправильных страниц
	 */
	public function __construct(){
		parent::__construct();
		self::_genCSS();
		self::_redirect();
		$this->layout->name = 'public';
	}


	/**
	 * Страница: главная
	 *
	 * @return view
	 */
	public function index() {
		$this->layout->title = 'Главная';
		$this->layout->view('public/main', $this->data);
	}


	/**
	 * Генерация CSS из LESS
	 *
	 * @return file assets/styles/style.css или ошибку
	 */
	private function _genCSS() {
		try {
			$this->lessc->compileFile("less/application.less", "assets/styles/style.css");
		} catch (exception $e) {
			$this->data['lesscError'] = 'Fatal error: '.$e->getMessage();
		}
	}


	/**
	 * Переадресация на /index/
	 *
	 * @return redirect
	 */
	private function _redirect()	{
		if ($_SERVER['REQUEST_URI'] == '/' or $_SERVER['REQUEST_URI'] == '/pages' or $_SERVER['REQUEST_URI'] == '/pages/' or $_SERVER['REQUEST_URI'] == '/pages/index') {
			header('Location: /pages/index/');
		}
	}
}