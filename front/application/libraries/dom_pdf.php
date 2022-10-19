<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Dom_pdf {
		
	public function __construct() {
		
		require_once APPPATH.'third_party/dompdf/autoload.inc.php';

		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$dompdf = new Dompdf($options);
		$contxt = stream_context_create([
			'ssl' => [
				'verify_peer' => FALSE,
				'verify_peer_name' => FALSE,
				'allow_self_signed'=> TRUE
			]
		]);
		$dompdf->setHttpContext($contxt);
		
		$CI =& get_instance();
		$CI->dompdf = $dompdf;
		
	}
	
}