<?php
class FormPersonal
{
    public $nombres = '';
    public $apellidos = '';
    public $fecha_de_nacimiento = '';
    public $documento = '';
    public $tipo_de_documento = '';
    public $telefono = '';
    public $direccion = '';
    public $ciudad = '';
    public $email = '';

    public function __construct($nombres, $apellidos, $fecha_de_nacimiento, $documento, $tipo_de_documento, $telefono, $direccion, $ciudad, $email)
    {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fecha_de_nacimiento = $fecha_de_nacimiento;
        $this->documento = $documento;
        $this->tipo_de_documento = $tipo_de_documento;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->email = $email;
    }

    public function getDataFormatted()
    {
        $formattedInfo = "Información del Usuario:<br>";
        $formattedInfo .= "Nombres: " . $this->nombres . "<br>";
        $formattedInfo .= "Apellidos: " . $this->apellidos . "<br>";
        $formattedInfo .= "Fecha de Nacimiento: " . $this->fecha_de_nacimiento . "<br>";
        $formattedInfo .= "Documento: " . $this->documento . "<br>";
        $formattedInfo .= "Tipo de Documento: " . $this->tipo_de_documento . "<br>";
        $formattedInfo .= "Teléfono: " . $this->telefono . "<br>";
        $formattedInfo .= "Dirección: " . $this->direccion . "<br>";
        $formattedInfo .= "Ciudad: " . $this->ciudad . "<br>";
        $formattedInfo .= "Email: " . $this->email . "<br>";
        return $formattedInfo;
    }
}
?>
