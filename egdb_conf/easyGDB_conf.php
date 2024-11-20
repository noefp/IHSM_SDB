<?php
// File paths
$root_path = "/var/www/html"; //use absolute path
$egdb_files_folder = "IHSM_SDB";

$easy_gdb_path = "$root_path/easy_gdb";
$blast_dbs_path = "$root_path/blast_dbs";
$expression_path = "$root_path/expression_data/IHSM_SDB";
$private_expression_path = "$root_path/private_expression_data/IHSM_SDB";
$downloads_path = "downloads";
$lookup_path = "$root_path/lookup"; //from root 
$images_path = "/$egdb_files_folder/egdb_images";
$custom_text_path = "$root_path/$egdb_files_folder/egdb_custom_text";
$species_path = "$root_path/$egdb_files_folder/egdb_species";
$lab_path = "$root_path/$egdb_files_folder/egdb_labs";

$annotations_path = "$root_path/annotations";
$annotation_links_path = "$root_path/$egdb_files_folder/annotations";

$passport_path = "$root_path/passport";
$phenotype_imgs_path = "$images_path/descriptors_imgs";

// Select 1 to store annotations in files or 0 to store annotations in a relational database.
$file_database = 1;

// header
$dbTitle = "IHSM Subtropicals DB";
$header_img = "header_img3.jpg";
$db_logo = "logo_tb.png";

// Toolbar
$tb_about = 0;
$tb_downloads = 0;
$tb_species = 1;
$tb_search_box = 0;

$tb_tools = 0;
$tb_search = 1;
$tb_blast = 1;
$tb_jbrowse = 1;
$tb_seq_ext = 1;
$tb_annot_ext = 1;
$tb_lookup = 1;
$tb_custom = 1;
$tb_enrichment = 1;

// About
$ab_citation = 1;
$ab_labs = 1;

// Expression Atlas
$expr_menu = 1;
$tb_gene_expr = 1;


// Expression tools order: 0 for not shown, >=1 to setup the order
$positions=[  
  'description' => 1,
  'cartoons' => 2,
  'lines' => 3,
  'cards' => 4,
  'heatmap' => 5,
  'replicates' => 6,
  'table' => 7
];


//Gene examples
$gene_sample = "";
$input_gene_list="Anche102Chr1g0000030.1
Anche102Chr1g0000040.1
Anche102Chr1g0000050.1";

// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 20;
$max_expression_input = 150;
$max_annotation_input = 20000;

// BLAST
$blast_example=">protein_or_DNA
ATGCCAAGCAGTCTCTGGATGGAGGGAGTTTGGAGCCATCAGGATGTAATTATTATAATTACTGTACAGA
GGGTAGGGTTAACATTCATGATGGGTGGTAGCAGCTCCACAAGTACAAATGACCAGTCAGAGAGTTCAAG
CACTACTACTGGGACAAGATCAGATGGTAGCGAGTGCGAGGAAGAGGTCATTAGCCTGGCTTCAACTGTG
GAGAAGATAATGAAGAATCTTCGGCTTGAGATATCCCAGTTAAGGAGATCATTGGATGAATCTAGGTCAG
ACTGTGAGCGTTTGCACAGTCTTACAGAGAAACAAGCTCAGAAGATTGAAGAAAGCACATTGTACATAAA
AGATTTATAG";

?>

