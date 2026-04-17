<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><em><?php echo $sps_title ?></em></h3>
<a href="https://ihsm-bionas.uma.es/jbrowse/?data=data/Opuntia&tracks=DNA%2COpuba_gene_models" target="_blank" class="btn btn-info sps-btn" role="button">Genome Browser</a>
<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button">BLAST</a>
<a href="/easy_gdb/tools/fasta_download.php" class="btn btn-info sps-btn" role="button">Sequence Extraction</a>
<a href="/easy_gdb/tools/annot_input_list.php" class="btn btn-info sps-btn" role="button">Annotation Extraction</a>
<a href="https://ihsm-bionas.uma.es/easy_gdb/downloads.php" target="_blank" class="btn btn-info sps-btn" role="button">Downloads</a>
<br style="clear:both"/>

<p>
  <em>Opuntia</em> spp. is one of the most important and widely distributed genera within the family Cactaceae and represents one of the most promising crops for sustainable agricultural development in arid and semi‑arid regions. The genus is native to the Americas, where Opuntia exhibits particularly high species diversity.
</p>

<ul>
  <li>
    <strong>Floral and Fruit Characteristics:</strong>  
    All parts of Opuntia spp. -including cladodes, fruits, seeds, and flowers- are edible, allowing complete utilization of the plant. The flowers are typically yellow or pink, solitary and cup-shaped. The fruits are berries that often bear small spines or glochids, the pulp is sweet and juicy. However, <em>Opuntia</em> species exhibit variation in both floral, and fruit morphology. 
  </li>

  <li>
    <strong>Geographic Production:</strong>  
    Mexico is currently the leading producer of <em>Opuntia</em> cladodes and prickly pear fruit, cultivating approximately 50,000-70,000 hectares and yielding an estimated 300,000-500,000 tons of cactus pear annually. Other major producing countries include Italy, South Africa, Chile and Argentina. Nevertheless, Opuntia is cultivated in more than 30 countries worldwide. 
  </li>

  <li>
    <strong>Phytochemical and Antioxidant Properties:</strong>  
    The chemical composition of the <em>Opuntia</em> genus has attracted considerable research interest because its species are rich in phytochemicals, nutrients, and bioactive compounds. Many of these constituents, particularly polyphenols, flavonoids, and betalains, contribute to the strong antioxidant capacity reported in several <em>Opuntia</em> species.
  </li>

  <li>
    <strong>Traditional and Medicinal Uses:</strong>  
    <em>Opuntia</em> spp. have been used for centuries as food resources ans in traditional medicine, owing to their rich nutritional profile and their reported benefits in managing chronic diseases such as diabetes, obesity, cardiovascular disorders, and certain types of cancer. Prickly pear pads and fruits have long formed part of the diets of Indigenous and local communities, and today they continue to be widely consumed in diverse culinary preparations, including salads, soups, beverages, and desserts, highlighting their versatility and cultural importance.
  </li>

  <li>
    <strong>Economic Importance:</strong>  
    The economic relevance of <em>Opuntia</em> has expanded markedly in recent years, driven by its nutritional value and documented health benefits. In particular, <em>O. ficus‑indica</em> plays a key role in the Mexican agricultural sector, where it is considered a strategic crop comparable in importance to other emblematic species such as maize and agave. Beyond its traditional uses, the genus is attracting growing industrial interest due to its resilience to drought, efficient water‑use physiology, and suitability for cultivation under harsh environmental conditions. These attributes position <em>Opuntia</em> as a promising resource for sustainable agro‑industrial development and for diversifying production systems in regions facing climate‑related constraints.
  </li>
</ul>
<br>

<h3>Genome assembly stats</h3>
<p>
  Overall statistics on <em>O. basilaris</em> genome assembly published by <a href="https://academic.oup.com/jhered/article/116/6/835/8126916?guestAccessKey=#538909311" target="_blank">Fawcett et al., 2025</a>. Available at the <a href="https://www.ncbi.nlm.nih.gov/datasets/genome/GCA_043229145.1/" target="_blank">NCBI</a>.</li>
</p>
<?php include_once("opuntia_genome_table.php");?>
* Reference genome for IHSM Subtropicals
<br>
<sup>a</sup> No gene models available, BUSCO based on Helixer prediction.
<br>
<sup>b</sup> BUSCO based on embryophyta_odb12 dataset
<br><br>

<h3>Taxonomy</h3>
<?php include_once("opuntia_classification_table.php");?>
<br>
