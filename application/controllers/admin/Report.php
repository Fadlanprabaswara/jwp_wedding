<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model for accessing catalog data
        $this->load->model('katalog_model');
        // Load helper for file operations
        $this->load->helper('download');
    }

    public function download_catalog_report() {
        // Get catalog data from the model
        $catalog_data = $this->katalog_model->get_catalog_data();

        // Convert data to CSV format
        $csv_data = $this->_generate_csv($catalog_data);

        // Force download
        force_download('catalog_report.csv', $csv_data);
    }

    private function _generate_csv($data) {
        // Open memory stream for writing CSV
        $output = fopen('php://memory', 'w');

        // Add the headers of the columns
        fputcsv($output, array('id', 'name', 'email', 'phone_number','description', 'price', 'status'));

        // Add the data rows
        foreach ($data as $row) {
            fputcsv($output, $row);
        }

        // Move back to beginning of the file
        fseek($output, 0);

        // Fetch the CSV data as a string
        $csv_data = stream_get_contents($output);

        // Close the memory stream
        fclose($output);

        return $csv_data;
    }
}
?>
