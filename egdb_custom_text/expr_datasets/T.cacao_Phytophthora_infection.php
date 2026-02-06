<p>
  RNA-Seq of pods of seven cacao genotypes (4 susceptible: ICS1, WFT, Gu133, Spa9, and 3 resistant: CCN51, Sca6 and Pound7) 
  to study their response to the post-penetration stage of <i>Phytophthora palmivora</i> infection.
</p>

<table border="1" cellpadding="5" style="border-collapse: collapse;">
  <thead>
    <tr>
      <th>Variety</th>
      <th>Genetic Background / Characteristics</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $varieties = [
        "Pound7" => "Upper Amazon Forastero lineage; known for specific disease resistance traits.",
        "Sca6"   => "Scavina 6; a foundational clone for Crinkly Leaf and Black Pod resistance.",
        "CCN51"  => "Colección Castro Naranjal; a high-yielding, widely cultivated commercial hybrid.",
        "Spa9"   => "Selection from the 'Servicio de Plantas Agrícolas' (Ecuador).",
        "Gu133"  => "Guiana selection; representing wild genetic diversity from French Guiana.",
        "WFT"    => "Specific selection used for pathology and transcriptomic modeling.",
        "ICS1"   => "Imperial College Selection 1; a high-quality Trinitario clone."
    ];

    foreach ($varieties as $name => $info) {
        echo "<tr>";
        echo "<td><b>$name</b></td>";
        echo "<td>$info</td>";
        echo "</tr>";
    }
    ?>
  </tbody>
</table>
<br>
<h4>Experimental Conditions (3 replicates):</h4>
<ul>
  <li><strong>Control Group:</strong> Healthy pod tissues, non-infected.</li>
  <li><strong>Infection Group:</strong> Pod tissues infected with <i>Phytophthora palmivora</i>, the primary causal agent of Black Pod disease.</li>
</ul>

<h4>Methodology & Bioinformatics Pipeline:</h4>
<ul>
  <li><strong>Library Generation:</strong> RNA-Seq libraries were generated specifically from cacao pod RNA.</li>
  <li><strong>Platform:</strong> Sequencing was conducted on an <strong>Illumina platform</strong>.</li>
  <li><strong>Mapping:</strong> Reads were aligned to the <strong>reference Matina v2 genome</strong>.</li>
  <li><strong>Quantification:</strong> Gene expression levels were normalized using <strong>TPM (Transcripts Per Million)</strong> values to allow for accurate comparative analysis across genotypes and treatments.</li>
</ul>

<p>
  This dataset was published by <a href="https://doi.org/10.1038/s41598-024-54355-8" target="_blank">Baruah et al. 2024</a> 
  and raw data can be found in the BioProject <a href="https://www.ncbi.nlm.nih.gov/bioproject/?term=PRJNA971242" target="_blank">PRJNA487154</a>.
</p>