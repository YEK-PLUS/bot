<!-- <div class="news"><div class="image"><a href="/egitim/yks-ek-tercih-sonuclari-ne-zaman-aciklanacak-8-gun-detayi-41331213" title="YKS ek tercih sonuçları ne zaman açıklanacak? 8 gün detayı!" target="_blank"><img src="http://i4.hurimg.com/i/hurriyet/75/300x170/5d7f4f442269a20c0412737e.jpg" data-src="http://i4.hurimg.com/i/hurriyet/75/300x170/5d7f4f442269a20c0412737e.jpg" alt="YKS ek tercih sonuçları ne zaman açıklanacak 8 gün detayı" class="lazy-loaded"><noscript><img src="http://i4.hurimg.com/i/hurriyet/75/300x170/5d7f4f442269a20c0412737e.jpg" alt="YKS ek tercih sonuçları ne zaman açıklanacak 8 gün detayı" class="" "itemprop="url"" /></noscript></a></div><div class="desc"><h3><a href="/egitim/yks-ek-tercih-sonuclari-ne-zaman-aciklanacak-8-gun-detayi-41331213" title="YKS ek tercih sonuçları ne zaman açıklanacak? 8 gün detayı!" target="_blank">YKS ek tercih sonuçları ne zaman açıklanacak? 8 gün detayı!</a></h3><p class="news-p">YKS ek tercih işlemleri ile yerleştirme sürecine dahil olan pek çok vatandaş, ÖSYM'nin resmi internet sitesini araştırmaya başladı. YKS ek tercih sonuçları kapsamında herhangi bir üniversiteye yerleşip yerleşemediklerini öğrenecek olan vatandaşlar, buna göre yeniden sınav hazırlıklarına başlayacak. Peki, YKS ek tercih sonuçları ne zaman açıklanacak? İşte, o konu hakkında bazı bilgiler</p><div class="bottom-line"><span class="date">16.09.2019</span><span class="cat"><a href="http://www.hurriyet.com.tr/egitim/" target="_blank">Eğitim</a></span></div></div></div> -->



<?php 

 $site = file_get_contents("http://www.hurriyet.com.tr/haberleri/yks");

 		preg_match_all('@<p class="news-p">(.*?)</p>@si',  $site,  $baslik);


 		//print_r(json_encode(array_values($baslik[1])));



 		$cikti= implode("", $baslik[1]);

 		echo $cikti;

 ?>