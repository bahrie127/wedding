<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Report extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('m_laporan');
        $this->load->library('grocery_CRUD');

    }


    function index(){
        $data_provinsi=$this->m_laporan->get_provinsi()->result();
        $data_categories=array();
        $data_count_provinsi=array();
        $data_prov=array();
        foreach ($data_provinsi as $row) {
            array_push($data_categories, $row->nama_provinsi);
            $count=$this->m_laporan->get_count_provinsi_by_id($row->id_prov);
            array_push($data_count_provinsi, $count);
            $kabupaten=$this->m_laporan->get_kab_by_prov($row->id_prov)->result();
            $data_kab=array();
            foreach($kabupaten as $kab){
                $biasa=$this->m_laporan->get_count_anggota_kab_biasa($kab->id_kab);
                $inti=$this->m_laporan->get_count_anggota_kab_inti($kab->id_kab);
                $teras=$this->m_laporan->get_count_anggota_kab_teras($kab->id_kab);
                $kehormatan=$this->m_laporan->get_count_anggota_kab_kehormatan($kab->id_kab);
                $data_per_kab=array('nama_kab'=>$kab->nm_kab,
                                        'biasa'=>$biasa,
                                        'inti'=>$inti,
                                        'teras'=>$teras,
                                        'kehormatan'=>$kehormatan,
                                        'total'=>($biasa+$inti+$teras+$kehormatan));
                array_push($data_kab, $data_per_kab);
            }
            $prov_biasa=$this->m_laporan->get_count_anggota_prov_biasa($row->id_prov);
            $prov_inti=$this->m_laporan->get_count_anggota_prov_inti($row->id_prov);
            $prov_teras=$this->m_laporan->get_count_anggota_prov_teras($row->id_prov);
            $prov_kehormatan=$this->m_laporan->get_count_anggota_prov_kehormatan($row->id_prov);
            $data_per_prov=array('nama_prov'=>$row->nama_provinsi,
                                    'prov_biasa'=>$prov_biasa,
                                    'prov_inti'=>$prov_inti,
                                    'prov_teras'=>$prov_teras,
                                    'prov_kehormatan'=>$prov_kehormatan,
                                    'prov_total'=>($prov_biasa+$prov_inti+$prov_teras+$prov_kehormatan),
                                    'data_kabupaten'=>$data_kab);
            array_push($data_prov, $data_per_prov);
        }

        $data_series[]=array('name'=>'Provinsi','data'=>$data_count_provinsi);
        $data_view['categories']=json_encode($data_categories);
        $data_view['series']=json_encode($data_series);
        $data_view['cek']=json_encode($data_prov);
        $data_view['cek2']=json_encode($data_provinsi);
        $data_view['data_table']=$data_prov;
        $this->load->view('admin/report',$data_view);
    }

    
 function download(){
     $data_provinsi=$this->m_laporan->get_provinsi()->result();
     $data_categories=array();
     $data_count_provinsi=array();
     $data_prov=array();
     foreach ($data_provinsi as $row) {
         array_push($data_categories, $row->nama_provinsi);
         $count=$this->m_laporan->get_count_provinsi_by_id($row->id_prov);
         array_push($data_count_provinsi, $count);
         $kabupaten=$this->m_laporan->get_kab_by_prov($row->id_prov)->result();
         $data_kab=array();
         foreach($kabupaten as $kab){
             $biasa=$this->m_laporan->get_count_anggota_kab_biasa($kab->id_kab);
             $inti=$this->m_laporan->get_count_anggota_kab_inti($kab->id_kab);
             $teras=$this->m_laporan->get_count_anggota_kab_teras($kab->id_kab);
             $kehormatan=$this->m_laporan->get_count_anggota_kab_kehormatan($kab->id_kab);
             $data_per_kab=array('nama_kab'=>$kab->nm_kab,
                 'biasa'=>$biasa,
                 'inti'=>$inti,
                 'teras'=>$teras,
                 'kehormatan'=>$kehormatan,
                 'total'=>($biasa+$inti+$teras+$kehormatan));
             array_push($data_kab, $data_per_kab);
         }
         $prov_biasa=$this->m_laporan->get_count_anggota_prov_biasa($row->id_prov);
         $prov_inti=$this->m_laporan->get_count_anggota_prov_inti($row->id_prov);
         $prov_teras=$this->m_laporan->get_count_anggota_prov_teras($row->id_prov);
         $prov_kehormatan=$this->m_laporan->get_count_anggota_prov_kehormatan($row->id_prov);
         $data_per_prov=array('nama_prov'=>$row->nama_provinsi,
             'prov_biasa'=>$prov_biasa,
             'prov_inti'=>$prov_inti,
             'prov_teras'=>$prov_teras,
             'prov_kehormatan'=>$prov_kehormatan,
             'prov_total'=>($prov_biasa+$prov_inti+$prov_teras+$prov_kehormatan),
             'data_kabupaten'=>$data_kab);
         array_push($data_prov, $data_per_prov);
     }

     //load our new PHPExcel library
         $this->load->library('excel');
         //activate worksheet number 1
         $this->excel->setActiveSheetIndex(0);
         //name the worksheet
         $this->excel->getActiveSheet()->setTitle('Laporan anggota PUI');
         //set cell A1 content with some text
         //   $fields = $datas->list_fields();
         //print_r($fields);exit;
         $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
         $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
        $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);

        $row=0;
     foreach ($data_prov as $prov){
         $this->excel->getActiveSheet()->setCellValueByColumnAndRow(0, ++$row, "Provinsi ".$prov["nama_prov"]);
         $this->excel->getActiveSheet()->mergeCells('A'.$row.':C'.$row);
         $this->excel->getActiveSheet()->getStyle('A'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('A' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
         $row++;
         $col = 0;
         while ($col < 7)
         {
             if ($col == 0) $f = "No";
             elseif ($col == 1) $f = "Nama Kabupaten";
             elseif ($col == 2) $f = "Anggota Biasa";
             elseif ($col == 3) $f = "Anggota Inti";
             elseif ($col == 4) $f = "Anggota Teras";
             elseif ($col == 5) $f = "Anggota Kehormatan";
             elseif ($col == 6) $f = "Jumlah";

             $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $f);
             $col++;
         }
         $this->excel->getActiveSheet()->getStyle('A'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('B'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('C'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('D'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('E'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('F'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('G'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('A' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
         $this->excel->getActiveSheet()->getStyle('B' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
         $this->excel->getActiveSheet()->getStyle('C' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
         $this->excel->getActiveSheet()->getStyle('D' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
         $this->excel->getActiveSheet()->getStyle('E' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
         $this->excel->getActiveSheet()->getStyle('F' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
         $this->excel->getActiveSheet()->getStyle('G' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


         // Fetching the table data
         $no=1;
         foreach ($prov["data_kabupaten"] as $data)
         {
             $row++;
             $col = 0;
             while ($col < 7)
             {

                 if ($col == 0) $f = $no;
                 elseif ($col == 1) $f = $data["nama_kab"];
                 elseif ($col == 2) $f = $data["biasa"];
                 elseif ($col == 3) $f = $data["inti"];
                 elseif ($col == 4) $f = $data["teras"];
                 elseif ($col == 5) $f = $data["kehormatan"];
                 elseif ($col == 6) $f = $data["total"];

                 $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $f);
                 $col++;
                 $this->excel->getActiveSheet()->getStyle('A' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('B' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('C' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('D' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('E' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('F' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('G' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
             }
             $no++;
         }

         $this->excel->getActiveSheet()->setCellValueByColumnAndRow(1, ++$row,"Total");
         //$this->excel->getActiveSheet()->mergeCells('A'.$row.':B'.$row);
         $this->excel->getActiveSheet()->getStyle('B'.$row)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('B' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

             $col = 2;$no=1;
             while ($col < 7)
             {
                 if ($col == 2) $f = $prov["prov_biasa"];
                 elseif ($col == 3) $f = $prov["prov_inti"];
                 elseif ($col == 4) $f = $prov["prov_teras"];
                 elseif ($col == 5) $f = $prov["prov_kehormatan"];
                 elseif ($col == 6) $f = $prov["prov_total"];

                 $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $f);
                 $col++;
                 $this->excel->getActiveSheet()->getStyle('A' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('B' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('C' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('D' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('E' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('F' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 $this->excel->getActiveSheet()->getStyle('G' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
             }
         $row++;
     }
         $filename = 'Laporan_anggota_pui_' . date(DATE_RFC822) . '.xls'; //save our workbook as this file name
         header('Content-Type: application/vnd.ms-excel'); //mime type
         header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
         header('Cache-Control: max-age=0'); //no cache

         //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
         //if you want to save it as .XLSX Excel 2007 format
         $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
         //force user to download the Excel file without writing it to server's HD
         $objWriter->save('php://output');

 }

}