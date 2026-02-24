<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><em><?php echo $sps_title ?></em></h3>
<a href="https://www.sapindaceae.com/jbrowse/index.html?data=litchiData&tracks=DNA%2Canno_gff3" target="_blank" class="btn btn-info sps-btn" role="button">Genome Browser <i class="fas fa-external-link-alt"></i></a>
<a href="http://121.37.229.61:82/SequenceServer/blast.html" target="_blank" class="btn btn-info sps-btn" role="button">BLAST <i class="fas fa-external-link-alt"></i></a>
<a href="https://www.sapindaceae.com/Gene-Expression-V2/GeneExpression.html" target="_blank" class="btn btn-info sps-btn" role="button">Gene Expression <i class="fas fa-external-link-alt"></i></a>
<a href="https://www.sapindaceae.com/description_search/Description_search.html" target="_blank" class="btn btn-info sps-btn" role="button">Description Search <i class="fas fa-external-link-alt"></i></a>
<a href="https://www.sapindaceae.com/synteny-search/SyntenySearch.html" target="_blank" class="btn btn-info sps-btn" role="button">Synteny Search <i class="fas fa-external-link-alt"></i></a>
<div class="dropdown">
  <a href="#" class="btn btn-info sps-btn dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Downloads
  </a>
  <div class="dropdown-menu bg-info">
    <a class="dropdown-item text-white btn-hover" href="https://www.sapindaceae.com/Download.html" target="_blank">SapBase <i class="fas fa-external-link-alt"></i></a>
    <a class="dropdown-item text-white btn-hover" href="https://ihsm-bionas.uma.es/easy_gdb/downloads.php" target="_blank">Feizixiao</a>
  </div>
</div>
<br style="clear:both"/>

<div class="row" style="max-width:900px;margin-left:0px">
  <h5 style="text-align:left;">
    Genomics tools available at:
    <br><br>
    <div style="text-align: left;">
<a href="https://www.sapindaceae.com/index.html" target="_blank"><img src='<?php echo "$images_path/sapbase_banner.jpg";?>' style="width:60%;"></a>
    </div>
  </h5>
</div>
<br>

<p>
  <em>Litchi chinensis</em> (litchi) is a diploid fruit species (2n = 2x = 28, 30, 32) belonging to the Sapindaceae family, originally from China but grows in countries with tropical or subtropical climates. It is widely cultivated in Hawaii, India, Israel, Australia, Africa, Mexico, subtropical Asia, Indonesia, Thailand, and the Philippines.
</p>

<ul>

  <li>
    <strong>Floral and Fruit Biology:</strong>
    Litchi tree is an evergreen, medium-sized plant that can grow up to 10-15 meters. The leaves are red in the early stages but become green as the tree matures. The flowers are small, greenish-white to yellow, and have a distinctive fragrance. These flowers are arranged on branched terminal panicles that are either male or female. The fruits are covered by a red shell that envelops the fruit, which is oval, fleshy, translucent, and milky-white in color, and has a sweet and fragrant taste.
  </li>

  <li>
    <strong>Varieties and Characteristics:</strong>  
    There are over 200 litchi cultivars, with the majority originating in China, but a much smaller number are grown commercially. Wild litchi is characterized by small fruit, rather thin pulp that incompletely covers a large seed, and sour taste. The seedless litchi ('Wu He') is characterized by larger fruit size, delicate flesh texture, elevated sweetness, and a higher edible proportion, conferring a rise in its popularity and market value.
  </li>

  <li>
    <strong>Geographic Production:</strong>  
    Litchi has an estimated global production of 2.1 million tons with China being the leading producer accounting for 90% of global production. This fruit crop contributes significantly to the economy of several million people in Southeast Asia.
  </li>

  <li>
    <strong>Germplasm Conservation:</strong>  
    More than 700 accessions are preserved in the National Litchi Germplasm Resource Bank located at the Fruit Tree Research Institute, Guangdong Academy of Agricultural Science, Guangzhou, China, which is the largest litchi germplasm gene bank in the world.
  </li>

  <li>
    <strong>Nutritional and Medicinal Importance:</strong>  
    Litchi is an excellent source of nutrients such as polysaccharides, vitamins, polyphenols (flavonoids, steroids, terpenes, phenols, and flavan-3-ol molecules), and minerals. These compounds confer functional and nutraceutical properties, but the fruit also contains nutrients, oxalic acid, and phenolic compounds. It has a high content of bioactive compounds including epicatechin, procyanidin A2, malvidine-3-glucoside, cyanidin-3-rutinoside, and kaempferol, that are antioxidant, anti-inflammatory, antimicrobial, and anticancer.
  </li>
</ul>

<br>

<h3>Genome assemblies</h3>
<p>
  There is one sequenced genome available of litchi:
</p>
<ul>
  <li>cv. Feizixiao (FZX) with two haplotypic assemblies (Yunnan and Hainan) by <a href="https://doi.org/10.1038/s41588-021-00971-3">Hu et al., 2022</a>. Available at the <a href="https://data.mendeley.com/datasets/kggzfwpdr9/1" target="_blank">Mendeley database</a>.</li>
</ul>
<br>

<h3>Genome assembly stats</h3>
<p>
  Overall statistics on <em>L. chinensis</em> genome assembly for cv. Feizixiao published by <a href="https://doi.org/10.1038/s41588-021-00971-3">Hu et al., 2022</a>.
</p>
<?php include_once("litchi_genome_table.php");?>
<sup>a</sup> Available at <a href=https://www.sapindaceae.com>SapBase</a>
<br>
<sup>b</sup> BUSCO based on embryophyta_odb12 dataset
<br><br>

<h3>Taxonomy</h3>
<?php include_once("litchi_classification_table.php");?>
<br>
