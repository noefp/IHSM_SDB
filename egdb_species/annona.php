<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path . '/species/' . $sps_img ?>">
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><em><?php echo $sps_title ?></em></h3>

<div class="dropdown">
   <a href="#" class="btn btn-info sps-btn dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Genome Browser
   </a>
   <div class="dropdown-menu bg-info">
      <a class="dropdown-item text-white btn-hover" href="https://ihsm-bionas.uma.es/jbrowse/?data=data/anche102&tracks=DNA%2Canche102_genes" target="_blank">A. cherimola 'Fino de Jete'</a>
      <a class="dropdown-item text-white btn-hover" href="https://ihsm-bionas.uma.es/jbrowse/?data=data/Acherimola_booth&tracks=DNA%2CAcherimola_booth_gene_models" target="_blank">A. cherimola 'Booth'</a>
      <a class="dropdown-item text-white btn-hover" href="https://ihsm-bionas.uma.es/jbrowse/?data=data/Annona_glabra&tracks=DNA%2CAglabra_gene_models" target="_blank">A. glabra</a>
      <a class="dropdown-item text-white btn-hover" href="https://ihsm-bionas.uma.es/jbrowse/?data=data/Amontana&tracks=DNA%2CAmontana_gene_models" target="_blank">A. montana</a>
      <a class="dropdown-item text-white btn-hover" href="https://ihsm-bionas.uma.es/jbrowse/?data=data/Amuricata&tracks=DNA%2Camuricata_gene_models" target="_blank">A. muricata</a>
      <a class="dropdown-item text-white btn-hover" href="https://ihsm-bionas.uma.es/jbrowse/?data=data/Annona_squamosa&tracks=DNA%2CAsquamosa_gene_models" target="_blank">A. squamosa</a>
  </div>
</div>

<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button">BLAST</a>
<a href="/easy_gdb/tools/fasta_download.php" class="btn btn-info sps-btn" role="button">Sequence Extraction</a>
<a href="/easy_gdb/tools/annot_input_list.php" class="btn btn-info sps-btn" role="button">Annotation Extraction</a>
<a href="https://ihsm-bionas.uma.es/easy_gdb/downloads.php" target="_blank" class="btn btn-info sps-btn" role="button">Downloads</a>
<br style="clear:both" />

<p>
   The genus <em>Annona</em> (Annonaceae) comprises over 120 species, many of which are of significant ethnobotanical and agricultural importance. While major crops such as <em>A. cherimola</em>, <em>A. muricata</em>, and <em>A. squamosa</em> are extensively studied, other wild and semi-domesticated species like <strong><em>A. glabra</em></strong> and <strong><em>A. montana</em></strong> represent vital genetic reservoirs for crop improvement and pharmacological research.
</p>
<ul>
   <li>
      <strong><em>Annona glabra</em> (Pond Apple):</strong>
      Commonly found in swampy and coastal areas of the Americas and West Africa, this species is noted for its high tolerance to waterlogging and salinity. It serves as a crucial rootstock for other <em>Annona</em> species to improve flood resistance in commercial orchards.
   </li>
   <li>
      <strong><em>Annona montana</em> (Mountain Soursop):</strong>
      Native to the Amazon and the West Indies, <em>A. montana</em> is a hardy species capable of growing at higher altitudes and colder temperatures than <em>A. muricata</em>. It is frequently utilized in breeding programs to enhance vigor and cold hardiness in subtropical cultivars.
   </li>
   <li>
      <strong>Evolutionary Significance:</strong>
      The wild species of <em>Annona</em> belong to the early-divergent Magnoliid clade. Studying their genomes provides essential insights into the primitive floral traits and the diversification of angiosperms within subtropical and tropical ecosystems.
   </li>
   <li>
      <strong>Ecological Importance:</strong>
      These species play a fundamental role in their native habitats as food sources for local fauna. Furthermore, their diverse secondary metabolite profiles, including acetogenins and alkaloids, are increasingly investigated for their antimicrobial and cytotoxic activities.
   </li>
   <li>
      <strong>Genomic Resources:</strong>
      Chromosome-level assemblies for both <em>A. glabra</em> and <em>A. montana</em> have been developed, facilitating comparative genomic studies within the genus and the identification of stress-tolerance genes that are absent in more domesticated species.
   </li>
