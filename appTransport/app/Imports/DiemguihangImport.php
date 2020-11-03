<?php

namespace App\Imports;

use App\Imports;
use App\Models\DiemGuiHangModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class DiemguihangImport implements ToModel
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
        $id_city_send = $this->find_idCity($row[0]);
        if ($id_city_send >0)
        {
            $tmp= DB::table('diemguihangs')
                ->where('id_tinh','=',$id_city_send) ->get();
            if(count($tmp)>0)
            {
                $diemguihang = DiemGuiHangModel::find($tmp[0]->id);
                $tinhs =(array)json_decode($diemguihang->tinhs);
                $ok = true;
                $n = 0;
                foreach ($tinhs as $tinh)
                {
                    $n++;
                }
                for($i=1;$i<=$n;$i++)
                {
                    if ($tinhs[$i]->{'id_tinh'}== $this->find_idCity($row[1]))
                    {
                        $tinhs[$i]->{'tinh'}=$row[1];
                        $tinhs[$i]->{'id_tinh'}=$this->find_idCity( $row[1]);
                        $tinhs[$i]->{'mavung'}=$row[2];
                        $tinhs[$i]->{'khuvuctra'}=$row[3];
                        $tinhs[$i]->{'CPN'}=$row[4];
                        $tinhs[$i]->{'VCN'}=$row[5];
                        $tinhs[$i]->{'VTK'}=$row[6];
                        $ok=false;
                        $diemguihang->tinhs = json_encode($tinhs);
                        $diemguihang->save();
                        break;
                    }
                }
                if($ok==true)
                {
                    $n++;
                    $tinhs[$n]= array();
                    $tinhs[$n]['tinh']=$row[1];
                    $tinhs[$n]['id_tinh']=$this->find_idCity( $row[1]);
                    $tinhs[$n]['mavung']=$row[2];
                    $tinhs[$n]['khuvuctra']=$row[3];
                    $tinhs[$n]['CPN']=$row[4];
                    $tinhs[$n]['VCN']=$row[5];
                    $tinhs[$n]['VTK']=$row[6];
                    $diemguihang->tinhs = json_encode($tinhs);
                    $diemguihang->save();
                }
            }
        }
    }
}
