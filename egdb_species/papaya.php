<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><em><?php echo $sps_title ?></em></h3>

<a href="https://ihsm-bionas.uma.es/jbrowse/index.html?data=data/papaya&tracks=DNA%2Ccarpa_gene_models" target="_blank" class="btn btn-info sps-btn" role="button">Genome Browser</a>
<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button">BLAST</a>
<a href="/easy_gdb/tools/fasta_download.php" class="btn btn-info sps-btn" role="button">Sequence Extraction</a>
<a href="/easy_gdb/tools/annot_input_list.php" class="btn btn-info sps-btn" role="button">Annotation Extraction</a>
<a href="https://ihsm-bionas.uma.es/easy_gdb/downloads.php" target="_blank" class="btn btn-info sps-btn" role="button">Downloads</a>
<br style="clear:both"/>

<p>
  <em>Carica papaya</em> (family Caricaceae) is a fast-growing, polygamous, dicotyledonous with a small genome of nine pairs of chromosomes (2n=18). Originating in America—spanning from southern Mexico to Argentina and Chile—it is now widely domesticated in tropical and subtropical regions worldwide.
</p>

<ul>

  <li>
    <strong>Fruit:</strong>
    The unripe fruit has a lot of white latex, a hard skin, and is green in color, but the ripe fruit is light or deep yellow-orange, thick, succulent, with orange or red juicy flesh, and has a sweet aroma. Several grays to black colored seeds are partially connected to the flesh by white, soft, and fibrous tissue in the adult ripened fruits.  </li>
  <li>
    <strong>Sex determination:</strong>  
    Papaya is a trioecious plant. Sex is determined by a pair of nascent sex chromosomes: XX (female), XY (male), and XY<sup>h</sup> (hermaphrodite).
  <li>
    <strong>Varieties and Characteristics:</strong>  
    Domestication significantly increased fruit size from small wild types (&lt;100g) to modern commercial cultivars (up to 9 kg). Fruit shapes vary widely, including oval, round, elongated, and pyriform.
  </li>

  <li>
    <strong>Geographic Production:</strong>  
    Ranked by the FAO as the third most significant tropical fruit, global production exceeded 14 million tons in 2022. Major producers include China, India, Brazil, Mexico, Malaysia, and Guatemala, with important subtropical cultivation in regions like Hawaii and the Canary Islands.
  </li>
  <li>
    <strong>Papaya ringspot virus (PRSV):</strong>  
    PRSV severely limits open-field production. To combat this, the genetically modified cultivar ‘SunUp’ was developed using a coat protein (cp)-mediated resistance approach via biolistic transformation of the ‘Sunset’ cultivar.
  <li>
    <strong>Nutritional and Medicinal Importance:</strong>  
    The fruit is rich in vitamins A and C, beta-carotene, potassium, magnesium, and boron. It helps prevent vitamin A deficiency and night blindness, and its nutrients may help lower the risk of cancer, diabetes, and heart disease.
  </li>
</ul>

<br>

<h3>Genome assemblies</h3>
<p>
  There are three sequenced genomes available of papaya:
</p>
<ul>
  <li>cv. SunUp 2008, by <a href=https://doi.org/10.1038/nature06856 target="_blank">Ming et al., 2008</a>. Available at <a href="https://data.jgi.doe.gov/refine-download/phytozome?organism=Cpapaya" target="_blank">Phytozome</a>.</li>
  <li>cv. SunUp, by <a href=https://doi.org/10.1038/s41588-022-01068-1 target="_blank">Yue et al., 2022</a>. Available at the <a href="https://ngdc.cncb.ac.cn/gwh/Assembly/23161/show" target="_blank">Genome Warehouse</a>.</li>
  <li>cv. Sunset, by <a href=https://doi.org/10.1038/s41588-022-01068-1 target="_blank">Yue et al., 2022</a>. Available at the <a href="https://ngdc.cncb.ac.cn/gwh/Assembly/23162/show" target="_blank">Genome Warehouse</a>.</li>
</ul>
<br>

<h3>Genome assembly stats</h3>

<?php include_once("papaya_genome_table.php");?>
* Reference genome for IHSM Subtropicals
<br>
<sup>a</sup> Available at <a href=https://phytozome-next.jgi.doe.gov/info/Cpapaya_ASGPBv0_4>Phytozome</a>
<br>
<sup>b</sup> BUSCO based on embryophyta_odb12 dataset
<br><br>

<h3>Taxonomy</h3>
<?php include_once("papaya_classification_table.php");?>
<br>
