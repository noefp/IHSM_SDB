<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><em><?php echo $sps_title ?></em></h3>
<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button">BLAST</a>
<a href="/easy_gdb/tools/fasta_download.php" class="btn btn-info sps-btn" role="button">Sequence Extraction</a>
<a href="/easy_gdb/tools/annot_input_list.php" class="btn btn-info sps-btn" role="button">Annotation Extraction</a>
<a href="/easy_gdb/downloads.php#cacao" class="btn btn-info sps-btn" role="button">Downloads</a>
<a href="https://cocoa-genome-hub.southgreen.fr/" class="btn btn-info sps-btn" role="button">Cocoa Genome Hub</a>
<a href="https://www.icgd.reading.ac.uk/" class="btn btn-info sps-btn" role="button">ICGD</a>

<br style="clear:both"/>


<br>


<p>
<em>Theobroma cacao</em> is a diploid tree species (2n = 20) native to the tropical rainforests of the Americas—primarily the Amazon basin. Belonging to the Malvaceae family, cacao thrives in warm, humid climates and is cultivated extensively in regions from Central and South America to West Africa.
</p>

<ul>
  <li>
    <strong>Botanical Classification:</strong>  
    Cacao trees are grouped into three principal types based on genetic origin and cultivation characteristics:

    <ul>
      <li>
        <em>T. cacao</em> cv. Criollo: Celebrated for its fine, complex flavor profile and lower bitterness, this traditional variety is historically esteemed but is less common commercially due to its sensitivity to pests and diseases.
      </li>
      <li>
        <em>T. cacao</em> cv. Forastero: Representing the vast majority of global cocoa production, Forastero is known for its robustness, higher yield, and greater disease resistance, making it the backbone of most commercial plantations.
      </li>
      <li>
        <em>T. cacao</em> cv. Trinitario: A natural hybrid of Criollo and Forastero, Trinitario blends the superior flavor traits of Criollo with the hardiness and productivity of Forastero, a combination that has broadened its cultivation across diverse environments.
      </li>
    </ul>
  </li>

  <li>
    <strong>Tree Characteristics:</strong>  
    Cacao trees are small, evergreen, and adapted to understory conditions. They typically reach heights of 4 to 8 meters under managed shade environments. In commercial plantations, trees are pruned to around 4 to 5 meters to facilitate harvesting and maintain optimal canopy conditions for growth.  </li>

  <li>
    <strong>Floral Biology:</strong>  
    Cacao flowers are minute, delicate, and borne directly on the trunk and older branches—a phenomenon known as cauliflory. These clustered, pale blooms have a short lifespan and depend primarily on tiny midges and other small insects for cross-pollination, a process that ultimately governs fruit set and yield.  </li>

  <li>
    <strong>Fruit Characteristics:</strong>  
    The cocoa fruit, commonly referred to as a pod, is an elongated, thick-walled berry ranging from 15 to 30 centimeters in length and weighing between 300 to 600 grams. Each pod contains 20 to 60 seeds (beans) suspended in a sweet, mucilaginous pulp. Unlike many fruits that ripen on the tree, the true development of cocoa’s rich flavor occurs during a post-harvest fermentation process—a vital step in transforming raw beans into the foundation of chocolate.  </li>

  <li>
    <strong>Germplasm Conservation:</strong>  
    The <a href="https://www.ihsm.uma-csic.es/" target="_blank">Institute of Subtropical and Mediterranean Horticulture (IHSM)</a> conserves  accessions in its germplasm collection.
  </li>
</ul>

<br>

<h3>Documents</h3>
<div class="row" style="width:900px;margin-left:0px">
  <div class="col" style="padding:0px">
    <div class="card">
      <div class="card-body">
        <a href="/downloads/cacao/Descriptores para cacao.pdf"><em class='far fa-file-pdf' style='font-size:30px;color:red'></em>Descriptors by the Ministry of agriculture development of Peru</a>
      </div>
    </div>
  </div>
</div>

<div class="row" style="width:900px;margin-left:0px">
  <div class="col" style="padding:0px">
    <div class="card">
      <div class="card-body">
        <a href="/downloads/cacao/Cacao RNA seq Pod.pdf"><em class='far fa-file-pdf' style='font-size:30px;color:red'></em>Cacao pod transcriptome profiling of seven genotypes for post-penetration resistance to Phytophthora palmivora (Atlas data)</a>
      </div>
    </div>
  </div>
</div>

<br>


<h3>Genome assembly stats</h3>
<p>
  Summary of the <em>Theobroma cacao</em> cv. Matina draft genome assembly, from <a href="https://doi.org/10.1186/gb-2013-14-6-r53" target="_blank"> Motamayor et al., 2013</a> and cv. Criollo, from <a href="https://doi.org/10.1186/s12864-017-4120-9" target="_blank"> Argoutra et al., 2017</a>.
</p>

<?php include_once("cacao_genome_table.php");?> 
<br>

<h3>Taxonomy</h3>
<?php include_once("cacao_classification_table.php");?>
<br>
