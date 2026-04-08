<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><em><?php echo $sps_title ?></em></h3>
<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button">BLAST</a>
<a href="/easy_gdb/tools/fasta_download.php" class="btn btn-info sps-btn" role="button">Sequence Extraction</a>
<a href="/easy_gdb/tools/annot_input_list.php" class="btn btn-info sps-btn" role="button">Annotation Extraction</a>
<a href="/easy_gdb/downloads.php#Annonacherimola" class="btn btn-info sps-btn" role="button">Downloads</a>
<br style="clear:both"/>

<div class="row" style="max-width:900px;margin-left:0px">
  <h5 style="text-align:left;">
    Genomics tools and data available at:
    <br><br>
    <div style="text-align: center;">
<a href="http://passionfruit.com.cn/index.html" target="_blank"><img src='<?php echo "$images_path/passionfruit_db.png";?>' style="width:60%;"></a>
    </div>
  </h5>
</div>

<p>
  <em>Passiflora edulis </em> (passion fruit) is a tropical vine species native to Southeast America and belongs to the family Passifloraceae. It is a high value tropical crop appreciated for its aromatic, sweet-tart pulp, and high nutritional content, including vitamins, minerals and fiber.
</p>

<ul>
  <li>
    <strong>Botanical classification:</strong>  
    In the case of passion fruit, there are two botanical forms: the yellow passion fruit (<em>P. edulis</em> f. flavicarpa) and the purple passion fruit (<em>P. edulis</em> f. edulis). The purple passion fruit is adapted to cooler subtropical climates ans high-altitude regions within the tropics, whereas the yellow passion fruit is well adapted to tropical lowland environments. 
  <li>
    <strong>Floral and Fruit Characteristics:</strong>  
    This species has ornamental flowers that are solitary, hermaphrodite, pendulous and borne in the axils. It produces ovoid fruits with a thick and coriaceous pericarp, countaining numerous seeds covered with a juicy orange pulp. The fruit is highly valued for its flavour, organoleptic properties and economic importance. 
  </li>

  <li>
    <strong>Geographic Production:</strong>  
    Passion fruit is widely cultivated in the tropical and subtropical regions around the world. Brazil is the largest global producer and consumer, but the fruit is also grown in countries such as Australia, Colombia, Ecuador, Hawaii, Kenya, Papua New Guinea, Peru, South Africa, Sri Lanka among other. 

  <li>
    <strong>Phytochemical Properties:</strong>  
    The fruit contains minerals and vitamins A, C and D, pectin, fiber and polysaccharides, and contains a variety of bioactive compounds such as alkaloids, flavonoids, and carotenoids that are beneficial to human health. The seeds are valued for their essential fatty acids, which have potential applications in both in the food and cosmetic industries. Additionally, the leaves of passion fruit plant are a good source of calcium, and zinc.  
  </li>

  <li>
    <strong>Traditional and Medicinal Uses:</strong>  
    Passion fruit is a highly valued and nutritious fruit crop, appreciated both for fresh consumption and industrial purposes, particularly in the production of juice, jelly and ice cream products. This species- including leaves, flowers and roots and fruit- has been used in traditional medicine to treat conditions such as helminthic infections, gastris tumors, and stress.
 </li>
</ul>
<br>

<h3>Genome assemblies</h3>
<p>
  There are several sequenced genomes of passion fruit available.:
</p>
<ul>
  <li> <em>Passiflora edulis</em> by <a href="https://onlinelibrary.wiley.com/doi/10.1111/1755-0998.13310" target="_blank">Ma et al. 2020</a>.Available at <a href="https://db.cngb.org/data_resources/?query=CNA0017758". target="_blank">CNGBdb</a>.</li>
  <li> <em>Passiflora edulis</em> (purple passion fruit), by <a href="https://academic.oup.com/hr/article/doi/10.1038/s41438-020-00455-1/6490715#325678857">Xia et al. 2021</a>. Available at <a href="https://ngdc.cncb.ac.cn/gwh/Assembly/17982/show". target="_blank">CNCB</a>.</li>
  <li> <em>Passiflora edulis</em> by <a href="https://bmcgenomics.biomedcentral.com/articles/10.1186/s12864-024-10069-9" target="_blank">Yu et al. 2024</a>. Genome assembly is not available to download.</li>
</ul>

<h3>Genome assemblies stats</h3>
<p>
	<em>P. edulis</em> genome published by <a href="https://onlinelibrary.wiley.com/doi/10.1111/1755-0998.13310" target="_blank">Ma et al. 2020</a> (left) and by <a href="https://academic.oup.com/hr/article/doi/10.1038/s41438-020-00455-1/6490715#325678857">Xia et al. 2021</a> (right).
</p>
<?php include_once("passiflora_sp_complete_genome.php");?>
* Reference genome for IHSM Subtropicals
<br>
<sup>b</sup> BUSCO based on embryophyta_odb12 dataset.
<br><br>

<h3>Taxonomy</h3>
<?php include_once("passiflora_classification_table.php");?>
<br>