</ul>

<br>

<h3>Genome assemblies</h3>
<p>
   There are several sequenced genomes of <em>Annona</em> spp. publicly available:
</p>
<ul>
   <li> <em>Annona cherimola</em> 'Fino de Jete', by <a href="https://doi.org/10.1002/ppp3.10366" target="_blank">Talavera et al., 2023</a>. Available at <a href="https://www.ncbi.nlm.nih.gov/datasets/genome/GCA_035061585.1/" target="_blank">NCBI</a>.</li>
   <li> <em>Annona cherimola</em> 'Booth', by <a href="https://doi.org/10.3390/plants13050636" target="_blank">Li et al., 2024</a>. Available at <a href="https://www.ncbi.nlm.nih.gov/datasets/genome/GCA_030490835.1/" target="_blank">NCBI</a>.</li>
   <li> <em>Annona glabra</em>, by <a href="https://doi.org/10.1038/s41559-022-01744-9" target="_blank">He et al., 2022</a>. Available at <a href="https://ngdc.cncb.ac.cn/gwh/Assembly/20680/show/" target="_blank">Genome Warehouse</a>.</li>
   <li> <em>Annona montana</em>, by <a href="https://doi.org/10.48130/OPR-2023-0014" target="_blank">Tang et al., 2023</a>. Available at <a href="https://ngdc.cncb.ac.cn/gwh/Assembly/65977/show" target="_blank">Genome Warehouse</a>.</li>
   <li> <em>Annona muricata</em>, by <a href="https://doi.org/10.1111/1755-0998.13353" target="_blank">Strijk et al., 2021</a>. Raw reads available at <a href="https://www.ebi.ac.uk/ena/browser/view/PRJEB30626" target="_blank">ENA</a>.</li>
   <li> <em>Annona squamosa</em>, by <a href="https://doi.org/10.56179/001c.116283" target="_blank">Peña-Ramirez et al., 2024</a>. Available at <a href="https://www.ncbi.nlm.nih.gov/datasets/genome/GCA_035584095.1/" target="_blank">NCBI</a>.</li>
   <li> <em>Annona squamosa</em>, by <a href="https://doi.org/10.1007/s00497-023-00464-9" target="_blank">Alves-Rodrigues et al., 2023</a>.</li>
   <li> <em>Annona squamosa</em>, by <a href="https://doi.org/10.1093/dnares/dsaf007" target="_blank"> Bisht et al., 2025</a>.</li>
</ul>

<br>

<h3>Genome assembly stats</h3>
<p>
   Overall statistics on <em>Annona</em> genome assemblies published by <a href="https://doi.org/10.1002/ppp3.10366" target="_blank">Talavera et al., 2023</a>, by <a href="https://doi.org/10.3390/plants13050636" target="_blank">Li et al., 2024</a>, by <a href="https://doi.org/10.1038/s41559-022-01744-9" target="_blank">He et al., 2022</a>, by <a href="https://doi.org/10.48130/OPR-2023-0014" target="_blank">Tang et al., 2023</a>, by <a href="https://doi.org/10.1111/1755-0998.13353" target="_blank">Strijk et al., 2021</a>, and by <a href="https://doi.org/10.56179/001c.116283" target="_blank">Peña-Ramirez et al., 2024</a>.
</p>

<?php include_once("annona_genome_table.php"); ?>
* Reference genome for IHSM Subtropicals
<br>
<sup>a</sup> BUSCO based on embryophyta_odb12 dataset
<br>
<sup>b</sup> BUSCO based on <a href="https://github.com/usadellab/Helixer" target="_blank">Helixer</a> prediction
<br><br>

<h3>Taxonomy</h3>
<?php include_once("annona_classification_table.php"); ?>
<br>

<h3>Links of interest</h3>
<ul>
   <li><a href="https://www.cabi.org/isc/datasheet/5801" target="_blank">Annona Datasheet at CABI</a></li>
</ul>
<br>
