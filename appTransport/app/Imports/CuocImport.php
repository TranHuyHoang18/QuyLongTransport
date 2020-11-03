<?php

namespace App\Imports;

use App\Imports;
use App\Models\CuocModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class CuocImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Xxx|null
     */
    public function find_idCity($city)
    {
        $tinh = DB::table('address')
            ->where('tinh','=',$city)
            ->get();
        if(count($tinh)>0)
            return $tinh[0]->id;
        return 0;
    }

    public function model(array $row)
    {

        $tmp = DB::table('cuocs')
            ->where('id_diemguihang','=',$row[11])
            ->get();
        if(count($tmp)>0)
        {
            $cuoc = CuocModel::find($tmp[0]->id);
            if ($row[10]=='CPN')
            {
                $cpns = (array)json_decode($cuoc->CPN);
                $n_cpn =0;
                $ok= true;
                foreach ($cpns as $cpn)
                {
                    $n_cpn++;
                }
                for($i=1;$i<=$n_cpn;$i++)
                {
                    if ($row[0]==$cpns[$i]->{'khoiluong'})
                    {
                        $cpns[$i]->{'A'} = $row[1];
                        $cpns[$i]->{'B'} = $row[2];
                        $cpns[$i]->{'C'} = $row[3];
                        $cpns[$i]->{'D'} = $row[4];
                        $cpns[$i]->{'E'} = $row[5];
                        $cpns[$i]->{'F'} = $row[6];
                        $cpns[$i]->{'G'} = $row[7];
                        $cpns[$i]->{'H'} = $row[8];
                        $cpns[$i]->{'I'} = $row[9];
                        $ok=false;
                        $cuoc->CPN=json_encode($cpns);
                        $cuoc->save();
                        break;
                    }
                }
                if($ok==true)
                {
                    $n_cpn++;
                    $cpns[$n_cpn] = array();
                    $cpns[$n_cpn]['khoiluong'] = $row[0];
                    $cpns[$n_cpn]['A'] = $row[1];
                    $cpns[$n_cpn]['B'] = $row[2];
                    $cpns[$n_cpn]['C'] = $row[3];
                    $cpns[$n_cpn]['D'] = $row[4];
                    $cpns[$n_cpn]['E'] = $row[5];
                    $cpns[$n_cpn]['F'] = $row[6];
                    $cpns[$n_cpn]['G'] = $row[7];
                    $cpns[$n_cpn]['H'] = $row[8];
                    $cpns[$n_cpn]['I'] = $row[9];
                    $cuoc->CPN=json_encode($cpns);
                    $cuoc->save();
                }
            }
            else
                if ($row[10]=='VTK')
                {
                    $vtks = (array)json_decode($cuoc->VTK);
                    $n_vtk =0;
                    $ok= true;
                    foreach ($vtks as $vtk)
                    {
                        $n_vtk++;
                    }
                    for($i=1;$i<=$n_vtk;$i++)
                    {
                        if ($row[0]==$vtks[$i]->{'khoiluong'})
                        {
                            $vtks[$i]->{'A'} = $row[1];
                            $vtks[$i]->{'B'} = $row[2];
                            $vtks[$i]->{'C'} = $row[3];
                            $vtks[$i]->{'D'} = $row[4];
                            $vtks[$i]->{'E'} = $row[5];
                            $vtks[$i]->{'F'} = $row[6];
                            $vtks[$i]->{'G'} = $row[7];
                            $vtks[$i]->{'H'} = $row[8];
                            $vtks[$i]->{'I'} = $row[9];
                            $ok=false;
                            $cuoc->VTK=json_encode($vtks);
                            $cuoc->save();
                            break;
                        }
                    }
                    if($ok==true)
                    {
                        $n_vtk++;
                        $vtks[$n_vtk] = array();
                        $vtks[$n_vtk]['khoiluong'] = $row[0];
                        $vtks[$n_vtk]['A'] = $row[1];
                        $vtks[$n_vtk]['B'] = $row[2];
                        $vtks[$n_vtk]['C'] = $row[3];
                        $vtks[$n_vtk]['D'] = $row[4];
                        $vtks[$n_vtk]['E'] = $row[5];
                        $vtks[$n_vtk]['F'] = $row[6];
                        $vtks[$n_vtk]['G'] = $row[7];
                        $vtks[$n_vtk]['H'] = $row[8];
                        $vtks[$n_vtk]['I'] = $row[9];
                        $cuoc->VTK=json_encode($vtks);
                        $cuoc->save();
                    }
                }
                else  if ($row[10]=='VCN')
                {
                    $vcns = (array)json_decode($cuoc->VCN);
                    $n_vcn =0;
                    $ok= true;
                    foreach ($vcns as $vcn)
                    {
                        $n_vcn++;
                    }
                    for($i=1;$i<=$n_vcn;$i++)
                    {
                        if ($row[0]==$vcns[$i]->{'khoiluong'})
                        {
                            $vcns[$i]->{'A'} = $row[1];
                            $vcns[$i]->{'B'} = $row[2];
                            $vcns[$i]->{'C'} = $row[3];
                            $vcns[$i]->{'D'} = $row[4];
                            $vcns[$i]->{'E'} = $row[5];
                            $vcns[$i]->{'F'} = $row[6];
                            $vcns[$i]->{'G'} = $row[7];
                            $vcns[$i]->{'H'} = $row[8];
                            $vcns[$i]->{'I'} = $row[9];
                            $ok=false;
                            $cuoc->VCN=json_encode($vcns);
                            $cuoc->save();
                            break;
                        }
                    }
                    if($ok==true)
                    {
                        $n_vcn++;
                        $vcns[$n_vcn] = array();
                        $vcns[$n_vcn]['khoiluong'] = $row[0];
                        $vcns[$n_vcn]['A'] = $row[1];
                        $vcns[$n_vcn]['B'] = $row[2];
                        $vcns[$n_vcn]['C'] = $row[3];
                        $vcns[$n_vcn]['D'] = $row[4];
                        $vcns[$n_vcn]['E'] = $row[5];
                        $vcns[$n_vcn]['F'] = $row[6];
                        $vcns[$n_vcn]['G'] = $row[7];
                        $vcns[$n_vcn]['H'] = $row[8];
                        $vcns[$n_vcn]['I'] = $row[9];
                        $cuoc->VCN=json_encode($vcns);
                        $cuoc->save();
                    }
                }
        }
    }
}
