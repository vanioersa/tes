<?php

class M_model extends CI_Model {
    function get_data( $table ) {
        return $this->db->get( $table );
    }

    function getwhere( $table, $data )
 {
        return $this->db->get_where( $table, $data );

    }

    public function delete( $table, $field, $id ) {
        $data = $this->db->delete( $table, array( $field => $id ) );
        return $data;
    }

    public function tambah_data( $table, $data )
 {
        $this->db->insert( $table, $data );
        return $this->db->insert_id( $table );
    }

    public function ubah_data( $tabel, $data, $where )
 {
        $data = $this->db->update( $tabel, $data, $where );
        return $this->db->affected_rows();
    }

    public function get_by_id( $tabel, $id_column, $id )
 {
        $data = $this->db->where( $id_column, $id )->get( $tabel );
        return $data;
    }

    public function get_siswa_foto_by_id( $id_siswa )
 {
        $this->db->select( 'foto' );
        $this->db->from( 'siswa' );
        $this->db->where( 'id_siswa', $id_siswa );
        $query = $this->db->get();

        if ( $query->num_rows() > 0 ) {
            $result = $query->row();
            return $result->foto;
        } else {
            return false;
        }
    }
    //from keuangan

    public function getDataPembayaran()
    {
        $this->db->select('pembayaran.*,siswa.nama_siswa');
        $this->db->from('pembayaran');
        $this->db->join('siswa', 'pembayaran.id_siswa = siswa.id_siswa', 'left');
        // $this->db->join('kelas', 'pembayaran.id_kelas = kelas.id', 'left');
        // Query database untuk mengambil data
        $query = $this->db->get();
        return $query->result();
    }
    public function ubah_pembayaran( $tabel, $data, $where )
 {
        $data = $this->db->update( $tabel, $data, $where );
        return $this->db->affected_rows();
    }

    public function get_by_nisn(){
        $this->db->select('id_siswa');
        $this->db->from('siswa');
        $this->db->where('nisn', $nisn);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            $result = $query-row();
            return $result->id_siswa;
        } else{
            return false;
        }
    }
    public function tampil_siswa_byid( $nisn )
    {
           $this->db->select( 'id_siswa' );
           $this->db->from( 'siswa' );
           $this->db->where( 'nisn', $nisn );
           $query = $this->db->get();
   
           if ( $query->num_rows() > 0 ) {
               $result = $query->row();
               return $result->id_siswa;
           } else {
               return false;
           }
       }
}

?>

