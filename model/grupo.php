<?php
class Grupo
{
    private $id_grupo;
    private $nombre_grupo;
    private $color_objetivos_grupo;
    
    public function __construct($id_grupo, $nombre_grupo, $color_objetivos_grupo)
    {
        $this->id_grupo = $id_grupo;
        $this->nombre_grupo = $nombre_grupo;
        $this->color_objetivos_grupo = $color_objetivos_grupo;
    }

    public function get_id_grupo()
    {
        return $this->id_grupo;
    }
    public function get_nombre_grupo()
    {
        return $this->nombre_grupo;
    }
    public function get_color_objetivos_grupo()
    {
        return $this->color_objetivos_grupo;
    }
    public function __toString()
    {
        return "[ " . $this->get_id_grupo . ", " . $this->get_nombre_grupo . ", " . $this->get_color_objetivos_grupo . " ]";
    }
}
