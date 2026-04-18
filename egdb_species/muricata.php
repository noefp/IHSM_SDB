<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path . '/species/' . $sps_img ?>">
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><em><?php echo $sps_title ?></em></h3>
<a href="https://ihsm-bionas.uma.es/jbrowse/?data=data/amuri101" target="_blank" class="btn btn-info sps-btn" role="button">Genome Browser</a>
<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button">BLAST</a>
<a href="/easy_gdb/tools/fasta_download.php" class="btn btn-info sps-btn" role="button">Sequence Extraction</a>
<a href="/easy_gdb/tools/annot_input_list.php" class="btn btn-info sps-btn" role="button">Annotation Extraction</a>
<a href="https://ihsm-bionas.uma.es/easy_gdb/downloads.php" target="_blank" class="btn btn-info sps-btn" role="button">Downloads</a>
<br style="clear:both" />

<p>
    <em>Annona muricata</em> (soursop) is a diploid fruit species (2n=2x=14) native to the tropical regions of the Americas and the Caribbean. Known as "guanábana" in Spanish-speaking countries, it is a key crop in tropical agroforestry systems, highly valued for its unique flavor and nutraceutical properties.
</p>

<ul>
    <li>
        <strong>Floral Biology:</strong>
        Soursop exhibits synchronized protogynous dichogamy. The flowers are hermaphroditic, but the female organs mature before the male organs, which prevents natural self-pollination and often necessitates manual pollination for commercial production.
    </li>

    <li>
        <strong>Evolutionary Significance:</strong>
        As a member of the Magnoliids, <em>A. muricata</em> belongs to one of the earliest lineages of flowering plants. The chromosome-level assembly of its genome provides a vital resource for understanding floral evolution and the diversification of primitive angiosperms.
    </li>

    <li>
        <strong>Geographic Production:</strong>
        It is widely cultivated throughout the tropics. Major producers include Brazil, Colombia, Mexico, and Venezuela, with significant production also found in Southeast Asia, Africa, and the warmer regions of Florida (USA).
    </li>

    <li>
        <strong>Genomic Resources:</strong>
        The reference genome was assembled using PacBio and Hi-C technologies, resulting in a high-quality 640 Mb assembly organized into 7 pseudo-chromosomes. This provides an essential tool for marker-assisted breeding and genetic improvement.
    </li>

    <li>
        <strong>Medicinal Importance:</strong>
        The species is renowned for its high concentration of annonaceous acetogenins in the leaves, bark, and seeds. These polyketide metabolites have shown potent antitumoral, antiparasitic, and insecticidal activities in pharmacological studies.
    </li>
</ul>

<br>

<h3>Documents</h3>
<div class="row" style="width:900px;margin-left:0px">
    <div class="col" style="padding:0px">
        <div class="card">
            <div class="card-body">
                <a href="#"><em class='far fa-file-pdf' style='font-size:30px;color:red'></em> Descriptors for soursop</a>
            </div>
        </div>
    </div>
    <div class="col" style="padding:0px">
        <div class="card">
            <div class="card-body">
                <a href="#"><em class='far fa-file-pdf' style='font-size:30px;color:red'></em> Soursop technical sheet</a>
            </div>
        </div>
    </div>
    <div class="col" style="padding:0px">
        <div class="card">
            <div class="card-body">
                <a href="#"><em class='far fa-file-pdf' style='font-size:30px;color:red'></em> Pest management guide</a>
            </div>
        </div>
    </div>
</div>

<br>

<h3>Genome assembly stats</h3>
<p>
    Summary statistics of the <em>Annona muricata</em> reference genome assembly (<a href="https://doi.org/10.1111/1755-0998.13353" target="_blank">Strijk et al., 2021</a>).
</p>
<?php include_once("muricata_genome_table.php"); ?>
<sup>a</sup> BUSCO based on embryophyta_odb12 dataset
<br><br>

<h3>Taxonomy</h3>
<?php include_once("muricata_classification_table.php"); ?>
<br>

<h3>Links of interest</h3>
<ul>
    <li><a href="https://www.cabi.org/isc/datasheet/5811" target="_blank">Soursop Datasheet at CABI</a></li>
    <li><a href="https://www.ncbi.nlm.nih.gov/genome/?term=Annona+muricata" target="_blank">NCBI Genome Database - A. muricata</a></li>
</ul>
<br>
