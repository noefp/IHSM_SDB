<?php
// File paths
$root_path = "/var/www/html"; //use absolute path

$easy_gdb_path = "$root_path/easy_gdb";
$blast_dbs_path = "$root_path/blast_dbs";
$expression_path = "$root_path/expression_data";
$downloads_path = "downloads";
$lookup_path = "$root_path/lookup"; //from root 
$images_path = "/IHSM_SDB/egdb_images";
$custom_text_path = "$root_path/IHSM_SDB/egdb_custom_text";
$species_path = "$root_path/IHSM_SDB/egdb_species";
$lab_path = "$root_path/IHSM_SDB/egdb_labs";
$annotation_links_path = "$root_path/IHSM_SDB/annotations";

// header
$dbTitle = "IHSM Subtropicals DB";
$header_img = "header_img3.jpg";
$db_logo = "logo_tb.png";

// Toolbar
$tb_about = 0;
$tb_downloads = 1;
$tb_species = 0;
$tb_search_box = 1;
$tb_search = 1;
$tb_blast = 1;
$tb_jbrowse = 1;
$tb_seq_ext = 1;
$tb_annot_ext = 1;
$tb_gene_expr = 0;
$tb_lookup = 0;
$tb_more = 0;
$tb_custom = 0;

// About
$ab_citation = 1;
$ab_labs = 1;

//Gene examples
$gene_sample = "";
$input_gene_list="Anche102Chr1g0000030.1
Anche102Chr1g0000040.1
Anche102Chr1g0000050.1";

$expr_input_gene_list="Anche102Chr1g0000030.1
Anche102Chr1g0000040.1
Anche102Chr1g0000050.1";

// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 20;
$max_expression_input = 15;

// BLAST
$blast_example=">protein_or_DNA
ATGAGTTGTGGGGAGGGATTTATGTCACCACAAATAGAGACTAAAGGAAGTGTTGGATTC
AAAGCGGGTGTTAAAGAGTACAAATTGATTTATTATACTCCTGAATACGAAACCAAAGAT
ACCGATATCTTGGTAACATTTCGAGTAACTCCTCAACCTGGAGTTTCGCCTGTAGAAGCA
GGCTTGAGCGGGCATATCGATACTGACTGATCGATCGATCGTAGCTAGCTAGCTGATCGT
CGTAGCTAGTCGATCGTA";

?>

