<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tempzone_mst_m extends CI_Model {

	/* Start of retrieving individual column values*/
	
	function getTempZoneId($gvn_tempzoneId) {
		$this->db->where('tempzone_id', $gvn_tempzoneId);
		return $this->db->get('tempzone_mst')->first_row()->tempzone_id;			
	}
	
	function getTempZone($gvn_tempzoneId) {
		$this->db->where('tempzone_id', $gvn_tempzoneId);
		return $this->db->get('tempzone_mst')->first_row()->tempzone_name;			
	}
	
	function getcountry($gvn_tempzoneId) {
		$this->db->where('tempzone_id', $gvn_tempzoneId);
		return $this->db->get('tempzone_mst')->first_row()->country;			
	}
/* End of retrieving individual column values*/

/* Start of retrieving all column values*/
 	function getAllTempZoneMst() {
			return $this->db->get('tempzone_mst')->result();	
	}
/* End of retrieving all column values*/

/* Start of Insert Data */

	function insert($gvs_tempzone,$gvs_country) {
 		$data = array(

					'tempzone_name'   	   		=>  $gvs_tempzone,
					'country'   	   		=>  $gvs_country,
					
				);
		$this->db->insert('tempzone_mst', $data); 		
	}
/* End of Insert Data */

/* Start of Update Data */

	function update($gvn_tempzoneId,$gvs_tempzone,$gvs_country)
	{
		$data = array(
  					'tempzone_name'   	       =>  $gvs_tempzone,
					'country'   	   		=>  $gvs_country,
 				);
		$this->db->where('tempzone_id', $gvn_tempzoneId);
		$this->db->update('tempzone_mst', $data); 	
	}
/* End of Update Data */

/* Start of Delete Data */
		function delete($gvn_tempzoneId) {
		$this->db->where('tempzone_id', $gvn_tempzoneId);
		$this->db->delete('tempzone_mst'); 		
	}	


/* End of Delete Data */
	
	
}