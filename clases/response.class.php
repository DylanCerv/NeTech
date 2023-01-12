<?php

class Response
{
    
    private $response = [
        'status' => "ok",
        "result" => []
    ];

    public function error_405() {
        $this->response['status'] = "error";
        $this->response['result'] = [
            "code" => "405",
            "message" => "Metodo no aceptado, solo recibe metodo GET"
        ];
        return $this->response;
    }

    public function error_apiKeyMissing()
    {
        $this->response['status'] = "error";
        $this->response['result'] = [
            "code" => "apiKeyMissing",
            "message" => "Falta su clave API. Agregue esto a la URL con el parámetro apiKey, o use el encabezado HTTP x-api-key."
        ];
        return $this->response;
    }

    public function error_apiKeyInvalid()
    {
        $this->response['status'] = "error";
        $this->response['result'] = [
            "code" => "apiKeyInvalid",
            "message" => "Su clave API no es válida o es incorrecta. Verifique su clave o vaya a https://newsapi.org para crear una clave de API gratuita."
        ];
        return $this->response;
    }

    public function error_parametersMissing()
    {
        $this->response['status'] = "error";
        $this->response['result'] = [
            "code" => "parametersMissing",
            "message" => "Faltan parámetros requeridos. Establezca cualquiera de los siguientes parámetros y vuelva a intentarlo: sources, q, language, country, category."
        ];
        return $this->response;
    }

    public function error_maximumResultsReached($numberResult)
    {
        $this->response['status'] = "error";
        $this->response['result'] = [
            "code" => "maximumResultsReached",
            "message" => "Ha solicitado demasiados resultados. Las cuentas de desarrollador están limitadas a un máximo de 100 resultados. Está intentando solicitar resultados de 0 a $numberResult. Actualice a un plan pago si necesita más resultados."
        ];
        return $this->response;
    }


}