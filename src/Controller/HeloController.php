<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
	public function index($a = '', $b = '')
	{
		if ($a == '') {
			$this->setAction('err');
			return;
		}

		$this->autoRender = false;
		echo "<html><head></head><body>";
		echo "<h1>Helo!</h1>";
		echo "<p>これは、サンプルで作成したページです。</p><p>";
			if ($a != '') {
				echo " パラメータA: " . $a;
			}
			if ($b != '') {
				echo " パラメータB: " . $b;
			}
		echo "</p>";
		echo "<button>Click Here!!</button>";
		echo '<script>var btn = document.getElementsByTagName("button")[0]; btn.addEventListener("click", function(e) {alert("今までありがとう"); alert("ぼくはきみをわすれない"); this.parentNode.removeChild(this);}, false);</script>';
		echo "</body></html>";
	}

	public function err()
	{
		$this->autoRender = false;
		echo "<html><head></head><body>";
		echo "<h1>Helo!</h1>";
		echo "<p>パラメータがありませんでした(^q^)</p><p>";
		echo "</body></html>";
	}

	public function ballboy()
	{
		$this->autoRender = false;
		echo "<html><head></head><body>";
		echo "<h1>BALL BOY</h1>";
		echo "<canvas id='game_window' width='640' height='480'></canvas>";
		echo "<script></script>";
		echo "</body></html>";
	}
}
