<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><em><?php echo $sps_title ?></em></h3>
<a href="https://ihsm-bionas.uma.es/jbrowse/?data=data/Annona_squamosa&tracks=DNA%2CAsquamosa_gene_models" target="_blank" class="btn btn-info sps-btn" role="button">Genome Browser</a>
<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button">BLAST</a>
<a href="/easy_gdb/tools/fasta_download.php" class="btn btn-info sps-btn" role="button">Sequence Extraction</a>
<a href="/easy_gdb/tools/annot_input_list.php" class="btn btn-info sps-btn" role="button">Annotation Extraction</a>
<a href="https://ihsm-bionas.uma.es/easy_gdb/downloads.php" target="_blank" class="btn btn-info sps-btn" role="button">Downloads</a>
<br style="clear:both"/>

<p>
   <em>Annona squamosa</em> (sugar apple) is a diploid fruit species (2n=2x=14) native to the tropical Americas and the West Indies. Commonly known as "anón", "saramuyo", "sweetsop", or "sugar apple", it is the most widely cultivated species of the <em>Annona</em> genus worldwide, prized for its sweet, custard-like pulp and its adaptability to diverse tropical climates.
</p>
<ul>
<li>
<strong>Floral Biology:</strong>
   The flowers are hermaphroditic and exhibit protogynous dichogamy. Similar to other Annonaceae, the female stage precedes the male stage, a mechanism that promotes cross-pollination. In many regions, natural pollination is primarily carried out by nitidulid beetles.
</li>
<li>
<strong>Evolutionary Significance:</strong>
   As a representative of the Magnoliid clade, <em>A. squamosa</em> occupies a pivotal position in angiosperm evolution. Its relatively small genome serves as a fundamental model for studying the divergence of early flowering plants and the genetic basis of fruit development in the <em>Annona</em> lineage.
</li>
<li>
<strong>Geographic Production:</strong>
   It is widely distributed across the tropics. India and China are currently the largest commercial producers, with significant cultivation also found in the tropical regions of Africa and the Pacific.
</li>
<li>
<strong>Medicinal Importance:</strong>
   Sugar apple is a rich source of secondary metabolites like alkaloids, flavonoids, and tannins. Extracts from roots, bark, leaves, and fruit possess extensive ethnomedicinal value. These tissues exhibit potent anticancer, antioxidant, antiparasitic, and antimalarial activities, alongside antidiabetic, antihypertensive, hepatoprotective, insecticidal, microbicidal, and molluscicidal properties.
</li>
</ul>

<br>

<h3>Genome assembly stats</h3>
<p>
   Summary statistics of the <em>Annona squamosa</em> reference genome assembly (<a href="https://doi.org/10.56179/001c.116283" target="_blank">Peña-Ramírez et al., 2024</a>).
</p>
<?php include_once("squamosa_genome_table.php");?>
<sup>a</sup> BUSCO based on embryophyta_odb12 dataset
<br>
<sup>b</sup> BUSCO based on <a href="https://github.com/usadellab/Helixer" target="_blank">Helixer</a> prediction
<br><br>

<h3>Taxonomy</h3>
<?php include_once("squamosa_classification_table.php");?>
<br>

<h3>Links of interest</h3>
<ul>
    <li><a href="https://www.cabi.org/isc/datasheet/5820" target="_blank">Sugar apple Datasheet at CABI</a></li>
</ul>
<br>
