<?php

class PageTemplate extends CI_Controller
{

	public function DRAMMarketBulletin()
	{

		$rpsys = $this->load->database('rpsys',TRUE);
		$query = $rpsys->query("SELECT * FROM `tf_ReportSystem`.`tf_rpsys_shared_variable` WHERE `name` = 'page_template_DRAM_Market_title' LIMIT 0,1000");

		$data['title'] = $query->result_array()[0]['value'];

		if ($this->init->item('language') == 'english') {  //英文 OG
			$data['page_title'] = 'The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['twitter:card'] = 'summary_large_image';
			$data['head']['meta_property']['twitter:site'] = '@trendforce';
			$data['head']['meta_property']['og:site_name'] = 'TrendForce';
			$data['head']['meta_property']['og:title'] = 'The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['og:url'] = 'https://www.trendforce.com/The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['og:image'] = '';
			$data['head']['meta_property']['og:description'] = 'DRAMeXchange offers an additional purchase which only applies to the above DRAM Platinum members, a comprehensive market update on the Contract, Spot and the DRAM market momentum.We also provide our point of view on the instant hot topic analysis on the weekly basis.';
			$data['head']['meta']['keywords'] = 'DRAMeXchange, semiconductor, DRAM,NAND Flash, srorage,DRAM Spot Market,DRAM Price, memory,global memory market, mobile DRAM';
			$data['custom_header'] = true;
		}

		if ($this->init->item('language') == 'zh-hant') {  //繁中 OG
			$data['page_title'] = 'The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['twitter:card'] = 'summary_large_image';
			$data['head']['meta_property']['twitter:site'] = '@trendforce';
			$data['head']['meta_property']['og:site_name'] = 'TrendForce';
			$data['head']['meta_property']['og:title'] = 'The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['og:url'] = 'https://www.trendforce.com.tw/The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['og:image'] = '';
			$data['head']['meta_property']['og:description'] = 'DRAMeXchange offers an additional purchase which only applies to the above DRAM Platinum members, a comprehensive market update on the Contract, Spot and the DRAM market momentum.We also provide our point of view on the instant hot topic analysis on the weekly basis.';
			$data['head']['meta']['keywords'] = 'DRAMeXchange, semiconductor, DRAM,NAND Flash, srorage,DRAM Spot Market,DRAM Price, memory,global memory market, mobile DRAM';
			$data['custom_header'] = true;
		}

		if ($this->init->item('language') == 'zh-hans') {  //簡中 OG
			$data['page_title'] = 'The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['twitter:card'] = 'summary_large_image';
			$data['head']['meta_property']['twitter:site'] = '@trendforce';
			$data['head']['meta_property']['og:site_name'] = 'TrendForce';
			$data['head']['meta_property']['og:title'] = 'The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['og:url'] = 'https://www.trendforce.cn/The-DRAM-Market-Bulletin';
			$data['head']['meta_property']['og:image'] = '';
			$data['head']['meta_property']['og:description'] = 'DRAMeXchange offers an additional purchase which only applies to the above DRAM Platinum members, a comprehensive market update on the Contract, Spot and the DRAM market momentum.We also provide our point of view on the instant hot topic analysis on the weekly basis.';
			$data['head']['meta']['keywords'] = 'DRAMeXchange, semiconductor, DRAM,NAND Flash, srorage,DRAM Spot Market,DRAM Price, memory,global memory market, mobile DRAM';
			$data['custom_header'] = true;
		}

		$this->Mpage->load($data, array('left' => 1));
		$this->Mpage->view($this->init->item('language') . '/page/the_DRAM_Market_Bulletin', NULL);
	}
}

